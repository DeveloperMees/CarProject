<!doctype html>
<html lang="nl">
<head>
    @include('partials.head')
</head>

<body>
@include('partials.header')
<div id="app">
    @yield('content')
</div>

{{--@include('flash::message')--}}
{{--<div class="errormessage">--}}
{{--    {{ displayAlert() }}--}}
{{--</div>--}}
@include('partials.footer')

@section('scripts')
    <script src="{{mix('/js/app.js')}}"></script>
@show
</body>
</html>


