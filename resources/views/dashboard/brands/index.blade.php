@extends('dashboard.index')

@section('dashboardContent')
    <section id="brands">
        <div class="row">
            @foreach($brands as $brand)
                <div class="col-12 col-md-6 col-lg-3 mt-3">
                    <div class="tab">

                        <h1>{{ $brand->name }}</h1>
                        @foreach($brand->images as $image)
                            <img src="{{ $image->url }}" alt="">
                        @endforeach
                        <a href="{{ route('/brands/edit', ['id' => $brand->id]) }}">aanpassen</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@stop
