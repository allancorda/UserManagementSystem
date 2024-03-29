<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel!';
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about', compact('title'));
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'Testing']
        );
        return view('pages.services')->with($data);
    }

    public function login(){
        $title = 'Login';
        return view('pages.login', compact('title'));
    }

}
