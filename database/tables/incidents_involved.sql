CREATE TABLE the_shed.incidents_involved (
    involved_id INT NOT NULL AUTO_INCREMENT,
    incident_id INT NOT NULL,
    client_id INT,
    staff_id INT,

    PRIMARY KEY (involved_id),
    FOREIGN KEY (incident_id) REFERENCES the_shed.incidents(incident_id),
    FOREIGN KEY (client_id) REFERENCES the_shed.clients(client_id),
    FOREIGN KEY (staff_id) REFERENCES the_shed.staff(staff_id)
);