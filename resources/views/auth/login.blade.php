<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <style>
            body {
                background-color: #f8f9fa;
            }

            .card {
                border: none;
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
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
        </style>
    </head>
    <body>
        <section class="p-3 p-md-4 p-xl-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                        <div class="card rounded-4">
                            <div class="card-body p-4 p-md-5">
                                <!-- Logo -->
                                <div class="text-center mb-4">
                                    <img src="https://i.pinimg.com/736x/3c/a0/04/3ca0049d7937d579495c6f632a33431c.jpg"
                                         alt="Unair Logo"
                                         width="300"
                                         class="img-fluid">
                                </div>

                                <!-- Form -->
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="username" class="form-label text-dark fw-bold">Username</label>
                                        <input
                                            type="text"
                                            class="form-control rounded-pill"
                                            id="username"
                                            name="username"
                                            placeholder="Enter your username"
                                            required
                                        />
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label text-dark fw-bold">Password</label>
                                        <input
                                            type="password"
                                            class="form-control rounded-pill"
                                            id="password"
                                            name="password"
                                            placeholder="Enter your password"
                                            required
                                        />
                                    </div>

                                    <!-- Checkbox -->
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                id="remember"
                                                name="remember"
                                            />
                                            <label class="form-check-label text-dark" for="remember">Remember me</label>
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <button type="submit" class="btn btn-primary w-100 rounded-pill">
                                        Sign In
                                    </button>
                                </form>

                                <!-- Register Link -->
                                <div class="text-center mt-4">
                                    <hr>
                                    <a href="{{ route('auth.register') }}" class="link-secondary text-decoration-none">
                                        Buat akun
                                    </a>
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
