<?php
    class Settings extends Controller {
        private $admin;

        public function index($params){
            $client = $this->loadModel('ClientModel');
        }

        public function createToken($params){
            $this->admin = $this->loadModel('StaffModel');

            // set default authority level
            $authority = 2;

            // if authority level specified in url, set it
            if (isset($params[0]))
                $authority = $params[0];

            $token = $this->admin->generateToken($authority);

            // todo -- ask for confirmation through front end, will just make entry for now
            if ($this->admin->createEmptyTokenRecord($token)){
                echo 'Created the new record ;) <br />';
                echo 'The token should be: '.$token;
            } else {
                echo 'Couldn\' make the new blank record :(';
            }
        }

        public function general(){

        }

        public function resources(){
            $this->loadView('pages/settings/resources.php');
        }

        public function help(){
            
        }

        public function editUser(){
            $this->loadView('pages/settings/user-details.php');
        }
    }
?>