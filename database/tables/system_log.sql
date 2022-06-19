CREATE TABLE the_shed.system_log (
    event_id INT NOT NULL AUTO_INCREMENT,
    event_name VARCHAR(80),
    event_timestamp TIMESTAMP,
    event_performed_by INT NOT NULL,
    event_section_display_name VARCHAR(80),

    PRIMARY KEY (event_id),
    FOREIGN KEY (event_performed_by) REFERENCES the_shed.staff(staff_id)
);