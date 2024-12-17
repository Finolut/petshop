<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://i.pinimg.com/1200x/f6/51/19/f651198770f6d80fc8bbc9d8d5830b46.jpggi');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff;
        }

        .card {
            border: none;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 0.8); /* Set card background with transparency */
        }

        .form-control:focus {
            border-color: #fd7e14; /* Hint orange */
            box-shadow: 0 0 0 0.2rem rgba(253, 126, 20, 0.25);
        }

        .btn-primary {
            background-color: #fd7e14;
            border-color: #fd7e14;
        }

        .btn-primary:hover {
            background-color: #e96b0f;
            border-color: #e96b0f;
        }

        .link-secondary {
            color: #fd7e14 !important;
        }

        hr {
            border-top: 2px solid #f1c8a2;
        }

        .text-danger {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
<section class="p-3 p-md-4 p-xl-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card rounded-4">
                    <div class="card-body p-4">
                        <h4 class="text-center mb-4">Registrasi Akun</h4>
                        <form action="{{ route('register.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label text-dark fw-bold">Email</label>
                                <input type="email" class="form-control rounded-pill" id="email" name="email" required>
                                @error('email')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label text-dark fw-bold">Username</label>
                                <input type="text" class="form-control rounded-pill" id="username" name="username" required>
                                @error('username')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label text-dark fw-bold">Password</label>
                                <input type="password" class="form-control rounded-pill" id="password" name="password" required>
                                @error('password')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-100 rounded-pill">Daftar</button>
                        </form>
                        <hr class="my-4">
                        <div class="text-center">
                            <a href="{{ route('login') }}" class="link-secondary text-decoration-none">Sudah punya akun? Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
