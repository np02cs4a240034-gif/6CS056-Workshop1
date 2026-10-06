<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
</head>
<body>
    <h1>Courses</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('courses.create') }}">Add New Course</a>

    <hr>

    @forelse ($courses as $course)
        <div>
            <h2>{{ $course->name }}</h2>

            <p>{{ $course->description }}</p>
            <p>Duration: {{ $course->duration }} hours</p>
            <p>Fee: {{ $course->fee }}</p>
            <p>Difficulty: {{ $course->difficulty }}</p>
            <p>
                Status:
                {{ $course->is_active ? 'Active' : 'Inactive' }}
            </p>

            <a href="{{ route('courses.edit', $course) }}">
                Edit
            </a>

            <form
                action="{{ route('courses.destroy', $course) }}"
                method="POST"
                style="display: inline;"
            >
                @csrf
                @method('DELETE')

                <button type="submit">Delete</button>
            </form>
        </div>

        <hr>
    @empty
        <p>No courses found.</p>
    @endforelse
</body>
</html>