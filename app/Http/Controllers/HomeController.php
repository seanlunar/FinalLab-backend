<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
     public function index(){


        $classes = Program::where('user_id', auth()->user()->id)->get();
        return view('dashboard', compact('classes'));
     }

     public function create(){
        $classes = Program::where('user_id', auth()->user()->id)->get();
        return view('program.adduser', compact('classes'));
     }

     public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'classid' => 'required',
        ]);

        // Create new user with default password
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'program_id' => $request->classid,
            'password' => Hash::make('password'), // Set default password
        ]);

        // Assign role 'student' to the user
        $user->assignRole('student');

        return to_route('dashboard');
     }
}
