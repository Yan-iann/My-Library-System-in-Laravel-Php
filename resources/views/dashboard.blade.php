@extends('layout')
@section('content')
<style>
.title {
  text-align: center;
  text-justify: inter-word;
  background-color: maroon;
  color: white;
    padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
  font-family:cursive;
}
body{
    background-image: url('/images/libbg.jpg');
}
</style>
<body>
<div class="container">
		<br>
		<br>
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    	<div class="title">
                        <h1>Welcome To The Library </h1>
                        <h1>{{ $LoggedUser['Lib_FName'] }}</h1>
                    </div>
                        <br>
                        <br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br>
                         <a href="{{ url('/Alarbooks/') }}" class="btn btn-dark" title="View Library">
                            View Library
                        </a>
                        <br>
                        <br>
                        <a href="{{ route('logout') }}" class="btn btn-dark" title="Logout">
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection