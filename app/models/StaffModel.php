<?php
    class StaffModel extends Database {
        private $dbConnection;

        public $staff_id;
        public $full_name;
        public $token;
        public $gender;
        public $date_of_birth;
        public $contact_number;
        public $email_address;
        public $password;
        public $authority;
        public $flag_archive;

        public function __construct(){
        }

        public function getStaffBySQL($sql){
            $matchingStaff = null;
            $staff = null;

            $this->dbConnection = $this->getConnection();

            $result = $this->dbConnection->query($sql);
            $this->dbConnection->close();

            if ($result && $result->num_rows > 0){
                $matchingStaff = [];

                while($row = $result->fetch_assoc()) {
                    $staff = new StaffModel();

                    $staff->staff_id = $row['staff_id'];
                    $staff->full_name = $row['full_name'];
                    $staff->token = $row['token'];
                    $staff->gender = $row['gender'];
                    $staff->date_of_birth = $row['date_of_birth'];
                    $staff->contact_number = $row['contact_number'];
                    $staff->email_address = $row['email_address'];
                    $staff->password = $row['password'];
                    $staff->authority = $row['authority'];
                    $staff->flag_archive = $row['flag_archive'];
    
                    array_push($matchingStaff, $staff);
                }

            }

            return $matchingStaff;
        }

        public function hasUniqueEmail($email){
            $staff = $this->getStaffBySQL("SELECT * FROM the_shed.staff 
                                           WHERE email_address = '$email'");

            if ($staff == null)
                return true;
            
            return false;
        }

        // Returns unique token with total lenght of 8
        // Token is a random 7 character alphanumeric string with 
        // the authority number appended after the random string
        // Example token with authority level of 1: 54af8921
        public function generateToken($authority){
            $token = null;
            $existingTokens = [];
            $valid = false;

            // get the database connection and set query
            $this->dbConnection = $this->getConnection();
            $sql = "SELECT token FROM the_shed.staff";
            $result = $this->dbConnection->query($sql);
            
            // fetch all existing tokens in the database
            while ( $row = mysqli_fetch_assoc($result) ) {
                $existingTokens[] = $row['token'];
            }

            $this->dbConnection->close();

            // generate new token until it isn't present in the existing token list
            while (!$valid){
                $token = substr(uniqid(), -7).$authority;

                if (!in_array($token,$existingTokens))
                    $valid = true;
            }

            // return the unique token
            return $token;
        }

        public function createEmptyTokenRecord($token){
            $this->dbConnection = $this->getConnection();
            $tempPassword = password_hash(md5(rand()), PASSWORD_BCRYPT, ['cost' => '13']);

            $sql = "INSERT INTO the_shed.staff (token,password) 
                    VALUES ('$token','$tempPassword')";
                    
            $result = $this->dbConnection->query($sql);

            return $result;            
        }

        public function registerStaff($newStaff){
            $this->dbConnection = $this->getConnection();

            $sql = "UPDATE the_shed.staff 
                    SET 
                    full_name = '$newStaff->full_name',
                    gender = '$newStaff->gender',
                    date_of_birth = '$newStaff->date_of_birth',
                    contact_number = '$newStaff->contact_number',
                    email_address = '$newStaff->email_address',
                    password = '$newStaff->password',
                    authority = '$newStaff->authority',
                    flag_archive = '$newStaff->flag_archive' 
                    WHERE token = '$newStaff->token'";

            $result = $this->dbConnection->query($sql);
            $this->dbConnection->close();

            return $result;
        }
    }
?>