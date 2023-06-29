
<?php $__env->startSection('title'); ?> Legal Policies <?php $__env->stopSection(); ?>

<?php $__env->startSection('admincontent'); ?>
<?php if(Session::has('successful_message')): ?>
<div class="alert alert-success">
<?php echo e(Session::get('successful_message')); ?>

</div>
<?php endif; ?>
<div class="row m-2">
  <div class="col-md-12 text">
    <h3>Blogs</h3>
  </div>
</div>
<div class="form-group row pl-5 pb-3">
    <a href="<?php echo e(route('all_blogs')); ?>" type="submit" class="ybtn ybtn-accent-color">All Blogs</a>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <form method="post" action="<?php echo e(route('store_blog')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="title" class="form-control"/>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Link</label>
                            <input type="text" name="link" class="form-control"/>
                        </div>
                        <div class="col-md-6">
                            <label for="featured_image">Featured Image</label>
                            <input type="file" id="featured_image" name="featured_image" class="form-control" style="border: none !important" />
                        </div> 
                    </div>
                    <div class="form-group">
                        <label><strong>Description :</strong></label>
                        <textarea name="editor1"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="ybtn ybtn-accent-color">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "<?php echo e(route('ckeditor.upload', ['_token' => csrf_token() ])); ?>",
        filebrowserUploadMethod: 'form'
    });
</script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7\htdocs\policies\resources\views/admin/Blog/Blog.blade.php ENDPATH**/ ?>