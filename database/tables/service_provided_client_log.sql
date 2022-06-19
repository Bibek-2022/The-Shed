CREATE TABLE the_shed.service_provided_client_log (
    service_provided_client_id INT NOT NULL,
    comment_date TIMESTAMP NOT NULL,
    updated_by INT NOT NULL,
    log_comment VARCHAR(200),

    flag_archive TINYINT(1),

    PRIMARY KEY (service_provided_client_id),
    FOREIGN KEY (service_provided_client_id) REFERENCES the_shed.service_provided_client(service_provided_client_id),
    FOREIGN KEY (updated_by) REFERENCES the_shed.staff(staff_id)
);