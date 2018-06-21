<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.user-headers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if(!empty($users)): ?>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($user->name); ?></td>
        <td><?php echo e($user->email); ?></td>
        <td>
           <a href="<?php echo e('edit'); ?>/<?php echo e($user->id); ?>"> <button class="btn-success">Edit</button></a>
            <a href="<?php echo e('delete'); ?>/<?php echo e($user->id); ?>">  <button class="btn-danger delete">Delete</button></a>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <tr><td colspan="3">No user</td></tr>
    <?php endif; ?>
    </tbody>
</table>
</div>
<!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</body>
<script>
    $(document).on('click', '.delete', function (e) {
        var confirmed = confirm("Are you sure you want to delete this record ?");
        if (!confirmed)
        {
            return false;
        }

    });
    </script>
</html>