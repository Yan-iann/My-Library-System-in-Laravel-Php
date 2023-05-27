<?php

namespace App\Http\Controllers;

use App\Models\librarian;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; 
use Illuminate\Support\Facades\Hash;

class mainController extends Controller
{
    public function login()
    {
        return view('login');
    }//end of log in
    public function register()
    {
        return view('register');
    }//end of register

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [

        'Lib_FName' => 'required',
        'Lib_MName' => 'required',
        'Lib_LName' => 'required',
        'Lib_Email' => 'required',
        'Lib_User' => 'required',
        'Lib_Pw' => 'required',

    ]);
    
    if($validator->fails())
    {
        return redirect('/')->withErrors($validator)->withInput()->with('fail','Something went wrong. Please try again.');
    }
    else
    {
        $lib = new librarian;
        $lib->Lib_FName = $request->Lib_FName;
        $lib->Lib_MName = $request->Lib_MName;
        $lib->Lib_LName = $request->Lib_LName;
        $lib->Lib_Email = $request->Lib_Email;
        $lib->Lib_User = $request->Lib_User;
        $lib->Lib_Pw = Hash::make($request->Lib_Pw);
        if($lib->save())
            {
                return back()->with('sucess','Succesfully Registered');
            }
        else
            {
                return back()->with('error','Failed To Registered');
            }
    }
    }//end of save

    public function check(Request $request)
    {
        $request->validate([
            'Lib_User' => 'required',
            'Lib_Pw' => 'required',
        ]);
        $userInfo = librarian::where('Lib_User','=', $request->Lib_User)->first();

        if(!$userInfo)
        {
            return back()->with('fail', 'Username not found');
        }
        else
        {
            if(Hash::check($request->Lib_Pw,$userInfo->Lib_Pw))
            {
                $request->session()->put('LoggedUser',$userInfo->Lib_FName);
                return redirect('/dashboard');
            }
            else
            {
                return back()->with('fail', 'Incorrect password');
            }
        }
    }//end of check
    public function dashboard()
    {
        $data = ['LoggedUser'=>librarian::where('Lib_FName','=',session('LoggedUser'))->first()];
        return view('dashboard',$data);
    }
    public function logout()
    {
        if(session()->has('LoggedUser'))
        {
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }
}
