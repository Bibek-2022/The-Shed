CREATE TABLE the_shed.clients (
    client_id INT NOT NULL AUTO_INCREMENT,  -- base: 1000000
    first_name VARCHAR(40),
    last_name VARCHAR(40),
    gender VARCHAR(12),                     -- (male, female, other,unspecified)
    inbound_referral VARCHAR(15),       -- self-referral/agency referral
    atsi_status VARCHAR(40),            -- Aboriginal/Torres Strait Islander/Not Aboriginal or Torres Strait Islander/Prefer Not To Say 
    date_of_birth DATE,
    contact_number VARCHAR(12),         -- max. example: +61401234567
    email_address VARCHAR(150),
    potential_peer_support VARCHAR(3),     -- yes/no
    challenges VARCHAR(100),
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

--email_address VARCHAR(120),