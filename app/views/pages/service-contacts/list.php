<?php require_once(APP_ROOT.'views/templates/session.php'); ?>
<?php
    $allContacts = $data['contactList'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The Shed, PX2124, Western Sydney University">
    <meta name="author" content="Vaibhav, Bibek, Jack, Reynald">

    <title>The Shed | All Service Contacts</title>
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
                    <h1 class="h3 mb-4 text-gray-800">Service Contact</h1>

                    <!-- Activities today table-->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 inline">
                            <a class="btn btn-outline-primary table-header-options" href="/servicecontact/add"> Add New</a>
                            <input type="text" placeholder="Search table.." title="Search..."
                                class="form-control bg-light border-1 small table-header-search tableSearchInput">
                        </div>

                        <div class="card-body">
                            <?php if($data['contactList']): ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Service Provided</th>
                                            <th>Added By</th>
                                            <th>Active</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php
                                            foreach ($allContacts as $contact){
                                                echo '<tr>';
                                                echo '<td>'.$contact->service_name.'</td>';
                                                echo '<td>'.$contact->service_category.'</td>';
                                                echo '<td>'.'XYZXYZ'.'</td>';
                                                echo '<td>'.'added by staff member XYZ'.'</td>';
                                                echo '<td>'.$contact->currently_active.'</td>';
                                                echo '<td><a href="/servicecontact/details/'.$contact->contact_id.'">Details</a></td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php else: ?>
                                <h2>No Service Contacts to Show</h2>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- End of Activities today table-->
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
        <script src="<?php echo RES_PATH.'js/jquery/jquery.min.js'?>"></script>
        <script src="<?php echo RES_PATH.'js/jquery/jquery.easing.min.js'?>"></script>
        <script src="<?php echo RES_PATH.'js/bootstrap/bootstrap.bundle.min.js'?>"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo RES_PATH.'js/main.js'?>"></script>

</body>

</html>