<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TUGAS 4 PWL</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.iconly.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.dataTables.min.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="/path/to/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- css bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<div id="auth">
    <div class="row h-100 justify-content-center">
        <div id="auth-left" class="col-lg-6">
            <div class="card m-3 container">
                <div class="auth-logo d-flex justify-content-center align-items-center">
                    <h2 class="mt-5 ms-5" style="text-align: center">
                        Tugas 4 PWL
                    </h2>
                </div>
                <h1 class="auth-title">Masuk</h1>
                <p class="auth-subtitle mb-5">Silahkan login dengan akun yang sudah di daftar</p>
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ session('loginError') }}
                    </div>
                @endif
                <form action="/login" method="post">
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl @error('username') is-invalid @enderror"
                            placeholder="Username" name="username" autofocus required id="username" style="padding: 10px; width:450px;">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        @error('username')
                            <div class="text-center invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
    
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" placeholder="Password" required
                            name="password" style="padding: 10px; width:450px;">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <button class="btn btn-dark btn-block btn-lg shadow-lg mt-5 justify-content-center" style="align-content: center">
                        LOGIN
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/initTheme.js') }}"></script>
    <script src="{{ asset('assets/js/dark.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/rainbow-custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.0.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script>
        new DataTable('#example');
    </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
