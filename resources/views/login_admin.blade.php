<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOMATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container-fluid p-0">

        <div class="logo navbar ps-3 m-0 d-flex justify-content-start">
            <img src="img/Logo Somata.png" alt="">
        </div>
        <div class="">
            <div class="row login-admin bg-dark text-light">
                <div class="col-6 p-0">
                    <div class="gambar-login-admin">
                        <img src="img/Vector 4.png" alt="">
                    </div>
                </div>

                <div class="col-6 form-login">
                    <div class="ms-5">
                        <h2><b>Login</b></h2>
                        <h6 class="text-secondary mb-5">Silahkan login untuk melanjutkan ke akun Anda.</h6>
                    </div>

                    <div class="ms-3">
                        @if ($errors->any())
                            <div class="alert alert-danger mb-3">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="bg-light p-3 rounded text-dark" method="POST" action="/login_admin">
                            @csrf <!-- CSRF protection -->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="organisasi_id" name="organisasi_id" placeholder="Organisasi ID">
                                <label for="organisasi_id">Organisasi ID</label>
                            </div>
                            <div class="form-floating input-group mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-describedby="togglePassword">
                                <label for="password">Password</label>
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                    <span id="togglePasswordIcon" class="fa fa-eye"></span>
                                </button>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                                <label class="form-check-label" for="exampleCheck1">Buat saya tetap masuk</label>
                            </div>
                            <button type="submit" class="btn btn-info text-light" style="width:100%"><b>Masuk</b></button>
                        </form>

                    </div>

                    <br><br>
                    <small class="text-light">@2024 SOMATA</small>
                    
                    
                </div>
            </div>
        </div>
        <br><br><br>
    </div>


    <script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordField = document.getElementById('password');
        const toggleIcon = document.getElementById('togglePasswordIcon');
        
        // Toggle the type attribute
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
        
        // Toggle the eye icon
        toggleIcon.classList.toggle('fa-eye');
        toggleIcon.classList.toggle('fa-eye-slash');
    });
    </script>
    <script src="https://kit.fontawesome.com/32e58e3754.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>