<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="3LSP8zGVs7bzyGUs7cGUj7xxaeu9TcHeGkBiryVK">
    <title><?= esc($title) ?></title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">

    <link id="gull-theme" rel="stylesheet" href="assets/styles/css/themes/lite-purple.min.css">
    <link rel="stylesheet" href="assets/styles/vendor/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/styles/vendor/datatables.min.css">
    <link rel="stylesheet" href="assets/styles/vendor/toastr.css">
</head>


<body class="text-left">

    <!-- Pre Loader Strat  -->
    <div class='loadscreen' id="preloader">

        <div class="loader spinner-bubble spinner-bubble-primary">


        </div>
    </div>

    <div class="app-admin-wrap layout-sidebar-large clearfix">
        <?php include('layouts/main-header.php'); ?>
        <!-- header top menu end -->
        <?php include('layouts/side-content-wrap.php'); ?>
        <!--=============== Left side End ================-->

        <!-- ============ Body content start ============= -->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <div class="main-content">
                <!-- end of row -->
                <div class="row mb-4">
                    <div class="col-md-12 mb-4">
                        <div class="card text-left">

                            <div class="card-body">
                                <h4 class="card-title mb-3">User list</h4>
                                <div class="table-responsive">
                                    <div id="alternative_pagination_table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="alternative_pagination_table" class="display table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="alternative_pagination_table_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th>S.No</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Mobile</th>
                                                            <th>Role</th>
                                                            <th>Add Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        if (is_countable($userDetails) && COUNT($userDetails) > 0) {
                                                            $i = 1;
                                                            $totData = COUNT($userDetails);
                                                            foreach ($userDetails as $key => $val) {
                                                                if ($totData % $i > 0) {
                                                                    $classfor = "even";
                                                                } else {
                                                                    $classfor = "odd";
                                                                }
                                                        ?>
                                                                <tr role="row" class="<?php echo $classfor; ?>">
                                                                    <td class="sorting_1"><?php echo $i; ?></td>
                                                                    <td><?php echo $userDetails[$key]['fname'] . " " . $userDetails[$key]['mname'] . " " . $userDetails[$key]['lname']; ?></td>
                                                                    <td><?php echo $userDetails[$key]['email']; ?></td>
                                                                    <td><?php echo $userDetails[$key]['mobile']; ?></td>
                                                                    <td><?php echo $userDetails[$key]['role_name']; ?></td>
                                                                    <td><?php if ($userDetails[$key]['edit_date'] == '') {
                                                                            echo date("d-M-Y", strtotime($userDetails[$key]['add_date']));
                                                                        } else {
                                                                            echo date("d-M-Y", strtotime($userDetails[$key]['edit_date']));
                                                                        } ?></td>
                                                                </tr>
                                                        <?php
                                                                $i++;
                                                            }
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
        </div>
        <!-- ============ Body content End ============= -->
    </div>
    <!--=============== End app-admin-wrap ================-->
    <script src="assets/js/common-bundle-script.js"></script>
    <script src="assets/js/vendor/datatables.min.js"></script>
    <script src="assets/js/datatables.script.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/sidebar.large.script.js"></script>
    <script src="assets/js/customizer.script.js"></script>
    <script src="assets/js/vendor/toastr.min.js"></script>
    <script src="assets/js/toastr.script.js"></script>
</body>

</html>