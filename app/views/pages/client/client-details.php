<?php require_once(APP_ROOT.'views/templates/session.php'); ?>
<?php
   $client = $data['client'];
   $createdBy = $data['created_by'];
   $clientAttachments = $data['attachments'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="The Shed, PX2124, Western Sydney University">
   <meta name="author" content="Vaibhav, Bibek, Jack, Reynald">
   <title>The Shed | Client Details</title>
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
               <h1 class="h3 mb-4 text-gray-800">Client Details</h1>
               <!-- Content Row -->
               <div class="row">
                  <!-- Content Column -->
                  <div class="col-lg-12 mb-4">
                     <!-- Details card -->
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary"><?php echo $client->first_name.' '.$client->last_name;?></h6>
                        </div>
                        <div class="card-body">
                           <a class="btn btn-primary table-header-options" href="./#"> Edit</a>
                           <a class="btn btn-outline-primary" href="<?php echo '/client/archive/'.$client->client_id;?>">Delete</a>
                           <div class="row">
                              <div class="table-responsive col-lg-6 mb-4">
                                 <table class="table table-borderless" cellspacing="0">
                                    <tbody>
                                       <tr>
                                          <td class="font-weight-regular">Gender:</td>
                                          <td>
                                             <?php echo $client->gender; ?>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td class="font-weight-regular">Inbound Referal:</td>
                                          <td><?php echo $client->inbound_referral; ?></td>
                                       </tr>
                                       <tr>
                                          <td class="font-weight-regular">AboriginalTorres/Islander</td>
                                          <td><?php echo $client->atsi_status; ?></td>
                                       </tr>
                                       <tr>
                                          <td class="font-weight-regular">Client Challenges:</td>
                                          <td><?php echo $client->challenges; ?></td>
                                       </tr>
                                       <tr>
                                          <td class="font-weight-regular">Date of Birth:</td>
                                          <td><?php echo $client->date_of_birth; ?></td>
                                       </tr>
                                       <tr>
                                          <td class="font-weight-regular">Outbound Referal:</td>
                                          <td><?php echo $client->outbound_referral; ?></td>
                                       </tr>
                                       <tr>
                                          <td class="font-weight-regular">Potential Peer Support:</td>
                                          <td><?php echo $client->potential_peer_support; ?></td>
                                       </tr>
                                       <tr>
                                          <td class="font-weight-regular">Contact Number:</td>
                                          <td><?php echo $client->contact_number; ?></td>
                                       </tr>
                                    </tbody>
                                 </table>
                                 <hr>
                                 <table>
                                    <tr>
                                       <td class="font-weight-regular">Created at:</td>
                                       <td><?php echo $client->created_at; ?></td>
                                    </tr>
                                    <tr style="background-color: white;">
                                       <td class="font-weight-regular">Created By:</td>
                                       <td><?php echo $createdBy; ?></td>
                                    </tr>
                                 </table>
                              </div>
                              <div class="table-responsive col-lg-6 mb-4">
                                 <table class="table table-borderless" cellspacing="0">
                                    <tbody>
                                       <tr>
                                          <td class="font-weight-regular">Case Management:</td>
                                          <td><?php echo $client->case_management_notes; ?></td>
                                       </tr>
                                       <tr>
                                          <td class="font-weight-regular">Attachments:</td>
                                          <td>
                                             <?php
                                                if ($clientAttachments){
                                                   foreach ($clientAttachments as $attachment){
                                                      echo '<a href="/'.$attachment->attachment_url.'">'.$attachment->file_name.'</a> <br /><br />';
                                                   }
                                                }
                                             ?>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--Cultural Planning  -->
               <!-- Content Row -->
               <div class="row">
                  <!-- Content Column -->
                  <div class="col-lg-12 mb-4">
                     <!-- Details card -->
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Cultural Plan</h6>
                        </div>
                        <div class="card-body">
                           <a class="btn btn-primary table-header-options" href="./edit-cultural-plan.html"> Edit</a>
                           <a class="btn btn-outline-primary" href="#"> Delete</a>
                           <div class="row">
                              <div class="table-responsive col-lg-6 mb-4">
                                 <table class="table table-borderless" cellspacing="0">
                                    <tbody>
                                       <tr>
                                          <td class="font-weight-regular">Court:</td>
                                          <td>Federal Circuit Court</td>
                                       </tr>
                                       <tr>
                                          <td class="font-weight-regular">Kinship Relatioship:</td>
                                          <td>Self-Referal</td>
                                       </tr>
                                       <tr>
                                          <td class="font-weight-regular">Child Indigenious Nation:</td>
                                          <td>Australia</td>
                                       </tr>
                                       <tr>
                                          <td class="font-weight-regular">Child Totem:</td>
                                          <td></td>
                                       </tr>
                                    </tbody>
                                 </table>
                                 <hr>
                                 <table>
                                    <tr>
                                       <td class="font-weight-regular">Created By:</td>
                                       <td>Vaibhav Patel</td>
                                    </tr>
                                    <tr style="background-color: white;">
                                       <td class="font-weight-regular">Created Date:</td>
                                       <td>7/14/2021</td>
                                    </tr>
                                 </table>
                              </div>
                              <div class="table-responsive col-lg-6 mb-4">
                                 <table class="table table-borderless" cellspacing="0">
                                    <tbody>
                                       <tr>
                                          <td class="font-weight-regular">Comments:</td>
                                          <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                             do eiusmod tempor incididunt ut labore et dolore magna
                                             aliqua. Quis varius quam quisque id diam vel quam. A
                                             pellentesque sit amet porttitor eget. Gravida quis blandit
                                             turpis
                                             cursus. A arcu cursus vitae congue mauris. Tellus mauris a
                                             diam maecenas sed enim. Ultrices neque ornare aenean euismod
                                             elementum nisi. Amet nisl suscipit adipiscing bibendum est
                                             ultricies integer. Nulla at volutpat diam ut venenatis
                                             tellus
                                             in metus. Semper viverra nam libero justo. Aenean sed
                                             adipiscing diam donec adipiscing. Dictum at tempor commodo
                                             ullamcorper a lacus vestibulum sed.
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <!-- Children -->
                           <div class="card-header py-3">
                              <h6 class="m-0 font-weight-bold text-primary" id="childrenJump">Children</h6>
                           </div>
                           <div class="table-responsive">
                              <table class="table table-bordered" width="100%" cellspacing="0">
                                 <thead>
                                    <tr>
                                       <th>Children Name</th>
                                       <th>Date of Birth</th>
                                       <th>Kinship Relationship</th>
                                       <th>Health Needs</th>
                                       <th>Accessible Health Services</th>
                                       <th></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>John Mackinzy</td>
                                       <td>21/02/2001</td>
                                       <td>Father</td>
                                       <td>Nutritional Diet</td>
                                       <td>Community Health Service</td>
                                       <td><a class="coloured-button" href="edit-child.html">Edit</a><span
                                             class="m-2">|</span><a class="coloured-button" href="#">Delete</a></td>
                                    </tr>
                                    <tr>
                                       <td>David Mackinzy</td>
                                       <td>04/09/2008</td>
                                       <td>Father</td>
                                       <td>Nutritional Diet</td>
                                       <td>Community Health Service</td>
                                       <td><a class="coloured-button" href="edit-child.html">Edit</a><span
                                             class="m-2">|</span><a class="coloured-button" href="#">Delete</a></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <!-- Cultural Plan Ends -->
                     <!-- Service Contact Starts -->
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Service Contact</h6>
                        </div>
                        <div class="card-body">
                           <a class="btn btn-primary table-header-options" href="./add-service.html"> Add
                              New</a>
                           <div class="table-responsive mb-4 mt-2">
                              <table class="table table-bordered" width="100%" cellspacing="0">
                                 <thead>
                                    <tr>
                                       <th>Service</th>
                                       <th>Provider</th>
                                       <th>Last Update</th>
                                       <th>Reported By</th>
                                       <th>Status</th>
                                       <th></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Legal</td>
                                       <td>Druitt Law Firm</td>
                                       <td>24/01/2020</td>
                                       <td>Vaibhav Patel</td>
                                       <td>Completed</td>
                                       <td><a class="coloured-button" href="./current-service-details.html">Details</a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>Finincial</td>
                                       <td>Red Cross</td>
                                       <td>03/05/2021</td>
                                       <td>Bibek Shrestha</td>
                                       <td>Pending</td>
                                       <td><a class="coloured-button" href="#">Details</a></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <!-- End of Service -->
                     <!-- Activities/Incident -->
                     <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                           <!-- Details card -->
                           <div class="card shadow mb-4">
                              <div class="card-header py-3">
                                 <h6 class="m-0 font-weight-bold text-primary">Activities</h6>
                              </div>
                              <div class="card-body">
                                 <div class="row">
                                    <div class="table-responsive col-lg-12 mb-4">
                                       <table class="table table-borderless" cellspacing="0">
                                          <thead>
                                             <tr>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Checked</th>
                                                <th></th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Youth Session</td>
                                                <td>24/08/2021</td>
                                                <td>Yes</td>
                                                <td><a class="coloured-button"
                                                      href="../activities/details.html">Details</a></td>
                                             </tr>
                                             <tr>
                                                <td>BBQ Evening</td>
                                                <td>24/08/2021</td>
                                                <td>Yes</td>
                                                <td><a class="coloured-button"
                                                      href="../activities/details.html">Details</a></td>
                                             </tr>
                                             <tr>
                                                <td>BBQ Evening</td>
                                                <td>04/09/2021</td>
                                                <td>Yes</td>
                                                <td><a class="coloured-button"
                                                      href="../activities/details.html">Details</a></td>
                                             </tr>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Activities End -->
                        <!-- Incident Sub table -->
                        <div class="col-lg-6 mb-4">
                           <!-- Details card -->
                           <div class="card shadow mb-4">
                              <div class="card-header py-3">
                                 <h6 class="m-0 font-weight-bold text-primary">Incidents</h6>
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
                                                <td>Physical Fight</td>
                                                <td>10/07/2021</td>
                                                <td>Yes</td>
                                                <td><a class="coloured-button"
                                                      href="../incidents/details.html">Details</a></td>
                                             </tr>
                                             <tr>
                                                <td>Aggression</td>
                                                <td>10/07/2021</td>
                                                <td>No</td>
                                                <td><a class="coloured-button"
                                                      href="../incidents/details.html">Details</a></td>
                                             </tr>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End of Act/Incidents -->
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

            <!-- todo: front-end: not sure if divs closed off -->
</body>

</html>