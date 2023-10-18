@include('admin_header')

@hasSection ('admin')
    @yield('admin')
@else
    <h1 class="heading-notfound">Page Content Not Found!</h1>
@endif


@include('admin_footer')