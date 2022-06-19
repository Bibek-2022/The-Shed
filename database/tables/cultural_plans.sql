CREATE TABLE the_shed.cultural_plans (
    cultural_plan_id INT NOT NULL AUTO_INCREMENT,
    plan_for INT NOT NULL,                  -- plan for which client by ID
    court VARCHAR(120),
    challenges VARCHAR(200), -- probably not necessary
    comments TEXT(10000), -- also might not be necessary

    created_at TIMESTAMP NOT NULL DEFAULT NOW(),
    created_by INT NOT NULL,
    flag_archive TINYINT(1),

    PRIMARY KEY (cultural_plan_id),
    FOREIGN KEY (created_by) REFERENCES the_shed.staff(staff_id),
    FOREIGN KEY (plan_for) REFERENCES the_shed.clients(client_id)
);