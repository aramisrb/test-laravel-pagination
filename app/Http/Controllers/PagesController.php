<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
	    $tasks=[
			'task 1',
			'task 2',
			'task 3'
		];	
	    return view('welcome')->withTasks($tasks)->withName(request('name'));
    }
}
