@extends('admin-core::master')

@section('title', 'Producten')

@section('content')

    <section>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.dashboard.show') }}">{{ __('admin-dashboard::dashboard.Dashboard') }}</a></li>
            <li class="active">brands</li>
        </ol>
        <h1>brands</h1>
    </section>

    @include('flash::message')

    <div class="container-fluid content">
        <div class="row">
            <div class="col-xs-12">

                <a href="{{ route('admin.brands.create') }}" class="btn btn-success pull-left"><span
                            class="fa fa-plus"></span> {{ __('admin-core::core.Create') }}</a>

                <table
                        data-toggle="table"
                        data-classes="table table-no-bordered table-striped table-hover"
                        data-url="{{ route('admin.brands.data') }}"
                        data-sort-name="name"
                        data-sort-order="asc"
                        data-pagination="true"
                        data-search="true"
                        data-locale="{{ \App::isLocale('nl') ? 'nl_NL' : 'en_US' }}">
                    <thead>
                    <tr>
                        <th data-field="id" data-sortable="true">#</th>
                        <th data-field="name" data-sortable="true">Titel</th>
                        <th data-field="active" data-formatter="activeFormatter">Actief</th>
                        <th data-field="featured" data-formatter="activeFormatter">Uitgelicht</th>
                        <th data-formatter="actionsFormatter"></th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    @parent
    <script>
        function actionsFormatter(value, row, index) {
            url = {
                edit: "{{ route('admin.brands.edit', ['id' => 'id']) }}",
                destroy: "{{ route('admin.brands.destroy', ['id' => 'id']) }}",
                server: "{{ $_SERVER['SERVER_NAME'] }}"
            };
            result = {
                edit: url.edit.replace('id', row.id),
                destroy: url.destroy.replace('id', row.id)
            }
            return '<div class="actions pull-right">\n\
                        <a href="' + result.edit + '" class="btn btn-xs btn-default"><span class="fa fa-fw fa-pencil"></span></a>\n\
                        <a class="btn btn-xs btn-danger" data-toggle="delete-button" data-url="' + result.destroy + '"><span class="fa fa-fw fa-times"></span></a>\n\
                    </div>';
        }

        function activeFormatter(value, row, index) {
            if (value == 1) {
                return '<i class="fa fa-check text-success"></i>';
            } else {
                return '<i class="fa fa-times text-danger"></i>';
            }
        }
    </script>
@endsection
