@extends('layout')
@section('content')
<br>
<br>
<br>
<br>
<style>
.title{
    background-color: maroon;
    color: white;
    margin-top: 3px;
    padding-top: 10px;
    font-family: sans-serif;
}
body{
    background-image: url('/images/libbg.jpg');
}
</style>
<body>
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="title">
                <h1 style="text-align: center;">Alar International <br>Library</h1>
                <br>
            </div>
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('check') }}">
                        @if(Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Username:</label>

                            <div class="col-md-6">
                                <input id="username" placeholder="Enter Username" type="username" class="form-control" name="Lib_User" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                <span class="text-danger">@error('Lib_User'){{ $message }}@enderror</span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Password:</label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Enter Password" type="password" class="form-control" name="Lib_Pw" required autocomplete="current-password">
                                <span class="text-danger">@error('Lib_Pw'){{ $message }}@enderror</span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <a href="{{ route('register') }}">I don't have an account, create new</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
