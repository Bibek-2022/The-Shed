-- run script from this working directory

-- configure the webapp user
CREATE USER IF NOT EXISTS 'shed_webapp'@'localhost' IDENTIFIED BY 'webapp_password';
GRANT ALL PRIVILEGES ON *.* TO 'shed_webapp'@'localhost';
FLUSH PRIVILEGES;

-- remove database and recreate
DROP DATABASE IF EXISTS the_shed;
CREATE DATABASE IF NOT EXISTS the_shed;

-- set the_shed as working database
USE the_shed;

-- not including not nulls for all fields
-- (need blank record with token filled in when creating staff by token)
CREATE TABLE the_shed.staff (
    staff_id INT NOT NULL AUTO_INCREMENT,
    full_name VARCHAR(80),
    token VARCHAR(12),
    gender CHAR(1),
    date_of_birth DATE,
    contact_number VARCHAR(12),
    email_address VARCHAR(120),
    password CHAR(60) NOT NULL, -- bcrypt with cost set to 13, no need for sep. salt
    authority TINYINT(5),

    flag_archive TINYINT(1),

    PRIMARY KEY (staff_id)
);
-- pw = hash(hash($password) + salt)

CREATE TABLE the_shed.clients (
    client_id INT NOT NULL AUTO_INCREMENT,  -- base: 1000000
    first_name VARCHAR(40),
    last_name VARCHAR(40),
    gender CHAR(1),                     -- m/f/o (male, female, other)
    inbound_referral VARCHAR(16),       -- self-referral/agency referral
    atsi_status VARCHAR(40),            -- Aboriginal/Torres Strait Islander/Not Aboriginal or Torres Strait Islander/Prefer Not To Say 
    date_of_birth DATE,
    inbound_referral_type VARCHAR(100), -- need to confirm options
    contact_number VARCHAR(12),         -- max. example: +61401234567
    email_address VARCHAR(120),
    challenges VARCHAR(100),
    potential_peer_support CHAR(1),     -- y=yes, n=no
    outbound_referral VARCHAR(100),
    case_management_notes TEXT(10000),
    client_outcomes VARCHAR(200),

    created_at TIMESTAMP NOT NULL DEFAULT NOW(),
    created_by INT NOT NULL,
    flag_archive TINYINT(1),

    PRIMARY KEY (client_id),
    FOREIGN KEY (created_by) REFERENCES the_shed.staff(staff_id)
);
ALTER TABLE the_shed.clients AUTO_INCREMENT=1000000;

CREATE TABLE the_shed.network_partners (
    partner_id INT NOT NULL AUTO_INCREMENT,     -- base: 3000000
    organization_name VARCHAR(200),
    partnership_name VARCHAR(200),
    partnership_purpose VARCHAR(200),
    key_contact VARCHAR(80),
    contact_number VARCHAR(12),
    email_address VARCHAR(120),
    provider_category VARCHAR(80),

    created_at TIMESTAMP NOT NULL DEFAULT NOW(),
    created_by INT NOT NULL,
    flag_archive TINYINT(1),

    PRIMARY KEY (partner_id),
    FOREIGN KEY (created_by) REFERENCES the_shed.staff(staff_id)
);
ALTER TABLE the_shed.network_partners AUTO_INCREMENT=6000000;

CREATE TABLE the_shed.service_contacts (
    contact_id INT NOT NULL AUTO_INCREMENT,    -- base: 2000000
    service_title VARCHAR(200) NOT NULL,
    service_name VARCHAR(200) NOT NULL,
    currently_active CHAR(1),
    providing_since DATE,
    contact_number VARCHAR(12),
    email_address VARCHAR(120),
    physical_address VARCHAR(200),
    service_category VARCHAR(80),
    partnership_notes VARCHAR(300),

    created_at TIMESTAMP NOT NULL DEFAULT NOW(),
    created_by INT NOT NULL,
    flag_archive TINYINT(1),

    PRIMARY KEY (contact_id),
    FOREIGN KEY (created_by) REFERENCES the_shed.staff(staff_id)
);
ALTER TABLE the_shed.service_contacts AUTO_INCREMENT=5000000;

