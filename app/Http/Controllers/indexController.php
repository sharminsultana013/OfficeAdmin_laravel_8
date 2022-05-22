<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\services;
use App\Models\gallery;
use App\Models\client;
use App\Models\slider;
use App\Models\about;

class indexController extends Controller
{
    function index(){
        // return view('index');
        $products = product::latest()->take(6)->get();
        $services = services::latest()->take(6)->get();
        $galleries = gallery::latest()->take(6)->get();
        $clients = client::all();
        $sliders = slider::latest()->take(3)->get();
        $abouts = about::latest()->take(1)->get();
        return view('index',compact('products' , 'services' , 'galleries' , 'clients' , 'sliders' , 'abouts'));
    }
} 
