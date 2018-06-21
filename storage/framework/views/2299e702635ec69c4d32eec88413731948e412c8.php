<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layout.user-headers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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



        <p class="login-box-msg">Update User</p>

        <form method="post" action="<?php echo e(url('update')); ?>">
            <?php echo e(csrf_field()); ?>

            <div class="form-group has-feedback">
                <input type="hidden" name="id" value="<?php echo e($userDetails->id); ?>">
                <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo e($userDetails->name); ?>">
                <input type="email" name="email" class="form-control" placeholder="Email"  value="<?php echo e($userDetails->email); ?>">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Update</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

    </div>
    <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    </body>
    </html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>