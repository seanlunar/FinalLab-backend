<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index(){


        $classes = Program::where('user_id', auth()->user()->id)->get();
        return view('dashboard', compact('classes'));
     }
}
