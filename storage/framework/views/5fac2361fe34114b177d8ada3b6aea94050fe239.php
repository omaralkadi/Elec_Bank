<?php $__env->startSection("content"); ?>
	<h2>Update User's Data</h2>
	<form method="POST" action="submit">
				<?php echo e(csrf_field()); ?>

				<label>Id</label>
                <input type="text" required id = "id" name="id"><br>
                <label>First Name</label>
                <input type="text" required name="fname"><br>
                <label>Last Name</label>
                <input type="text" required name="lname"><br>
                <label>User Name</label>
                <input type="email" required name="uname"><br>
                <label>password</label>
                <input type="password" required name="pass"><br>
                <label>Email</label>
                <input type="email" required name="email"><br>
                <button type="submit" style="height: 30px;color: white;background-color: black;">Update</button>	       
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Windows\System32\Elec_Bank\resources\views/updateuser.blade.php ENDPATH**/ ?>