<?php

namespace App\Http\Controllers;

use App\Joke;
use App\Http\Requests;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
    	$jokes = Joke::all();
    	return view('about', compact('jokes'));
    }

    public function store(Request $request)
    {
    	$joke = new Joke();
    	$joke->content = $request->get('joke');
    	$joke->save();

    	return redirect()->back();
    }
}
