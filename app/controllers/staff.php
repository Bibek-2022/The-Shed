<?php
    session_start();
    class Staff extends Controller {
        private $staffModel;

        public function __construct(){
            $this->staffModel = $this->loadModel('StaffModel');
        }

        public function index(){
            $this->login();
        }       

        public function register(){
            $inputToken = $_POST['token'];
            $staff = $this->staffModel->getStaffBySQL("SELECT * 
                                                      FROM the_shed.staff 
                                                      WHERE token='$inputToken'");
            $staff = $staff ? $staff[0] : null;
            $allowedToRegister = $inputToken === $staff->token && 
                                 $staff->full_name == null && 
                                 $this->staffModel->hasUniqueEmail($_POST['email_address']);


            // staff can only register if they have a valid token and 
            // their email address hasn't been taken
            if ($staff && $allowedToRegister){
                // Valid token has been entered, allow new user to register as staff
                $newStaff = new StaffModel();

                $newStaff->full_name = $_POST['full_name'];
                $newStaff->token = $inputToken;
                $newStaff->gender = $_POST['gender'];
                $newStaff->date_of_birth = $_POST['date_of_birth'];
                $newStaff->contact_number = $_POST['contact_number'];
                $newStaff->email_address = $_POST['email_address'];

                // passwords are stored in bcrypt with cost set to 13
                // determined cost of 13 as most optimal.
                // Benchmarked 0.5s hash time on a VM with shared i3-5005U & 4GB RAM
                $newStaff->password = password_hash($_POST['password'], 
                                                    PASSWORD_BCRYPT,
                                                    ["cost" => 13]);

                $newStaff->authority = substr($inputToken,-1);
                $newStaff->flag_archive = 0;

                if ($this->staffModel->registerStaff($newStaff)){
                    // redirect to login
                    $this->loadView('login.php',['register_attempt' => 'success']);
                }
            }
            $this->loadView('signup.php', ['register_attempt' => 'fail']);
        }

        public function login(){
            $inputEmail = null;
            $inputPassword = null;

            if (!isset($_POST['email']) || !isset($_POST['password'])){
                $this->loadView('login.php');
            } else {
                $inputEmail = $_POST['email'];
                $inputPassword = $_POST['password'];
            }

            $staff = $this->staffModel->getStaffBySQL("SELECT * FROM the_shed.staff 
                                                 WHERE email_address = '$inputEmail'
                                                 AND flag_archive = '0'");
            $staff = $staff ? $staff[0] : null;

            if ($staff){
                $databasePassword = $staff->password;
            
                if (password_verify($inputPassword, $databasePassword)){
                    $_SESSION['staff_id'] = $staff->staff_id;
                    $_SESSION['staff_name'] = $staff->full_name;
                    header('Location: /dashboard');
                }
            }

            $this->loadView('login.php', ['auth' => 'fail']);
        }

        public function logout(){
            if (session_status() == PHP_SESSION_ACTIVE){
                session_destroy();
            }

            $this->loadView('login.php');
        }
    }
?>