@extends('master')

@section('content')
<div id="create">
    <section id="content">
        <div class="container-fluid">
            <h1>Create a car :)</h1>
            <form method="post" enctype="multipart/form-data" action="/admin/store">
                @csrf
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="name">hp</label>
                    <input type="text" name="hp" class="form-control" id="hp" placeholder="Enter hp">
                </div>
                <div class="form-group">
                    <label for="price">price</label>
                    <input type="number" name="price" class="form-control" id="price" placeholder="price">
                </div>
                <div class="form-group">
                    <label for="price">date</label>
                    <input type="date" name="date" class="form-control" id="date" placeholder="date">
                </div>
                <div class="form-group">
                    <label for="price">photo</label>
                    <input type="file" name="photo" class="form-control" id="photo" placeholder="photo">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
</div>

@stop

