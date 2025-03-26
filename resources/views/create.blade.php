@extends('layouts.layout')
@section('title', 'Add Student')
@section('content')
<h2>Add New Student</h2>
<form method="POST" action="{{ route('students.store') }}" class="mt-3">
    @csrf
    <!-- TODO: Add form fields for name and age -->
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
