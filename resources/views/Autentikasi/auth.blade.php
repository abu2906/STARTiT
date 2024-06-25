<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='{{ asset("css/style.css") }}'>
    <link href="{{ asset("css/fontawesome/css/all.css") }}" rel="stylesheet">
    <link href="{{ asset("css/fontawesome/css/solid.css") }}" rel="stylesheet">
    <title>Autentikasi</title>
</head>
<body>
    <div class="container">
        <div class="signin-signup {{ $errors->any() ? 'sign-up-mode' : '' }} ">
            <form method="POST" action="{{ route('login-proces') }}" class="signin">
                @csrf
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" placeholder="Username">
                </div>
                @error('username')
                    <small>Masukkan Username Terlebih Dahulu</small>
                @enderror
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="text" name="password" placeholder="Password">
                </div>
                @error('password')
                    <small>Masukkan Password Terlebih Dahulu</small>
                @enderror
                <!-- <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div> -->
                <input type="submit" value="Login" class="btn">
                <p class="choice">Or Sign in with</p>
                <div class="social-media">
                    <a href="" class="icon">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="" class="icon">
                        <i class="fa-brands fa-google"></i>
                    </a>
                </div>
            </form>
            <form method="POST" action="{{ route('register') }}" class="signup">
                @csrf
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input name="username" type="text" placeholder="Name">
                    @error('username')
                        <small>Masukkan Username Terlebih Dahulu</small>
                    @enderror
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input name="email" type="text" placeholder="Email">
                    @error('email')
                        <small>Masukkan email Terlebih Dahulu</small>
                    @enderror
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-phone"></i>
                    <input name="telepon" type="text" placeholder="Telephone">
                    @error('telepon')
                        <small>Masukkan telepon Terlebih Dahulu</small>
                    @enderror
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input name="password" type="text" placeholder="Password">
                    @error('password')
                        <small>Masukkan password Terlebih Dahulu</small>
                    @enderror
                </div>

                <input type="submit" value="Sign up" class="btn">
            </form>
        </div>
        <div class="panel-container">
            <div class="panel left">
                <div class="content">
                    <h3>STARTiT</h3>
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" class="image">
                    <button class="btn" id="sign-in">Sign in</button>
                </div>
            </div>
            <div class="panel right">
                <div class="content">
                    <h3>STARTiT</h3>
                    <img src="{{ asset('img/STARTiT.png') }}" alt="STARTiT" class="image">
                    <button class="btn" id="sign-up">Sign up</button>
                </div>
            </div>
        </div>
    </div>
    <script>

        const sign_in = document.querySelector("#sign-in");
        const sign_up = document.querySelector("#sign-up");
        const container = document.querySelector(".container");

        sign_up.addEventListener("click", () => {
            container.classList.add("sign-up-mode");
        })
        sign_in.addEventListener("click", () => {
            container.classList.remove("sign-up-mode");
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @if($message = Session::get('failed'))
        <script>
            Swal.fire({
                title: "Data Salah",
                text: '{{ $message }}',
                icon: "question"
            });
        </script>
    @endif
</body>
</html>
