<?php
    class ServiceContactModel extends Database {
        private $dbConnection;

        public $contact_id;
        public $service_title;
        public $service_name;
        public $currently_active;
        public $providing_since;
        public $contact_number;
        public $email_address;
        public $physical_address;
        public $service_category;
        public $partnership_notes;
        public $created_at;
        public $created_by;
        public $flag_archive;

        public function getServiceContactsBySQL($sql){
            $this->dbConnection = $this->getConnection();
            $result = $this->dbConnection->query($sql);
            $this->dbConnection->close();

            $matchingContacts = null;
            $contact = null;

            if ($result && $result->num_rows > 0){
                $matchingContacts = [];

                while($row = $result->fetch_assoc()) {
                    $contact = new ServiceContactModel();

                    $contact->contact_id = $row['contact_id'];
                    $contact->service_title = $row['service_title'];
                    $contact->service_name = $row['service_name'];
                    $contact->currently_active = $row['currently_active'];
                    $contact->providing_since = $row['providing_since'];
                    $contact->contact_number = $row['contact_number'];
                    $contact->email_address = $row['email_address'];
                    $contact->physical_address = $row['physical_address'];
                    $contact->service_category = $row['service_category'];
                    $contact->partnership_notes = $row['partnership_notes'];
                    $contact->created_at = $row['created_at'];
                    $contact->created_by = $row['created_by'];
                    $contact->flag_archive = $row['flag_archive'];
    
                    array_push($matchingContacts, $contact);
                }
            }

            return $matchingContacts;
        }

        public function addServiceContact($service_contact){
            $this->dbConnection = $this->getConnection();

            $service_contact->service_category = implode(',', $service_contact->service_category);
            $service_contact->service_category = str_replace(',,',', ',$service_contact->service_category);

            $result = null;

            $sql = "INSERT INTO the_shed.service_contacts (service_title,service_name,
                    currently_active,providing_since,contact_number,email_address,
                    physical_address,service_category,partnership_notes,created_by,flag_archive
            ) VALUES (
                '$service_contact->service_title','$service_contact->service_name',
                '$service_contact->currently_active','$service_contact->providing_since',
                '$service_contact->contact_number','$service_contact->email_address',
                '$service_contact->physical_address','$service_contact->service_category',
                '$service_contact->partnership_notes','$service_contact->created_by','0')";

            
            echo $sql;

            if ($this->dbConnection->query($sql))
                $result = $this->dbConnection->insert_id;

            $this->dbConnection->close();

            return $result;
        }
    }
?>