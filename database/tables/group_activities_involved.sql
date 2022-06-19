CREATE TABLE the_shed.group_activities_involved (
    involved_id INT NOT NULL AUTO_INCREMENT,
    activity_id INT NOT NULL,
    client_id INT,
    service_contact_id INT,
    staff_id INT,

    PRIMARY KEY (involved_id),

    FOREIGN KEY (activity_id) REFERENCES the_shed.group_activities(activity_id),
    FOREIGN KEY (client_id) REFERENCES the_shed.clients(client_id),
    FOREIGN KEY (service_contact_id) REFERENCES the_shed.service_contacts(contact_id),
    FOREIGN KEY (staff_id) REFERENCES the_shed.staff(staff_id)
);