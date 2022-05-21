<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\services;
use App\Models\gallery;
use App\Models\client;
use App\Models\slider;

class indexController extends Controller
{
    function index(){
        // return view('index');
        $products = product::all();
        $services = services::all();
        $galleries = gallery::all();
        $clients = client::all();
        $sliders = slider::all();
        return view('index',compact('products' , 'services' , 'galleries' , 'clients' , 'sliders'));
    }
} 
