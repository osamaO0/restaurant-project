<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Add food</title>
		<!-- plugins:css -->
		<?php echo $__env->make('admin.admincss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</head>
	<body>
		 <div class="container-scroller">
		<?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<div class="d-lg-flex justify-content-center p-4" >
			<form method="POST" action="<?php echo e(url('uploadfood')); ?>" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>
			  <div class="form-group" class="d-flex">
			    <label>Title</label>
			    <input type="text" name="title" style="color:white;" class="form-control" placeholder="Enter title" required>
			  </div>
			  <div class="form-group" class="d-flex">
			    <label>Price</label>
			    <input type="text" name="price" style="color:white;" class="form-control" placeholder="Enter Price" required>
			  </div>
			  <div class="form-group" class="d-flex">
			  	<!-- image upload-->
			    <input type="file" name="image" style="color:white;" class="form-control-file" required>
			  </div>
			  <div class="form-group" class="d-flex">
			    <label>Description</label>
			    <input type="text" name="description" style="color:white;" class="form-control" placeholder="Enter description" required>
			  </div>
			  <button type="submit" class="btn btn-primary">Save</button>
			</form>
			</div>


		</div>
		<?php echo $__env->make('admin.adminjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</body>
</html><?php /**PATH C:\xampp\htdocs\resturant\resources\views/admin/foodmenu.blade.php ENDPATH**/ ?>