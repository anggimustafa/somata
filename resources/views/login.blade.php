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

    <div class="row">
        <div class="col-5">
            <div class="logo navbar ps-3 m-0 d-flex justify-content-start">
                <img src="img/Logo Somata.png" alt="">
            </div>
            <br><br><br><br><br><br><br><br>

            <div class="ms-5">
                <h2><b>Login</b></h2>
                <h6 class="text-secondary mb-4">Silahkan login untuk melanjutkan ke akun Anda.</h6>
            </div>

            <div class="ms-5">
            @if ($errors->any())
                <div class="alert alert-danger mb-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
              <form method="POST" action="/login">
                  @csrf

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim') }}" placeholder="1234567890" required autocomplete="nim" autofocus>
                        <label for="nim">NIM</label>
                        @error('nim')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required autocomplete="current-password">
                        <label for="password">Password</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword" onclick="togglePasswordVisibility()">
                            <span id="togglePasswordIcon" class="fa fa-eye"></span>
                        </button>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Buat saya tetap masuk</label>
                    </div>

                    <button type="submit" class="btn btn-info text-light" style="width:100%">
                        <b>Masuk</b>
                    </button>
              </form>
            </div>
            
            
        </div>

        <div class="col-7 p-0">
            <div class="gambar-login d-flex justify-content-end">
                <img src="img/login.png" alt="">
            </div>
        </div>
    </div>



    </div>


    <script>
    function togglePasswordVisibility() {
        var passwordField = document.getElementById("password");
        var icon = document.getElementById("togglePasswordIcon");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }
</script>
    <script src="https://kit.fontawesome.com/32e58e3754.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>