@include('includes.header')

<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Admin Wrap</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
@include('includes.tophead')
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
   @include('includes.aside')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
    <!-- @include('includes.modals') -->
        <!-- ============================================================== -->
        <div class="container-fluid">
           @yield('content')
        </div>

@include('includes.footer')
<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-wrap/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 12:49:14 GMT -->
</html>