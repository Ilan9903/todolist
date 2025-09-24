<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>

<main>
    <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom">
            <div class="row gap-3">
                <div class="col-md-1 row">
                    <a href="/dashboard" class="d-flex align-items-center text-dark text-decoration-none">
                        <img src="jetbrains://php-storm/navigate/reference?project=todolist&path=public%2Fassets%2Ftodo_img.png" alt="Todo_logo" width="300">
                    </a>
                </div>
                <div class="col-md-auto row">
                    <a class="dropdown-item d-flex align-items-center text-dark text-decoration-none" href="{{ route('tasks') }}">Create Task</a>
                </div>
                <div class="col-md-auto row">
                    <a class="dropdown-item d-flex align-items-center text-dark text-decoration-none" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>

        </header>

        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">

                @session('success')
                <div class="alert alert-success" role="alert">
                    {{ $value }}
                </div>
                @endsession

                <h1 class="display-5 fw-bold">Hi, {{ auth()->user()->name }}</h1>
                <p class="col-md-8 fs-4">Welcome to the ToDo List Dashboard<br/>"Stay organized and accomplish more with your personalized to-do list. Keep track of your tasks, set priorities, and turn your to-do's into done! Designed to help you stay focused, motivated, and productive—every day."</p>
                <table class="col-md-auto">
                    <thead>Nom</thead>
                    <thead>Desc</thead>
                    <thead>Status</thead>
                    <thead>Priority</thead>
                    <thead>Category</thead>
                </table>
            </div>
        </div>

    </div>
</main>

</body>
</html>
