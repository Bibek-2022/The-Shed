<?php
    class ServiceContact extends Controller {
        private $serviceContactModel;

        public function __construct(){
            $this->serviceContactModel = $this->loadModel('ServiceContactModel');
        }

        public function index(){
        }

        public function listAll(){
            $contactModel = $this->loadModel('ServiceContactModel');
            $allContacts = $contactModel->getServiceContactsBySQL("SELECT * FROM the_shed.service_contacts 
                                                                  WHERE flag_archive = 0");

            $this->loadView('pages/service-contacts/list.php', ['contactList' => $allContacts]);
        }

        public function add(){
            $this->loadView('pages/service-contacts/add.php');
        }

        public function createServiceContact(){
            require_once(APP_ROOT.'views/templates/session.php'); // needed for created_by, I think
            
            $newServiceContact = $this->loadModel('ServiceContactModel');

            $newServiceContact->service_title = $_POST['service_title'];
            $newServiceContact->service_name = $_POST['service_name'];
            $newServiceContact->currently_active = $_POST['currently_active'];
            $newServiceContact->providing_since = $_POST['providing_since'];
            $newServiceContact->contact_number = $_POST['contact_number'];
            $newServiceContact->email_address = $_POST['email_address'];
            $newServiceContact->physical_address = $_POST['physical_address'];
            $newServiceContact->service_category = $_POST['service_category'];
            $newServiceContact->partnership_notes = $_POST['partnership_notes'];
            $newServiceContact->created_by = $_SESSION['staff_id']; // get through session
            $newServiceContact->flag_archive = 0;

            //
            $newServiceContactID = $newServiceContact->addServiceContact($newServiceContact);

            if($newServiceContactID){
                $attachments = $_FILES;

                // are there attachments to upload?
                if (strlen($attachments['files']['name'][0]) > 0){
                    $this->upload($_FILES, $newServiceContactID, $created_by[0]);
                }
                header('Location: /serviceContact/listAll');
            } else {
                // todo: handle create client record error
                echo 'didnt create the record';
            }
        }
    }
?>