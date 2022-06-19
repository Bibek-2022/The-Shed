<?php require_once(APP_ROOT.'views/templates/session.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The Shed, PX2124, Western Sydney University">
    <meta name="author" content="Vaibhav, Bibek, Jack, Reynald">

    <title>The Shed | Add Service Contact</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo RES_PATH.'css/main.css'?>" rel="stylesheet">
</head>

<body>

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

                <div class="container">
                    <div class="row d-flex justify-content-center add-new-form-wrapper">
                        <div
                            class="col-xl-10 col-lg-12 col-md-9col-sm-offset-2 border rounded border-4 shadow form-add-title-wrapper">
                            <div class="col-sm-12 form-legend text-center">
                                <h1 class="h3 mb-2 text-gray-800">Add Service Contact</h1>
                            </div>
                            <div class="col-md-12 form-column">
                                <div class="card-header py-3 inline">
                                    <a class="btn btn-primary table-header-options" href="/servicecontact/listAll"> List
                                        All</a>
                                </div>
                                <div class="card-body ">
                                    <form action="/servicecontact/createServiceContact" method="POST">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" id="title" name="service_title">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="serviceName">Service Name</label>
                                                <input type="text" class="form-control" id="serviceName" name="service_name">
                                            </div>
                                        </div>

                                        <!-- checkbox -->
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="">Currently Active</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="yes" name="currently_active" value="Yes" checked>
                                                    <label class="form-check-label" for="">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="no" name="currently_active" value="No">
                                                    <label class="form-check-label" for="">No</label>
                                                </div>
                                                
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="serviceSince">Service Providing Since</label>
                                                <input type="date" class="form-control" id="serviceSince" name="providing_since">
                                            </div>
                                           
                                        </div>
                                        <!-- checkbox ends -->

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="phone">Phone Number</label>
                                                <input type="number" class="form-control" id="phone" name="contact_number">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="email">Email Address</label>
                                                <input type="email" class="form-control" id="email" name="email_address">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="adress">Address</label>
                                                <input type="text" class="form-control" id="address" name="physical_address">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="serviceSince">Service Provding Since (??)</label>
                                                <input type="date" class="form-control" id="serviceSince">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="challenges">Service Category</label>
                                                <select class="custom-select" multiple id="myMulti" name="service_category[]">
                                                    <option value="Housing">Housing</option>
                                                    <option value="Legal">Legal</option>
                                                    <option value="Substance Abuse">Substance Abuse</option>
                                                    <option value="Financial Stress">Finincial Stress</option>
                                                    <option value="Disability Support">Disability Support</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>

                                        </div>

                                        <!-- checkbox ends -->

                                        <div class="form-group">
                                            <label for="otherSpecify">If Other Please Specify</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="service_category[]">
                                        </div>
                                        


                                        <div class="form-group">
                                            <label for="casemgmt">Partnership Notes</label>
                                            <textarea class="form-control" id="partner" rows="3" name="partnership_notes"></textarea>
                                        </div>
   
                                        <div class="form-group">
                                            <label class="form-label" for="attachment">Attachment</label>
                                            <input type="file" class="form-control attachment" id="attachment" name="files[]" multiple />
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" value="Submit" class="btn btn-primary">
                                        </div>
                                    </form>
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