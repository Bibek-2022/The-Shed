<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The Shed, PX2124, Western Sydney University">
    <meta name="author" content="Vaibhav, Bibek, Jack, Reynald">

    <title>The Shed | Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo RES_PATH.'css/main.css'?>" rel="stylesheet">

    <style>
        div {
            padding: 2.5px;
        }
    </style>
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
                                <h1 class="h3 mb-2 text-gray-800">Add Client</h1>
                            </div>
                            <div class="col-md-12 form-column">
                                <div class="card-header py-3 inline">
                                    <a class="btn btn-primary table-header-options" href="../client/list-all.html"> List
                                        All</a>
                                </div>
                                <div class="card-body ">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="fname">First Name</label>
                                                <input type="fname" class="form-control" id="fname"
                                                    placeholder="First Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="lname">Last Name</label>
                                                <input type="lname" class="form-control" id="lname"
                                                    placeholder="Last Name">
                                            </div>
                                        </div>

                                        <!-- checkbox -->
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="">Gender</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="male"
                                                        name="inlineRadioOptions" value="Male" checked>
                                                    <label class="form-check-label" for="">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="female"
                                                        name="inlineRadioOptions" value="Female">
                                                    <label class="form-check-label" for="">Female</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="other"
                                                        name="inlineRadioOptions" value="Other">
                                                    <label class="form-check-label" for="">Other</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="unspecified"
                                                        name="inlineRadioOptions" value="Unspecified">
                                                    <label class="form-check-label" for="">Unspecified</label>
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Inbound Referal</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="inboundSelf"
                                                        name="inlineRadioOptions1" value="Self">
                                                    <label class="form-check-label" for="Self">Self Referal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="inboundAgency"
                                                        name="inlineRadioOptions1" value="Agency">
                                                    <label class="form-check-label" for="Agency">Agency Referal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- checkbox ends -->

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="type">Aboriginal/Torres Islander</label>
                                                <select class="custom-select" id="aboriginalTorres">
                                                    <option selected>Choose...</option>
                                                    <option value="aboroginal" id="aborignal">Yes-Aboriginal</option>
                                                    <option value="torresIslander" id="torresIslander">Yes-Torres
                                                        Islander</option>
                                                    <option value="none" id="none">No-Not Aboriginal/Torres Islander
                                                    </option>
                                                    <option value="nottoSay" id="nottoSay">Prefer Not to say</option>


                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="dateofBirth">Date of Birth</label>
                                                <input type="date" class="form-control" id="" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="contact">Contact Number</label>
                                                <input type="text" class="form-control" id="contact" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Potential Peer Support</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions2" id="inlineRadio" value="" checked>
                                                    <label class="form-check-label" for="">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions2" id="inlineRadio" value="">
                                                    <label class="form-check-label" for="">No</label>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- checkbox -->

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="challenges">Client Challenges</label>
                                                <select class="custom-select" multiple id="myMulti">
                                                    <option selected>Choose...</option>
                                                    <option>Housing</option>
                                                    <option>Legal</option>
                                                    <option>Substance Abuse</option>
                                                    <option>Finincial Stress</option>
                                                    <option>Disability Support</option>
                                                    <option>Other</option>

                                                </select>
                                            </div>

                                        </div>



                                        <!-- checkbox ends -->



                                        <div class="form-group">
                                            <label for="otherSpecify">If Other Please Specify</label>
                                            <input type="text" class="form-control" id="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="outboundRef">Outbound Referal</label>
                                            <input type="text" class="form-control" id="outboundRef" placeholder="">
                                        </div>


                                        <div class="form-group">
                                            <label for="casemgmt">Case Management Notes</label>
                                            <textarea class="form-control" id="casmMgmt" rows="3"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="clientOutcomes">Client Outcomes</label>
                                            <textarea class="form-control" id="caseOutcomes" rows="3"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="attachment">Attachment</label>
                                            <input type="file" class="form-control attachment" id="attachment"
                                                multiple />
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
    </div>

</body>

</html>