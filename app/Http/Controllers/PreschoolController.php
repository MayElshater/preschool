<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PreschoolController extends Controller
{
    //
    public function home1(){
        $title = "Home";
        return view('home1', compact('title'));
    }
    public function team(){
        $title = "Teachers";
        return view('team', compact('title'));
    }
    public function error(){
        $title = "404 Error";
        return view('error', compact('title'));
    }
    public function about(){
        $title = "About";
        return view('about', compact('title'));
    }
    public function appointment(){
        $title = "Appointment";
        return view('appointment', compact('title'));
    }
    public function calltoaction(){
        $title = "Become A Teachers";
        return view('calltoaction', compact('title'));
    }
    public function classes(){
        $title = "Classes";
        return view('classes', compact('title'));
    }
    public function contact(){
        $title = "Contact Us";
        return view('contact', compact('title'));
    }
    public function facility(){
        $title = "Facility";
        return view('facility', compact('title'));
    }
    public function testimonial(){
        $title = "Testimonial";
        return view('testimonial', compact('title'));
    }/*
    public function children()
    {
        $title ="Children";
        return view('admin.childrenTable', compact('title'));
    }*/
    public function teachers()
    {   
        $title ="Teachers";
        return view('admin.teachersTable', compact('title'));
    }
    public function class()
    {   
        $title ="Classes";
        return view('admin.classesTable', compact('title'));
    }

    
   
   
}
