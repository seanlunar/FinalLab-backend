@extends('layouts.main')
@section('content')
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class="justify-content-center container-fluid">
        <a class="navbar-brand" href="#">AcademiaHub</a>
    </div>
</nav>

 <div style="margin-top:90px;">
    <form action="{{ route('programs.store') }}" method="post">
        @csrf
        <div class="mt-3 mb-3">
          <label for="email" class="form-label">Department:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter department" name="department">
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">Year:</label>
          <input type="text" class="form-control" id="pwd" placeholder="Enter year" name="year">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Semester:</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter semester" name="semester">
          </div>
          <div class="mb-3">
            <select class="form-select" id="sel1" name="user_id">
               @foreach ($teacher as $teach)
               <option value="{{ $teach->id }}">{{ $teach->name }}</option>
               @endforeach
              </select>
          </div>

        <button type="submit" class="btn btn-primary">Add Class</button>
      </form>
 </div>
@endsection
