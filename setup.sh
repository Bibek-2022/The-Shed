#!/bin/bash

#
#   Installation script for PS2124 full stack web application with LAMP MVC
#   
#   Web Application for 'The Shed, Mt. Druitt'
#
#   Minimum system requirements:
#       OS: 
#           - Ubuntu 20.04 LTS server
#       Hardware:
#           - 2 x 1.2GHz Processor     
#           - 25GB storage
#           - 4GB RAM
#

if [ "$EUID" -ne 0 ]
  then echo "Script needs to be run as root, quitting."
  exit
fi

if [ "$1" == "--help" ]; then
    echo
    echo "Usage: setup.sh [--help | --install-deps | --sync-only | --config]"
    echo
    echo "  --help           Displays this message."
    echo "  --install-deps   Installs server dependencies."
    echo "  --db             Only set up the database."
    echo "  --sync           Only syncs webapp data to /var/www/html without setting up DB"
    echo "  --config         Configure the server firewall, unattended upgrades, and cronjobs
                   after the web app has finished setup."
    echo
    exit
fi

if [ "$1" == "--install-deps" ]; then
    # Update repos, then install lamp stack
    echo
    echo 'Checking for updates...'
    apt-get update && apt-get upgrade

    # Check for/install LAMP stack & dependencies
    echo
    echo 'Checking for/installing LAMP stack...'
    apt-get install apache2 php7.4 php7.4-mysql php-common php7.4-cli \
        php7.4-json php7.4-common php7.4-opcache libapache2-mod-php7.4 \
        mariadb-server mariadb-client rsync

    a2enmod rewrite
    #todo -- enable .htaccess

    # Restart apache service
    echo
    echo 'Restarting apache service...'
    systemctl restart apache2

    if [ $? -eq 0 ]; then
        echo 'LAMP stack installed.'
    else
        echo '[!] Could not install LAMP stack.'
        exit
    fi

    # Ask if mysql_secure_installtion should be run
    echo
    read -p "Run mysql_secure_installation now? [y/n] " -n 1 -r
    echo
    if [[ $REPLY =~ ^[Yy]$ ]]
    then
        mysql_secure_installation
    fi
fi

if [ "$1" == "--db" ]; then
  # Run db init script (remove then create the_shed database)
  echo
  echo 'Running database init script... Root SQL password required.'
  mysql -u root -p < database/db_init.sql
  if [ $? -eq 0 ]; then
      echo 'Ran db_init.sql script.'
  else
      echo '[!] Could not run db_init.sql script, quitting.'
      exit
  fi

  exit
fi

if [ "$1" == "--sync" ]; then
    # Update the data in /var/www with the data from current dir (assumed project folder)
    echo
    echo 'Copying project data to webroot (/var/www/html/)...'
    rsync -vrP --delete-after \
        --exclude database/ --exclude .git/ --exclude *.gitignore \
        --exclude *.DS_Store --exclude *.md --exclude *.sh \
        ./ /var/www/html/

    mkdir /var/www/html/files

    # Update server permissions
    echo
    echo 'Updating webroot permissions...'
    chown -R www-data:www-data /var/www
    chmod -R 755 /var/www

    exit
fi

# Run server config after the web app has installed
if [ "$1" == "--config" ]; then
    # Configure firewall
    echo
    echo 'Configuring firewall...'
    ufw allow 80
    ufw allow 443

    echo
    echo 'Please ensure that SSH port included in firewall allow list before enabling the firewall!'
    echo

    # Install and configure unattended upgrades
    echo
    echo "Configuring unattended upgrades..."
    apt-get install unattended-upgrades apt-listchanges bsd-mailx
    dpkg-reconfigure -plow unattended-upgrades
    
    # Configure to auto reboot, remove unused kernels, remove unused dependancies, and set
    # reboot auto reboot time to 4:00AM
    sed -i 's/\/\/Unattended-Upgrade::Automatic-Reboot "false";	\
        /Unattended-Upgrade::Automatic-Reboot "true";/g' /etc/apt/apt.conf.d/50unattended-upgrades
    sed -i 's/\/\/Unattended-Upgrade::Remove-Unused-Kernel-Packages \
        "true";	/Unattended-Upgrade::Remove-Unused-Kernel-Packages "true";/g' \
        /etc/apt/apt.conf.d/50unattended-upgrades
    sed -i 's/\/\/Unattended-Upgrade::Remove-Unused-Dependencies \
        "false";/Unattended-Upgrade::Remove-Unused-Dependencies "true";/g' \
        /etc/apt/apt.conf.d/50unattended-upgrades
    sed -i 's/\/\/Unattended-Upgrade::Automatic-Reboot-Time \
        "02:00";/Unattended-Upgrade::Automatic-Reboot-Time "04:00";/g' \
        /etc/apt/apt.conf.d/50unattended-upgrades

    # todo -- cronjobs to auto backup DB to local disk
fi

echo
echo 'Done.'