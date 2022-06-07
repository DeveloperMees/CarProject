@extends('dashboard.index')

@section('dashboardContent')
    <section id="brands">
        <div class="row">
            <div class="col-12">
                <form action="" method="GET">
                    <input type="text" class="twan" name="search" placeholder="Vind merk">
                </form>
            </div>
            <div class="col-12">
                <div class="row" id="results">
                    @foreach($brands as $brand)
                        <div class="col-12 col-md-6 col-lg-3 mt-3" id="results">
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
            </div>

        </div>
    </section>

@stop


<script id="template">
    <div class="col-12 col-md-6 col-lg-3 mt-3" id="results">
        <div class="tab">
            <h1>@{{ name }}</h1>
            <img src="@{{ image }}" alt="">
                <a href="">aanpassen</a>
        </div>
    </div>
</script>
