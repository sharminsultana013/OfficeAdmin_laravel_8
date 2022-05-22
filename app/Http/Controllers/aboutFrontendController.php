<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
use App\Models\messageToClients;

class aboutFrontendController extends Controller
{
    function about() {
        // return view('about');
        // $abouts = about::latest()->take(1)->get();
        $abouts = about::all();
        $messageToClients = messageToClients::all();
        return view('about',compact('abouts' , 'messageToClients'));
    }
}
