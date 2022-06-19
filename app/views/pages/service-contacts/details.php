<?php require_once(APP_ROOT.'views/templates/session.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The Shed, PX2124, Western Sydney University">
    <meta name="author" content="Vaibhav, Bibek, Jack, Reynald">

    <title>The Shed | Activity Details</title>
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
                    <h1 class="h3 mb-4 text-gray-800">Service Contact Details</h1>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">
                            <!-- Details card -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Details</h6>
                                </div>
                                <div class="card-body">
                                    <a class="btn btn-primary table-header-options details-button" href="./list.html">
                                        List All</a>
                                    <a class="btn btn-outline-primary table-header-options" href="./add.html"> Add
                                        New</a>
                                    <a class="btn btn-outline-primary table-header-options" href="./edit.html"> Edit</a>
                                    <div class="row">
                                        <div class="table-responsive col-lg-6 mb-4">
                                            <table class="table table-borderless" cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="font-weight-regular">Category:</td>
                                                        <td>Mental Health</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-regular">Service Providing Since:</td>
                                                        <td>15/07/2019</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-regular">Phone Number:</td>
                                                        <td>9842664621</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-regular">Email Address:</td>
                                                        <td>xyz@gmail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-regular">Location:</td>
                                                        <td>Sydney</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>
                                            <table>
                                                <tr>
                                                    <td class="font-weight-regular">Updated By:</td>
                                                    <td>Vaibhav Patel</td>
                                                </tr>
                                                <tr style="background-color: white;">
                                                    <td class="font-weight-regular">Updated On:</td>
                                                    <td>7/14/2021</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="table-responsive col-lg-6 mb-4">
                                            <table class="table table-borderless" cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="font-weight-regular">Currently Active:</td>
                                                        <td>Yes</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-regular">Total Services Provided:</td>
                                                        <td>Sydney</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-regular">Additional Notes:</td>
                                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                            do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua. Quis varius quam quisque id diam vel quam. A
                                                            pellentesque sit amet porttitor eget. Gravida quis blandit
                                                            turpis
                                                            cursus. A arcu cursus vitae congue mauris. Tellus mauris a
                                                           
                                                    <tr>
                                                        <td class="font-weight-regular">Attachments:</td>
                                                        <td>Agreement.doc, rules.pdf, legal01.pdf</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                            <!-- Details card -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Service Contact Client</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="table-responsive col-lg-12 mb-4">
                                            <table class="table table-borderless" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Date</th>
                                                        <th>Resolved</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>John Doe</td>
                                                        <td>10/07/2012</td>
                                                        <td>No</td>
                                                        <td><a class="coloured-button"
                                                                href="../client/details.html">Details</a>
                                                        </td>
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>John Doe</td>
                                                        <td>10/07/2012</td>
                                                        <td>No</td>
                                                        <td><a class="coloured-button" href="../client/details.html">Details</a>
                                                        </td>
                                                    
                                                    </tr>
                                                    <tr>
                                                        <td>John Doe</td>
                                                        <td>10/07/2012</td>
                                                        <td>No</td>
                                                        <td><a class="coloured-button" href="../client/details.html">Details</a>
                                                        </td>
                                                    
                                                    </tr>
                                                    
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <!-- Details card -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Activities</h6>
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="table-responsive col-lg-12 mb-4">
                                            <table class="table table-borderless" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Date</th>
                                                        <th>Attended</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Youth seminar</td>
                                                        <td>10/07/2012</td>
                                                        <td>No</td>
                                                        <td><a class="coloured-button" href="../client/details.html">Details</a>
                                                        </td>
                                    
                                                    </tr>
                                                    <tr>
                                                        <td>BBQ</td>
                                                        <td>10/07/2012</td>
                                                        <td>No</td>
                                                        <td><a class="coloured-button" href="../client/details.html">Details</a>
                                                        </td>
                                    
                                                    </tr>
                                                    <tr>
                                                        <td>Gardening</td>
                                                        <td>10/07/2012</td>
                                                        <td>No</td>
                                                        <td><a class="coloured-button" href="../client/details.html">Details</a>
                                                        </td>
                                    
                                                    </tr>
                                    
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
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