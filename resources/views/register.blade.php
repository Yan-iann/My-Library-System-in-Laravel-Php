@extends('layout')
@section('content')
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
                <div class="card-header">{{ __('Register A Librarian') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('save') }}">

                        @if(Session::get('sucess'))
                        <div class="alert alert-success">
                            {{ Session::get('sucess')}}
                        </div>
                        @endif
                         @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail')}}
                        </div>
                        @endif
                        @csrf
                        <div class="row mb-3">
                            <label for="Fname" class="col-md-4 col-form-label text-md-end">First Name</label>
                            <div class="col-md-6">
                                <input id="Fname" type="text" class="form-control @error('Fname') is-invalid @enderror" name="Lib_FName" required autocomplete="Fname" autofocus placeholder="Enter First Name">
                            </div>
                        </div>
                         <div class="row mb-3">
                            <label for="Mname" class="col-md-4 col-form-label text-md-end">Middle Name</label>
                            <div class="col-md-6">
                                <input id="Mname" type="text" class="form-control @error('Mname') is-invalid @enderror" name="Lib_MName" required autocomplete="Mname" autofocus placeholder="Enter Middle Name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Lname" class="col-md-4 col-form-label text-md-end">Last Name</label>
                            <div class="col-md-6">
                                <input id="Lname" type="text" class="form-control @error('Lname') is-invalid @enderror" name="Lib_LName" required autocomplete="Lname" autofocus placeholder="Enter Last Name">
                            </div>
                        </div>
                          <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="Lib_Email" required autocomplete="email" placeholder="Enter Email Address">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="Lib_User" required autocomplete="username" placeholder="Enter Username">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="Lib_Pw" required autocomplete="new-password" placeholder="Enter Password">
                            </div>
                        </div>

                          <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"> Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="Confirm_Lib_Pw" required autocomplete="new-password" placeholder="Enter Password">
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Register
                                </button>
                            </div>
                             <a href="{{ route('login') }}">I already have an account, login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
