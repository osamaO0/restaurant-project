<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add or remove food</title>
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


<table class="table table-dark">
    <tr class="text-center">
      <th scope="col">title</th>
      <th scope="col">price</th>
      <th scope="col">description</th>
      <th scope="col">image</th>
      <th scope="col">Action1</th>
      <th scope="col">Action2</th>
    </tr>
  	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr class="text-center">
      <td><?php echo e($data->title); ?></td>
      <td><?php echo e($data->price); ?></td>
      <td><?php echo e($data->description); ?></td>
      <td><img src="/foodimages/<?php echo e($data->image); ?>" style="height:200px;width: 200px; display: inline;border-radius: 10%;"></td>
      <td><a href="<?php echo e(url('/remove', $data->id)); ?>"> Delete </a></td>
      <td><a href="<?php echo e(url('/updatefood', $data->id)); ?>"> update </a></td>
    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>


</div>
  	<?php echo $__env->make('admin.adminjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>

</body>
</html><?php /**PATH C:\xampp\htdocs\resturant\resources\views/admin/removefood.blade.php ENDPATH**/ ?>