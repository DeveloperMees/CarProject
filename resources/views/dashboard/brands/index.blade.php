@extends('dashboard.index')

@section('dashboardContent')
    <section id="brands">
        @foreach($brands as $brand)
            <h1>{{ $brand->name }}</h1>
            @foreach($brand->images as $image)
                <img src="{{ $image->url }}" alt="">
            @endforeach

            <a href="{{ route('/brands/edit', ['id' => $brand->id]) }}">aanpassen</a>
        @endforeach
    </section>
@stop
