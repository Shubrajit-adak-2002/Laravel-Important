<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1 class="text-center">Welcome, {{Auth::user()->name}}</h1>
    <div class="d-flex gap-2">
        {{-- Profile --}}
        <a href="{{ route('profile',Auth::id()) }}" class="btn btn-primary">
            Profile
        </a>

        {{-- Posts --}}
        <a href="{{ route('posts',Auth::id()) }}" class="btn btn-secondary">
            Posts
        </a>

        {{-- Admin Panel (only show if user can access) --}}
        @can('isAdmin')
            <a href="{{ route('admin') }}" class="btn btn-warning">
                Admin Panel
            </a>
        @else
            <a href="{{ route('other') }}" class="btn btn-warning">
                Other Panel
            </a>
        @endcan

        {{-- Logout must be a POST with CSRF --}}
        <form method="POST" action="{{ route('logout') }}" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-outline-danger">
                Logout
            </button>
        </form>
    </div>

</body>

</html>
