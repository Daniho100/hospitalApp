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
    <base href='/public'>
    <style>
        .docimg{
            height:200px;
            width:150px;
            padding-left: 350px;
        }

        .con{
            padding-top: 105px;
        }
        </style>
   @include('admin.css')
  </head>
  <body>


<div class="container-fluid page-body-wrapper">

@include('admin.navbar')
@include('admin.sidebar')
  
<div class='container con'>
<div class='row'>
<div class='col-lg-12'>


@if(session()->has('message'))


  <div class="alert alert-success" data-closable>

  <button type='button' class="close-button" aria-label="Dismiss alert" data-close>
  <span aria-hidden="true">&times;</span>
      
    </button>

{{session()->get('message')}}

</div>

@endif


    <form action="{{url('editdoctor',$data->id)}}" method="POST" 
    enctype="multipart/form-data" class='form-group'>

        @csrf

    <div class="mb-3">
  <label for="name" class="form-label">Doctor Name</label>
  <input type="text" class="form-control boxStyle" name="name" value="{{$data->name}}" placeholder="Write doctor name" required>
</div>

<div class="mb-3">
  <label for="phone" class="form-label">Phone</label>
  <input type="number" class="form-control" name="number" value="{{$data->name}}" placeholder="Write doctor number" required>
</div>

<div class="mb-3">
  <label for="specialty" class="form-label">Specialty</label>
  <input type="text" class="form-control" name="number" value="{{$data->specialty}}" placeholder="Write doctor specialty" required>
</div>

<div class="mb-3">
  <label for="room" class="form-label">Room No</label>
  <input type="text" class="form-control" name="room" value="{{$data->room}}" placeholder="Doctor room no" required>
</div>

<div class="input-group mb-3 docimg">
<label class="input-group-text" for="inputGroupFile02">old image</label>
<img src="doctorimage/{{$data->image}}" height=200px;
            width=150px;>
</div>

<div class="mt-3">
  <label for="room" class="form-label">Change Image</label>
  <input type="file" class="form-control" name="file" required>
</div>

<button type='submit' class='btn btn-primary'>SUBMIT</button>

</form>

</div>
</div>
</div>


    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>