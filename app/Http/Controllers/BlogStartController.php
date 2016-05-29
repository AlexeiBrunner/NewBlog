<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogStartController extends Controller
{
    public function blogStart(){return view('news');}
    public function comment(){return view('comment');}
}
