<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | Login</title>

    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="assets/css/login.css"> --}}

    <!-- Scripts -->
    @vite(['resources/sass/login/login.scss'])
</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/login/login.jpg') }}" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                {{-- <img src="{{ asset('assets/img/login/logo.svg') }}" alt="logo" class="logo"> --}}
                                <h1>Komunitas Prakerja</h1>
                            </div>
                            <p class="login-card-description">Admin Login</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="username" class="sr-only">Username</label>
                                    <input type="text" name="username" id="username" value="{{ old('username') }}"
                                        class="form-control @error('username') is-invalid @enderror"
                                        placeholder="Username" required>

                                    @error('username')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        <div class="mb-4"></div>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="***********" required>

                                    @error('password')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" name="login" id="login"
                                    class="btn btn-block login-btn mb-4">Login</button>
                            </form>

                            <nav class="login-card-footer-nav">
                                <a href="{{ env('APP_URL') }}">Copyright ©️ komunitasprakerja.com 2023</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
