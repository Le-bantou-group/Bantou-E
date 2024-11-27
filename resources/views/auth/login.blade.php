<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="shortcut icon" href="LOGO/WhatsApp Image 2024-08-22 à 13.08.55_e93d3beb.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!------------------------------------------------------------------------------->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="shortcut icon" href="Front/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="Front/CSS/header.css">
    <link rel="stylesheet" href="Front/CSS/login.css">
    <link rel="stylesheet" href="Front/CSS/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .body {
            border-radius: 20px;
            height: 100vh;
            background: url("{{ asset('Front/images/Image develppeur/Image develppeur/font2.jpg') }}") scroll no-repeat center;
            background-size: cover;
        }
        .login-box{
            z-index:0!important;
        }
    </style>
</head>

<body>
    @include('Front.layout.header')
    <div class="boule"></div>
    <!-------------------------------------------------------------------------------->
    <div class="container body">
        <!-- Login Form Section -->
        <div class="login-box" id="login-section">
            <div class="avatar d-flex justify-content-md-around align-content-center">
                <i class="fas fa-user" style='font-size:3vw;'></i>
            </div>
            <form action="{{ route('login') }}" method="POST" class="login-form">
                @csrf
                <div class="input-group">
                    <label for="email">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="email" name="email" placeholder="Email ID" required>
                    </label>
                </div>
                <div class="input-group">
                    <label for="password">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </label>
                </div>
                <div class="options">
                    <label class="remember-me">
                        <input type="checkbox" name="remember">
                        Se souvenir
                    </label>
                    <a href="{{ route('reset') }}" id="forgot-password-link">Mot de passe oublier</a>
                </div>
                <button type="submit" class="login-button">LOGIN</button>
                <div class="footer-text">
                    Avez-vous un compte? <a href="{{ route('register') }}" id="sign-up-link">S'inscrire</a>
                </div>
            </form>
        </div>
    </div>

    @include('Front.layout.footer')
    
</body>

</html>
