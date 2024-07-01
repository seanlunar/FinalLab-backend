@extends('layouts.main')
@section('content')
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class="justify-content-center container-fluid">
        <a class="navbar-brand" href="#">AcademiaHub</a>
    </div>
</nav>

 <div style="margin-top:90px;">
    <form action="/action_page.php">
        <div class="mt-3 mb-3">
          <label for="email" class="form-label">Department:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">Year:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Semester:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
          </div>
          <div class="mb-3">
            <select class="form-select" id="sel1" name="sellist1">
               @foreach ($teacher as $teach)
               <option>{{ $teach->name }}</option>

               @endforeach

              </select>
          </div>

        <button type="submit" class="btn btn-primary">Add Class</button>
      </form>
 </div>
@endsection
