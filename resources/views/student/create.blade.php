@extends('layouts.app')

@section('title', 'Create Student')

@section('content')

<h1>Create Student</h1>

@include('partials.errors')

<form action="{{ route('students.store') }}" method="POST">

    @csrf

    <p>
        <label>Name:</label><br>
        <input
            type="text"
            name="name"
            value="{{ old('name') }}"
        >
    </p>

    <p>
        <label>Email:</label><br>
        <input
            type="email"
            name="email"
            value="{{ old('email') }}"
        >
    </p>

    <p>
        <label>Phone:</label><br>
        <input
            type="text"
            name="phone"
            value="{{ old('phone') }}"
        >
    </p>

    <p>
        <label>Address:</label><br>
        <textarea name="address">{{ old('address') }}</textarea>
    </p>

    <p>
        <label>Date of Birth:</label><br>
        <input
            type="date"
            name="date_of_birth"
            value="{{ old('date_of_birth') }}"
        >
    </p>

    <button type="submit">
        Create Student
    </button>

</form>

<br>

<a href="{{ route('students.index') }}">
    Back to Students
</a>

@endsection