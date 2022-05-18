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


    <form action="{{url('sendemail',$data->id)}}" method="POST" 
     class='form-group'>

        @csrf

    <div class="mb-3">
  <label for="name" class="form-label">Greeting</label>
  <input type="text" class="form-control boxStyle" name="greeting" required>
</div>

<div class="mb-3">
  <label for="phone" class="form-label">Body</label>
  <input type="text" class="form-control" name="body" required>
</div>


<div class="mb-3">
  <label for="actiontext" class="form-label">Action Text</label>
  <input type="text" class="form-control" name="actiontext" required>
</div>

<div class="mb-3">
  <label for="url" class="form-label">Action Url</label>
  <input type="text" class="form-control" name="actionurl" required>
</div>

<div class="mb-3">
  <label for="endpart" class="form-label">End Part</label>
  <input type="text" class="form-control" name="endpart" required>
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