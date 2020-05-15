    
    <?php $__env->startSection("content"); ?>

    <table border = "1" style='margin-top:50px;margin-left:300px;text;width:800px'>
       <tr>
       <td>Id</td>
       <td>UserName</td>
       <td>First Name</td>
       <td>last Name</td>
       <td>Email</td>
      <td>IsBan</td>
      <td>Ban_User</td>
       <td>Un_BanUser</td>
       <td>Action</td>
       </tr>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>
       <td><?php echo e($user->id); ?></td>
       <td><?php echo e($user->username); ?></td>
       <td><?php echo e($user->fname); ?></td>
       <td><?php echo e($user->lname); ?></td>
       <td><?php echo e($user->email); ?></td>
       <td><?php echo e($user->isBan); ?></td>
      <td> <a href='/BanUser/<?php echo e($user->id); ?>'>Ban</a></td>
       <td> <a href='/UnBanUser/<?php echo e($user->id); ?>'>UnBan</a></td>
       <td> <a href='/deleteUser/<?php echo e($user->id); ?>'>Delete</a></td>
       </tr>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\FCIH\3\2nd Term\Software Engineering-2\project\project\versions\Elec_Bank\resources\views/showusers.blade.php ENDPATH**/ ?>