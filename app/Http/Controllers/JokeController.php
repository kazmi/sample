<?php

namespace App\Http\Controllers;

use App\Joke;
use App\Http\Requests;
use Illuminate\Http\Request;

class JokeController extends Controller
{
    public function index()
    {
    	$jokes = Joke::all();
    	return $jokes;
    }
}
