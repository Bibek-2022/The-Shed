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