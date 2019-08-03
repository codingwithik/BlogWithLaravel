<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        //passing values to the view
        $title = 'Welcome To Laravel';
        //method 1
        //return view('pages.index', compact('title'));

        //method 2
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){

        // passing multiple data
        $data = array(

            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );

        return view('pages.services')->with($data);
    }
}
