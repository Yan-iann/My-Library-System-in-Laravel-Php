@extends('layout')
@section('content')
  
<style>

.images {
  text-align: right;
  margin-top: -230px;
}
 body{
    background-image: url('/images/libbg.jpg');
    background-attachment: fixed;
    background-size: cover;
}
.card-header {
  background-color: maroon;
  color: black;
}
.card-body {
   background-color: #dcdcdc;
}
.card{
  width: 1320px;
}
</style>

<body>
<div class="card" style="margin:20px; ">
    <div class="card-header"> Book   Details</div>
      <div class="card-body">
        <h4 class="card-title">Book Title: {{ $books->Book_Title }}</h4>
        <br>
        <p class="card-text">Book Publisher: {{ $books->Book_Publisher }}</p>
        <p class="card-text">Book Author: {{ $books->Book_Author }}</p>
        <p class="card-text">Book Publish: {{ $books->Book_Publish }}</p>
        <p class="card-text">Book Volume: {{ $books->Book_Volume }}</p>
        <div class="images">
              <img src="{{ asset($books->photo) }}"width='500' height ='300' class="img img-responsive" />
        </div>
       <br>
       <br>
        <a  href="{{ url('/Alarbooks') }}" class="btn btn-dark" title="Back">
                            Back
                        </a>
    </div>
    </hr>
  </div>
</div>
</body>
</body>