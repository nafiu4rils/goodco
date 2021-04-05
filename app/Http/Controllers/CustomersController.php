<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function service(){
    	  return view('services');
    }
    public function aboutus(){
    	  return view('aboutus');
    }
    public function contactus(){
    	 return view('contactus');
    }
    public function index(){
    	 return view('welcome');
    }
}
