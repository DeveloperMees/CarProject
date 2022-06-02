<?php

use Carbon\Carbon;

?>

@inject('data', 'Topsite\News\Admin\Services\DashboardService')

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa {{ config('admin.news.navigation.icon') }}" aria-hidden="true"></i>&nbsp;&nbsp;{{ config('admin.news.navigation.name') }} ({{ $data->getTotal() }} {{ __('admin-core::core.items') }})</h3>
    </div>
    <div class="table-responsive">
        @if( $data->getItems() )
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('admin-core::core.Title') }}</th>
                    <th class="text-right">{{ __('admin-core::core.Modified') }}</th>
                    <th class="text-center">{{ __('admin-core::core.Status') }}</th>
                </tr>
                </thead>
                @foreach($data->getItems() as $item)
                    <tr>
                        <td abbr="">{{ $item->id }}</td>
                        <td abbr=""><a href="{{ route('admin.news.edit', ['page' => $item->id ]) }}">{{ $item->title }}</a></td>
                        <td class="text-right"><a href="{{ route('admin.news.edit', ['page' => $item->id ]) }}">{{ ucfirst(Carbon::parse($item->updated_at)->formatLocalized('%d-%m-%Y')) }}</a></td>
                        <td class="text-center">
                            @if( $item->active ==1)
                                <i class="fa fa-check-circle" aria-hidden="true" title="{{ __('admin-core::core.Visible') }}" style="color:green;"></i>
                            @endif
                            @if( $item->active != 1)
                                <i class="fa fa-times-circle" aria-hidden="true" title="{{ __('admin-core::core.Not active') }}" style="color:red;"></i>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        @else
            <div class="alert alert-danger">
                {{ __('admin-core::core.No items found') }}
            </div>
        @endif
    </div>
    <div class="panel-footer text-center">
        <a href="{{ route('admin.news.index') }}">{{ __('admin-core::core.Show all items') }}</a>
    </div>
</div>
