<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="src/css/style.css"crossorigin="anonymous">
    <link rel="stylesheet" href="src/fontawesome/css/all.css"crossorigin="anonymous">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    </div>
        <?php if(!empty($notification->first())): ?>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Message</th>
                <th>Create at</th>
                <th> Operation </th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $notification; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notifications): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($notifications->user->id); ?> ) </td>
                    <td> <?php echo e($notifications->user->username); ?></td>
                    <td> <?php echo e($notifications->message); ?></td>
                    <td> <?php echo e($notifications->created_at); ?></td>
                    <td>
                        <button
                                onclick="window.location.href = '<?php echo e(route('delete.notification', $notifications->id)); ?>';"
                                type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php else: ?>
            <div class="alert alert-danger">
                <a> Notification Not Found </a>
            </div>
        <?php endif; ?>
        <?php if( $errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="alert alert-danger">
                    <?php echo e($error); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
            <?php if(session('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('message')); ?>

                </div>
            <?php endif; ?>
        <form method="post" action=" <?php echo e(route('post.notification')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <h3> Add Notification </h3>
                <label for="selectUser">Select USer</label>
                <select class="form-control" name="user_id">
                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($users->id); ?>"> <?php echo e($users->username); ?> - <?php echo e($users->email); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <small class="form-text text-muted">Send Notification to which User</small>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea type="text" name="message" class="form-control" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/d3cr33/opt/Workplace/Project/notify/resources/views/notification.blade.php ENDPATH**/ ?>