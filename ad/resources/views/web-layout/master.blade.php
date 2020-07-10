<!DOCTYPE html>
<html>
    <head>
        @include('web-layout.block.head')
    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            @include('web-layout.block.navbar')
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            @include('web-layout.block.aside')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
             @include('web-layout.block.header')
                <!-- Main content -->
                <section class="content">
                  @yield('content')
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            @include('web-layout.block.footer')
            
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
      
        @include('web-layout.block.foot')
    </body>
</html>