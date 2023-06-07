<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/style.css';?>">

</head>

<body>
    <nav class="navbar navbar-dark sticky-top  flex-md-nowrap py-md-1 bg-dark">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0 ps-md-3" href="#">BLOG GALLERY</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link btn btn-light text-dark px-2 fw-normal fst-normal"
                    href="<?php echo base_url().'AdminDashboard/signout';?>">Sign out</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url().'AdminDashboard/'  ?>">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url().'blog/index'; ?>">
                                View Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url().'Blog/add';?>">
                                Add Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url().'Blog/manage_comments';?>">
                                Manage Comments
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>