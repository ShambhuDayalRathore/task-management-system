<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= esc($title) ?></title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">

    <link id="gull-theme" rel="stylesheet" href="assets/styles/css/themes/lite-purple.min.css">
    <link rel="stylesheet" href="assets/styles/vendor/perfect-scrollbar.css">

</head>


<body class="text-left">

    <!-- Pre Loader Strat  -->
    <div class='loadscreen' id="preloader">

        <div class="loader spinner-bubble spinner-bubble-primary">


        </div>
    </div>
    <!-- Pre Loader end  -->







    <!-- ============ Compact Layout start ============= -->
    <!-- ============Deafult  Large SIdebar Layout start ============= -->


    <div class="app-admin-wrap layout-sidebar-large clearfix">
        <?php include('main-header.php'); ?>
        <!-- header top menu end -->




        <?php include('side-content-wrap.php'); ?>
        <!--=============== Left side End ================-->

        <!-- ============ Body content start ============= -->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Blank Page</h1>
                    <ul>
                        <li><a href="">UI Kits</a></li>
                        <li>Blank Page</li>
                    </ul>

                </div>

                <div class="separator-breadcrumb border-top"></div>


            </div>

            <!-- Footer Start -->

            <!-- fotter end -->
        </div>
        <!-- ============ Body content End ============= -->
    </div>
    <!--=============== End app-admin-wrap ================-->

    <!-- ============ Search UI Start ============= -->
    <!-- ============ Search UI Start ============= -->
    <div class="search-ui">
        <div class="search-header">
            <img src="assets/images/logo.png" alt="" class="logo">
            <button class="search-close btn btn-icon bg-transparent float-right mt-2">
                <i class="i-Close-Window text-22 text-muted"></i>
            </button>
        </div>

        <input type="text" placeholder="Type here" class="search-input" autofocus>

        <div class="search-title">
            <span class="text-muted">Search results</span>
        </div>

        <div class="search-results list-horizontal">
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="assets/images/products/headphone-1.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-danger">Sale</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="assets/images/products/headphone-2.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="assets/images/products/headphone-3.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="assets/images/products/headphone-4.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- PAGINATION CONTROL -->
        <div class="col-md-12 mt-5 text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-inline-flex">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- ============ Search UI End ============= -->
    <!-- ============ Search UI End ============= -->




    <!-- ============ Large Sidebar Layout End ============= -->




    <!-- ============ Customizer ============= -->
    <div class="customizer">
        <div class="handle" (click)="isOpen = !isOpen">
            <i class="i-Gear spin"></i>
        </div>
        <div class="customizer-body" data-perfect-scrollbar data-suppress-scroll-x="true">
            <div class="accordion" id="accordionCustomizer">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <p class="mb-0">
                            Sidebar Layout
                        </p>
                    </div>



                    <div class="card-body">
                        <div class="layouts">

                            <!---->
                            <div class="layout-box mb-4 ">
                                <a href="large-compact-sidebar/dashboard/dashboard1">
                                    <img alt="" src="assets/images/screenshots/02_preview.png" /><i class="i-Eye"></i>
                                </a>
                            </div>
                            <div class="layout-box mb-4 active">
                                <a href="large-sidebar/dashboard/dashboard1">
                                    <img alt="" src="assets/images/screenshots/04_preview.png" /><i class="i-Eye"></i>
                                </a>
                            </div>
                            <div class="layout-box mb-4 ">
                                <a href="horizontal-bar/dashboard/dashboard1">
                                    <img alt="" src="assets/images/screenshots/horizontal.png" /><i class="i-Eye"></i>
                                </a>
                            </div>
                            <div class="layout-box mb-4 mt-30 ">
                                <a href="vertical/dashboard/dashboard1">
                                    <span class="badge badge-danger p-1">New</span>

                                    <img alt="" src="assets/images/screenshots/verticallayout.png" />

                                    <i class="i-Eye"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center pt-3">More layouts coming...</div>
                    </div>
                    <div class="card d-none">
                        <div class="card-header" id="headingOne">
                            <p class="mb-0">
                                Sidebar Colors
                            </p>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionCustomizer">
                            <div class="card-body">
                                <div class="colors sidebar-colors">
                                    <a class="color gradient-purple-indigo" data-sidebar-class="sidebar-gradient-purple-indigo">
                                        <i class="i-Eye"></i>
                                    </a>
                                    <a class="color gradient-black-blue" data-sidebar-class="sidebar-gradient-black-blue">
                                        <i class="i-Eye"></i>
                                    </a>
                                    <a class="color gradient-black-gray" data-sidebar-class="sidebar-gradient-black-gray">
                                        <i class="i-Eye"></i>
                                    </a>
                                    <a class="color gradient-steel-gray" data-sidebar-class="sidebar-gradient-steel-gray">
                                        <i class="i-Eye"></i>
                                    </a>
                                    <a class="color dark-purple active" data-sidebar-class="sidebar-dark-purple">
                                        <i class="i-Eye"></i>
                                    </a>
                                    <a class="color slate-gray" data-sidebar-class="sidebar-slate-gray">
                                        <i class="i-Eye"></i>
                                    </a>
                                    <a class="color midnight-blue" data-sidebar-class="sidebar-midnight-blue">
                                        <i class="i-Eye"></i>
                                    </a>
                                    <a class="color blue" data-sidebar-class="sidebar-blue">
                                        <i class="i-Eye"></i>
                                    </a>
                                    <a class="color indigo" data-sidebar-class="sidebar-indigo">
                                        <i class="i-Eye"></i>
                                    </a>
                                    <a class="color pink" data-sidebar-class="sidebar-pink">
                                        <i class="i-Eye"></i>
                                    </a>
                                    <a class="color red" data-sidebar-class="sidebar-red">
                                        <i class="i-Eye"></i>
                                    </a>
                                    <a class="color purple" data-sidebar-class="sidebar-purple">
                                        <i class="i-Eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <p class="mb-0">
                            RTL
                        </p>
                    </div>

                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionCustomizer">
                        <div class="card-body">
                            <label class="checkbox checkbox-primary">
                                <input type="checkbox" id="rtl-checkbox">
                                <span>Enable RTL</span>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <p class="mb-0">
                            Dark Version
                        </p>
                    </div>

                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionCustomizer">
                        <div class="card-body">
                            <label class="checkbox checkbox-primary">
                                <input type="checkbox" id="dark-checkbox">
                                <span>Enable Dark Mode</span>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- ============ End Customizer ============= -->



    <script src="assets/js/common-bundle-script.js"></script>




    <script src="assets/js/script.js"></script>


    <script src="assets/js/sidebar.large.script.js"></script>




    <script src="assets/js/customizer.script.js"></script>




</body>

</html>