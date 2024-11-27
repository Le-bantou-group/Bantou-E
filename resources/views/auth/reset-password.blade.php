<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="shortcut icon" href="LOGO/WhatsApp Image 2024-08-22 à 13.08.55_e93d3beb.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!------------------------------------------------------------------------------->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de reset</title>
    <link rel="stylesheet" href="{{ asset('Front/CSS/header.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/login.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/footer.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    .body {
        border-radius:20px;
    height: 127vh;
    background: url("{{ asset('Front/images/Image develppeur/Image develppeur/font2.jpg') }}") scroll no-repeat center;
    background-size: cover;
}

</style>
</head>

<body>
@include('Front.layout.header')
    <div class="boule"></div>
    <!-------------------------------------------------------------------------------->
    <div class="container body">
        
        <!-- Forgot Password Section -->
        <div class="login-box " id="forgot-password-section" align="center">
            <div class="avatar d-flex justify-content-md-around align-content-center">
                <i class="fas fa-lock" style='font-size:3vw;'></i>
            </div>
            <h2 style='color:#fff;'>Reset Password</h2>
            <form action="{{ route('password.update') }}" method="POST" class="forgot-password-form">
                @csrf
                <div class="input-group">
                    <label for="reset-email" style="margin-top:3vh;">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="reset-email" name="reset" placeholder="Entrer votre email" required autofocus>
                    </label>
                </div>
                <div class="input-group">
                    <label for="reset-email">
                        <i class="fas fa-lock"></i>
                        <input type="email" id="reset-email" name="reset-email" placeholder="Entrer votre nouveau mot de passe" required>
                    </label>
                </div>
                
                <button type="submit" class="login-button">Confirmer</button>
                <div class="footer-text">
                    <a href="{{ route('login') }}" id="back-to-login">Retour sur le login</a>
                </div>
            </form>
        </div>
    </div>
    @include('Front.layout.footer')
</body>

</html>