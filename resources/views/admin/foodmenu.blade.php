<x-app-layout>
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Add food</title>
		<!-- plugins:css -->
		@include('admin.admincss')
	</head>
	<body>
		 <div class="container-scroller">
		@include('admin.navbar')
			<div class="d-lg-flex justify-content-center p-4" >
			<form method="POST" action="{{url('uploadfood')}}" enctype="multipart/form-data">
				@csrf
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
		@include('admin.adminjs')
	</body>
</html>