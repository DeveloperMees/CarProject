@extends('admin-core::master')

@section('title', __('admin-news::news.News') . ' - ' . __('admin-core::core.Settings'))

@section('content')



    <section>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.dashboard.show') }}">{{ __('admin-dashboard::dashboard.Dashboard') }}</a></li>
            <li>{{ __('admin-core::core.Settings') }}</li>
            <li class="active">{{ __('admin-news::news.News')}}</li>
        </ol>

        <h1><i class="fa fa-cog"></i> {{ __('admin-news::news.News')}}</h1>

    </section>

    @include('flash::message')

    <div class="container-fluid content">
        <div class="row">
            <div class="col-xs-12">

                <div class="row">
                    <div class="col-xs-12">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#tabAlgemeen" data-toggle="tab">{{ __('admin-core::core.General') }}</a></li>
                        </ul>
                    </div>
                </div>

                {!! FormHelper::horizontal(['route' => 'admin.settings.update', 'method' => 'PUT', 'left_column_class' => 'col-sm-3 col-md-2', 'right_column_class' => 'col-sm-9 col-md-10']); !!}

                    <div class="row tab-content">

                        <div id="tabAlgemeen" class="col-xs-12 tab-pane active">
                            {!! FormHelper::text('news[pagination]', __('admin-core::core.Per page'), setting('news.pagination')) !!}
                            {!! FormHelper::select('news[order_column]', __('admin-core::core.Default order'), ['publish_from' => __('admin-core::core.Publish from'), 'created_at' => __('admin-core::core.Created at')], setting('news.order_column')) !!}
                            {!! FormHelper::select('news[order_direction]', __('admin-core::core.Direction'), ['desc' => __('admin-core::core.Ascending'), 'asc' => __('admin-core::core.Descending')], setting('news.order_direction')) !!}
                            <br>
                            @if(\Auth::guard('admin')->user()->hasRole('superuser'))
                                {!! FormHelper::text('news[groups]', __('admin-core::core.Groups'), setting('news.groups'), ['placeholder' => __('admin-core::core.groups placeholder')]) !!}
                                {!! FormHelper::toggle('news[headers]', __('admin-core::core.Headers'), setting('news.headers')) !!}
                            @endif
                        </div>
                    </div>

                    <div class="form-footer">
                        <small>{{ __('admin-core::core.Fields with * are required') }}</small>
                        <button type="submit" class="btn btn-primary pull-right">{{ __('admin-core::core.Save') }}</button>
                    </div>

                {!! FormHelper::close(); !!}
            </div>
        </div>
    </div>

@endsection
