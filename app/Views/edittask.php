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

    <link id="gull-theme" rel="stylesheet" href="<?php echo base_url(); ?>/assets/styles/css/themes/lite-purple.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/styles/vendor/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/styles/vendor/datatables.min.css">
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title"><?php echo $pageTitle; ?></div>
                                <form method="post" action="<?php echo base_url(); ?>/TaskBoardController/update" class="needs-validation" novalidate="">
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip01">Project</label>
                                            <input type="hidden" name="editid" value="<?php echo $issueDetailsById['id']; ?>" />
                                            <select class="form-control" id="validationTooltip01" name="project_id" required>
                                                <option value="">Select Project</option>
                                                <?php if (is_countable($projectDetails) && COUNT($projectDetails) > 0) {
                                                    foreach ($projectDetails as $key => $val) {
                                                ?>
                                                        <option <?php if ($issueDetailsById['project_id'] == $projectDetails[$key]['id']) { ?> selected <?php } ?> value="<?php echo $projectDetails[$key]['id']; ?>"><?php echo $projectDetails[$key]['project_name']; ?></option>
                                                <?php
                                                    }
                                                } ?>

                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip01">Issue type</label>
                                            <select class="form-control" id="validationTooltip01" name="issuetype_id" required>
                                                <option value="">Select Issue type</option>
                                                <?php if (is_countable($issueTypeDetails) && COUNT($issueTypeDetails) > 0) {
                                                    foreach ($issueTypeDetails as $key => $val) {
                                                ?>
                                                        <option <?php if ($issueDetailsById['issuetype_id'] == $issueTypeDetails[$key]['id']) { ?> selected <?php } ?> value="<?php echo $issueTypeDetails[$key]['id']; ?>"><?php echo $issueTypeDetails[$key]['issue_name']; ?></option>
                                                <?php
                                                    }
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip02">Status</label>
                                            <select class="form-control" id="validationTooltip01" name="issuestatus_id" required>
                                                <?php if (is_countable($issueStatusDetails) && COUNT($issueStatusDetails) > 0) {
                                                    foreach ($issueStatusDetails as $key => $val) {

                                                ?>
                                                        <option <?php if ($issueDetailsById['issuestatus_id'] == $issueStatusDetails[$key]['id']) { ?> selected <?php } ?> value="<?php echo $issueStatusDetails[$key]['id']; ?>"><?php echo $issueStatusDetails[$key]['status_name']; ?></option>
                                                <?php

                                                    }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-6">
                                            <label for="validationTooltip03">Summary</label>
                                            <input type="text" class="form-control" id="validationTooltip03" placeholder="Summary" required="" value="<?php echo $issueDetailsById['summary']; ?>" name="summary">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-6">
                                            <label for="validationTooltip03">Description</label>
                                            <textarea class="form-control" id="validationTooltip03" placeholder="description" name="description" required=""><?php echo $issueDetailsById['description']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip04">Task Points</label>
                                            <input type="number" class="form-control" id="validationTooltip04" placeholder="Task Points" required="" value="<?php echo $issueDetailsById['points']; ?>" name="points">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip05">Reporter</label>
                                            <select class="form-control" id="validationTooltip01" name="reporter" required>
                                                <option value="">Select Reporter</option>
                                                <?php if (is_countable($userDetails) && COUNT($userDetails) > 0) {
                                                    foreach ($userDetails as $key => $val) {
                                                        if ($session->get('userRoleId') == 1 || $session->get('userRoleId') == 2) {
                                                ?>
                                                            <option <?php if ($issueDetailsById['reporter'] == $userDetails[$key]['id']) { ?> selected <?php } ?> value="<?php echo $userDetails[$key]['id']; ?>"><?php echo $userDetails[$key]['fname'], " " . $userDetails[$key]['mname'] . " " . $userDetails[$key]['lname']; ?></option>
                                                            <?php
                                                        } else {
                                                            if ($issueDetailsById['reporter'] == $userDetails[$key]['id']) {
                                                            ?>
                                                                <option <?php if ($issueDetailsById['reporter'] == $userDetails[$key]['id']) { ?> selected <?php } ?> value="<?php echo $userDetails[$key]['id']; ?>"><?php echo $userDetails[$key]['fname'], " " . $userDetails[$key]['mname'] . " " . $userDetails[$key]['lname']; ?></option>
                                                <?php
                                                            }
                                                        }
                                                    }
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip05">Assignee</label>
                                            <select class="form-control" id="validationTooltip01" name="assignee" required>
                                                <option value="">Select Assignee</option>
                                                <?php if (is_countable($userDetails) && COUNT($userDetails) > 0) {
                                                    foreach ($userDetails as $key => $val) {
                                                ?>
                                                        <option <?php if ($issueDetailsById['assignee'] == $userDetails[$key]['id']) { ?> selected <?php } ?> value="<?php echo $userDetails[$key]['id']; ?>"><?php echo $userDetails[$key]['fname'], " " . $userDetails[$key]['mname'] . " " . $userDetails[$key]['lname']; ?></option>
                                                <?php
                                                    }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip04">Priority</label>
                                            <select class="form-control" id="validationTooltip01" name="priority" required>
                                                <option value="">Select Assignee</option>
                                                <?php if (is_countable($priorityDetails) && COUNT($priorityDetails) > 0) {
                                                    foreach ($priorityDetails as $key => $val) {
                                                ?>
                                                        <option <?php if ($issueDetailsById['priority_id'] == $priorityDetails[$key]['id']) { ?> selected <?php } ?> value="<?php echo $priorityDetails[$key]['id']; ?>"><?php echo $priorityDetails[$key]['priority_name']; ?></option>
                                                <?php
                                                    }
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip05">Due Date</label>
                                            <input type="date" class="form-control" id="validationTooltip05" placeholder="Reporter" required="" value="<?php echo $issueDetailsById['due_date']; ?>" name="due_date">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip05">Actual Start Date</label>
                                            <input type="date" class="form-control" id="validationTooltip05" placeholder="Reporter" value="<?php if ($issueDetailsById['actual_start'] == '') {
                                                                                                                                            } else {
                                                                                                                                                echo date("Y-m-d", strtotime($issueDetailsById['actual_start']));
                                                                                                                                            } ?>" name="actual_start">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip05">Actual End Date</label>
                                            <input type="date" class="form-control" id="validationTooltip05" value="<?php if ($issueDetailsById['actual_end'] == '') {
                                                                                                                    } else {
                                                                                                                        echo date("Y-m-d", strtotime($issueDetailsById['actual_end']));
                                                                                                                    } ?>" name="actual_end">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ============ Body content End ============= -->
    </div>
    <!--=============== End app-admin-wrap ================-->
    <script src="<?php echo base_url(); ?>/assets/js/common-bundle-script.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/vendor/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/datatables.script.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/script.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/sidebar.large.script.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/customizer.script.js"></script>
    <script>
        $(document).ready(function() {
            'use strict';
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        });
    </script>
</body>

</html>