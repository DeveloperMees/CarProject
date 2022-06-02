@extends('master')

@section('content')
    <section id="home">
        <section id="hero"></section>
        <section id="content">
            <div class="container-fluid">
                <h2>Available Cars!</h2>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
{{--                        @foreach( $brands as $brand)--}}
{{--                            {{ $brand->name }}--}}
{{--                            @if($brand->media('image')->first())--}}
{{--                                <img src="{{ $brand->media('image')->first()->getUrl() }}" alt="{{ page()->header }}">--}}
{{--                            @else--}}
{{--                                <img src="/img/overons.jpg" alt="Ons Team">--}}
{{--                            @endif--}}
{{--                        @endforeach--}}
                    </div>
                </div>
            </div>

                        shape for topsite
            <div class="shape" id="shape">
                <div class="text">
                    <h2>Wij gaan verhuizen</h2>
                    <p>Per 31 maart 2022 gaan wij verhuizen naar <span>Piet Heinstraat 16</span> te Goes.</p>
                </div>
                <a href="#" id="disablePopupButton" class="x">X</a>
            </div>
        </section>
    </section>

@stop

