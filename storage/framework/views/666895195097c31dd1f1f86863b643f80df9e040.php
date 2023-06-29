<?php $data = DB::table('logo')->where('id','1')->first(); ?>
<section class="header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container-fluid nav-contain"><a class="navbar-brand" href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset($data->featured_image)); ?>"></a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-bar" aria-controls="navbar-bar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbar-bar">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
                    <a class="nav-link" href="<?php echo e(route('pricing')); ?>">Pricing</a>
                    <?php if(Auth::guest()): ?>
                    <!--<a class="nav-link" href="<?php echo e(route('testimonials')); ?>">Testimonial</a>-->
                    <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                    <a class="nav-link last-header-color" href="<?php echo e(route('create')); ?>">Get Started</a>
                    <?php else: ?>
                    <a class="nav-link" href="<?php echo e(route('my_policies')); ?>">My Policies</a>
                    <?php if(isset(auth()->user()->admin) && auth()->user()->admin == 1): ?>
                    <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                    <?php endif; ?>
                    <div class="dropdown">
                        <a class="nav-link last-header-color">My Account
                          <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="<?php echo e(route('settings')); ?>">Settings</a>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">  <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</section><?php /**PATH D:\xampp7\htdocs\policies\resources\views/layout/header.blade.php ENDPATH**/ ?>