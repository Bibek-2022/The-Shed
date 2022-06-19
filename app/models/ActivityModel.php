<?php 
    Class ActivityModel extends Database {
        private $dbConnection;

        public $activity_id;
        public $activity_name;
        public $activity_type;
        public $activity_category;
        public $activity_start;
        public $activity_end;
        public $activity_status;
        public $activity_comments;
        public $flag_archive;

        public function getActivitiesBySQL($sql){
            $matchingActivities = null;
            $activity = null;

            $this->dbConnection = $this->getConnection();
            $result = $this->dbConnection->query($sql);
            $this->dbConnection->close();

            if ($result && $result->num_rows > 0){
                $matchingActivities = [];

                while($row = $result->fetch_assoc()) {
                    $activity = new ActivityModel();

                    $activity->activity_id = $row['activity_id'];
                    $activity->activity_name = $row['activity_name'];
                    $activity->activity_type = $row['activity_type'];
                    $activity->activity_category = $row['activity_category'];
                    $activity->activity_start = $row['activity_start'];
                    $activity->activity_end = $row['activity_end'];
                    $activity->activity_status = $row['activity_status'];
                    $activity->activity_comments = $row['activity_comments'];
                    $activity->flag_archive = $row['flag_archive'];

                    array_push($matchingActivities, $activity);
                }

            }

            return $matchingActivities;
        }

        // necessary?
        public function getActivitiesToday(){
            $this->dbConnection = $this->getConnection();
            $activitiesToday = null;

            $sql = "SELECT * from the_shed.group_activities 
                    WHERE DATE_FORMAT(activity_start,'%Y%c%d') 
                    = DATE_FORMAT(now(),'%Y%c%d')
                    ORDER BY activity_start 
                    ASC";

            $activitiesToday = $this->getActivitiesBySQL($sql);
            
            // no need to close dbConnection here, getActivitiesBySQL will close it

            return $activitiesToday;
        }

        public function registerActivity($newActivity){
            $this->dbConnection = $this->getConnection();

            $activity_timestamp = "";

            $sql = "INSERT the_shed.group_activities (
                activity_name,
                activity_type,
                activity_category,
                activity_start,
                activity_end,
                activity_status,
                activity_comments,
                flag_archive)
                VALUES (
                    '$newActivity->activity_name',
                    '$newActivity->activity_type',
                    '$newActivity->activity_category',
                    '$newActivity->activity_start',
                    '$newActivity->activity_end',
                    'n',
                    '$newActivity->activity_comments',
                    '0'
                )";

            $result = $this->dbConnection->query($sql);
            $this->dbConnection->close();
            
            return $result;
        }

        public function updateActivity($updatedActivity){
            $this->dbConnection = $this->getConnection();
            $updatedActivity->activity_category = $updatedActivity->activity_category[0];

            $result = null;
            $sql = "UPDATE the_shed.group_activities 
                    SET 
                    activity_name = '$updatedActivity->activity_name',
                    activity_type = '$updatedActivity->activity_type',
                    activity_category = '$updatedActivity->activity_category',
                    activity_start = '$updatedActivity->activity_start',
                    activity_end = '$updatedActivity->activity_end',
                    activity_status = '$updatedActivity->activity_status',
                    activity_comments = '$updatedActivity->activity_comments',
                    flag_archive = '$updatedActivity->flag_archive' 
                    WHERE activity_id = '$updatedActivity->activity_id'";

            $result = $this->dbConnection->query($sql);
            $this->dbConnection->close();

            return $result;
        }
    }
?>