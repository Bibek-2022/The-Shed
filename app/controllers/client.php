<?php
    class Client extends Controller {
        private $clientModel;

        public function __construct(){
            $this->clientModel = $this->loadModel('ClientModel');
        }

        public function index(){
            $this->listAll();
        }

        public function listAll($response = null){
            $clientModel = $this->loadModel('ClientModel');
            $allClients = $clientModel->getClientsBySQL("SELECT * FROM the_shed.clients 
                                                         WHERE flag_archive = 0");

            $this->loadView('pages/client/list-all.php', ['clientList' => $allClients,
                                                          'response' => $response]);
        }

        public function add(){
            $this->loadView('pages/client/add-client.php');
        }

        public function addClient($created_by){
            require_once(APP_ROOT.'views/templates/session.php'); // needed for created_by, I think
            
            $newClient = $this->loadModel('ClientModel');

            $newClient->first_name = $_POST['first_name'];
            $newClient->last_name = $_POST['last_name'];
            $newClient->gender = $_POST['gender'];
            $newClient->inbound_referral = $_POST['inbound_referral'];
            $newClient->atsi_status = $_POST['atsi_status'];
            $newClient->date_of_birth = $_POST['date_of_birth'];
            $newClient->contact_number = $_POST['contact_number'];
            $newClient->potential_peer_support = $_POST['potential_peer_support'];
            $newClient->challenges = $_POST['challenges'];
            $newClient->outbound_referral = $_POST['outbound_referral'];
            $newClient->case_management_notes = $_POST['case_management_notes'];
            $newClient->client_outcomes = $_POST['client_outcomes'];
            $newClient->created_by = $created_by[0];
            $newClient->flag_archive = 0;

            $newClientID = $this->clientModel->addClient($newClient);

            if($newClientID){
                $attachments = $_FILES;

                // are there attachments to upload?
                if (strlen($attachments['files']['name'][0]) > 0){
                    $this->upload($_FILES, $newClientID, $created_by[0]);
                }
                header('Location: /client/listAll');
            } else {
                // todo: handle create client record error
                echo 'didnt create the record';
            }
        }

        public function details($params){
            $client_id = $params[0];
            $client = $this->clientModel->getClientsBySQL("SELECT * FROM the_shed.clients
                                                           WHERE client_id = '$client_id'");
            $client = $client[0];

            $createdBy = $this->loadModel('StaffModel');
            $createdBy = $createdBy->getStaffBySQL("SELECT * FROM the_shed.staff 
                                                    WHERE staff_id = '$client->created_by'");
            $createdBy = $createdBy[0]->full_name;

            $clientAttachments = $this->getClientAttachments($params[0]);

            $this->loadView('pages/client/client-details.php', ['client' => $client, 
                                                                'created_by' => $createdBy,
                                                                'attachments' => $clientAttachments]);
        }

        public function edit($params){
            // $activity_id = $params[0];
            // $activity = $this->activityModel->getActivitiesBySQL("SELECT * FROM the_shed.group_activities
            //                                                       WHERE activity_id = '$activity_id'");
            // $this->loadView('pages/client/edit.php', $activity);
        }

        private function getClientAttachments($client_id){
            $attachmentModel = $this->loadModel('AttachmentModel');
            $clientAttachments = $attachmentModel->getAttachmentsBySQL("SELECT * FROM the_shed.attachments 
                                                                        WHERE record_attached_to_id = '$client_id' 
                                                                        AND flag_archive = 0");

            return $clientAttachments;
        }

        public function archive($client_id){
            if ($this->clientModel->archiveRecord($client_id)){
                // redirect
                header('Location: /client/listAll');
                //$this->listAll('archive_success');
            } else {
                echo 'Couldn\' archive that record';
            }
        }
    }
?>