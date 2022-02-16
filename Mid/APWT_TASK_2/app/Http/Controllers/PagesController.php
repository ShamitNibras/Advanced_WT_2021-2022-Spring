<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view("Home");
    }

    public function home()
    {
        return view("Home");
    }

    public function service()
    {
        $service=array("Web Development","Web Design","Graphics Design","Logo Design","Software Developer","Software Designer");
        return view("service")
        ->with('service',$service);
    }

    public function ourTeams()
    {
        return view("Ourteams");
    }
    public function aboutus()
    {
        return view('aboutus');
    }

    public function contact()
    {
        return view('contact');
    }
//validation
    public function login(){
        return view('Login');
    }

    public function loginSubmitted(Request $request){
        $user= array('email@email.com','123456');
        $validate = $request->validate([
            'email'=>'email',
            'password'=>'required|min:4|max:10',
        ],
        [
            'password.required'=>'Please put your Password',
            'email.required'=>'Please put your valid Email',
            'password.min'=>'password must be greater than 4 charcters'
        ]
        );
        if($request->email==$user[0] && $request->password==$user[1])
        {
            return  redirect('/home');
        }
        return redirect()->route('login');
    }

    public function registration(){
        return view('Register');
    }

    public function registrationSubmitted(Request $request){
        $user= array('email@email.com','123456','gender');
        $validate = $request->validate([
            'email'=>'email',
            'password'=>'required|min:4|max:10',
            'gender'=>'gender',
        ],
        [
            'password.required'=>'Please put your Password',
            'email.required'=>'Please put your valid Email',
            'gender'=>'Please put your gender',
            'password.min'=>'password must be greater than 4 charcters'
            
        ]
        );
        if($request->email==$user[0] && $request->password==$user[1] && $request->gender==$user[2])
        {
            return  redirect('/home');
        }
        return redirect()->route('Register');
    }
}
