
@extends('admin-layouts.master_layout')

@section('content')
<h1 class="mt-3">Report</h1>
<!-- <a href="/filtered" class="btn btn-sm btn-outline-success mx-3">Export to Excel</a> -->
  <form class="w-25 col ms-auto me-0 me-md-3 my-2 my-md-0" action="{{route('report.filter')}}" method="POST">
    @csrf
  <div class="input-group ">
  <select class="form-select" id="inputGroupSelect04" name="month" aria-label="Example select with button addon">
    <option selected>Choose...</option>
    <option value="01">January</option>
    <option value="02">February</option>
    <option value="03">March</option>
    <option value="04">April</option>
    <option value="05">May</option>
    <option value="06">June</option>
    <option value="07">July</option>
    <option value="08">August</option>
    <option value="09">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
  </select>
  <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-filter"></i></button>
</div>

  </form>
<div class="table-responsive mt-2 mx-3">
<table class="table table-striped" id="example">
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