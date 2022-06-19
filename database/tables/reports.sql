CREATE TABLE the_shed.reports (
    report_id INT NOT NULL AUTO_INCREMENT,
    number_clients_serviced INT NOT NULL,
    number_clients_seen_week INT NOT NULL,
    number_atsi_clients INT NOT NULL,
    number_group_sessions_provided INT NOT NULL,
    list_orgs_attending_gatherings TEXT(10000),
    top_three_assistance_provided VARCHAR(300),
    number_wsphn_distributed INT,
    number_wsphn_received INT,
    three_complex_activities TEXT(30000),
    capacity_building_activities TEXT(5000),
    reform_work TEXT(5000),
    key_challenges VARCHAR(120),
    emerging_trends VARCHAR(120),

    quarter VARCHAR(2),
    created_at TIMESTAMP NOT NULL DEFAULT NOW(),
    created_by INT NOT NULL,
    flag_archive TINYINT(1),

    PRIMARY KEY (report_id),
    FOREIGN KEY (created_by) REFERENCES the_shed.staff(staff_id)
);