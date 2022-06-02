@extends('dashboard.index')

@section('dashboardContent')
    <section id="brands">
        <div class="top-content">
            @if (\Session::has('message'))
                <div class="alert alert-success">
                    {!! \Session::get('message') !!}
                </div>
            @endif
            <h2>Merk toevoegen</h2>
        </div>

        @if($errors->any())
            <h4>{{$errors->first()}}</h4>
        @endif

        <form action="{{ route('/brands/store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <input type="file" name="file" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </section>
@stop
