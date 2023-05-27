@extends('layout')
@section('content')
<style>
    
    body{
    background-image: url('/images/libbg.jpg');
    background-attachment: fixed;
    background-size: cover;
}
.title{
    background-color: maroon;
    color: white;
    margin-top: 3px;
    padding-top: 20px;
    padding-bottom: 20px;
    font-family: 'Times New Roman', serif;
}
.card-header{
  background-color: maroon;
  color: white;
}
.card{
   background-color: #dcdcdc;
}
</style>

<body>
<div class="card" style="margin:20px;">
  <div class="card-header">Upload New Book</div>
    <div class="card-body">
      
    <h2>Add A Book</h2>
    <form method="post" action="{{ url('Alarbooks') }}" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <div class="form-group">
      <label for="email">Book Title:</label>
      <input type="input" class="form-control"  placeholder="Enter book title" name="Book_Title">
    </div>
    <div class="form-group">
      <label for="email">Publisher:</label>
      <input type="input" class="form-control"  placeholder="Enter book publisher" name="Book_Publisher">
    </div>
    <div class="form-group">
      <label for="email">Author/s:</label>
      <input type="input" class="form-control"  placeholder="Enter book author" name="Book_Author">
    </div>
    <div class="form-group">
      <label for="email">Year Published:</label>
      <input type="input" class="form-control"  placeholder="Enter year publish" name="Book_Publish">
    </div>
    <div class="form-group">
      <label for="email">Volume:</label>
      <input type="input" class="form-control"  placeholder="Enter book volume" name="Book_Volume">
    </div>
    <br>
    <div class="form-group">
      <label for="email">Upload Cover Photo:</label>
      <input class="form-control" id="photo" type="file" name="photo">
    </div>
    <br>
    {{ csrf_field() }}
    <button type="submit"  class="btn btn-success">Register Book</button>
  </form>
  <br>
  <br>
  <a  href="{{ url('/Alarbooks') }}" class="btn btn-dark" title="Back">
                            Back
                        </a>
 </div>
</div>
</body>
@stop