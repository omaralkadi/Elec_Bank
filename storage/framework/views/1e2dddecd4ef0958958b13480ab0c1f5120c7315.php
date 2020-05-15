<?php $__env->startSection("content"); ?>

<form action="Site" method="POST">
    <?php echo e(csrf_field()); ?>

    <input class="form-control form-control-lg" type="text" name="Trusted_Site"placeholder="New Trusted Site" style="width:600px;margin-left:290px;display:inline">
    <input type="submit" class="btn btn-primary" style="padding:10px;margin-bottom:5px;margin-left:10px;width:120px;" value="Add" />
</form>
<br>
<div class="d-flex justify-content-center">
<h1 class="display-6">Sites:</h1>
</div>

<ul class="list-group" style="width:1200px;margin-left:30px;">
<?php $__currentLoopData = $sites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="list-group-item" ><?php echo e($s->Site); ?> <a href="Site/<?php echo e($s->id); ?>/remove" style="float:right">Remove</a></li>  
  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\FCIH\3\2nd Term\Software Engineering-2\project\project\versions\Elec_Bank\resources\views/AddTrustedSite.blade.php ENDPATH**/ ?>