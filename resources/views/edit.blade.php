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
  <div class="card-header">Edit Book Details</div>
    <div class="card-body">
      
    <h2>Edit Book</h2>
    <form method="post" action="{{ url('Alarbooks/' .$books->Book_ID) }}">
       {!! csrf_field() !!}
       @method("PATCH")
      <input type="hidden"  name="Book_ID" value="{{$books->Book_ID}}">

      <div class="form-group">
      <label for="email">Book Title:</label>
      <input type="text" class="form-control" name="Book_Title" value="{{$books->Book_Title}}">
    </div>
    <div class="form-group">
      <label for="email">Publisher:</label>
      <input type="text" class="form-control" name="Book_Publisher" value="{{$books->Book_Publisher}}">
    </div>
    <div class="form-group">
      <label for="email">Author/s:</label>
      <input type="text" class="form-control" name="Book_Author" value="{{$books->Book_Author}}">
    </div>
    <div class="form-group">
      <label for="email">Year Published:</label>
      <input type="text" class="form-control" name="Book_Publish" value="{{$books->Book_Publish}}">
    </div>
    <div class="form-group">
      <label for="email">Volume:</label>
      <input type="text" class="form-control" name="Book_Volume" value="{{$books->Book_Volume}}">
    </div>
    <br>
    <button type="submit"  class="btn btn-success">Update Book</button>
  </form>
  <br>
  <a  href="{{ url('/Alarbooks') }}" class="btn btn-dark" title="Back">
                            Back
                        </a>
 </div>
</div>
</body>
@stop