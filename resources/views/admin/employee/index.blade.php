@extends('admin-layouts.master_layout')

@section('content')

<h1 class="mt-3">Employee List</h1>
<a href="" class="btn btn-sm btn-outline-danger float-end mx-3" data-bs-toggle="modal" data-bs-target="#addModal">Add Employee</a>
<div class="table-responsive mt-5 mx-3">
<table class="table table-striped" id="datatablesSimple">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Designation</th>
      <th scope="col">Birthday</th>
      <th scope="col">Age</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($employees as $employee)
   <tr>
     <td>{{$employee->getFullname()}}</td>
     <td>{{$employee->address}}</td>
     <td>{{$employee->designation}}</td>
     <td>{{$employee->dob}}</td>
     <td>{{$employee->age}}</td>
     <td class="col-1">
          <a href="http://" class="btn-sm btn-outline-dark mx-1 edit-employee"
              data-bs-toggle="modal" data-bs-target="#editModal"
              data-id="{{ $employee->id }}"  data-firstname="{{ $employee->firstname }}"  
              data-middlename="{{ $employee->middlename }}"  data-lastname="{{ $employee->lastname }}"  
              data-address="{{$employee->address}}"  data-designation="{{ $employee->designation }}"  
              data-dob="{{ $employee->dob }}"  data-age="{{ $employee->age }}">    
          <i class="fas fa-edit"></i></a> 
              
              <div class="vr"></div>

          <a href="http://" class="btn-sm btn-outline-dark mx-1 delete-employee" data-employeeid="{{ $employee->id }}" id="employeeDelete"
              data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fas fa-minus"></i></a> 
     </td>
   </tr>
   @endforeach
  </tbody>
</table>
</div>
@include('admin/employee._modal')

@endsection

                              
                      





