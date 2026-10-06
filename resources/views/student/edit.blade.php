@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')

<h1>Edit Student</h1>

@include('partials.errors')

<form action="{{ route('students.update', $student) }}" method="POST">

    @csrf
    @method('PUT')

    <p>
        <label>Name:</label><br>
        <input
            type="text"
            name="name"
            value="{{ old('name', $student->name) }}"
        >
    </p>

    <p>
        <label>Email:</label><br>
        <input
            type="email"
            name="email"
            value="{{ old('email', $student->email) }}"
        >
    </p>

    <p>
        <label>Phone:</label><br>
        <input
            type="text"
            name="phone"
            value="{{ old('phone', $student->phone) }}"
        >
    </p>

    <p>
        <label>Address:</label><br>
        <textarea name="address">{{ old('address', $student->address) }}</textarea>
    </p>

    <p>
        <label>Date of Birth:</label><br>
        <input
            type="date"
            name="date_of_birth"
            value="{{ old('date_of_birth', $student->date_of_birth?->format('Y-m-d')) }}"
        >
    </p>

    <button type="submit">
        Update Student
    </button>

</form>

<br>

<a href="{{ route('students.index') }}">
    Back to Students
</a>

@endsection