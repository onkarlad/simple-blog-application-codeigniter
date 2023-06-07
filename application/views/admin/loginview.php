<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-4" style="padding-top: 10%;">
                <?php 
        $errorMsg=$this->session->flashdata('errorMsg');
            if(!empty($errorMsg)){
                ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $errorMsg; ?>
                </div>
                <?php
            }
             ?>
                <form method="post" action="<?php echo base_url().'login/index' ?>">
                    <h2 class="text-center mb-1">Please Sign In </h2>
                    <hr>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Enter Username" value="<?php echo set_value('username'); ?>">
                        <span class="text-danger fw-bold">
                            <?php echo form_error('username'); ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter Password" value="<?php echo set_value('password') ;?>">
                        <span class="text-danger fw-bold">
                            <?php echo form_error('password'); ?>
                        </span>
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>