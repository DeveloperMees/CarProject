@extends('master')
@section('content')
    <div id="login">
        <form method="POST" action="{{ route('/register/store') }}"  id="userForm">
            @csrf
            <h1>Registeren</h1>
            <div class="input-wrapper">
                <label for="name">Naam</label>
                <input type="text" name="name" id="name">
                @error('name')
                <div class="alert-danger" style="background: none; border: none">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-wrapper">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                @error('email')
                <div class="alert-danger" style="background: none; border: none">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-wrapper">
                <label for="password">Wachtwoord</label>
                <input type="password" name="password" id="password">
                @error('password')
                <div class="alert-danger" style="background: none; border: none">{{ $message }}</div>
                @enderror
            </div>

            <input type="submit" class="button">
        </form>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>


{{--    // werkt voor een rare manier niet dan maar oldscool--}}

{{--    <script>--}}
{{--        (function () {--}}
{{--            document.querySelector('#userForm').addEventListener('submit', function (e) {--}}
{{--                e.preventDefault()--}}
{{--                var test = document.querySelector('#name');--}}
{{--                axios.post(this.action, {--}}
{{--                    'name': document.querySelector('#name').value,--}}
{{--                    'email': document.querySelector('#email').value,--}}
{{--                    'password': document.querySelector('#password').value,--}}
{{--                    'password_confirmation': document.querySelector('#password_confirm').value,--}}
{{--                })--}}
{{--                    .then((response) => {--}}

{{--                        console.log('succes');--}}
{{--                        const errorMessages = document.querySelectorAll('.text-danger')--}}
{{--                        errorMessages.forEach((element) => element.textContent = '')--}}
{{--                        const formControls = document.querySelectorAll('.border-danger')--}}
{{--                        formControls.forEach((element) => element.classList.remove('border', 'border-danger'))--}}
{{--                    })--}}
{{--                    .catch((error) => {--}}
{{--                        const errors = error.response.data.errors;--}}
{{--                        const firstItem = Object.keys(errors)[0];--}}
{{--                        const firstItemDom = document.getElementById(firstItem);--}}
{{--                        const firstErrorMessage = errors[firstItem][0];--}}
{{--                        console.log(firstItemDom)--}}

{{--                        // remove all error message--}}
{{--                        const errorMessages = document.querySelectorAll('.text-danger')--}}
{{--                        errorMessages.forEach((element) => element.textContent = '')--}}

{{--                        // remove all error messages with the highlighted error box--}}
{{--                        const formControls = document.querySelectorAll('.border-danger')--}}
{{--                        formControls.forEach((element) => element.classList.remove('border', 'border-danger'))--}}

{{--                        // show the error message--}}
{{--                        firstItemDom.insertAdjacentHTML('afterend', `<div class="text-danger">${firstErrorMessage}</div>`)--}}

{{--                        // highlight the form control with highlighted error box--}}
{{--                        firstItemDom.classList.add('border-danger');--}}
{{--                    });--}}
{{--            });--}}
{{--        }());--}}
{{--    </script>--}}
@endsection
