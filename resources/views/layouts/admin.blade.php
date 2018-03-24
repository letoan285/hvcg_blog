<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title', 'Trang chu')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->

@include('include.admin.styles')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('include.admin.header')
  <!-- Left side column. contains the logo and sidebar -->

@include('include.admin.aside')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
    @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@include('include.admin.footer')

  <!-- Control Sidebar -->
@include('include.admin.right-aside')
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
@include('include.admin.script')
</body>
</html>