CREATE TABLE the_shed.incidents (
    incident_id INT NOT NULL AUTO_INCREMENT,
    incident_name VARCHAR(80) NOT NULL,
    severity CHAR(1) NOT NULL,           -- l/m/h (low/medium/high)
    incident_location VARCHAR(80),
    incident_date DATE,
    incident_time TIME,
    incident_status CHAR(1),             -- o/i/c (open/in-progress/closed)

    created_at TIMESTAMP NOT NULL DEFAULT NOW(),
    created_by INT NOT NULL,
    flag_archive TINYINT(1),

    PRIMARY KEY (incident_id),
    FOREIGN KEY (created_by) REFERENCES the_shed.staff(staff_id)
);

CREATE TABLE the_shed.group_activities (
    activity_id INT NOT NULL AUTO_INCREMENT,
    activity_name VARCHAR(120),
    activity_type VARCHAR(120),
    activity_category VARCHAR(120),
    activity_date DATE,
    activity_start_time DATETIME,
    activity_end_time DATETIME,
    activity_comments VARCHAR(200),

    flag_archive TINYINT(1),

    PRIMARY KEY (activity_id)
);

CREATE TABLE the_shed.attachments (
    attachment_id INT NOT NULL AUTO_INCREMENT,
    record_attached_to_id INT NOT NULL,   -- which client/service provider/network partner record entry is attached to
    file_name VARCHAR(64) NOT NULL,
    date_added TIMESTAMP NOT NULL DEFAULT NOW(),
    file_category VARCHAR(64),
    record_display_location VARCHAR(120), 
    attacment_url VARCHAR(200),

    created_at TIMESTAMP NOT NULL DEFAULT NOW(),
    created_by INT NOT NULL,
    flag_archive TINYINT(1),

    PRIMARY KEY (attachment_id),
    FOREIGN KEY (created_by) REFERENCES the_shed.staff(staff_id)
);

CREATE TABLE the_shed.client_children (
    child_id INT NOT NULL AUTO_INCREMENT,
    child_of INT NOT NULL,
    full_name VARCHAR(80) NOT NULL,
    date_of_birth DATE,
    country_of_birth VARCHAR(80),
    family_member_responsibilities VARCHAR(200),
    health_needs VARCHAR(120),
    health_services VARCHAR(120),
    kinship VARCHAR(80),
    child_indigenous_nation VARCHAR(120),
    children_totem VARCHAR(120),

    created_at TIMESTAMP NOT NULL DEFAULT NOW(),
    created_by INT NOT NULL,
    flag_archive TINYINT(1),

    PRIMARY KEY (child_id),
    FOREIGN KEY (child_of) REFERENCES the_shed.clients(client_id),
    FOREIGN KEY (created_by) REFERENCES the_shed.staff(staff_id)
);

CREATE TABLE the_shed.cultural_plans (
    cultural_plan_id INT NOT NULL AUTO_INCREMENT,
    plan_for INT NOT NULL,                  -- plan for which client by ID
    court VARCHAR(120),
    challenges VARCHAR(200),
    comments TEXT(10000),

    created_at TIMESTAMP NOT NULL DEFAULT NOW(),
    created_by INT NOT NULL,
    flag_archive TINYINT(1),

    PRIMARY KEY (cultural_plan_id),
    FOREIGN KEY (created_by) REFERENCES the_shed.staff(staff_id),
    FOREIGN KEY (plan_for) REFERENCES the_shed.clients(client_id)
);

