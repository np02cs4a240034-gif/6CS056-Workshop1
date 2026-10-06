<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
</head>
<body>
    <h1>Edit Course</h1>

    @if ($errors->any())
        <div>
            <strong>Please fix the following errors:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('courses.update', $course) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Course Name:</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name', $course->name) }}"
            >
        </div>

        <br>

        <div>
            <label for="description">Description:</label>
            <textarea
                id="description"
                name="description"
            >{{ old('description', $course->description) }}</textarea>
        </div>

        <br>

        <div>
            <label for="duration">Duration (hours):</label>
            <input
                type="number"
                id="duration"
                name="duration"
                value="{{ old('duration', $course->duration) }}"
                min="1"
            >
        </div>

        <br>

        <div>
            <label for="fee">Fee:</label>
            <input
                type="number"
                id="fee"
                name="fee"
                value="{{ old('fee', $course->fee) }}"
                min="0"
                step="0.01"
            >
        </div>

        <br>

        <div>
            <label for="difficulty">Difficulty:</label>
            <select id="difficulty" name="difficulty">
                <option value="Easy"
                    {{ old('difficulty', $course->difficulty) == 'Easy' ? 'selected' : '' }}>
                    Easy
                </option>

                <option value="Medium"
                    {{ old('difficulty', $course->difficulty) == 'Medium' ? 'selected' : '' }}>
                    Medium
                </option>

                <option value="Hard"
                    {{ old('difficulty', $course->difficulty) == 'Hard' ? 'selected' : '' }}>
                    Hard
                </option>
            </select>
        </div>

        <br>

        <div>
            <label>
                <input
                    type="checkbox"
                    name="is_active"
                    value="1"
                    {{ old('is_active', $course->is_active) ? 'checked' : '' }}
                >
                Active
            </label>
        </div>

        <br>

        <button type="submit">Update Course</button>

        <a href="{{ route('courses.index') }}">Cancel</a>
    </form>
</body>
</html>