
@extends('admin-layouts.master_layout')

@section('content')
<h1 class="mt-3">Dashboard</h1>

<div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border border-5 border-top-0 border-end-0 border-bottom-0 border-primary shadow-lg m-3">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs fw-bolder text-primary text-uppercase mb-1">
                            Designation</div>
                        <div class="h5 mb-0 fw-bold text-gray-800">{{ $designations }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-address-card fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border border-5 border-top-0 border-end-0 border-bottom-0 border-success shadow-lg m-3">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs fw-bolder text-success text-uppercase mb-1">
                            Employee</div>
                        <div class="h5 mb-0 fw-bold text-gray-800">{{ $employees }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border border-5 border-top-0 border-end-0 border-bottom-0 border-info shadow-lg m-3">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs fw-bolder text-info text-uppercase mb-1">
                            Present</div>
                        <div class="h5 mb-0 fw-bold text-gray-800">0</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border border-5 border-top-0 border-end-0 border-bottom-0 border-danger shadow-lg m-3">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs fw-bolder text-danger text-uppercase mb-1">
                            Absent</div>
                        <div class="h5 mb-0 fw-bold text-gray-800">0</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    
</div>



@endsection