<?php
    class ClientModel extends Database {
        private $dbConnection;

        public $client_id;
        public $first_name;
        public $last_name;
        public $gender;
        public $inbound_referral;
        public $atsi_status;
        public $date_of_birth;
        public $contact_number;
        public $challenges;
        public $potential_peer_support;
        public $outbound_referral;
        public $case_management_notes;
        public $client_outcomes;
        public $created_at;
        public $created_by;
        public $flag_archive;

        public function getClientsBySQL($sql){
            $matchingClients = null;

            $this->dbConnection = $this->getConnection();

            $result = $this->dbConnection->query($sql);
            $this->dbConnection->close();

            if ($result && $result->num_rows > 0){
                $matchingClients = [];

                while($row = $result->fetch_assoc()) {
                    $client = new ClientModel();

                    $client->client_id = $row['client_id'];
                    $client->first_name = $row['first_name'];
                    $client->last_name = $row['last_name'];
                    $client->gender = $row['gender'];
                    $client->inbound_referral = $row['inbound_referral'];
                    $client->atsi_status = $row['atsi_status'];
                    $client->date_of_birth = $row['date_of_birth'];
                    $client->contact_number = $row['contact_number'];
                    $client->challenges = $row['challenges'];
                    $client->potential_peer_support = $row['potential_peer_support'];
                    $client->outbound_referral = $row['outbound_referral'];
                    $client->case_management_notes = $row['case_management_notes'];
                    $client->client_outcomes = $row['client_outcomes'];
                    $client->created_at = $row['created_at'];
                    $client->created_by = $row['created_by'];
                    $client->flag_archive = $row['flag_archive'];

                    array_push($matchingClients, $client);
                }

            }

            return $matchingClients;
        }
        
        public function addClient($client){
            $this->dbConnection = $this->getConnection();
            $result = null;

            $client->atsi_status = $client->atsi_status[0];
            $client->challenges = implode(',', $client->challenges);
            $client->challenges = str_replace(',,',', ',$client->challenges);

            $sql = "INSERT INTO the_shed.clients 
                    (first_name, last_name, 
                    gender, inbound_referral, atsi_status,
                    date_of_birth,
                    contact_number, challenges, 
                    potential_peer_support, outbound_referral, 
                    case_management_notes, client_outcomes, 
                    created_by, flag_archive)
                    VALUES (
                    '$client->first_name','$client->last_name',
                    '$client->gender','$client->inbound_referral',
                    '$client->atsi_status','$client->date_of_birth',
                    '$client->contact_number','$client->challenges',
                    '$client->potential_peer_support',
                    '$client->outbound_referral','$client->case_management_notes',
                    '$client->client_outcomes','$client->created_by','0'
                    )";

            if ($this->dbConnection->query($sql))
                $result = $this->dbConnection->insert_id;

            $this->dbConnection->close();

            return $result;
        }

        public function archiveRecord($client_id){
            $this->dbConnection = $this->getConnection();

            $sql = "UPDATE the_shed.clients  
                    SET flag_archive = '1' 
                    WHERE client_id = '$client_id[0]'";

            $result = $this->dbConnection->query($sql);
            $this->dbConnection->close();

            return $result;
        }
    }
?>