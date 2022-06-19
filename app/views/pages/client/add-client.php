<?php require_once(APP_ROOT.'views/templates/session.php'); ?>

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
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
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
                                <h1 class="h3 mb-2 text-gray-800">Add Client</h1>
                            </div>
                            <div class="col-md-12 form-column">
                                <div class="card-header py-3 inline">
                                    <a class="btn btn-primary table-header-options" href="listAll"> List
                                        All</a>
                                </div>
                                <div class="card-body ">
                                    <form action="<?php echo '/client/addClient/'.$staff['staff_id']?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="fname">First Name</label>
                                                <input type="fname" class="form-control" id="fname"
                                                    placeholder="First Name" name="first_name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Last Name</label>
                                                <input type="lname" class="form-control" id="lname"
                                                    placeholder="Last Name" name="last_name">
                                            </div>
                                        </div>
                                        <!-- checkbox -->
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="">Gender</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="male"
                                                        name="gender" value="Male" checked>
                                                    <label class="form-check-label" for="">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="female"
                                                        name="gender" value="Female">
                                                    <label class="form-check-label" for="">Female</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="other"
                                                        name="gender" value="Other">
                                                    <label class="form-check-label" for="">Other</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="unspecified"
                                                        name="gender" value="Unspecified">
                                                    <label class="form-check-label" for="">Unspecified</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Inbound Referral</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="inboundSelf"
                                                        name="inbound_referral" value="Self Referral" checked>
                                                    <label class="form-check-label" for="Self">Self Referral</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="inboundAgency"
                                                        name="inbound_referral" value="Agency">
                                                    <label class="form-check-label" for="Agency">Agency Referral</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- checkbox ends -->
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="type">Aboriginal/Torres Islander</label>
                                                <select class="custom-select" id="aboriginalTorres" name="atsi_status[]">
                                                    <option selected>Choose...</option>
                                                    <option value="Aboriginal" id="aborignal">Yes - Aboriginal</option>
                                                    <option value="Torres Strait Islander" id="torresIslander">Yes - Torres Strait Islander</option>
                                                    <option value="Not Aboriginal or Torres Strait Islander" id="none">Not Aboriginal or Torres Strait Islander
                                                    </option>
                                                    <option value="Prefer Not To Say " id="nottoSay">Prefer Not To Say</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="dateofBirth">Date of Birth</label>
                                                <input type="date" class="form-control" id="" placeholder="" name="date_of_birth">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="contact">Contact Number</label>
                                                <input type="text" class="form-control" id="contact" placeholder="" name="contact_number">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Potential Peer Support</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="potential_peer_support" id="inlineRadio" value="Yes" checked>
                                                    <label class="form-check-label" for="">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="potential_peer_support" id="inlineRadio" value="No">
                                                    <label class="form-check-label" for="">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- checkbox -->
                                        <div class="form-group">
                                            <label for="challenges">Client Challenges</label><br>
                                            <select class="custom-select" name="challenges[]" multiple>
                                                <option value="Housing,">Housing</option>
                                                <option value="Legal,">Legal</option>
                                                <option value="Substance Abuse,">Substance Abuse</option>
                                                <option value="Financial Stress,">Financial Stress</option>
                                                <option value="Disability Support,">Disability Support</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        <!-- checkbox ends -->
                                        <div class="form-group">
                                            <label for="otherSpecify">If Other Please Specify</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="challenges[]">
                                        </div>
                                        <div class="form-group">
                                            <label for="outboundRef">Outbound Referal</label>
                                            <input type="text" class="form-control" id="outboundRef" placeholder="" name="outbound_referral">
                                        </div>
                                        <div class="form-group">
                                            <label for="casemgmt">Case Management Notes</label>
                                            <textarea class="form-control" id="casmMgmt" rows="3" name="case_management_notes"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="clientOutcomes">Client Outcomes</label>
                                            <textarea class="form-control" id="caseOutcomes" rows="3" name="client_outcomes"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="attachment">Attachment</label>
                                            <input type="file" class="form-control attachment" id="attachment" name="files[]"
                                                multiple />
                                        </div>
                                        <!-- Add Cultural Plan -->
                                        <div class="form-group">
                                            <button class="btn btn-primary mb-4" type="button" data-toggle="collapse"
                                                data-target="#collapseExample" aria-expanded="false"
                                                aria-controls="collapseExample">
                                                Add Cultural Plan
                                            </button>
                                            <div class="collapse" id="collapseExample">
                                                <div class="card card-body">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="court">Court</label>
                                                            <input type="text" class="form-control" id="court">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="kinship">Kinship Relationship</label>
                                                            <input type="text" class="form-control" id="kinship">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="indNation">Child/Children Indegenous
                                                                Nation</label>
                                                            <input type="text" class="form-control" id="indNation">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="indNation">Child/Children Totem</label>
                                                            <input type="text" class="form-control" id="indNation">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <!-- Add-Child -->
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="cName">Child Name</label>
                                                            <input type="text" class="form-control" id="cName">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="cDob">Date of Birth</label>
                                                            <input type="date" class="form-control" id="cDob">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="familyRes">Family Member Responsible</label>
                                                            <input type="text" class="form-control" id="familyRes">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="healthNeeds">Health Needs</label>
                                                            <input type="text" class="form-control" id="healthNeeds">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="accHealth">Accissible Health Service</label>
                                                            <input type="text" class="form-control" id="accHealth">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" value="Add-Child" class="btn btn-primary">
                                                    </div>
                                                    <hr>
                                                    <!-- Additional Details -->
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="challenge">Cultural Plan</label>
                                                            <input type="text" class="form-control" id="challenge">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="comments">Comments</label>
                                                        <textarea class="form-control" id="caseOutcomes"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of cultural plan -->
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