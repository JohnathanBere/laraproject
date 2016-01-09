<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function showAbout(){
		//$name = 'John Bere';
		$first = "John";
		$last = "Bere";
		return view('pages.about', compact('first', 'last'));
	}
}
