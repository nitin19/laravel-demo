<?php $__env->startSection('content'); ?>

    <!-- /.login-logo -->
    <div class="login-box-body">

      <a href="<?php echo e(url('login')); ?>"> <button class="btn-primary">Login</button></a>
       <a href="<?php echo e(url('register')); ?>"> <button class="btn-success">Register</button></a>



    </div>
    <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    </body>
    </html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>