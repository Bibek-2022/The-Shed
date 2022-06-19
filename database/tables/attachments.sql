CREATE TABLE the_shed.attachments (
    attachment_id INT NOT NULL AUTO_INCREMENT,
    record_attached_to_id INT NOT NULL,   -- which client/service provider/network partner record entry is attached to
    file_name VARCHAR(64) NOT NULL,
    display_location VARCHAR(120), 
    attachment_url VARCHAR(200),

    created_at TIMESTAMP NOT NULL DEFAULT NOW(),
    created_by INT NOT NULL,
    flag_archive TINYINT(1),

    PRIMARY KEY (attachment_id),
    FOREIGN KEY (created_by) REFERENCES the_shed.staff(staff_id)
);