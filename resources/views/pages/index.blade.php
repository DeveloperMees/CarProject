@extends('master')

@section('content')
    <section id="home">
        <section id="hero"></section>
        <section id="content">
            <div class="container-fluid">
                <h2>Available Cars!</h2>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        @foreach($cars as $car)
                            @include('partials.object', ['cars' => $car])
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </section>

@stop

