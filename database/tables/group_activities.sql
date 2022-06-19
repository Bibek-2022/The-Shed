CREATE TABLE the_shed.group_activities (
    activity_id INT NOT NULL AUTO_INCREMENT,
    activity_name VARCHAR(120),
    activity_type VARCHAR(120),
    activity_category VARCHAR(120),
    activity_start TIMESTAMP DEFAULT NOW(),
    activity_end TIMESTAMP DEFAULT NOW(),
    activity_comments VARCHAR(200),
    activity_status CHAR(1),

    flag_archive TINYINT(1),

    PRIMARY KEY (activity_id)
);
UPDATE the_shed.group_activities SET activity_end = (activity_end + 86400)