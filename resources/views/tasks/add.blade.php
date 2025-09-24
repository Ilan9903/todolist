<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 12 Custom User Register Page - DevScriptSchool.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body{
            background: #F8F9FA;
        }
    </style>
</head>
<body>

<section class="bg-light py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <div class="card border border-light-subtle rounded-3 shadow-sm">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Add a task</h2>
                        <form method="POST" action="{{ route('tasks.store') }}">
                            @csrf

                            @session('error')
                            <div class="alert alert-danger" role="alert">
                                {{ $value }}
                            </div>
                            @endsession

                            <div class="row gy-2 overflow-hidden">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" required>
                                        <label for="title" class="form-label">{{ __('title') }}</label>
                                    </div>
                                    @error('title')
                                    <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" required>
                                        <label for="description" class="form-label">{{ __('description') }}</label>
                                    </div>
                                    @error('description')
                                    <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <fieldset>
                                            <legend>Select a priority:</legend>

                                            <div>
                                                <input type="radio" id="priority1" name="priority" value="low" checked/>
                                                <label for="priority1">Low</label>
                                            </div>

                                            <div>
                                                <input type="radio" id="priority2" name="priority" value="medium" />
                                                <label for="priority2">Medium</label>
                                            </div>

                                            <div>
                                                <input type="radio" id="priority3" name="priority" value="high" />
                                                <label for="priority3">High</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    @error('priority')
                                    <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                <fieldset>
                                    <legend>Select a category:</legend>

                                    <div>
                                        <input type="radio" id="category1" name="category" value="home" checked/>
                                        <label for="category1">Home</label>
                                    </div>

                                    <div>
                                        <input type="radio" id="category2" name="category" value="sport"/>
                                        <label for="category2">Sport</label>
                                    </div>
                                </fieldset>
                                </div>
                                <div class="col-12">
                                    <fieldset>
                                        <legend>Select a category:</legend>

                                        <div>
                                            <input type="radio" id="status1" name="status" value="pending" checked/>
                                            <label for="status1">Pending</label>
                                        </div>

                                        <div>
                                            <input type="radio" id="status2" name="status" value="completed" />
                                            <label for="status2">Completed</label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="time" class="form-control" name="time_deadline" id="time_deadline" required>
                                        <label for="time" class="form-label">{{ __('time_deadline') }}</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" name="date_deadline" id="date_deadline" required>
                                        <label for="date" class="form-label">{{__('date_deadline')}}</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid my-3">
                                        <button class="btn btn-primary btn-lg" type="submit">{{ __('Register') }}</button>
                                    </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
