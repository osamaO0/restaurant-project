<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add or remove food</title>
</head>
<body>


<x-app-layout>
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <!-- plugins:css -->
    @include('admin.admincss')
  </head>
  <body>

 <div class="container-scroller">
  	@include('admin.navbar')


<table class="table table-dark">
    <tr class="text-center">
      <th scope="col">title</th>
      <th scope="col">price</th>
      <th scope="col">description</th>
      <th scope="col">image</th>
      <th scope="col">Action1</th>
      <th scope="col">Action2</th>
    </tr>
  	@foreach($data as $data)

    <tr class="text-center">
      <td>{{$data->title}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->description}}</td>
      <td><img src="/foodimages/{{$data->image}}" style="height:200px;width: 200px; display: inline;border-radius: 10%;"></td>
      <td><a href="{{url('/remove', $data->id)}}"> Delete </a></td>
      <td><a href="{{url('/updatefood', $data->id)}}"> update </a></td>
    </tr>

    @endforeach
</table>


</div>
  	@include('admin.adminjs')
  </body>
</html>

</body>
</html>