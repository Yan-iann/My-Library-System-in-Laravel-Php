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
.container{
    width: 10000px;
}
.card-body{
    text-align: center;
}
#card-body {
    text-align: left;
}
</style>
<br>

<body>
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="title">
                        <h1 style="text-align: center; ">Alar International <br> Library</h1>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                             <thead>
                                 <tr>
                            <form style="text-align: center;"class="form-inline my-2 my-lg=0" type="get" action="{{ route('search') }}">
                            <td></td>
                            <td></td>
                            <td><input type="search" name="searchBk" class="form-control mr-sm2" placeholder="Search Book Title"></td>
                                <td><button class="btn btn-primary btn-sm" type="submit">Search</button></td>
                        </form>
                         </tr>
                        </thead>
                    </table>
                    </div>
                    <div class="card-body">
                        
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>BOOK Order</th>
                                        <th>Book Title</th>
                                        <th>Book Author</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($books as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td> 
                                        <td>{{ $item->Book_Title}}</td>
                                        <td>{{ $item->Book_Author}}</td>
                                        <td>
                                            <a href="{{ url('/Alarbooks/' . $item->Book_ID)}}" title="View Book Details"><button class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/Alarbooks/' . $item->Book_ID . '/edit') }}" title="Edit Book"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/Alarbooks' . '/' . $item->Book_ID) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Book" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <br/>
                        </div>
                        <a href="{{ url('/Alarbooks/create') }}" class="btn btn-success btn-sm" title="Add New Book">
                            Add New
                        </a>
                        <br>
                        <br>
                        <br>
                        <a  id="card-body" href="{{ url('/dashboard') }}" class="btn btn-dark" title="Add New Book">
                            Return Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection