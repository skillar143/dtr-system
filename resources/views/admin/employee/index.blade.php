@extends('admin-layouts.master_layout')

@section('content')

<h1 class="mt-3">Employee List</h1>
<a href="" class="btn btn-sm btn-outline-danger float-end" data-bs-toggle="modal" data-bs-target="#addModal">Add Employee</a>
<div class="table-responsive mt-5 mx-3">
<table class="table table-striped" id="datatablesSimple">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Designation</th>
      <th scope="col">Birthday</th>
      <th scope="col">Ages</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>bayog</td>
      <td>IT dev</td>
    </tr>
    <tr>
      
      <td>Jacob</td>
      <td>sucol</td>
      <td>Music dev</td>
    </tr>
    <tr>
      
      <td>Larry the Bird</td>
      <td>@twitter</td>
      <td>Software Eng.</td>
    </tr>
  </tbody>
</table>
</div>
<!-- Button trigger modal -->


<!-- Modal -->
@include('admin/employee._add')

@endsection