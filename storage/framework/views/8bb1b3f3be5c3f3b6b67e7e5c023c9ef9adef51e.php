<?php $__env->startSection('content'); ?>

    <!-- /.login-logo -->
    <div class="login-box-body">

        <!-- for validation errors -->
        <?php if(count($errors) > 0): ?>
            <div id="error" class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Error!</h4>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="msg"><?php echo e($error); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>



        <?php if(Session::get('error_msg')): ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Error!</h4>
                <?php echo e(Session::get('error_msg')); ?>

            </div>
        <?php elseif(Session::get('success_msg')): ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success !</h4>
                <?php echo e(Session::get('success_msg')); ?>

            </div>
        <?php endif; ?>



        <p class="login-box-msg">Sign up</p>

        <form method="post" action="<?php echo e(url('register')); ?>">
            <?php echo e(csrf_field()); ?>

            <div class="form-group has-feedback">
                <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo e(old('name')); ?>">
                <input type="email" name="email" class="form-control" placeholder="Email"  value="<?php echo e(old('email')); ?>">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <a href="<?php echo e(url('login')); ?>">Click here to login</a>

    </div>
    <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    </body>
    </html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>