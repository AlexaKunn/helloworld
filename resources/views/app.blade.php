@include('layout.header')


<section class="content container-fluid">

  <!--------------------------
    | Your Page Content Here |
    -------------------------->
 @yield('content')
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('layout.sidebar')
@include('layout.footer')
