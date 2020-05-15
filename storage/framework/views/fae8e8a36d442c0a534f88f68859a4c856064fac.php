<?php $__env->startSection('content'); ?>
<table class="table" style="width:800px;margin-left:250px;">
    <caption>All Transactions</catption>
    <thead class="thead-dark">
        <tr>
            <th>From User</th>
            <th>To User</th>
            <th>Amount</th>
            <th>At</th>
            <th>state</th>
            <th>operation</th>
        </tr>
    <thead class="thead-dark">
    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($t->FromUserId); ?></td>
        <td><?php echo e($t->ToUserId); ?></td>
        <td><?php echo e($t->Amount); ?></td>
        <td><?php echo e($t->created_at); ?></td>
        <td>Sucess</td>
        <td>     
        <a  class="btn btn-default btn-sm" href="listTransactions/<?php echo e($t->id); ?>/Delete">
          <span class="glyphicon glyphicon-remove-circle"></span> Remove
        </a>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tr></tr>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\FCIH\3\2nd Term\Software Engineering-2\project\project\versions\Elec_Bank\resources\views/listTransactions.blade.php ENDPATH**/ ?>