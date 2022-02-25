
@extends('admin-layouts.master_layout')

@section('content')
<h1 class="mt-3">attendance</h1>
<div class="table-responsive mt-5 mx-3">
<table class="table table-striped" id="datatablesSimple">
  <thead>
    <tr>
      <th scope="col">Employee I.D</th>
      <th scope="col">Name</th>
      <th scope="col">Time In</th>
      <th scope="col">Time Out</th>
      <th scope="col">Status</th>
      <th scope="col">Time In</th>
      <th scope="col">Time Out</th>
      <th scope="col" >Status</th>
      <th scope="col" >Day</th>
      <th scope="col">Date</th>
      <tr class="bg-transparent border-none">
        <th></th>
        <th></th>
        <th colspan="3" class="text-center">Morning Session</th>
        <th colspan="3" class="text-center">Afternoon Session</th>
    </tr>
    </tr>
  </thead>
  <tbody>
   @foreach ($attendance as $employee)
   <tr>
     <td>{{$employee->employee_id}}</td>
     <td>{{$employee->getFullname()}}</td>
     <td>{{$employee->timeIn_am}}</td>
     <td>{{$employee->timeOut_am}}</td>
     <td>{{$employee->am_status}}</td>
     <td>{{$employee->timeIn_pm}}</td>
     <td>{{$employee->timeOut_pm}}</td>
     <td>{{$employee->pm_status}}</td>
     <td>{{$employee->getDay()}}</td>
     <td>{{$employee->doa}}</td>
   </tr>
   @endforeach
  </tbody>
</table>
</div>
@endsection