<?php
    class Dashboard extends Controller {
        public function index($data = ''){
            $activityModel = $this->loadModel('ActivityModel');
            $currentActivities = $activityModel->getActivitiesBySQL("SELECT * FROM 
                                                                    the_shed.group_activities 
                                                                    ORDER BY activity_start 
                                                                    ASC");
            $activitiesToday = $activityModel->getActivitiesToday();
            
            $this->loadView('dashboard.php', ['activities' => $currentActivities,
                                              'activitiesToday' => $activitiesToday]);
        }
    }
?>