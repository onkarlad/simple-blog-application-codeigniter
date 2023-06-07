<?php  
$this->load->view('admin/header');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 offset-md-2">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Blog Lists</h1>
    </div>
    <?php $success=$this->session->flashdata('success') ?>
    <?php if(!empty($success)){?>
    <div class="alert alert-success" role="alert">
        <?php echo $success; ?>
    </div>
    <?php } ?>
    <?php $success=$this->session->flashdata('update_status') ?>
    <?php if(!empty($success)){?>
    <div class="alert alert-success" role="alert">
        <?php echo $success; ?>
    </div>
    <?php } ?>

    <table class="table table-striped table-responsive">
        <thead>
            <tr align='middle'>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Author</th>
                <th>Special</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($blogs)){
                    foreach($blogs as $blog){
            ?>
            <tr align='middle'>
                <td>
                    <?php echo $blog['blog_id']; ?>
                </td>
                <td>
                    <?php echo $blog['title']; ?>
                </td>
                <td>
                    <?php echo $blog['description']; ?>
                </td>
                <td>
                    <?php echo $blog['author']; ?>
                </td>
                <td>
                    <?php echo $blog['special']; ?>
                </td>
                <td style="width:20%;">
                    <a href="<?php echo base_url().'blog/edit/'.$blog['blog_id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo base_url().'blog/delete/'.$blog['blog_id']; ?>"
                        class="btn btn-danger">Delete</a>




                </td>
            </tr>
            <?php  
                    }
                }
                else
                {
            ?>
            <tr>
                <td colspan=5>Records Not Found</td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>

</main>

<?php  
$this->load->view('admin/footer');
?>