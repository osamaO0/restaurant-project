<x-app-layout>
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Food</title>
		<!-- plugins:css -->
		@include('admin.admincss')
	</head>
	<body>
		<div class="container-scroller" style="background-image:url('food.jpg'); background-repeat: no-repeat; background-size: cover;">
		@include('admin.navbar')
			<a href="{{url('foodmenu')}}" role='button' class="btn btn-warning" style="height: 37px; margin: 30px; text-align: center; color: black;">Add some Food</button></a>
			<a href="{{url('removefood')}}" role='button' class="btn btn-warning" style="height: 37px; margin: 30px; text-align: center; color: black;">Remove or update Food</button></a>

		</div>
		@include('admin.adminjs')
	</body>
</html>