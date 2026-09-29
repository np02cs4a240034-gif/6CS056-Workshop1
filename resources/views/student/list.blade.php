<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
</head>
<body>

<h1>Courses</h1>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="/course/create">
    Create Course
</a>

<br><br>

<table border="1" cellpadding="10">

    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Duration</th>
            <th>Fee</th>
            <th>Difficulty</th>
            <th>Active</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

        @forelse($courses as $course)

            <tr>

                <td>{{ $course->id }}</td>

                <td>{{ $course->name }}</td>

                <td>{{ $course->description }}</td>

                <td>{{ $course->duration }} weeks</td>

                <td>{{ $course->fee }}</td>

                <td>{{ $course->difficulty }}</td>

                <td>
                    @if($course->is_active)
                        Yes
                    @else
                        No
                    @endif
                </td>

                <td>
                    <a href="/courses/{{ $course->id }}">
                        View
                    </a>
                </td>

            </tr>

        @empty

            <tr>
                <td colspan="8">
                    No courses found.
                </td>
            </tr>

        @endforelse

    </tbody>

</table>

<br>

<a href="/course/create">
    Create Another Course
</a>

</body>
</html>