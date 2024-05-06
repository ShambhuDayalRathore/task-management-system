<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Register User</title>
</head>

<body>
    <?php if (session()->has('success')) : ?>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <strong class="text-capitalize">Success!</strong> <?php echo session('success') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>
    <?php if (session()->has('error')) : ?>
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="alert alert-danger" role="alert">
                        <strong class="text-capitalize">Danger!</strong> <?php echo session('error') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <h2>Register User</h2>
                <?php if (isset($validation)) : ?>
                    <div class="alert alert-warning">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif; ?>
                <form action="<?php echo base_url(); ?>/SignupController/store" method="post">
                    <div class="form-group mb-3">
                        <select class="form-control" id="validationTooltip01" name="user_role_id" required>
                            <option value="">Select User Role</option>
                            <?php if (is_countable($userRoleModel) && COUNT($userRoleModel) > 0) {
                                foreach ($userRoleModel as $key => $val) {
                            ?>
                                    <option value="<?php echo $userRoleModel[$key]['id']; ?>"><?php echo $userRoleModel[$key]['role_name']; ?></option>
                            <?php
                                }
                            } ?>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="fname" placeholder="First Name" value="<?= set_value('fname') ?>" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="mname" placeholder="Middle Name" value="<?php set_value('mname') ?>" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="lname" placeholder="Last Name" value="<?php set_value('lname') ?>" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?php set_value('email') ?>" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" name="mobile" placeholder="Phone Number" value="<?php set_value('mobile') ?>" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Signup</button>
                    </div>
                    <div class="form-group mb-3"></div>
                    <div class="form-group mb-3">
                        Go To <a href="<?php echo base_url(); ?>/">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>