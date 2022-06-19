<?php require_once(APP_ROOT.'views/templates/session.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The Shed, PX2124, Western Sydney University">
    <meta name="author" content="Vaibhav, Bibek, Jack, Reynald">

    <title>The Shed | Adctivity Details</title>
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
                    <h1 class="h3 mb-4 text-gray-800">Activity Details</h1>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                            <!-- Details card -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Details</h6>
                                </div>
                                <div class="card-body">
                                    <a class="btn btn-primary table-header-options details-button" href="/activity/edit/<?php echo $data[0]->activity_id; ?>">
                                        Edit Activity</a>
                                    <a class="btn btn-primary table-header-options details-button"
                                        href="/activity/listAll">
                                        List All</a>
                                    <a class="btn btn-outline-primary table-header-options" href="/activity/add"> Add
                                        New</a>
                                    <div class="table-responsive">
                                        <table class="table table-borderless" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td class="font-weight-regular">Name:</td>
                                                    <td><?php echo $data[0]->activity_name;?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-regular">Type:</td>
                                                    <td><?php echo $data[0]->activity_type;?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-regular">Category:</td>
                                                    <td><?php echo $data[0]->activity_category;?></td>
                                                </tr>
                                                <?php
                                                    $timestamp_start = strtotime($data[0]->activity_start);
                                                    $timestamp_end = strtotime($data[0]->activity_end);

                                                    $activity_date = date('d-m-Y', $timestamp_start);
                                                    $activity_start_time = date('h:i A', $timestamp_start);
                                                    $activity_end_time = date('h:i A', $timestamp_end);

                                                    $status = null;

                                                ?>
                                                <tr>
                                                    <td class="font-weight-regular">Date:</td>
                                                    <td><?php echo $activity_date; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-regular">Start Time:</td>
                                                    <td><?php echo $activity_start_time; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-regular">End Time:</td>
                                                    <td><?php echo $activity_end_time; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-regular">Activity Comments:</td>
                                                    <td><?php echo $data[0]->activity_comments; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <!-- Add attendees -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Add Attendees</h6>
                                </div>
                                <div class="card-body">
                                    <!-- Add single text box form here-->
                                </div>
                            </div>
                            <!-- add service provider -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Add Service Provider</h6>
                                </div>
                                <div class="card-body">
                                    <!-- Add single text box form here-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Activity attendees table-->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 inline">
                            <a class="btn btn-primary table-header-options" href="/activity/listAll"> List All</a>
                            <a class="btn btn-outline-primary table-header-options" href="/activity/add"> Add New</a>
                            <input type="text" placeholder="Search table.." title="Search..."
                                class="form-control bg-light border-1 small table-header-search tableSearchInput">
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Register Date</th>
                                            <th>Attendence Mark</th>
                                            <th>Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>Client</td>
                                            <td>08/12/2022</td>
                                            <td><a class="btn btn-primary btn-secondary" href="#">Marked</a></td>
                                            <td><a class="coloured-button" href="../client/details.html">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Vaibhav Patel</td>
                                            <td>Service Provider</td>
                                            <td>02/03/2022</td>
                                            <td><a class="btn btn-primary table-header-options" href="#">Mark</a></td>
                                            <td><a class="coloured-button"
                                                    href="../service-contacts/details.html">Details</a>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End of Activity attendees table-->
                </div>

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