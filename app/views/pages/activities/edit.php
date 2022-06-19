<?php require_once(APP_ROOT.'views/templates/session.php'); ?>
<?php
    $activity = $data[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The Shed, PX2124, Western Sydney University">
    <meta name="author" content="Vaibhav, Bibek, Jack, Reynald">

    <title>The Shed | Edit Activity</title>
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
                                <h1 class="h3 mb-2 text-gray-800">Edit Activity</h1>
                            </div>
                            <div class="col-md-12 form-column">
                                <div class="card-header py-3 inline">
                                    <a class="btn btn-primary table-header-options" href="#"> Go Back</a>
                                    <a class="btn btn-primary table-header-options" href="/activity/listAll"> List All</a>
                                    <a class="btn btn-outline-primary table-header-options" href="/activity/add">
                                        Add Today</a>
                                </div>
                                <div class="card-body ">
                                    <form action="<?php echo '/activity/updateActivity/'.$activity->activity_id;?>" method="POST">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="fname">Activity Name</label>
                                                <input type="fname" class="form-control" id="aName"
                                                    placeholder="Activity Name" value="<?php echo $activity->activity_name?>" name="activity_name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Activity Type</label>
                                                <input type="lname" class="form-control" id="aType"
                                                    placeholder="Activity Type" value="<?php echo $activity->activity_type?>" name="activity_type">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="type">Category</label>
                                                <select class="custom-select" id="inlineFormCustomSelectPref" name="activity_category[]">
                                                    <option value="Lorem Ipsum">Lorem Ipsum1</option>
                                                    <option value="Lorem Ipsum">Lorem Ipsum2</option>
                                                    <option value="Lorem Ipsum">Lorem Ipsum3</option>
                                                    <option value="Lorem Ipsum">Lorem Ipsum4</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="dateofBirth">Activity Date</label>
                                                <input type="date" class="form-control" id="aDate"
                                                    placeholder="Activity Date" value="07/05/2021" name="activity_date">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="referal1">Start Time</label>
                                                <input type="time" class="form-control" id="sTime"
                                                    placeholder="Start Time" value="09:00" name="activity_start">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="referal1">End Time</label>
                                                <input type="time" class="form-control" id="sTime"
                                                    placeholder="End Time" value="10:30" name="activity_end">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="casemgmt">Comments / Notes</label>
                                            <textarea class="form-control" id="" rows="3" name="activity_comments"><?php echo $activity->activity_comments?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" value="Update" class="btn btn-primary">
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