CREATE TABLE the_shed.group_activities_involved (
    involved_id INT NOT NULL AUTO_INCREMENT,
    activity_id INT NOT NULL,
    client_id INT,
    service_contact_id INT,
    staff_id INT,

    PRIMARY KEY (involved_id),

    FOREIGN KEY (activity_id) REFERENCES the_shed.group_activities(activity_id),
    FOREIGN KEY (client_id) REFERENCES the_shed.clients(client_id),
    FOREIGN KEY (service_contact_id) REFERENCES the_shed.service_contacts(contact_id),
    FOREIGN KEY (staff_id) REFERENCES the_shed.staff(staff_id)
);

CREATE TABLE the_shed.incidents_involved (
    involved_id INT NOT NULL AUTO_INCREMENT,
    incident_id INT NOT NULL,
    client_id INT,
    staff_id INT,

    PRIMARY KEY (involved_id),
    FOREIGN KEY (incident_id) REFERENCES the_shed.incidents(incident_id),
    FOREIGN KEY (client_id) REFERENCES the_shed.clients(client_id),
    FOREIGN KEY (staff_id) REFERENCES the_shed.staff(staff_id)
);

CREATE TABLE the_shed.network_partners_involved (
    involved_id INT NOT NULL AUTO_INCREMENT,
    partner_id INT NOT NULL,
    staff_id INT NOT NULL,

    PRIMARY KEY (involved_id),
    FOREIGN KEY (partner_id) REFERENCES the_shed.network_partners(partner_id),
    FOREIGN KEY (staff_id) REFERENCES the_shed.staff(staff_id)
);

CREATE TABLE the_shed.reports (
    report_id INT NOT NULL AUTO_INCREMENT,
    number_clients_serviced INT NOT NULL,
    number_clients_seen_week INT NOT NULL,
    number_atsi_clients INT NOT NULL,
    number_group_sessions_provided INT NOT NULL,
    list_orgs_attending_gatherings TEXT(10000),
    top_three_assistance_provided VARCHAR(300),
    number_wsphn_distributed INT,
    number_wsphn_received INT,
    three_complex_activities TEXT(30000),
    capacity_building_activities TEXT(5000),
    reform_work TEXT(5000),
    key_challenges VARCHAR(120),
    emerging_trends VARCHAR(120),

    quarter VARCHAR(2),
    created_at TIMESTAMP NOT NULL DEFAULT NOW(),
    created_by INT NOT NULL,
    flag_archive TINYINT(1),

    PRIMARY KEY (report_id),
    FOREIGN KEY (created_by) REFERENCES the_shed.staff(staff_id)
);

CREATE TABLE the_shed.service_provided_client (
    service_provided_client_id INT NOT NULL AUTO_INCREMENT,
    contact_id INT NOT NULL,
    client_id INT NOT NULL,

    PRIMARY KEY (service_provided_client_id),
    FOREIGN KEY (contact_id) REFERENCES the_shed.service_contacts(contact_id),
    FOREIGN KEY (client_id) REFERENCES the_shed.clients(client_id)
);

CREATE TABLE the_shed.service_provided_client_log (
    service_provided_client_id INT NOT NULL,
    comment_date TIMESTAMP NOT NULL DEFAULT NOW(),
    updated_by INT NOT NULL,
    log_comment VARCHAR(200),

    flag_archive TINYINT(1),

    PRIMARY KEY (service_provided_client_id),
    FOREIGN KEY (service_provided_client_id) REFERENCES the_shed.service_provided_client(service_provided_client_id),
    FOREIGN KEY (updated_by) REFERENCES the_shed.staff(staff_id)
);

CREATE TABLE the_shed.system_log (
    event_id INT NOT NULL AUTO_INCREMENT,
    event_name VARCHAR(80),
    event_timestamp TIMESTAMP NOT NULL DEFAULT NOW(),
    event_performed_by INT NOT NULL,
    event_section_display_name VARCHAR(80),

    PRIMARY KEY (event_id),
    FOREIGN KEY (event_performed_by) REFERENCES the_shed.staff(staff_id)
);