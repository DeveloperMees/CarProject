@if(\Auth::guard('admin')->user()->hasRole('superuser'))
    {!! FormHelper::text('news[groups]', __('admin-core::core.Groups'), setting('news.groups'), ['placeholder' => __('admin-core::core.groups placeholder')]) !!}
@endif

<legend>{{ __('admin-core::core.Overview') }}</legend>
{!! FormHelper::text('news[pagination]', __('admin-core::core.Per page'), setting('news.pagination')) !!}
{!! FormHelper::select('news[order_column]', __('admin-core::core.Default order'), ['publish_from' => __('admin-core::core.Publish from'), 'created_at' => __('admin-core::core.Created at')], setting('news.order_column')) !!}
{!! FormHelper::select('news[order_direction]', ' ', ['desc' => __('admin-core::core.Descending'), 'asc' => __('admin-core::core.Ascending')], setting('news.order_direction')) !!}
