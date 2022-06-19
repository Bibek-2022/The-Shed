-- run from the-shed directory

-- configure the webapp user
CREATE USER IF NOT EXISTS 'shed_webapp'@'localhost' IDENTIFIED BY 'webapp_password';
GRANT ALL PRIVILEGES ON *.* TO 'shed_webapp'@'localhost';
FLUSH PRIVILEGES;

-- remove database and recreate
DROP DATABASE IF EXISTS the_shed;
CREATE DATABASE IF NOT EXISTS the_shed;

-- set the_shed as working database
USE the_shed;

-- create all tables
-- w/ PKs
SOURCE database/tables/staff.sql;
SOURCE database/tables/clients.sql;
SOURCE database/tables/network_partners.sql;
SOURCE database/tables/service_contacts.sql;
SOURCE database/tables/incidents.sql;
SOURCE database/tables/group_activities.sql;
-- w/ FKs
SOURCE database/tables/attachments.sql;
SOURCE database/tables/client_children.sql;
SOURCE database/tables/cultural_plans.sql;
SOURCE database/tables/group_activities_involved.sql;
SOURCE database/tables/incidents_involved.sql;
SOURCE database/tables/network_partners_involved.sql;
SOURCE database/tables/reports.sql
SOURCE database/tables/service_provided_client.sql;
SOURCE database/tables/service_provided_client_log.sql;
SOURCE database/tables/system_log.sql;

SOURCE database/tables/table_bases.sql;