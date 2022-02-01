<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" href="{{asset('img/logo.png')}}" >
        
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset ('css/sb-admin/styles.css')}}" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.5.1.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
        <style>
            body {
                background-color: #fff; color: #636b6f; font-family: 'Raleway';
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <!-- topbar menu -->
        @include('admin-layouts._topbar')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <!-- sidebar menu -->
                @include('admin-layouts._sidebar')
            </div>
            <div id="layoutSidenav_content">
                <main>
                  @include('admin-layouts._alert')
                    <div class="container-fluid px-4">
                        @yield('content')
                    </div>
                </main>
                @include('admin-layouts._footer')
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset ('js/sb-admin/scripts.js')}}" defer></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset ('js/sb-admin/datatables-simple-demo.js')}}"></script>
      
         
        <script>
         $(document).ready(function(){
           $('.delete-employee').each(function() {
             $(this).click(function(event){
               $('#deleteEmployee').attr("action", "/employee/delete/"+$(this).data('employeeid')+"")
             })
           });
          $('.edit-employee').each(function() {
             $(this).click(function(event){
               $('#employeeUpdate').attr("action", "/employee/update/"+$(this).data('id')+"");
               $('#id').val($(this).data('id'));
               $('#firstname').val($(this).data('firstname'));
               $('#middlename').val($(this).data('middlename'));
               $('#lastname').val($(this).data('lastname'));
               $('#address').val($(this).data('address'));
               $('#designation').val($(this).data('designation'));
               $('#dob').val($(this).data('dob'));
               $('#age').val($(this).data('age'));
             })
           })
         });
        </script>
    </body>
</html>
