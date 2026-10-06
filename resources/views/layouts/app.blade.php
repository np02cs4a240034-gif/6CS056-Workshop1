<!DOCTYPE html>

<html>
<head>
    <title>@yield('title', 'Training Institute')</title>
</head>

<body>

```
<nav>
    <a href="{{ route('students.index') }}">Students</a>
</nav>

<hr>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@yield('content')
```

</body>
</html>
