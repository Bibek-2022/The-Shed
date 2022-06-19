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
                
                <div class="container">
                    <div class="row d-flex justify-content-center add-new-form-wrapper">
                        <div
                            class="col-xl-10 col-lg-12 col-md-9col-sm-offset-2 border rounded border-4 shadow form-add-title-wrapper">
                            <div class="col-sm-12 form-legend text-center">
                                <h1 class="h3 mb-2 text-gray-800">Add New Activity</h1>
                            </div>
                            <div class="col-md-12 form-column">
                                <div class="card-header py-3 inline">
                                    <a class="btn btn-primary table-header-options" href="listAll"> List All</a>
                                    <a class="btn btn-outline-primary table-header-options" href="/activity/today">
                                        Add Today</a>
                                </div>
                                <div class="card-body ">
                                    <form action="/activity/createActivity" method="POST">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Activity Name</label>
                                                <input type="text" class="form-control" id="activity_name" class="activity_name" name="activity_name" value="Health session">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Activity Type</label>
                                                <input type="text" class="form-control" id="activity_type" class="activity_type" name="activity_type" value="Mental Health" />
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Category</label>
                                                <select class="custom-select" id="inlineFormCustomSelectPref" class="category" name="activity_category[]">
                                                    <option value="Lorem Ipsum" selected>Lorem Ipsum</option>
                                                    <option value="Lorem Ipsum1">Lorem Ipsum1</option>
                                                    <option value="Lorem Ipsum2">Lorem Ipsum2</option>
                                                    <option value="Lorem Ipsum3">Lorem Ipsum3</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Activity Date</label>
                                                <input type="date" class="form-control" id="activity_date" name="activity_date" class="activity_date"
                                                    placeholder="Activity Date" value="22-07-2022">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label>Start Time</label>
                                                <input type="time" class="form-control" id="start_time" class="activity_start_time" name="activity_start"
                                                    placeholder="Start Time">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>End Time</label>
                                                <input type="time" class="form-control" id="end_time" class="end_time" name="activity_end"
                                                    placeholder="End Time">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Activity Notes</label>
                                            <textarea class="form-control" id="activity_comments" class="activity_comments" name="activity_comments" rows="3"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" value="Create" class="btn btn-primary">
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