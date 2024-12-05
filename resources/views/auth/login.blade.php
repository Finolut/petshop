<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    </head>
    <body class="bg-light">
        <section class=" p-3 p-md-4 p-xl-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                        <div class="card border border-light-subtle rounded-4">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                <div class="row">
                                    <div class="col-12">
              
                                        <div class="mb-5">
                                            <img src="https://unair.ac.id/wp-content/uploads/2021/03/Horisontal.png" alt="Unair Logo" width="500" height="150" style="position: relative; left: -40px;">
                                        </div>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                  @csrf
                                  <div class="mb-7">
                                    <label for="username" class="form-label text-dark fw-bold">Username</label>
                                    <input
                                      type="text"
                                      class="form-control py-6"
                                      id="username"
                                      name="username"
                                      required
                                    />
                                  </div>
                                  <div class="mb-9">
                                    <label for="password" class="form-label text-dark fw-bold">Password</label>
                                    <input
                                      type="password"
                                      class="form-control py-6"
                                      id="password"
                                      name="password"
                                      required
                                    />
                                  </div>
                                  <div class="d-flex align-items-center justify-content-between mb-7 pb-1">
                                    <div class="form-check">
                                      <input
                                        class="form-check-input primary"
                                        type="checkbox"
                                        id="flexCheckChecked"
                                        name="remember"
                                      />
         
                                    </div>
                                
                                  </div>
                                  <button type="submit" class="btn btn-primary w-100 mb-7 rounded-pill">
                                    Sign In
                                  </button>
                                </form>
                                <div class="row">
                                    <div class="col-12">
                                        <hr class="mt-5 mb-4 border-secondary-subtle">
                                        <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-center">
                                          <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-center">
                                            <a href="{{ route('register') }}" class="link-secondary text-decoration-none">buat akun</a>
                                        </div>
                                        </div>
                                    </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
