

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/css/innerpages.css')); ?>">
    <style type="text/css">
        .over_view_underline {
            height: 5px;
            width: 100%;
            background-color: #383ebf;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">My Policies</div>
                    <!-- <div id="page-icon">
                        <div class="pricing-icon">
                            <img src="<?php echo e(asset('images/pricing.png')); ?>" alt="">
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php if(Session::has('successful_message')): ?>
<div class="alert alert-success">
<?php echo e(Session::get('successful_message')); ?>

</div>
<?php endif; ?>
<div id="contact-info" class="container-fluid">
    <?php if(count($users) == 0): ?>
    <div class="container" style="min-height: 32vh; ">
    <h2>No policies have been created yet</h2>
        <div class="over_view_underline"></div>
        <div class="mt-3"><p>Looks like you haven't created any policies yet. <a href="<?php echo e(route('create')); ?>">Create your policy</a> now to get started.</p></div>
    </div>
    <?php else: ?>
    <div class="container">
        <a href="<?php echo e(route('create')); ?>" class="ybtn ybtn-accent-color create_new">Create new policy</a>
        <table id="restu_table" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th class="" scope="col">Name</th>
                    <th class="" scope="col">Type</th>
                    <th class="" scope="col">Status</th>
                    <th class="" scope="col">Date</th>
                </tr>
            </thead>
            <tbody>                                
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><span class="name"><a href="<?php if(isset(auth()->user()->admin) && auth()->user()->admin == 1 || $user->payment_status == 'succeeded' || $user->adminn == 1){ echo $user -> url; }else { echo $user -> link; } ?>">
                        <?php if (isset($user->mobile_name) && $user->mobile_name != NULL) 
                            { echo $user -> mobile_name; } 
                        elseif(isset($user->website_url) && $user->website_url != NULL) 
                            { echo $user -> website_url; }
                        elseif(isset($user->ebook_name) && $user->ebook_name != NULL) 
                            { echo $user -> ebook_name; }
                        elseif(isset($user->landing_url) && $user->landing_url != NULL) 
                            { echo $user -> landing_url; }
                        elseif(isset($user->course_name) && $user->course_name != NULL) 
                            { echo $user -> course_name; }
                        elseif(isset($user->podcast_name) && $user->podcast_name != NULL) 
                            { echo $user -> podcast_name; }
                        elseif(isset($user->video_name) && $user->video_name != NULL) 
                            { echo $user -> video_name; } ?></a></span>
                        <br><span><a id="manage" href="<?php if(isset(auth()->user()->admin) && auth()->user()->admin == 1 || $user->payment_status == 'succeeded' || $user->adminn == 1){ echo $user -> url; }else { echo $user -> link; } ?>">Manage policy</a></span>
                    </td>
                    <td><a href="<?php if(isset(auth()->user()->admin) && auth()->user()->admin == 1 || $user->payment_status == 'succeeded' || $user->adminn == 1){ echo $user -> url; } else { echo $user -> link; } ?>"><?php echo $user->policy_name; ?></a>
                        <br><span><?php echo $user->type; ?></span></td>
                    <td><?php if(isset(auth()->user()->admin) && auth()->user()->admin == 1){ echo '<span class="activee">Active</span>'; } 
                    elseif ($user->payment_status == 'succeeded' || $user->type == 'Basic' || $user->adminn == 1)
                                { echo '<span class="activee">Active</span>'; }
                            else{ echo '<span class="unpaid">Incomplete</span>'; } ?>
                    </td>
                    <td><?php echo $user->created ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7\htdocs\policies\resources\views/policy/my_policies.blade.php ENDPATH**/ ?>