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