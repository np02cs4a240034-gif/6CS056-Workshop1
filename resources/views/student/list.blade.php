@extends('layouts.app')

@section('title', 'Students')

@section('content')

<h1>Students</h1>

<p>
    <a href="{{ route('students.create') }}">Add Student</a>
</p>

@if(session('success')) <p>{{ session('success') }}</p>
@endif

@if($students->isEmpty())

```
<p>No students found.</p>
```

@else

```
<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Date of Birth</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

        @foreach($students as $student)

            <tr>
                <td>{{ $student->id }}</td>

                <td>{{ $student->name }}</td>

                <td>{{ $student->email }}</td>

                <td>{{ $student->phone }}</td>

                <td>{{ $student->address }}</td>

                <td>
                    {{ $student->date_of_birth?->format('d M Y') }}
                </td>

                <td>

                    <a href="{{ route('students.show', $student) }}">
                        View
                    </a>

                    |

                    <a href="{{ route('students.edit', $student) }}">
                        Edit
                    </a>

                    |

                    <form
                        action="{{ route('students.destroy', $student) }}"
                        method="POST"
                        style="display: inline;"
                    >

                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            onclick="return confirm('Are you sure you want to delete this student?')"
                        >
                            Delete
                        </button>

                    </form>

                </td>
            </tr>

        @endforeach

    </tbody>
</table>
```

@endif

@endsection
