<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" href="{{asset('img/logo.png')}}" >
        
      
        <link href="{{asset ('css/sb-admin/styles.css')}}" rel="stylesheet" />
        
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
        

      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
        <style>
            body {
                background-color: #fff; color: #636b6f; font-family: 'Raleway';
            }
            main {
                 font-family: 'nunito';
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
        <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
        
        <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset ('js/sb-admin/datatables-simple-demo.js')}}"></script>
         
        <script>
         $(document).ready(function(){

           //employee

           $('.delete-employee').each(function() {
             $(this).click(function(event){
               $('#deleteEmployee').attr("action", "/employee/delete/"+$(this).data('employeeid')+"")
             })
           });
          $('.edit-employee').each(function() {
             $(this).click(function(event){
               $('#employeeUpdate').attr("action", "/employee/update/"+$(this).data('id')+"");
               $('#id').val($(this).data('id'));
               $('#employeeid').val($(this).data('employeeid'));
               $('#firstname').val($(this).data('firstname'));
               $('#middlename').val($(this).data('middlename'));
               $('#lastname').val($(this).data('lastname'));
               $('#address').val($(this).data('address'));
               $('#designation').val($(this).data('designation'));
               $('#dob').val($(this).data('dob'));
               $('#age').val($(this).data('age'));
             })
           });


          //designation

          $('.delete-designation').each(function() {
             $(this).click(function(event){
               $('#deleteDesignation').attr("action", "/designation/delete/"+$(this).data('designationid')+"")
             })
           });
          $('.edit-designation').each(function() {
             $(this).click(function(event){
               $('#designationUpdate').attr("action", "/designation/update/"+$(this).data('designationid')+"");
               $('#designation').val($(this).data('designation'));
             })
           });




         });

         $(document).ready(function() {
    $('#example').DataTable( {
      "searching": false,
      "paging": false,
      "ordering": false,
        dom: 'Bfrtip',
      
        buttons: [
             'excel', 'pdf', 'print',
        ]
    } );
} );

        </script>
    </body>
</html>
