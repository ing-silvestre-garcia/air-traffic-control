

<?php $__env->startSection('title','Air Control Traffic'); ?>

<?php $__env->startSection('content'); ?>
	<form method="POST" action="<?php echo e(route('api')); ?>">
		<?php echo csrf_field(); ?> <!--token-->
		<select name="type" required>
			<option value="">Type...</option>
			<option value="1">Emergency</option>
			<option value="2">VIP</option>
			<option value="3">Passenger</option>
			<option value="4">Cargo</option>
		</select>
		<br>
		<?php echo $errors->first('type','<small>:message</small><br>'); ?>

		<select name="size" required>
			<option value="">Size...</option>
			<option value="big">Big</option>
			<option value="small">Small</option>
		</select>
		<br>
		<?php echo $errors->first('size','<small>:message</small><br>'); ?>

		<button>Send</button>
	</form>	

	<table border="1">
		<tr>
			<th>ID</th>
			<th>TYPE</th>
			<th>SIZE</th>
			<th>DATE CREATED</th>
		</tr>
		<?php $__empty_1 = true; $__currentLoopData = $traffic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trafficItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			<tr>
				<td> <?php echo e($trafficItem->id); ?> </td>	
				<td> <?php echo e($trafficItem->type); ?></td>	 
				<td> <?php echo e($trafficItem->size); ?> </td>	
				<td> <?php echo e($trafficItem->date_created); ?> </td>	
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			No records
		<?php endif; ?>
	</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Windows\laragon\www\air-traffic-control\resources\views/api.blade.php ENDPATH**/ ?>