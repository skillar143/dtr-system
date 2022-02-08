@extends('admin-layouts.master_layout')

@section('content')

<h1 class="mt-3">Designation List</h1>
<a href="" class="btn btn-sm btn-outline-danger float-end mx-3" data-bs-toggle="modal" data-bs-target="#addModal">Add Designation</a>
<div class="table-responsive mt-5 mx-3">
<table class="table table-striped" id="datatablesSimple">
  <thead>
    <tr>
      <th scope="col">I.D</th>
      <th scope="col">Designation Title</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($designations as $designation)
   <tr>
     <td>{{$designation->id}}</td>
     <td>{{$designation->designation}}</td>
     <td class="col-1">
          <a href="http://" class="btn-sm btn-outline-dark mx-1 edit-designation"
              data-bs-toggle="modal" data-bs-target="#editModal"
              data-designationid="{{ $designation->id }}" data-designation="{{ $designation->designation }}">   
          <i class="fas fa-edit"></i></a> 
              
              <div class="vr"></div>

          <a href="http://" class="btn-sm btn-outline-dark mx-1 delete-designation" data-designationid="{{ $designation->id }}" id="designationDelete"
              data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fas fa-minus"></i></a> 
     </td>
   </tr>
   @endforeach
  </tbody>
</table>
</div>
 @include('admin/designation._modal') 

@endsection

                              
                      





