<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\book;
use Illuminate\Support\Facades\Redirect;   

class bookController extends Controller
{
    public function index()
    {
        $books = book::all();
        return view ('index')->with('books', $books);
    }
    public function show($Book_ID)
    {
        $book = book::find($Book_ID);
        return view ('show')->with('books', $book);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
       $validator = Validator::make($request->all(), [

        'Book_Title' => 'required',
        'Book_Publisher' => 'required',
        'Book_Author' => 'required',
        'Book_Publish' => 'required',
        'Book_Volume' => 'required',
        'photo'=> 'required',

        ]);
    
        if($validator->fails())
        {
        return redirect('/Alarbooks')->withErrors($validator)->withInput()->with('fail','Something went wrong. Please try again.');
        }
        else
        {
        $requestData = $request->all();
        $filename = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images',$filename,'public');
        $requestData["photo"] = '/storage/' .$path;
        book::create($requestData);
                return redirect('/Alarbooks')->with('flash_message','Succesfully Registered');
        }
    }//end of createBook

    public function edit($Book_ID)
    {
        $book = book::find($Book_ID);
        return view ('edit')->with('books', $book);
    }
     public function update(Request $request, $Book_ID)
    {
        $book = book::find($Book_ID);
        $input = $request->all();
        $book->update($input);
        return redirect('Alarbooks')->with('flash_message', 'book Updated!');  
    }
    public function destroy($Book_ID)
    {
        book::destroy($Book_ID);
        return redirect('Alarbooks')->with('flash_message','Book Deleted');
    }
    public function search()
    {
        $searchText = $_GET['searchBk'];
        $book = book::where('Book_Title','LIKE','%'.$searchText.'%')->get();

        return view('search',compact('book'));
    }
}
