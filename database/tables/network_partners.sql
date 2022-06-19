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
