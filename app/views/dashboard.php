<?php require_once(APP_ROOT.'views/templates/session.php'); ?>
<?php
    $activities = $data['activities'];
    $activitiesToday = $data['activitiesToday'] == null ? 0 : count($data['activitiesToday']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The Shed, PX2124, Western Sydney University">
    <meta name="author" content="Vaibhav, Bibek, Jack, Reynald">

    <title>The Shed | Dashboard</title>
    <link href="<?php echo RES_PATH.'css/main.css'?>" rel="stylesheet">
</head>

<body>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require_once(APP_ROOT.'/views/templates/sidebar.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require_once(APP_ROOT.'/views/templates/topbar.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
                    <div class="row">

                        <!-- Each Statistic -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card  shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h1 mb-0 font-weight-medium text-gray-800">8</div>
                                            <div class="text-xs font-weight-medium text-primary text-uppercase mb-1">
                                                Current Services</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Each Statistic -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card  shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h1 mb-0 font-weight-medium text-gray-800"><?php echo $activitiesToday; ?></div>
                                            <div class="text-xs font-weight-medium text-primary text-uppercase mb-1">
                                                Upcoming Activities</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Each Statistic -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card  shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h1 mb-0 font-weight-medium text-gray-800">22</div>
                                            <div class="text-xs font-weight-medium text-primary text-uppercase mb-1">
                                                Visitors this week</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Each Statistic -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card  shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h1 mb-0 font-weight-medium text-gray-800">58</div>
                                            <div class="text-xs font-weight-medium text-primary text-uppercase mb-1">
                                                Total Services</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->

                    <!-- Activities today table-->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-medium text-primary">Current Activities</h6>
                        </div>
                        <div class="card-header py-3 inline">
                            <a class="btn btn-primary table-header-options" href="/activity/listAll">
                                List All</a>
                            <a class="btn btn-outline-primary table-header-options" href="/activity/add">
                                Add New</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <?php //if(isset($data['activities'])) : ?>
                                <?php if($activitiesToday) : ?>
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Activity</th>
                                            <th>Category</th>
                                            <th>Type</th>
                                            <th>Date</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($activities as $activity){
                                                $timestamp_start = strtotime($activity->activity_start);
                                                $timestamp_end = strtotime($activity->activity_end);

                                                $activity_date = date('d-m-Y', $timestamp_start);
                                                $activity_start_time = date('h:i A', $timestamp_start);
                                                $activity_end_time = date('h:i A', $timestamp_end);

                                                $status = null;

                                                echo '<tr>';
                                                echo '<td>'.$activity->activity_name.'</td>';
                                                echo '<td>'.$activity->activity_category.'</td>';
                                                echo '<td>'.$activity->activity_type.'</td>';
                                                echo '<td>'.$activity_date.'</td>';
                                                echo '<td>'.$activity_start_time.'</td>';
                                                echo '<td>'.$activity_end_time.'</td>';
                                                $activity->activity_status == 'c' ? $status = "Completed" : $status = "Not Completed";
                                                echo '<td>'.$status.'</td>';
                                                echo '<td><a href="/activity/details/'.$activity->activity_id.'">Details</a></td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <!-- todo: front-end: change below up a bit -->
                                <?php else: ?>
                                    <h2>No Upcoming Activities Today</h2>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- End of Activities today table-->

                    <!-- End of services in handle table-->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-medium text-primary">Current Active Services</h6>
                        </div>
                        <div class="card-header py-3 inline">
                            <a class="btn btn-primary table-header-options" href="./pages/services/list-all.html">
                                List All</a>
                            <a class="btn btn-outline-primary table-header-options" href="./pages/services/add.html">
                                Add New</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Client's Name</th>
                                            <th>Service Name</th>
                                            <th>Status</th>
                                            <th>Service Start Date</th>
                                            <th>Last Update</th>
                                            <th>List Client Visit</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Vaibhav Patel</td>
                                            <td>Legal</td>
                                            <td>Processing</td>
                                            <td>01/07/2021</td>
                                            <td>07/12/2022</td>
                                            <td>2 Days Ago</td>
                                            <td><a class="coloured-button" href="#">Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>Mental</td>
                                            <td>Processing</td>
                                            <td>01/07/2021</td>
                                            <td>07/12/2022</td>
                                            <td>2 Days Ago</td>
                                            <td><a class="coloured-button" href="#">Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Vaibhav Patel</td>
                                            <td>Financial</td>
                                            <td>Completed</td>
                                            <td>11/02/2022</td>
                                            <td>09/10/2012</td>
                                            <td>5 Days Ago</td>
                                            <td><a class="coloured-button" href="#">Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Vaibhav Patel</td>
                                            <td>Mental</td>
                                            <td>Completed</td>
                                            <td>01/07/2021</td>
                                            <td>07/12/2022</td>
                                            <td>2 Days Ago</td>
                                            <td><a class="coloured-button" href="#">Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Vaibhav Patel</td>
                                            <td>Legal</td>
                                            <td>Completed</td>
                                            <td>01/07/2021</td>
                                            <td>07/12/2022</td>
                                            <td>2 Days Ago</td>
                                            <td><a class="coloured-button" href="#">Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>Mental</td>
                                            <td>Processing</td>
                                            <td>01/07/2021</td>
                                            <td>07/12/2022</td>
                                            <td>2 Days Ago</td>
                                            <td><a class="coloured-button" href="#">Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Vaibhav Patel</td>
                                            <td>Financial</td>
                                            <td>Completed</td>
                                            <td>11/02/2022</td>
                                            <td>09/10/2012</td>
                                            <td>5 Days Ago</td>
                                            <td><a class="coloured-button" href="#">Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Vaibhav Patel</td>
                                            <td>Mental</td>
                                            <td>Completed</td>
                                            <td>01/07/2021</td>
                                            <td>07/12/2022</td>
                                            <td>2 Days Ago</td>
                                            <td><a class="coloured-button" href="#">Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Vaibhav Patel</td>
                                            <td>Legal</td>
                                            <td>Completed</td>
                                            <td>01/07/2021</td>
                                            <td>07/12/2022</td>
                                            <td>2 Days Ago</td>
                                            <td><a class="coloured-button" href="#">Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>Mental</td>
                                            <td>Processing</td>
                                            <td>01/07/2021</td>
                                            <td>07/12/2022</td>
                                            <td>2 Days Ago</td>
                                            <td><a class="coloured-button" href="#">Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Vaibhav Patel</td>
                                            <td>Financial</td>
                                            <td>Completed</td>
                                            <td>11/02/2022</td>
                                            <td>09/10/2012</td>
                                            <td>5 Days Ago</td>
                                            <td><a class="coloured-button" href="#">Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Vaibhav Patel</td>
                                            <td>Mental</td>
                                            <td>Completed</td>
                                            <td>01/07/2021</td>
                                            <td>07/12/2022</td>
                                            <td>2 Days Ago</td>
                                            <td><a class="coloured-button" href="#">Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Vaibhav Patel</td>
                                            <td>Legal</td>
                                            <td>Completed</td>
                                            <td>01/07/2021</td>
                                            <td>07/12/2022</td>
                                            <td>2 Days Ago</td>
                                            <td><a class="coloured-button" href="#">Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>Mental</td>
                                            <td>Processing</td>
                                            <td>01/07/2021</td>
                                            <td>07/12/2022</td>
                                            <td>2 Days Ago</td>
                                            <td><a class="coloured-button" href="#">Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Vaibhav Patel</td>
                                            <td>Financial</td>
                                            <td>Completed</td>
                                            <td>11/02/2022</td>
                                            <td>09/10/2012</td>
                                            <td>5 Days Ago</td>
                                            <td><a class="coloured-button" href="#">Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Vaibhav Patel</td>
                                            <td>Mental</td>
                                            <td>Completed</td>
                                            <td>01/07/2021</td>
                                            <td>07/12/2022</td>
                                            <td>2 Days Ago</td>
                                            <td><a class="coloured-button" href="#">Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>Vaibhav Patel</td>
                                            <td>Legal</td>
                                            <td>Completed</td>
                                            <td>01/07/2021</td>
                                            <td>07/12/2022</td>
                                            <td>2 Days Ago</td>
                                            <td><a class="coloured-button" href="#">Details</a></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End of services in handle table-->
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer">
                    <div class="container my-auto ">
                        <div class="copyright text-center my-auto">
                            <span>PX2124 | Western Sydney University</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo RES_PATH.'/js/jquery/jquery.min.js'?>"></script>
        <script src="<?php echo RES_PATH.'/js/jquery/jquery.easing.min.js'?>"></script>
        <script src="<?php echo RES_PATH.'/js/jquery/jquery.datatables.min.js'?>"></script>

        <script src="<?php echo RES_PATH.'/js/bootstrap/bootstrap.bundle.min.js'?>"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo RES_PATH.'/js/main.js'?>"></script>
    </div>
</body>

</html>