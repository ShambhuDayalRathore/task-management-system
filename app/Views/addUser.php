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
                                <form class="needs-validation" novalidate="">
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip01">First name</label>
                                            <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="" required="">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip01">Middle name</label>
                                            <input type="text" class="form-control" id="validationTooltip01" placeholder="Middle name" value="" required="">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip02">Last name</label>
                                            <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="" required="">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationTooltip03">City</label>
                                            <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required="">
                                            <div class="invalid-tooltip">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationTooltip04">State</label>
                                            <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required="">
                                            <div class="invalid-tooltip">
                                                Please provide a valid state.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationTooltip05">Zip</label>
                                            <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required="">
                                            <div class="invalid-tooltip">
                                                Please provide a valid zip.
                                            </div>
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
    <script src="assets/js/common-bundle-script.js"></script>
    <script src="assets/js/vendor/datatables.min.js"></script>
    <script src="assets/js/datatables.script.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/sidebar.large.script.js"></script>
    <script src="assets/js/customizer.script.js"></script>
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