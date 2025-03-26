
@extends('layout')
@section('title', 'Students')
@section('content')
<h2>Students</h2>
<!-- TODO: Add search bar here -->
<table class="table mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody id="student-table">
        <!-- TODO: Display student list here -->
    </tbody>
</table>
<!-- TODO: Add jQuery AJAX logic -->
@endsection