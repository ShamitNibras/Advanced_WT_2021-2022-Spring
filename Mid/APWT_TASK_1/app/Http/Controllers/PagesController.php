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
}
