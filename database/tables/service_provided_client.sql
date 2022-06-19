CREATE TABLE the_shed.service_provided_client (
    service_provided_client_id INT NOT NULL AUTO_INCREMENT,
    contact_id INT NOT NULL,
    client_id INT NOT NULL,

    PRIMARY KEY (service_provided_client_id),
    FOREIGN KEY (contact_id) REFERENCES the_shed.service_contacts(contact_id),
    FOREIGN KEY (client_id) REFERENCES the_shed.clients(client_id)
);