@extends('layouts.main')
@section('content')
    {{-- <div class="bg-primary">
    <h4> </h4>
 </div> --}}
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="justify-content-center container-fluid">
            <a class="navbar-brand" href="#">AcademiaHub</a>
        </div>
    </nav>

    <div style="margin-top:90px;margin-left:10px;">
        <a href="{{ route('profile.show') }}">
            <button class="btn btn-lg btn-success">welcome {{ Auth::user()->name }}</button>
        </a>
    </div>

    @if (Auth::user()->hasRole('admin'))
        <h4>your an admin</h4>
    @elseif(Auth::user()->hasRole('parent'))
        <h4>your an parent</h4>
    @elseif (Auth::user()->hasRole('teacher'))
        <div style="margin-top:50px;">

            <a href="{{ route('programs.create') }}">add class</a>
            <h2>Your classes</h2>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Class</th>
                    <th>Year</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>
                        <a href="">
                            <button class="btn btn-xs btn-success">
                                Show
                            </button>
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>
        </div>
    @elseif (Auth::user()->hasRole('student'))
        <h4>your an student</h4>
    @endif
@endsection
