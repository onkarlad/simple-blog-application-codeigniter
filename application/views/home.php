<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Blog Application</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'; ?>">
</head>

<body>

    <div class="container" id="top">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-12 text-center">
                    <a class="blog-header-logo text-success " href="#">Blog Gallery</a>
                </div>
            </div>
        </header>



        <div class="jumbotron p-2 p-md-5 text-white rounded bg-dark">
            <div class="col-md-12 px-0">
                <h1 class="display-4 font-italic">
                    <?php echo $promoblog['title'];  ?>
                </h1>
                <p class="lead my-2">
                    <?php echo word_limiter($promoblog['description'],50);  ?>
                </p>
                <p class="lead mb-0"><a href="<?php echo base_url().'home/BlogDetail/'.$promoblog['blog_id'];  ?>"
                        class="text-white font-weight-bold">Read More...</a></p>
            </div>
        </div>

        <div class="row mb-2 mt-3 ">
            <?php foreach($featuredblogs as $fblog){ ?>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                            <a class="text-dark" href="#">
                                <?php echo $fblog['title']; ?>
                            </a>
                        </h3>
                        <div class="mb-1 text-muted">
                            <?php echo $fblog['created_at']; ?>
                        </div>
                        <p class="card-text mb-auto">
                            <?php echo word_limiter($fblog['description'],50); ?>...
                        </p>
                        <a href="<?php echo base_url().'home/BlogDetail/'.$fblog['blog_id'];  ?>">Read More</a>
                    </div>
                </div>
            </div>
            <?php  }?>
        </div>


        <main role="main" class="container">
            <div class="row">
                <div class="col-md-12 blog-main">
                    <h3 class="pb-3 mb-4 font-italic border-bottom border-dark">
                        Our Blogs
                    </h3>

                    <?php foreach($allblogs as $blog){ ?>
                    <div class="blog-post">
                        <h4 class="blog-post-title">
                            <?php echo $blog['title'] ; ?>
                        </h4>
                        <p class="blog-post-meta">
                            <?php echo $blog['created_at'] ; ?> by <a href="#">
                                <?php echo $blog['author'] ; ?>
                            </a>
                        </p>

                        <?php echo word_limiter($blog['description'],100) ; ?>
                        <a href="<?php echo base_url().'home/BlogDetail/'.$blog['blog_id'];  ?>">Read More</a>
                    </div><!-- /.blog-post -->
                    <?php } ?>


                </div><!-- /.blog-main -->



            </div><!-- /.row -->

        </main><!-- /.container -->

        <footer class="blog-footer">
            <p>Copyright &copy; by OL. All Rights Reserved.
            <p>
            <p>
                <a href="#top">Back TO Top</a>
            </p>
        </footer>


</body>

</html>