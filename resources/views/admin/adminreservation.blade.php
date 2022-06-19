<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>users</title>
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
    @foreach($data as $data)
    <tr class="text-center">
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->guestnumber}}</td>
      <td>{{$data->date}}</td>
      <td>{{$data->time}}</td>
      <td>{{$data->message}}</td>
    </tr>
    @endforeach
  </tbody>
</table>


</div>
  	@include('admin.adminjs')
  </body>
</html>

</body>
</html>