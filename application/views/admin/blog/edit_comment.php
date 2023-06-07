<?php  
$this->load->view('admin/header');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 offset-md-2">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Comment</h1>
    </div>

    <form action="<?php echo base_url().'blog/edit_comment/'. $comments['comment_id'];?>" method="post">
        <div class="form-group mb-4">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control"
                value="<?php echo set_value('name',$comments['name']); ?>">
            <span class="text-danger fw-bold">
                <?php echo form_error('name'); ?>
            </span>
        </div>
        <div clas="form-group">
            <label for="comment">Comment</label>
            <textarea id="comment" rows="5" name="comment"
                class="form-control"><?php echo set_value('comment',$comments['comment']); ?></textarea>
            <span class="text-danger fw-bold">
                <?php echo form_error('comment'); ?>
            </span>
        </div>

        <div class="form-group my-4">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="" selected>--select an option--</option>
                <option value="Active" <?php echo ($comments['status']==='Active' ?'selected':''); ?> >Active</option>
                <option value="Deactivate" <?php echo ($comments['status']==='Dective' ?'selected':''); ?> >Deactive
                </option>
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Update</button>
        </div>


    </form>
</main>

<?php  
$this->load->view('admin/footer');
?>