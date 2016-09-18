<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutController extends Controller
{
    public function index()
    {
    	return view('about');
    }

    public function store(Request $request)
    {
    	$name = $request->get('firstName');
    	return $name;
    }
}
