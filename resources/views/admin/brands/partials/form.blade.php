<div class="row">
    <div class="col-xs-12 col-xl-9">
        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#tabGeneral" data-toggle="tab">Algemeen</a></li>
            <li><a href="#tabImages" data-toggle="tab">Image</a></li>
            <li class="hidden-xl"><a href="#tabProperties" data-toggle="tab">{{ __('admin-news::news.Settings') }}</a></li>
        </ul>
    </div>
</div>

{!! FormHelper::horizontal(['model' => $product, 'store' => 'admin.brands.store', 'update' => 'admin.brands.update', 'id' => 'productForm']); !!}

<div class="row tab-content">

    <div id="tabGeneral" class="col-xs-12 col-xl-9 tab-pane active">
        {!! FormHelper::text('name', 'Naam merk *'); !!}
        {!! FormHelper::editor('description', 'Merk beschrijving'); !!}


    </div>

    <div id="tabImages" class="col-xs-12 col-xl-9 tab-pane">
        {!! FormHelper::uploader('image', $product->media('image')) !!}
    </div>

    <div id="tabBrochure" class="col-xs-12 col-xl-9 tab-pane">
        {!! FormHelper::text('brochure', 'Brochure'); !!}
    </div>

    @if(setting('news.headers'))
        <div id="tabHeaders" class="col-xs-12 col-xl-9 tab-pane">
            {!! FormHelper::headers('headers', $product->headers) !!}
        </div>
    @endif

    <div id="tabProperties" class="col-xs-12 col-xl-3 tab-pane">
        <div class="panel panel-default">
            <div class="panel-heading visible-xl">Instellingen</div>
            <div class="panel-body">
                <div class="form-group ">

                </div>
                {!! FormHelper::toggle('active', 'Actief', (!$product->exists ? true : null)) !!}
            </div>
        </div>
    </div>

</div>

<div class="form-footer">
    <small>{{ __('admin-core::core.Fields with * are required') }}</small>

    {!! FormHelper::hidden('type_submit', null, ['id' => 'type_submit']) !!}
    <button type="submit" class="btn btn-primary pull-right submit" data-type="save_return">{{ __('admin-core::core.Save and back') }}</button>
    <button type="submit" class="btn btn-primary pull-right submit" style="margin-right: 15px;" data-type="save">{{ __('admin-core::core.Save') }}</button>
    <a href="{{redirect()->route('admin.brands.index')->getTargetUrl()}}" class="pull-right" style="margin: 7px 20px 0 0;">{{ __('admin-core::core.Cancel') }}</a>
</div>

{!! FormHelper::close(); !!}

@section('scripts')
    @parent
    <script>
        $(document).ready(function () {
            if ($('#seo_title').val() == '') {
                $('#name').keyup(function () {
                    $('#seo_title').val($(this).val());
                });
            }

            $('button.submit').click(function (e) {
                $('#type_submit').val($(this).data('type'));
                e.preventDefault();

                $('#productForm').submit();
            });
        });

    </script>
@endsection
