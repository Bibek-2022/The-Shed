# The Shed

A full-stack MVC web system with the goal of streamlining data collection and reporting at Mt. Druitt - The Shed, created by group PS2124.



## Project Structure

the-shed\
├── app\
├── database\
├── db_setup_mamp.sh\
├── db_setup_win.bat\
├── .htaccess\
├── index.php\
├── README.md\
├── res\
└── setup.sh



- app/ 
  - Hosts the MVC application data (PHP Models, Views, Controllers, and core framework)
- database/
  - Hosts the SQL scripts to create the database
- res/
  - Hosts the public resources for the web application (CSS, JavaScript, and images)



## Setup



### XAMPP

1. Download the latest repo:

    `git clone https://gitops.westernsydney.edu.au/professional-experience/spring-2021/PS2124/the-shed.git`

2. Start XAMPP servers through the XAMPP control panel.
3. Execute `db_setup_win.bat` from the project folder to setup the database in MySQL.
4. Copy contents of the project folder to the XAMPP htdocs/ folder. Do **not** copy the folder itself to htdocs/
5. Browse to http://localhost/ to view the web application.



### MAMP

1. Download the latest repo:

    `git clone https://gitops.westernsydney.edu.au/professional-experience/spring-2021/PS2124/the-shed.git`

2. Start MAMP servers through the MAMP control panel.
3. Make the database setup script executable with `chmod +x ./db_setup_mamp.sh`
4. Execute `db_setup_mamp.sh` from the project folder to setup the database in MySQL.
5. Copy contents of the project folder to the MAMP htdocs/ folder. Do **not** copy the folder itself to htdocs/
6. Browse to http://localhost/ to view the web application.



### Ubuntu Server

1. Download the latest repo:

    `git clone https://gitops.westernsydney.edu.au/professional-experience/spring-2021/PS2124/the-shed.git`

2. Change directory to the project directory: `cd ./the-shed`

3. Make the setup script executable: `chmod +x ./setup.sh`

4. Install LAMP stack: `sudo ./setup.sh --install-deps`

5. Configure database: `sudo ./setup.sh --db`

6. Sync the project to Apache's default webroot: `sudo ./setup.sh --sync`

7. Enable .htaccess files for Apache:


   Edit the main config file:

   `sudo nano /etc/apache2/apache2.conf`

   

   **Change:**

   `<Directory /var/www/>`\
      `Options Indexes FollowSymLinks`\
   	`AllowOverride None`\
   	`Require all granted`\
   `</Directory>`


   **To:**

   `<Directory /var/www/>`\
   	`Options Indexes FollowSymLinks`\
   	`AllowOverride All`\
   	`Require all granted`\
   `</Directory>`

   

   Finally, restart the server to apply the configuration change:

   `sudo systemctl restart apache2`

   
