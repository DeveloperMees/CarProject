@extends('master')
@section('content')
    <div id="login">
        @foreach ($errors->all() as $error)

            <div>{{ $error }}</div>

        @endforeach
        <form action="{{ route('session') }}" method="post">
            @csrf
            <h1>Login</h1>
            <div class="input-wrapper">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="input-wrapper">
                <label for="password">Wachtwoord</label>
                <input type="text" name="password" id="password">
            </div>

            <input type="submit" class="button">
        </form>
    </div>
@endsection
