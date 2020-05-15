<?php $__env->startSection('content'); ?>
<table border = "1" style='margin-top:50px;margin-left:300px;text;width:800px'>
   <tr>
   <td>Number</td>
   <td>comment</td>
   <td>user email</td>
   <td>comment date</td>
   </tr>
   <?php $__currentLoopData = $feedback; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <tr>
     <td><?php echo e($comment->id); ?></td>
     <td><?php echo e($comment->comment); ?></td>
     <td><?php echo e($comment->user_email); ?></td>
     <td><?php echo e($comment->commented_at); ?></td>
   </tr>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\FCIH\3\2nd Term\Software Engineering-2\project\project\versions\Elec_Bank\resources\views/feedback.blade.php ENDPATH**/ ?>