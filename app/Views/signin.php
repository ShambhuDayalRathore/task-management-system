<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Task Management System</title>
</head>

<body>

    <?php if (session()->has('success')) : ?>
        <div class="col-md-12">
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
        <div class="col-md-4">
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
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-5">

                <h2>Login in</h2>

                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif; ?>
                <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Signin</button>
                    </div>
                    <div class="form-group mb-3"></div>
                    <div class="form-group mb-3">
                        New to TMS?<a href="<?php echo base_url(); ?>/signup">Create an Account</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>