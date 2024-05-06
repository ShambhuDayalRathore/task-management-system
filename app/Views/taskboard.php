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
                                <h4 class="card-title mb-3">List of assign task</h4>
                                <div class="table-responsive">
                                    <div id="alternative_pagination_table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="alternative_pagination_table" class="display table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="alternative_pagination_table_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th>S.No</th>
                                                            <th>Issue type</th>
                                                            <th>Project</th>
                                                            <th>Task Summary</th>
                                                            <th>Priority</th>
                                                            <th>Latest Update</th>
                                                            <th>Due Date</th>
                                                            <th>Status</th>
                                                            <th>Assigned Users</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        if (is_countable($issueDetails) && COUNT($issueDetails) > 0) {
                                                            $i = 1;
                                                            $totData = COUNT($issueDetails);
                                                            foreach ($issueDetails as $key => $val) {
                                                                if ($totData % $i > 0) {
                                                                    $classfor = "even";
                                                                } else {
                                                                    $classfor = "odd";
                                                                }
                                                        ?>
                                                                <tr role="row" class="<?php echo $classfor; ?>">
                                                                    <td class="sorting_1"><?php echo $i; ?></td>
                                                                    <td><?php echo $issueDetails[$key]['issue_name']; ?></td>
                                                                    <td><?php echo $issueDetails[$key]['project_name']; ?></td>
                                                                    <td><?php echo $issueDetails[$key]['summary']; ?></td>
                                                                    <td style="background-color: <?php if ($issueDetails[$key]['priority_id'] == 1 || $issueDetails[$key]['priority_id'] == 2) { ?>#f37c7c;<?php }
                                                                                                                                                                                                        if ($issueDetails[$key]['priority_id'] == 4 || $issueDetails[$key]['priority_id'] == 5) { ?>#efef6c;<?php }
                                                                                                                                                                                                                                                                                                        if ($issueDetails[$key]['priority_id'] == 3) { ?>#bbbbf9fa;<?php } ?>"><?php echo $issueDetails[$key]['priority_name']; ?></td>
                                                                    <td><?php if ($issueDetails[$key]['edit_date'] == '') {
                                                                            echo date("d-M-Y", strtotime($issueDetails[$key]['add_date']));
                                                                        } else {
                                                                            echo date("d-M-Y", strtotime($issueDetails[$key]['edit_date']));
                                                                        } ?></td>
                                                                    <td><?php echo date("d-M-Y", strtotime($issueDetails[$key]['due_date'])); ?></td>
                                                                    <td><?php echo $issueDetails[$key]['status_name']; ?></td>
                                                                    <td><?php echo $issueDetails[$key]['assignee']; ?></td>
                                                                    <td>
                                                                        <button type="button" class="btn bg-transparent _r_btn border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <span class="_dot _r_block-dot bg-dark"></span>
                                                                            <span class="_dot _r_block-dot bg-dark"></span>
                                                                            <span class="_dot _r_block-dot bg-dark"></span>
                                                                        </button>
                                                                        <div class="dropdown-menu" x-placement="bottom-start">
                                                                            <a class="dropdown-item" href="<?php echo base_url(); ?>/edittask/<?php echo base64_encode($issueDetails[$key]['id']); ?>"><i class="nav-icon i-Pen-2 text-success font-weight-bold mr-2"></i>Edit</a>
                                                                            <a class="dropdown-item" href="<?php echo base_url(); ?>/deletetask/<?php echo base64_encode($issueDetails[$key]['id']); ?>" onclick="return confirm('Are you sure?')"><i class="nav-icon i-Close-Window text-danger font-weight-bold mr-2"></i>Delete</a>
                                                                        </div>
                                                                    </td>
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