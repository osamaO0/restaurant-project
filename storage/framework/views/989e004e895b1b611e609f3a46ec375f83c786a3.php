<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>users</title>
</head>
<body>


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
    <title>Admin Dashboard</title>
    <!-- plugins:css -->
    <?php echo $__env->make('admin.admincss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>

 <div class="container-scroller">
  	<?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<table class="table table-striped table-dark">
  <thead>
    <tr class="text-center">
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">phone</th>
      <th scope="col">guestNumber</th>
      <th scope="col">date</th>
      <th scope="col">time</th>
      <th scope="col">message</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr class="text-center">
      <td><?php echo e($data->name); ?></td>
      <td><?php echo e($data->email); ?></td>
      <td><?php echo e($data->phone); ?></td>
      <td><?php echo e($data->guestnumber); ?></td>
      <td><?php echo e($data->date); ?></td>
      <td><?php echo e($data->time); ?></td>
      <td><?php echo e($data->message); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>


</div>
  	<?php echo $__env->make('admin.adminjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>

</body>
</html><?php /**PATH C:\xampp\htdocs\resturant\resources\views/admin/adminreservation.blade.php ENDPATH**/ ?>