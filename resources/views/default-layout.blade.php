
<!--Header-->
@include('fix-content.header')

<!--Lang-->
@include('client.navbar.navbar-lang')

<!--Navbar-->
@include('client.navbar.navbar-home')

<div class="page" id="app">
    <div class="page-content">
        <!-- CONTENT -->
        @yield('content')
    </div>
</div>

<!--Footer-->
@include('fix-content.footer')