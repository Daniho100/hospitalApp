<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
   @include('admin.css')
  </head>
  <body>


<div class="container-fluid page-body-wrapper">

@include('admin.navbar')
@include('admin.sidebar')
  
<div class='Container' align='center' 
style='padding-left: 100px; padding-top: 50px;'>
  <div class='row'>
      <div class='col-lg-12'>
  <table class='table table-dark table-striped' 
  cellpadding='10'>
      <tr>
          <th>Doctor Name</th>
          <th>Phone</th>
          <th>Specialty</th>
          <th>Room No</th>
          <th>Image</th>
          <th>Delete</th>
          <th>Update</th>
</tr>

@foreach($data as $doctor)

  <tr align='center'>
          <td>{{$doctor->name}}</td>    
          <td>{{$doctor->phone}}</td>
          <td>{{$doctor->specialty}}</td>
          <td>{{$doctor->room}}</td>
          <td><img src="doctorimage/{{$doctor->image}}"></td>
          <td>
              <a href="{{url('deletedoctor', $doctor->id)}}" class='btn btn-danger' onclick="return confirm('Are you sure you want to delete doctor?')">Delete</a>
      </td>
          <td>
              <a href="{{url('updatedoctor', $doctor->id)}}" class='btn btn-primary'>Update</a>
      </td>
</tr>

          @endforeach

</table>

</div>
</div>
</div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>