<?php  
$this->load->view('admin/header');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 offset-md-2">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Blog</h1>
    </div>

    <form action="<?php echo base_url().'blog/edit/'.$blog['blog_id']; ?>" method="post">
        <div class="form-group mb-4">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control"
                value="<?php echo set_value('title',$blog['title']); ?>">
            <span class="text-danger fw-bold">
                <?php echo form_error('title'); ?>
            </span>

        </div>
        <div clas="form-group">
            <label for="description">Description</label>
            <textarea id="description" rows="3" name="description" class="form-control" "><?php echo set_value('description',$blog['description']); ?></textarea>
            <span class=" text-danger fw-bold"><?php echo form_error('description');?></span>
            
        </div>
        <div class="form-group my-4">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" value="<?php echo set_value('author',$blog['author']); ?>">
            <span class="text-danger fw-bold"><?php echo form_error('author'); ?></span>
        </div>
        <div class="form-group my-4">
        <label for="special">Special</label>
            <select name="special" id="special" class="form-control">
                <option value=""  >--select an option--</option>
                <option value="featured" <?php echo ($blog['special']=='featured'?'selected':'') ;?> >Featured</option>
                <option value="promo" <?php echo ($blog['special']=='promo'?'selected':'') ;?>>Promotional</option>
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Update</button>
            <a href="<?php echo base_url().'blog/index'; ?>" class="btn btn-secondary">Cancel</a>
        </div>


    </form>
</main>

<?php  
$this->load->view('admin/footer');
?>