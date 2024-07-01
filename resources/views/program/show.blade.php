@extends('layouts.main')
@section('content')
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class="justify-content-center container-fluid">
        <a class="navbar-brand" href="#">{{ $program->department }}</a>
    </div>
</nav>

 <div style="margin-top:90px;">
    <h4>Students </h4>
    <a href="{{ route('adduser') }}">Add Student</a>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Class</th>
                <th>Year</th>
                <th>Semester</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $item)
            <tr>
                <td>{{ $item->department }}</td>
                <td>{{ $item->year  }}</td>
                <td>{{ $item->semester  }}</td>

                <td>
                    <a href="{{ route('programs.show', $item) }}">
                        <button class="btn btn-xs btn-success">
                            Show
                        </button>
                    </a>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
 </div>
@endsection
