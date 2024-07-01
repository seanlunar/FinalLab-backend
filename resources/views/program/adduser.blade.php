@extends('layouts.main')
@section('content')
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="justify-content-center container-fluid">
            <a class="navbar-brand" href="#">AcademiaHub</a>
        </div>
    </nav>

    <div style="margin-top:90px;">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="{{ route('savestudent') }}" method="post">
            @csrf
            <div class="mt-3 mb-3">
                <label for="email" class="form-label">Name:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Email:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Enter Email" name="email">
            </div>

            <div class="mb-3">
                <label for="pwd" class="form-label">Class:</label>

                <select class="form-select" id="classid" name="classid">
                    @foreach ($classes as $class)
                    <option value="{{ $class->id }}">{{ $class->department }}</option>
                    @endforeach
                   </select>
            </div>

            <button type="submit" class="btn btn-primary">Add Class</button>
        </form>
    </div>
@endsection
