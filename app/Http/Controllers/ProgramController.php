<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Program;
use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teacher = User::role('teacher')->get();

        // dd($teacher);
        return view('program.create', compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgramRequest $request)
    {
        // dd($request->all());
        Program::create($this->validateRequest());

        return to_route('dashboard');
    }


    private function validateRequest()
    {
        return request()->validate([
            'department' => 'required',
            'year' => 'required',
            'semester' => 'required',
            'user_id' => 'required',
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        return view('program.show', compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgramRequest $request, Program $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        //
    }
}
