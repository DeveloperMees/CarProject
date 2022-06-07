@extends('dashboard.index')

@section('dashboardContent')
    <section id="brands">
        <div class="top-content">
            @if (\Session::has('message'))
                <div class="alert alert-success">
                    {!! \Session::get('message') !!}
                </div>
            @endif
            <div class="top">
                <h2>Merk Aanpassen</h2>
                <form action="{{ route('/brands/delete', ['id' => $brand->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="submit" value="Verwijderen">
                </form>
            </div>
        </div>

        @if($errors->any())
            <h4>{{$errors->first()}}</h4>
        @endif

        <form action="{{ route('/brands/update', ['id' => $brand->id]) }}"  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control" value="{{$brand->name}}" name="name" required>
            </div>

            <h2 class="mt-5">Afbeeldingen</h2>
            <p class="mt-3">Afbeelding toevoegen</p>
            <input type="file" name="file">
            @if(!count($brand->images) == 0)
                <p class="mt-3">Afbeelding verwijderen</p>
                <div class="row">
                    @foreach($brand->images as $image)
                        <div class="col-12 col-md-3 col-lg-2 mt-2 image-holder">
                            <img src="{{ $image->url }}" alt="{{ $image->title }}">
                            <input type="checkbox" value="{{ $image->id }}" name="delete-image[]">
                        </div>
                    @endforeach
                </div>
            @endif
            <button class="button mt-4 d-block" type="submit">Submit</button>
        </form>

    </section>

@stop
