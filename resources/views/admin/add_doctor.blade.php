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

<style>
    form
    {
        padding-top: 100px;
        align-items: center;
        padding-left: 100px;
    }
    </style>

  </head>
  <body>

  <div class="container-fluid page-body-wrapper">

  
    
      <!-- partial:partials/_sidebar.html -->
@include('admin.navbar')
@include('admin.sidebar')

<div class='container'>
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


    <form action="{{url('upload_doctor')}}" method="POST" 
    enctype="multipart/form-data" class='form-group'>

        @csrf

    <div class="mb-3">
  <label for="name" class="form-label">Name</label>
  <input type="text" class="form-control boxStyle" name="name" placeholder="Write doctor name" required>
</div>

<div class="mb-3">
  <label for="phone" class="form-label">Phone</label>
  <input type="number" class="form-control" name="number" placeholder="Write doctor number" required>
</div>

<div class="input-group mb-3">
  <select name='specialty' class="form-select" id="">
    <option selected>Choose...</option>
    <option value="skin">Skin</option>
    <option value="heart">Heart</option>
    <option value="eye">Eye</option>
    <option value="nose">Nose</option>
  </select>
</div>

<div class="mb-3">
  <label for="room" class="form-label">Room No</label>
  <input type="text" class="form-control" name="room" placeholder="Doctor room no" required>
</div>

<div class="input-group mb-3">
  <input type="file" class="form-control boxStyle" id="inputGroupFile02" name="file" required>
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>
<button type='submit' class='btn btn-success'>SUBMIT</button>

</form>

</div>
</div>
</div>

    
@include('admin.script')
    
</div>
  </body>
</html>