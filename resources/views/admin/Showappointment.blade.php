<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
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
            <th>Customer Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Doctor Name</th>
            <th>Date</th>
            <th>Message</th>
            <th>Status</th>
            <th>Approved</th>
            <th>Cancelled</th>
            <th>Send Mail</th>
</tr>

@foreach($data as $appoint)

    <tr align='center'>
            <td>{{$appoint->name}}</td>
            <td>{{$appoint->email}}</td>
            <td>{{$appoint->phone}}</td>
            <td>{{$appoint->doctor}}</td>
            <td>{{$appoint->date}}</td>
            <td>{{$appoint->message}}</td>
            <td>{{$appoint->status}}</td>
            <td>
                <a href="{{url('approved', $appoint->id)}}" class='btn btn-success'>Approve</a>
        </td>
            <td>
                <a href="{{url('cancelled', $appoint->id)}}" class='btn btn-danger'>Cancel</a>
        </td>
        <td>
                <a href="{{url('emailview', $appoint->id)}}" class='btn btn-primary'>Send Mail</a>
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
</div>
  </body>
</html>