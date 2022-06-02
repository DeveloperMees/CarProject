@extends('admin-core::master')

@section('title', __('admin-core::core.Create') . ' - Product')

@section('content')

    <section>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.dashboard.show') }}">{{ __('admin-dashboard::dashboard.Dashboard') }}</a></li>
            <li><a href="{{ route('admin.brands.index') }}">Producten</a></li>
            <li class="active">{{ __('admin-core::core.Create') }}</li>
        </ol>

        <h1>Property aanmaken</h1>

    </section>

    @include('flash::message')

    <div class="container-fluid content">
        <div class="row">
            <div class="col-xs-12">
                @include('admin.cars.partials.form')
            </div>
        </div>
    </div>

@endsection
