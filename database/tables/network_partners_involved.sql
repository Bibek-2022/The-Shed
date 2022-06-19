CREATE TABLE the_shed.network_partners_involved (
    involved_id INT NOT NULL AUTO_INCREMENT,
    partner_id INT NOT NULL,
    staff_id INT NOT NULL,

    PRIMARY KEY (involved_id),
    FOREIGN KEY (partner_id) REFERENCES the_shed.network_partners(partner_id),
    FOREIGN KEY (staff_id) REFERENCES the_shed.staff(staff_id)
);