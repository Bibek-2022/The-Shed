<?php
    class Activity extends Controller {
        private $activityModel;

        public function __construct(){
            $this->activityModel = $this->loadModel('ActivityModel');
        }

        public function index(){
            $this->listAll();
        }

        public function listAll(){
            $allActivities = $this->activityModel->getActivitiesBySQL("SELECT * FROM 
                                                                    the_shed.group_activities
                                                                    ORDER BY activity_start 
                                                                    ASC");
            $this->loadView('pages/activities/list-all.php', $allActivities);
        }

        public function today(){
            $activitiesToday = $this->activityModel->getActivitiesToday();
            $this->loadView('pages/activities/list-today.php', $activitiesToday);
        }

        public function add(){
            $this->loadView('pages/activities/add.php');
        }

        public function createActivity(){
            $newActivity = $this->loadModel('ActivityModel');

            $newActivity->activity_name = $_POST['activity_name'];
            $newActivity->activity_type = $_POST['activity_type'];
            $newActivity->activity_category = $_POST['activity_category'][0];
            $activity_date = $_POST['activity_date'];
            $newActivity->activity_start = $_POST['activity_start'];
            $newActivity->activity_end = $_POST['activity_end'];
            $newActivity->activity_status = 'n';
            $newActivity->activity_comments = $_POST['activity_comments'];
            $newActivity->flag_archive = 0;

            $newActivity->activity_start = $activity_date.' '.$newActivity->activity_start.':00';
            $newActivity->activity_end = $activity_date.' '.$newActivity->activity_end.':00';

            // print_r($newActivity);
            // die();

            if($this->activityModel->registerActivity($newActivity)){
                //$this->listAll();
                header('Location: /activities/listAll');
            }
        }

        public function details($params){
            $activity_id = $params[0];
            $activity = $this->activityModel->getActivitiesBySQL("SELECT * FROM the_shed.group_activities
                                                                  WHERE activity_id = '$activity_id'");

            $this->loadView('pages/activities/details.php', $activity);
        }

        public function edit($params){
            $activity_id = $params[0];
            $activity = $this->activityModel->getActivitiesBySQL("SELECT * FROM the_shed.group_activities
                                                                  WHERE activity_id = '$activity_id'");
            $this->loadView('pages/activities/edit.php', $activity);
        }

        public function updateActivity($params){
            $updatedActivity = $this->loadModel('ActivityModel');

            $updatedActivity->activity_id = $params[0];
            $updatedActivity->activity_name = $_POST['activity_name'];
            $updatedActivity->activity_type = $_POST['activity_type'];
            $updatedActivity->activity_category = $_POST['activity_category'];
            $activity_date = $_POST['activity_date'];
            $updatedActivity->activity_start = $_POST['activity_start'];
            $updatedActivity->activity_end = $_POST['activity_end'];
            $updatedActivity->activity_status = 'n';
            $updatedActivity->activity_comments = $_POST['activity_comments'];
            $updatedActivity->flag_archive = 0;

            $updatedActivity->activity_start = $activity_date.' '.$updatedActivity->activity_start.':00';
            $updatedActivity->activity_end = $activity_date.' '.$updatedActivity->activity_end.':00';

            // print_r($newActivity);
            // die();

            if($this->activityModel->updateActivity($updatedActivity)){
                $this->listAll();
            }
        }
    }
?>