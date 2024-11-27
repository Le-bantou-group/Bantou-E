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
            height: 120vh !important;

            background: url("{{ asset('Front/images/Image develppeur/Image develppeur/font2.jpg') }}") scroll no-repeat center;
            background-size: cover;
        }

        @media(max-width:500px) {
            .body {
                z-index: -1;
                border-radius: 20px;
                height: 100vh !important;

            }
        }
    </style>
</head>

<body>
    @include('Front.layout.header')
    <main>
        <div class="boule" style='margin-top:10vh;'></div>
        <!-------------------------------------------------------------------------------->
        <div class="container body" style="height:120vh;">
            <!-- Sign Up Section -->
            <div class="login-box " id="sign-up-section" align="center" style='margin-top:20vh; '>
                <div class="avatar d-flex justify-content-md-around align-content-center">
                    <i class="fas fa-user-plus" style='font-size:3vw;'></i>
                </div>
                <h2>Creation d'un compte</h2>
                <!-- Formulaire d'Inscription avec Téléchargement d'Avatar -->
                <form action="{{ route('signup') }}" method="POST" enctype="multipart/form-data" class="sign-up-form">
                    @csrf
                    <div class="input-group">
                        <label for="sign-up-email">
                            <i class="fas fa-envelope"></i>
                            <input type="text" id="sign-up-email" name="name" placeholder="username" required>
                        </label>
                    </div>
                    <div class="input-group">
                        <label for="sign-up-email">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="sign-up-email" name="email" placeholder="Email" required>
                        </label>
                    </div>

                    <div class="input-group">
                        <label for="sign-up-password">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="sign-up-password" name="password" placeholder="Password"
                                required>
                        </label>
                        <label for="sign-up-password">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="sign-up-password" name="password_confirmation"
                                placeholder="Confirmation" required>
                        </label>
                    </div>

                    <div class="input-group">
                        <label for="avatar">
                            <i class="fas fa-user-circle"></i>
                            <input type="file" id="avatar" name="avatar" accept="image/*">
                        </label>
                    </div>

                    <button type="submit" class="login-button">S'inscrire</button>
                    <div class="footer-text">
                        Avez-vous déjà un compte? <a href="{{ route('login') }}" id="back-to-login">Connexion</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    @include('Front.layout.footer')
</body>

</html>
