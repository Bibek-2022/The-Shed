<?php require_once(APP_ROOT.'views/templates/session.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The Shed, PX2124, Western Sydney University">
    <meta name="author" content="Vaibhav, Bibek, Jack, Reynald">

    <title>The Shed | List Client</title>
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
                    <?php if($data['clientList']) : ?>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">All Clients</h1>

                    <?php
                        if (isset($data['response'])){
                            if ($data['response'] === 'archive_success')
                                echo '<p>Successfully archived the record.</p>';
                        }
                    ?>

                    <!-- Activities today table-->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 inline">
                            <a class="btn btn-outline-primary table-header-options" href="/client/add"> Add New</a>
                            <input type="text" placeholder="Search table.." title="Search..."
                                class="form-control bg-light border-1 small table-header-search tableSearchInput">
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Client Since</th>
                                            <th>Currently Providing Service</th>
                                            <th>Contact Number</th>
                                            <th>Last Visit</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $clients = $data['clientList'];
                                            
                                            foreach($clients as $client){
                                                echo '<tr>';
                                                echo '<td>'.$client->first_name.' '.$client->last_name.'</td>';
                                                $datetime = DateTime::createFromFormat ( "Y-m-d H:i:s", $client->created_at );
                                                echo '<td>'.$datetime->format('d/m/Y').'</td>';
                                                echo '<td>'.$client->challenges.'</td>';// current service/s eg Housing
                                                echo '<td>'.$client->contact_number.'</td>';//contact number
                                                echo '<td></td>';//last visit eg 10 days
                                                echo '<td><a href="/client/details/'.$client->client_id.'">Details</a></td>';//client details page
                                                echo '</tr>';
                                            }
                                        ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                    <!-- todo: front-end: you can make this look much better than I ever can :) -->
                        <h1 class="h3 mb-4 text-gray-800">No Client Records Found</h1>
                    <?php endif; ?>
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
    </div>
</body>

</html>