<?php $__env->startSection("content"); ?>




      <?php if(count($errors)>0): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <p class="alert alert-danger"><?php echo e($error); ?></p>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <?php endif; ?>  
      
        <div style='margin-left:100px'> 

        <form method="POST" style='margin-top:100px' action="adduser">
        <?php echo e(csrf_field()); ?>

        <table>
        <h1 style='color:black;margin-bottom:10px'> Add User</h1>
        
     <tr>
    
       <td> First name</td>
       <td> <input style='height:30px;width:300px' type='text' name='firstname' ></td>
        
     </tr>  
      
      <tr>
    
       <td> Last name</td>
       <td> <input style='height:30px;width:300px' type='text' name='lastname'> </td>
        
     </tr>
  
     <tr>
    
       <td>Username</td>
       <td><input style='height:30px;width:300px' type='text' name='username'> </td>
        
     </tr>
      
     <tr>
    
       <td>Password </td>
       <td><input style='height:30px;width:300px' type='password' name='password'> </td>
        
     </tr>
      
     <tr>
    
       <td>Email</td>
       <td><input style='height:30px;width:300px' type='text' name='email'> </td>
        
     </tr>
      
     <tr>
    
        <td colspan='2' style='b'> <input style='height:30px;color:white;background-color:black;' type='submit' name='submit' value='Submit'>   
        </td>
        
     </tr>
              
  </table> 
         
        
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\FCIH\3\2nd Term\Software Engineering-2\project\project\versions\Elec_Bank\resources\views/adduserform.blade.php ENDPATH**/ ?>