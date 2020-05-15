<?php $__env->startSection("content"); ?>

	<h2>Transfer Money</h2>
    <br>
	<form method="POST" action = "transfer">
				<?php echo e(csrf_field()); ?>

				<label style="position: relative;left: 10px">transfer from :</label>
                <input type="text"  placeholder= "enter id" required id = "id" name="id" style="position: relative;left: 70px"><br>

                <label style="position: relative;left: 10px">transfer to :</label>
                <input type="text"  placeholder= "enter id" required id = "id2" name="id2" style="position: relative;left: 85px"><br>


                <label style="position: relative;left: 10px">money amount</label>
                <input type="number" required amount="amount" name="amount" style="position: relative;left: 62px"><br   >

                <button type="submit" style="height: 30px;color: white;background-color: black;position: relative;top: 10px;width: 300px;left: 10px;">transfer</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\FCIH\3\2nd Term\Software Engineering-2\project\project\versions\Elec_Bank\resources\views/transfer.blade.php ENDPATH**/ ?>