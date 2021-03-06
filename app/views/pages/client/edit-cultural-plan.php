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
    <link href="../../css/main.css" rel="stylesheet">

    <style>
        div {
            padding: 2.5px;
        }
    </style>
</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary sidebar sidebar-items" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text">The Shed</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="../../index.html">
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <span>Client</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">List all</a>
                        <a class="collapse-item" href="#">Add new</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>Activity</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="list-all.html">List all</a>
                        <a class="collapse-item" href="list-today.html">Activities today</a>
                        <a class="collapse-item" href="add.html">Add new</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <span>Service Contacts</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">List all</a>
                        <a class="collapse-item" href="#">Add new</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    <span>Incidents</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">List all</a>
                        <a class="collapse-item" href="#">Add new</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
                    aria-expanded="true" aria-controls="collapseFive">
                    <span>Network/Partners</span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">List all</a>
                        <a class="collapse-item" href="#">Add new</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix"
                    aria-expanded="true" aria-controls="collapseSix">
                    <span>Settings</span>
                </a>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">General Settings</a>
                        <a class="collapse-item" href="#">Resources</a>
                        <a class="collapse-item" href="#">Help Centre</a>
                    </div>
                </div>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="hamburger-icon"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="search-icon"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline font-weight-medium font-purple">Vaibhav
                                    Patel</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="login.html" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600">Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <div class="container">
                    <div class="row d-flex justify-content-center add-new-form-wrapper">
                        <div
                            class="col-xl-10 col-lg-12 col-md-9col-sm-offset-2 border rounded border-4 shadow form-add-title-wrapper">
                            <div class="col-sm-12 form-legend text-center">
                                <h1 class="h3 mb-2 text-gray-800">Edit Cultural Plan</h1>
                            </div>
                            <div class="col-md-12 form-column">
                                <!-- <div class="card-header py-3 inline">
                                    <a class="btn btn-primary table-header-options"
                                        href="../client/client-details.html#childrenJump"> List
                                        All</a>
                                </div> -->
                                <div class="card-body ">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="fName">First Name</label>
                                                <input type="text" class="form-control" id="fName">
                                            </div>
                                        
                                            <div class="form-group col-md-6">
                                                <label for="lName">Last Name</label>
                                                <input type="text" class="form-control" id="lName">
                                            </div>
                                            
                                        </div>

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
                                                <label for="indegenousNation">Child/Children Indegenous Nation</label>
                                                <input type="text" class="form-control" id="indegenousNation">
                                            </div>
                                        
                                            <div class="form-group col-md-6">
                                                <label for="totem">Child/Children Totem</label>
                                                <input type="text" class="form-control" id="totem">
                                            </div>
                                        
                                        </div>
                                        <hr>
                                <!-- child Details -->
                                        <div class="col-sm-12 form-legend">
                                            <h1 class="h4 mb-2 text-gray-800" style="margin-left: -10px;">Child Details</h1>
                                        </div>
                                        
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="cName">Child Name</label>
                                                <input type="text" class="form-control" id="cName">
                                            </div>
                                        
                                            <div class="form-group col-md-6">
                                                <label for="cdob">Date of Birth</label>
                                                <input type="date" class="form-control" id="cdob">
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

                                        <!-- Additional Details -->
                                        <div class="col-sm-12 form-legend">
                                            <h1 class="h4 mb-2 text-gray-800" style="margin-left: -10px;">Challenges</h1>
                                        </div>
                                        
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="challenge">Challenges</label>
                                                <input type="text" class="form-control" id="challenge">
                                            </div>
                                        
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="comments">Comments</label>
                                            <textarea class="form-control" id="caseOutcomes" rows="3"></textarea>
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
        <script src="../../js/jquery/jquery.min.js"></script>
        <script src="../../js/jquery/jquery.easing.min.js"></script>
        <script src="../../js/bootstrap/bootstrap.bundle.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../../js/main.js"></script>

</body>

</html>