<?php require_once(APP_ROOT.'views/templates/session.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The Shed, PX2124, Western Sydney University">
    <meta name="author" content="Vaibhav, Bibek, Jack, Reynald">

    <title>The Shed | Activities Today</title>
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
                    <?php if($data) : ?>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">List All Activities Today</h1>

                    <!-- Activities today table-->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 inline">
                            <a class="btn btn-primary table-header-options" href="listAll"> List All</a>
                            <a class="btn btn-outline-primary table-header-options" href="add"> Add New</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Activity</th>
                                            <th>Category</th>
                                            <th>Type</th>
                                            <td>Date</td>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $activitiesToday = $data;

                                            foreach ($activitiesToday as $activity){
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
                            </div>
                        </div>
                    </div>
                    <!-- End of Activities today table-->
                </div>
                <!-- End of Main Content -->
                <?php else: ?>
                    <!-- todo: front-end: you can make this look much better than I ever can :) -->
                    <h1 class="h3 mb-4 text-gray-800">No Activities Today</h1>
                <?php endif; ?>
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
        <script src="<?php echo RES_PATH.'js/jquery/jquery.min.js'?>"></script>
        <script src="<?php echo RES_PATH.'js/jquery/jquery.easing.min.js'?>"></script>
        <script src="<?php echo RES_PATH.'js/bootstrap/bootstrap.bundle.min.js'?>"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo RES_PATH.'js/main.js'?>"></script>
</body>

</html>