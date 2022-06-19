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
ALTER TABLE the_shed.staff AUTO_INCREMENT=1001;