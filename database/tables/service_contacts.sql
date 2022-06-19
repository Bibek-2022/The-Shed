CREATE TABLE the_shed.service_contacts (
    contact_id INT NOT NULL AUTO_INCREMENT,    -- base: 2000000
    service_title VARCHAR(200) NOT NULL,
    service_name VARCHAR(200) NOT NULL,
    currently_active VARCHAR(3),
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