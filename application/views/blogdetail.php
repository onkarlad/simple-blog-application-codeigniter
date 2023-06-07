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
    <?php $msg=$this->session->userdata('msg');
        if(!empty($msg)){
    ?>
    <div class="alert alert-success col-12 ms-auto">
        <p>
            <?php echo $msg; ?>
        </p>
    </div>
    <?php
        }
    ?>
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-12 blog-main">
                <h3 class="pb-3 mb-4 mt-4 font-italic border-bottom">
                    Blog Detail
                </h3>


                <div class="blog-post">
                    <h2 class="blog-post-title">
                        <?php echo $blog['title'] ; ?>
                    </h2>
                    <p class="blog-post-meta">
                        <?php echo $blog['created_at'] ; ?> by <a href="#">
                            <?php echo $blog['author'] ; ?>
                        </a>
                    </p>

                    <?php echo $blog['description']; ?>

                </div><!-- /.blog-post -->


            </div><!-- /.blog-main -->
        </div><!-- /.row -->
    </main><!-- /.container -->


    <div class="container my-1 border border-dark border-3 py-3 px-4">
        <div class="row">
            <div class="border-bottom pb-1 border-dark">
                <h3 class="text-black">Comment Here </h3>
            </div>
            <div class="col-7 mt-4">
                <form action="<?php echo base_url().'home/blogdetail/'.$blog['blog_id'];?>" method="post">
                    <div class="form-group mb-3">
                        <label for="name" class="fw-bold">Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="<?php echo set_value('name');  ?>">
                        <span class="text-danger fw-bold mt-1">
                            <?php echo form_error('name') ; ?>
                        </span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="comment" class="fw-bold">Comment</label>
                        <textarea type="text" name="comment" id="comment" class="form-control"
                            rows="5"><?php echo set_value('comment'); ?></textarea>
                        <span class="text-danger fw-bold mt-1">
                            <?php echo form_error('comment') ; ?>
                        </span>
                    </div>
                    <div>
                        <button class="btn btn-primary">Save Comment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <h3>Comments</h3>
                <hr>
            </div>

            <?php if(count($comments)>0){ foreach($comments as $comment) { ?>
            <div class="col-12 ">
                <div>
                    <span class="name fw-bold fs-5">
                        <?php echo $comment['name']; ?>
                    </span> -
                    <span class="date text-secondary">
                        <?php echo $comment['created_at']; ?>
                    </span>
                </div>
                <div class="comments">
                    <?php echo $comment['comment'];  ?>
                </div>
                <hr>
            </div>

            <?php }} 
            else {
                ?>
            <div class="mb-5">No comments yet</div>
            <?php
            }?>
        </div>
    </div>

</body>

</html>