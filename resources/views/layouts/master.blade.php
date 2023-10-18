@include('layouts.header')

@hasSection ('content')
    @yield('content')
@else
    <h1 class="heading-notfound">Page Content Not Found!</h1>
@endif


@include('layouts.footer')