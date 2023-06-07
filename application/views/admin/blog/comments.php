<?php  
$this->load->view('admin/header');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 offset-md-2">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Comments</h1>
    </div>


    <table class="table table-striped table-responsive">
        <thead>
            <tr align='middle'>
                <th>Name</th>
                <th>Comment</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                if(!empty($comments)){
                    foreach($comments as $comment){
            ?>
            <tr align='middle'>
                <td>
                    <?php echo $comment['name']; ?>
                </td>
                <td>
                    <?php echo $comment['comment']; ?>
                </td>
                <td>
                    <?php echo $comment['status']; ?>
                </td>
                <td style="width:20%;">
                    <a href="<?php echo base_url().'blog/edit_comment/'.$comment['comment_id']; ?>"
                        class="btn btn-primary">Edit</a>
                    <a href="<?php echo base_url().'blog/delete_comment/'.$comment['comment_id']; ?>"
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