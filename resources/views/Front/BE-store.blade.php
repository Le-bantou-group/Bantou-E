<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="Front/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="Front/CSS/style_panier.css">
    <link rel="stylesheet" href="Front/CSS/footer.css">
    <link rel="stylesheet" href="Front/CSS/formulaire.css">
    <link rel="stylesheet" href="Front/CSS/header.css">
    <link rel="stylesheet" href="Front/CSS/style_store.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BE_store</title>
    <style>
        .contain-hidd_menu {
            display: none;
        }

        #menu li a {
            font-size: 1vw !important;
        }

        .store {
            width: 100vh;
        }

        #espace_panier {
            display: none;
        }

        #croix {
            display: none;
        }



        .hidden {
            display: none;
        }

        .accueil div p {
            margin-left: 5vw !important;
            text-align: justify !important;

        }


        .icon-mobile {
            margin-top: -10vh !important;
        }


        .newhidden {
            position: absolute;
            z-index: -1;

        }

        .line {

            margin-left: -20px;
            width: 50vw;
        }

        .line .aligne {
            display: flex;
            flex-direction: row !important;
        }

        .list-country {
            width: 10vw;
        }

        .opac {
            opacity: .6;
            transform: scale(.9);
        }

        .btn_icon #cart {
            position: relative;
            display: flex;
            justify-content: right;
            margin-right: -5vw;
        }

        .contain h1 {
            font-size: 1vw !important;
        }

        .contain p {
            font-size: 1vw;
        }

        .btn_icon #cart span {
            background: #fbc600;
            position: absolute;
            left: 0;
            width: 2vw !important;
            top: 0;

            width: 65%;
            display: flex;
            justify-content: center;
            align-items: center;
            aspect-ratio: 1;
            border-radius: 50%;
        }

        .color-options {

            width: ;
        }

        #loupe {
            display: none !important;
        }

        .store aside:nth-child(2) div h1,
        .store aside:nth-child(2) div h2 {
            font-size: 1.5vw !important;
        }

        .store aside:nth-child(2) div p {
            display: none;
        }

        .store aside:nth-child(2) div form {

            padding: 0;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .store aside:nth-child(2) div form button {
            margin-right: 2vw;
        }

        .user {
            margin-left: -1.5vw;
            display: inline-flex;
            justify-content: space-around;
            align-content: center;
            clip-path: circle(28% at 10% 50%);
        }

        .user img {
            clip-path: circle(75%);
        }

        .user:hover {
            background: #fbc600;
            clip-path: circle(75%);
            transition: clip-path 1s ease;
        }

        #country {
            width: 8vw;
        }

        .cart-animation {
            animation: bounce 0.3s ease forwards;
        }

        @keyframes bounce {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }

        .color-options {
            margin-left: -1vw;
            background: transparent !important;
            box-shadow: none !important;
            margin-top: -2px !important;
            margin-bottom: -2px !important;
            height: 20px !important;
            display: flex;

            justify-content: center;


        }

        .iso_btn {
            border: 0;
            background: transparent;
        }

        #phoneGroup select {
            width: 17% !important;
        }

        .star {
            width: 15px;
            height: 15px;

            font-size: 1.5rem;
            margin-bottom: .5rem;
            color: #fbc600;
        }

        .valide:hover {
            background: #fbc600;
            color: #fff;
        }

        .panier {
            border-radius: 20px;
            height: auto;
        }

        .panier ul {
            margin-bottom: 0px;
        }

        .panier ul li h1 {
            width: 30%;
        }

        .tab-catalogue .price::after {
            content: "CFA";
        }



        .panier ul li article {

            width: 70%;
            display: inline-flex;

        }

        .container-carrousel {

            height: 96vh !important;
        }

        /*.ack{
        position:absolute;
        right:-100%;
    }*/
        .panier {
            right: 2vw !important;

            background: rgba(255, 255, 255, .4);
            backdrop-filter: blur(80px) !important;
        }

        .panier ul li a i {
            color: red;
        }

        .panier ul li article img {
            width: 30%;
            margin-right: 10px;
        }

        .container-pop {
            z-index: 1;
            top: 20%;
            left: 30%;
            position: fixed;
            margin: auto;
            background: #fff !important;
            width: 50vw !important;
            height: 30vh;
            display: flex;
            flex-direction: row;
            border: 0;

            border-radius: 10px;

        }

        .contain-img {
            height: 100%;
            width: 50%;
            position: relative;


        }

        .image-section {
            overflow: hidden;
            width: 100%;
        }

        .image-section img {
            width: 100%;

        }

        .tag {
            position: absolute !important;
            top: 0;
            right: 0;
            display: flex;
            color: #fff;
            justify-content: center;
            background: #008eed !important;
            padding: 20px !important;
            width: 20px !important;
            height: 20px !important;
            border-radius: 50% !important;
        }

        .container-search-size {
            height: 100% !important;
        }

        .color-options {

            display: flex;
            flex-direction: row;
        }


        .star {
            font-size: 1.5rem;
            margin-bottom: .5rem;
            color: #fbc600;
        }

        #cote {
            display: flex;
            flex-direction: column !important;
        }

        #cote .title_prod {
            height: 10vh;
        }

        #cote .details {

            height: 50%;
        }

        .contain1 .btm {
            border: 0;
            margin-bottom: -2%;
            padding: 0px;
            height: 50%;
            margin-left: 12px;
        }

        .details-contain {
            width: 100%;
            height: 100%;
            border: none;
            background: transparent !important;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-bottom: 1rem;
        }

        .bad-ans {

            margin: auto;
        }

        .contain1 {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            width: 30% !important;
            max-width: 15rem !important;
            padding-bottom: 10%;
        }

        .btm img {
            height: 11rem !important;
        }



        .btnForm {
            cursor: pointer;
            border: 1px solid #fbc600;
            background: #000;
            color: #fbc600;
            border-radius: 10px;
            padding: 10px;
        }

        .btn_re {
            cursor: pointer;
            margin-top: 10px;
            border: 1px solid #fbc600;
            background: transparent;
            border-radius: 10px;
            padding: 10px 15px;
        }

        .container-search-size {
            background: transparent !important;
            height: 100% !important;
        }

        .contain_btn {
            padding-top: 10px;
            margin-left: 70%;
        }

        .btnForm:hover {
            color: #fff;
            background: #fbc600;
            border: 0;
            transition: all 1s ease-in-out;
        }

        .button {
            padding-top: 50%;
            padding-left: 10%;
            position: relative;
            bottom: 0;

            margin-left: 20%;
        }

        .store {
            margin: 10px;
            width: fit-content;
        }

        .numtext {
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            border-radius: 5px;
            margin-top: 10px;
            width: 3vw;
            height: 3vw;
            border: 0;
            margin-left: 5px;
            color: #000;
            background: #fff;
        }

        .rmb {
            background: transparent;
            border: 0;
        }

        #target-containt {

            width: 70% !important;
            display: flex;
            gap: 10px;
            flex-wrap: wrap !important;
        }

        .text_btn {
            width: 100%;
            margin-top: 20px;
            height: 40px;
            font-size: 2vw;
            background: transparent;
            font-size: 1.5vw;
            display: flex;
            justify-content: center;
            align: center;
        }

        .sub-banner {
            padding-top: .7rem;
            position: relative;
        }

        .tab-catalogue {
            margin-top: 10vh !important;
        }

        .inline {
            overflow-x: scroll;
            display: flex;
            justify-content: space-around;
            width: 100%;

            flex-direction: row;
        }

        .companyname {
            margin-top: 10px;
        }


        .form-group {
            transition: all 1s ease-in-out;
        }


        #espace_panier {
            display: none;
        }

        #croix {
            display: none;
        }

        #affiche .description {

            overflow-y: hidden !important;
            height: 8rem;
        }

        @media (min-width:1000px) and (max-width:1100px) {

            .contain-hidd_menu {
                display: none;
            }



            #affiche .description {
                overflow-y: scroll !important;
                height: 10rem;
            }



            .accueil p {

                margin-left: 20%;
                width: 60% !important;
            }

            .container-carrousel {

                height: 98vh !important;
            }
        }

        @media (min-width:700px) and (max-width:1000px) {
            #espace_panier {
                display: block;
            }

            .container-carrousel .item-mg {
                width: 100%;
                height: 100%;
                border-radius: 14px;
            }

            .container-carrousel {

                height: 50vh !important;
            }

            .container-carrousel {
                width: 100%;
                background: url('../images/Image develppeur/Image develppeur/font.jpg') scroll no-repeat center;
                background-size: cover;
                margin: 0;
                margin-top: -1vh;
                height: 50% !important;
            }


            .btn_icon {
                display: none;
                justify-content: right;

            }

            #cart {
                display: none;
            }

            /*Gestion de la page produits*/
            .container-search-size {
                background: transparent;
                display: inline-flex;
                flex-direction: row;
                justify-content: right;
                width: 100vw !important;
                height: 100%;
            }






            .contain-search {
                width: 100%;
            }

            .contain-search form {
                display: flex;
                flex-direction: row;
                gap: .5rem;
            }

            .store aside:nth-child(1) .contain-search form .send2 {
                width: 30% !important;
            }

            #search {
                width: 80%;
            }


            #espace_panier {
                display: block;
            }



            #target-containt {
                position: relative !important;

                display: flex;
                flex-wrap: wrap;
                gap: 10px !important;
                margin-top: 5vh;
                width: 100% !important;
                height: fit-content;

                .contain1 {
                    width: 29%;
                    height: 50% !important;


                }

                .contain1 a img {
                    height: 25vh !important;
                }

                .contain1 h1,
                .contain1 h2 {
                    font-size: 12px !important;
                }

                .contain1 h1 {
                    margin-bottom: -10px !important;
                }




                .color-options {

                    width: 100%;
                    padding-left: 2vw;
                }




            }



            .store {
                width: 100vw !important;
                display: flex;
                flex-direction: column;
            }



            .contain-hidd_menu {
                margin-top: 5px;
                margin-left: 52%;
                width: 30%;
                background: transparent;
                display: flex;
                flex-direction: row;
                justify-content: right;
            }


            .accueil p {
                font-size: 1rem !important;
                width: 60% !important;
            }

            .accueil h1 {
                font-size: 1.5rem !important;

            }

            .title-shop p {
                font-size: .8rem;
                width: 60vw;
            }

            /*Fin de la gestion*/


            .logo {
                margin-top: 3%;

                position: absolute;

                left: 0%;
                background: transparent;
                height: 8vh;
            }

            .logo img {
                height: 100%
            }

            .contain-hidd_menu {

                margin-top: -5px;
                margin-left: 70%;
                width: 40% !important;
                background: transparent;
                display: flex;
                flex-direction: column !important;
                justify-content: right;
            }

            .contain-hidd_menu i {
                margin-left: 10vw;
                position: absolute;
                top: 4vh;

                font-size: 2rem !important;
            }

            .contain-hidd_menu img {
                width: 100%;
                height: 100%;
            }



            .custom-select-container {

                width: 30%;
                background: transparent;
                margin-right: -2vw;
                margin-bottom: -1.5vh
            }

            #menu {

                width: 100vw;
                display: flex;
                flex-direction: column !important;
                justify-content: center;
                z-index: 99;
            }

            #menu li {
                font-size: 1.2rem !important;
            }

            #croix {
                transition: all 1s ease-in-out;
                z-index: 99;
                position: absolute;
                font-size: 1.5rem;
                margin-top: 4%;
                right: 8%;
                display: none;
            }

            #toggle-btn {
                transition: all 1s ease-in-out;
                z-index: 99;
                position: absolute;
                font-size: 1.7rem;
                margin-top: 0%;
                right: 3% !important;
                display: block;
            }


            #menu {
                height: 100vh;
                position: absolute;
                top: -30px;
                display: none;
                z-index: 99;
                background: rgba(0, 0, 0, .8);
                backdrop-filter: blur(15px);
                color: #fff;
                padding-bottom: 10vh;
            }

            .select-options {
                width: 30vw
            }

            #menu li {
                font-size: 1.2rem !important;
            }

            #menu li {
                color: #fff;
                margin-top: 10vh;
            }

            #menu li a:hover {
                color: #fff !important;
            }

            .form-container {
                padding: 3vh !important;
            }
        }

        @media (max-width:700px) {
            .container-carrousel {
                width: 100vw !important;

                margin: 0;
                margin-top: -1vh;
                height: 50% !important;
            }

            .container-search-size {
                background: transparent;
                display: inline-flex;
                flex-direction: row;
                justify-content: right;
                width: 100vw !important;
                height: 30vh;
            }

            .contain-search form {
                position: relative !important;
            }

            .send2 {
                border: none !important;
                color: transparent !important;
                position: absolute !important;
                right: 20% !important;
            }

            #loupe {
                z-index: 99;
                position: absolute !important;
                right: 20% !important;
                display: block;
            }



            .line {
                overflow-x: hidden;
                padding: 1.5rem;
                display: none;
                width: 80%;
                display: flex !important;
                flex-direction: column !important;
                justify-content: left !important;
            }

            .inline {
                display: none;
                display: flex;
                justify-content: space-around;
                width: 100%;

                flex-direction: column !important;
            }

            .contain-city {
                margin: 0 2rem;
            }

            #localGroup {
                display: none !important;
            }


            .container-carrousel {

                width: 98%;
                height: 60vh !important;
            }



            .entete-shop div p {
                margin-left: 10% !important;
                width: 70% !important;
            }

            .entete-shop div h1 {

                margin-left: 10% !important;

            }


            #backup {

                position: relative !important;

            }

            .contain-search {
                width: 80%;
            }


            #search {
                width: 80%;
            }


            #espace_panier {
                display: block;
            }

            .form-container {
                padding: 3vh !important;
            }





            #target-containt {
                background: url('../images/Image develppeur/Image develppeur/font.jpg')fixed no-repeat center;
                background-size: cover;
                position: relative !important;

                display: flex;
                flex-wrap: wrap;
                gap: 10px !important;
                margin-top: 5vh;
                width: 150vw !important;

                .contain1 {
                    width: 40vw;
                    height: fit-content !important;


                }

                .contain1 a img {
                    height: 25vh !important;
                }

                .contain1 h1,
                .contain1 h2 {
                    font-size: 12px !important;
                }

                .contain1 h1 {
                    margin-bottom: -10px !important;
                }




                .color-options {

                    width: 100%;
                    padding-left: 2vw;
                }




            }



            .store {
                width: 100vw !important;
                display: flex;
                flex-direction: column;
            }




            .contain-hidd_menu {
                margin-top: 5px;
                margin-left: 52%;
                width: 30%;
                background: transparent;
                display: flex;
                flex-direction: row;
                justify-content: right;
            }


            .accueil div p {
                text-align: justify !important;
                width: 60%;
            }

            .accueil div h1 {

                width: 80% !important;
            }

            .title-shop p {
                font-size: .5rem;
                width: 60vw;
            }

            .logo {
                margin-top: 12px;
                width: 40px;
            }

            .logo img {
                height: 100%;
                width: 100%
            }


            .contain-hidd_menu i {
                font-size: 1.6rem;
            }

            .custom-select-container {

                width: 40%;
                background: transparent;
                margin-right: -2vw;
                margin-bottom: -1.5vh
            }

            #croix {
                transition: all 1s ease-in-out;
                z-index: 99;
                position: absolute;
                font-size: 1.5rem;
                margin-top: 4%;
                right: 8%;
                display: none;
            }

            #toggle-btn {
                transition: all 1s ease-in-out;

                z-index: 99;
                font-size: 1.5rem;
                margin-top: 0;
                right: 5%;
                display: block;
            }


            #menu {
                height: 100vh;
                position: absolute;
                top: -30px;
                display: none;
                z-index: 99;
                background: rgba(0, 0, 0, .8);
                backdrop-filter: blur(15px);
                color: #fff;
                padding-bottom: 10vh;
            }

            .select-options {
                width: 30vw
            }

            #menu li a {
                font-size: 1.2rem !important;
            }

            #menu li {
                color: #fff;
                margin-top: 10vh;
            }

            #menu li a:hover {
                color: #fff !important;
            }

            #espace_panier {
                display: block;
            }

            #backup .container {
                display: flex !important;
                flex-direction: column !important;
            }

            .form-container input {
                width: 80vw !important;
            }

            .cust {
                display: none !important;
            }

            .content-thumbnail {
                display: none;
            }

            #arrow {
                margin-right: 10px;
            }

            #arrow button {
                font-size: .8rem;
                width: 25px !important;
                height: 25px !important;
                border-radius: 50%;
            }
        }
    </style>
</head>

<body>
    <header id="fer">
        <i class="fa-solid fa-x" id="croix"></i>
        <i id="toggle-btn" class="fa-solid fa-bars"></i>
        <nav>
            <a href="{{ route('home') }}" class="logo"><img src="./Front/images/Logo/BE/BE_Plan de travail 1.png"
                    alt="Accueil"></a>
            <ul id="menu" class="menu">

                <li><a href="{{ route('realisation') }}">Nos réalisations</a></li>
                <li><a href="{{ route('services') }}">Prestations de services</a></li>
                <li><a href="{{ route('store') }}">BE_store</a></li>
                <li><a href="{{ route('contact') }}">Nous contacter</a></li>
                <li><a href="{{ route('panier') }}" id="espace_panier">Panier</a></li>

            </ul>
            <div class="btn_icon">


                <!--Panier-->
                <aside class="panier hidden" id="panier-ctn">
                    <h1 class="title-cart">Panier</h1>
                    <ul id="cart-items">
                        <!-- Les éléments du panier seront chargés ici -->
                    </ul>
                    <aside class="sub-banner">
                        <div class="total">
                            <h3>Total</h3>
                            <p id="total-price" class="total_dep"></p>
                        </div>
                        <div class="button">
                            <button class="btn btn-primary valide btn_cart"
                                onclick="window.location.href='{{ route('panier') }}'">Commander</button>
                            <button class="btn btn-danger empty btn_cart" onclick="clearCart()">Vider</button>
                        </div>
                    </aside>
                </aside>

                <div id="cart">
                    <span id="cartCount"></span>
                    <a><img src="{{ asset('Front/images/icons8-cart-100.png') }}" style="width:40%;"></a>
                </div>
                <!--Drapeaux-->
                <div class="custom-select-container flag" style="margin-left:1vw; margin-bottom: -1.5vh;">
                    <div class="custom-select">
                        <div class="selected-option">
                            <img src="Front/images/DRAPEAUX/Cameroun.png" alt="fr" class="flag">
                        </div>
                        <div class="select-options">

                            <div class="option" data-lang="fr">
                                <img src="Front/images/DRAPEAUX/France.png" alt="fr" class="flag">
                                <span class="acronym">FR</span>
                            </div>
                            <div class="option" data-lang="en">
                                <img src="Front/images/DRAPEAUX/Canada.png" alt="en" class="flag">
                                <span class="acronym">EN</span>
                            </div>
                            <div class="option" data-lang="es">
                                <img src="Front/images/DRAPEAUX/Italie.png" alt="es" class="flag">
                                <span class="acronym">ES</span>
                            </div>
                            <div class="option" data-lang="al">
                                <img src="Front/images/DRAPEAUX/Deutch.png" alt="al" class="flag">
                                <span class="acronym">DE</span>
                            </div>
                        </div>
                    </div>
                </div>
                @if (Auth::user())
                    <form method='post' action='{{ route('logout') }}' style='margin-right:-2vw; margin-top:3vh;'>
                        @csrf
                        @if (auth()->user()->avatar !== null)
                            <div class='user' style="position:relative; width:12vw; border-radius:35px;">
                                <button type="submit"
                                    style=" color:white; width:40px; border:0; height:40px;border-radius:50%; margin-left:-.3vw;background:transparent;"><img
                                        src="{{ asset('storage/' . auth()->user()->avatar) }}"
                                        alt="Avatar de {{ auth()->user()->name }}" class='user'
                                        style="width:100%; height:100%; border-radius:50%;"></button>
                                <button type='submit'
                                    style='color:#fff; margin-left;1px; background:transparent; border:0;'>Deconnexion</button>
                            </div>
                        @else
                            <button type="submit" style='background:transparent; border:0; color:#fff;'><i
                                    class="fa-solid fa-circle-user" class='user'
                                    style="font-size:2.5vw; margin-bottom: 1vh;"></i></button>
                        @endif
                    </form>
                @else
                    <a href="{{ route('login') }}" style="color:white;"><i class="fa-solid fa-circle-user"
                            style="font-size:2.5vw; margin-bottom: 1vh; margin-left:-2vw; margin-right:3.6vw;"></i></a>
                @endif
            </div>

        </nav>
        <div class="contain-hidd_menu">
            <!--Drapeaux-->
            <div class="custom-select-container" style="margin-right:-1.7vw; margin-bottom: -1.5vh;">
                <div class="custom-select">
                    <div class="selected-option">
                        <img src="{{ asset('Front/images/DRAPEAUX/Cameroun.png') }}" alt="fr" class="flag">
                    </div>
                    <div class="select-options">
                        <div class="option" data-lang="fr">
                            <img src="{{ asset('Front/images/DRAPEAUX/France.png') }}" alt="fr"
                                class="flag">
                            <span class="acronym">FR</span>
                        </div>
                        <div class="option" data-lang="en">
                            <img src="{{ asset('Front/images/DRAPEAUX/Canada.png') }}" alt="en"
                                class="flag">
                            <span class="acronym">EN</span>
                        </div>
                        <div class="option" data-lang="es">
                            <img src="{{ asset('Front/images/DRAPEAUX/Italie.png') }}" alt="es"
                                class="flag">
                            <span class="acronym">ES</span>
                        </div>
                        <div class="option" data-lang="al">
                            <img src="{{ asset('Front/images/DRAPEAUX/Deutch.png') }}" alt="al"
                                class="flag">
                            <span class="acronym">DE</span>
                        </div>
                    </div>
                </div>
            </div>
            @if (Auth::user())
                <form method='post' action='{{ route('logout') }}' class='tab' style='margin-right:-2vw;'>
                    @csrf
                    @if (auth()->user()->avatar !== null)
                        <div class='user' style="position:relative; width:12vw; border-radius:35px;">
                            <button type="submit"
                                style=" color:white; width:40px; border:0; height:40px;border-radius:50%; margin-left:-.3vw;"><img
                                    src="{{ asset('storage/' . auth()->user()->avatar) }}"
                                    alt="Avatar de {{ auth()->user()->name }}" class='user'
                                    style="width:100%; height:100%; border-radius:50%;"></button>
                            <button type='submit'
                                style='color:#fff; margin-left;1px; background:transparent; border:0;'>Deconnexion</button>
                        </div>
                    @else
                        <button type="submit" style='background:transparent; border:0; color:#fff;'><i
                                class="fa-solid fa-circle-user" class='user'
                                style="font-size:2.5vw; margin-bottom: 1vh;"></i></button>
                    @endif
                </form>
            @else
                <a href="{{ route('login') }}" style="color:white;"><i
                        class="fa-solid fa-circle-user customer"></i></a>
            @endif
        </div>
    </header>

    <main>
        <section class="accueil">
            <div>
                <h1 style='text-align:center;'>Qu'est ce qui nous distingue?</h1>
                <p>Notre approche personnalisée garantit des solutions sur
                    mesure pour chaque communauté. Nous allions expertise locale et technologies renouvelables pour
                    créer des projets durables, en impliquant les populations dès le départ. Notre engagement envers
                    l'innovation et la formation continue nous permet de rester à la pointe des besoins énergétiques et
                    hydriques du Cameroun. Choisir Bantou-Energy, c’est opter pour un partenaire de confiance qui
                    transforme l'accès à l'énergie et à l'eau, tout en préservant notre environnement.</p>
            </div>
        </section>
        <section class="shop">
            <div class="entete-shop">
                <div class="sub-header">
                    <div class="title-shop">
                        <h1 class="title-catalogue">Catalogue de produits</h1>

                        <p>Bienvenue dans le catalogue de Bantou-Energy, votre référence pour des solutions innovantes
                            en matière d'énergie renouvelable et d'accès à l'eau au Cameroun. Nous proposons une gamme
                            de produits et de services adaptés aux besoins des communautés et des entreprises, conçus
                            pour favoriser un développement durable.</p>
                    </div>
                </div>

            </div>
            <aside class="tab-catalogue" id="affiche">
                <h1>Lorem, ipsum.</h1>
                <p class="price">50.000 </p>
                <p class="description">Lorem ipsum dolor sit amet.</p>

                <button onclick="window.location.href ='{{ route('panier') }}'">Ajouter au panier</button>
            </aside>


            <div class="container-carrousel">
                <div class="item-mg active ">
                    <img id="productImage1" src="" alt="">
                </div>
                <div class="item-mg other_1 ">
                    <img id="productImage2" src="" alt="">
                </div>
                <div class="item-mg other_2 ">
                    <img id="productImage3" src="" alt="">
                </div>
                <aside class="thumbnail">
                    <div class="content-thumbnail">
                        <div class="item">
                            <div class="btn-animation"></div>
                            <div class="btn-animation"></div>
                            <div class="btn-animation"></div>
                            <!--other_2--><img class='image' src="" alt="">
                        </div>
                        <div class="item">
                            <div class="btn-animation"></div>
                            <div class="btn-animation"></div>
                            <div class="btn-animation"></div>

                            <!--other_1--><img class='image' src="" alt="">
                        </div>
                        <div class="item">
                            <div class="btn-animation"></div>
                            <div class="btn-animation"></div>
                            <div class="btn-animation"></div>

                            <!--active--><img class='image' src="" alt="">
                        </div>
                    </div>
                </aside>
                <div id="arrow" class="nextPrevArrows">
                    <button id="prev"><i class="fa-solid fa-chevron-left"></i></button>
                    <button id="next"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
            <section class="store" id="print3">
                <aside class="container-search-size">
                    <div class="contain-search">
                        <h1>Recherche</h1>
                        <form action="{{ route('articles.search') }}" method="GET">
                            <input type="search" name="query" id="search"
                                placeholder="Entrer le nom du produit" required>
                            <i id="loupe" class="fa-solid fa-magnifying-glass"></i>

                            <input type="submit" value="Lancer" class="send2" id="send2">
                        </form>
                    </div>
                </aside>

                <aside id="target-containt">

                    @foreach ($produits as $product)
                        <div class="contain1">
                            <a href="{{ route('prod', $product->id) }}" class="btm"><img
                                    src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->nom }}"></a>
                            <div class="details-contain">
                                <h1>{{ $product->nom }}</h1>
                                <div class="color-options">
                                    @for ($index = 0; $index < 5; $index++)
                                        @if ($index - $product->etoile >= 0)
                                            <span class="star" data-value="{{ $index }}">☆</span>
                                        @else
                                            <span class="star" data-value="{{ $index }}">★</span>
                                        @endif
                                    @endfor



                                </div>
                                <p>{{ $product->description }}</p>
                                <h2>{{ $product->prix }} CFA</h2>
                                <button class="add-to-cart-btn btn_re" data-id="{{ $product->id }}"
                                    data-name="{{ $product->nom }}" data-price="{{ $product->prix }}"
                                    data-image="{{ $product->image }}">
                                    Ajouter
                                </button>
                            </div>

                        </div>
                    @endforeach

                </aside>
            </section>
        </section>

        <!--formulaire-->
        <div id="backup">
            <aside class="container">
                <div class="image-section">
                    <img src="Front/images/Image develppeur/Image develppeur/Team.gif" alt="photo">
                </div>

                <div class="form-container">
                    <h1>Formulaire de Partenariat</h1>

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                    <form method='POST' action='{{ route('form') }}' id="partnershipForm">

                        @csrf

                        <div class="form-group " id="fullnameGroup">
                            <aside id="namePersonnel">
                                <label for="fullname" class="fullname">Nom personnel<span
                                        style="color:black;">*</span></label>
                                <input type="text" name='nom' id="fullname" required
                                    placeholder="Votre nom complet">

                            </aside>
                            <!--Entreprise-->

                            <aside id="nameCompany" class="hidden">
                                <label for="companyname" class="companyname"style="margin-top:20px;">Nom de
                                    l'Entreprise <span style="color:black;">*</span></label>
                                <input type="text" name='nomCompany' id="companyname" required
                                    placeholder="Le nom complet de l'entreprise.S">
                            </aside>
                        </div>

                        <div class="form-group hidden" id="phoneGroup">
                            <aside id="phonePersonnel">
                                <label for="number" class="number">Numéro de téléphone personnel<span
                                        style="color:black;">*</span></label>
                                <input type="text" name='numero' id="numberPersonnel" required
                                    placeholder="Entrer Votre numero ">
                            </aside>

                            <!--Entreprise-->

                            <aside id="phoneCompany" class="hidden" sty="margin-top:10px;">
                                <label for="phonecom" class="phonecom">Numéro de télephone de l'entreprise <span
                                        style="color:black;">*</span></label>
                                <input type="text" name='numeroCompany' id="phonecom" required
                                    placeholder="Entrer le numero de l'entreprise">
                            </aside>
                        </div>
                        <div class="form-group hidden" id="localGroup">
                            <div class="aligne inline">
                                <div class="col-md-6 mb-3 list-country">
                                    <label for="country">Pays</label>
                                    <select class="custom-select d-block " name='pays' id="country"
                                        style="width:10vw;background:#fff;" required>
                                        <option value="">Sélectionnez votre pays</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cameroun">Cameroun</option>
                                        <option value="Allemagne">Allemagne</option>
                                        <option value="France">France</option>
                                        <option value="Chine">Chine</option>
                                        <option value="Angleterre">Angleterre</option>
                                        <option value="Belgique">Belgique</option>
                                        <option value="Suisse">Suisse</option>
                                        <option value="USA">USA</option>
                                        <option value="Argentine">Argentine</option>
                                        <option value="Espagne">Espagne</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3 contain-city">
                                    <label for="state">ville</label>
                                    <input type="text" class="custom-select d-block " name='ville'
                                        id="state" style="width:13vw; background:#fff;"
                                        placeholder="Entrer votre ville " required>


                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="motive">Secteur d'activité<span
                                            style="color:black; ">*</span></label>
                                    <select id="motive" name='motif' required style="width:100%;">
                                        <option value="">Sélectionnez une activité</option>
                                        <option value="Investisseur">Investisseur</option>
                                        <option value="Partenaire d'achat">Partenaire d'achat</option>
                                        <option value="Fournisseur">Fournisseur</option>
                                        <option value="Maintenancier">Maintenancier</option>
                                    </select>

                                </div>

                            </div>
                        </div>




                        <div class="form-group hidden" id="messageGroup" name='contain'>
                            <label for="message">Description quel est votre projet<span
                                    style="color:black;">*</span></label>
                            <textarea id="message" name='contain' required placeholder="Votre message"></textarea>

                        </div>
                        <div class="contain_btn">

                            <a id="precedent" class="btnForm"><i class="fa-solid fa-arrow-left"></i></a>
                            <a id="suite" class="btnForm"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <button type="submit" id="submitButton" class="hidden">Envoyer</button>
                    </form>
                </div>
            </aside>
        </div>
        <div class="box-sub">
            <div class="arrow-up">
                <a href="#fer"> <i class="fa-solid fa-arrow-up" style="color: #fff;"></i></a>
            </div>
            <div class="chat-bot"><a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                        <path
                            d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                        <path
                            d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2" />
                    </svg></a></div>
        </div>
        @include('Front.layout.chatbox')
    </main>
    @include('Front.layout.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            //Bouton
            const btn_next = document.getElementById('suite');
            const btn_pev = document.getElementById('precedent');
            const form = document.querySelectorAll('.form-group');
            const phoneGroup = document.getElementById('phoneGroup');
            const submitButton = document.getElementById('submitButton');
            let Value = 0;

            //alert(btn_prev);
            btn_next.addEventListener('click', () => {
                if (Value < form.length - 1) {
                    Value++;
                }


                form.forEach((btn, i) => {
                    if (i === Value) {
                        form[i].classList.remove("hidden");

                    } else {
                        form[i].classList.add("hidden");
                    }
                });
            });

            btn_pev.addEventListener('click', () => {
                if (Value > 0) {
                    Value -= 1;
                }


                form.forEach((btn, i) => {
                    if (i === Value) {
                        form[i].classList.remove("hidden");
                    } else {
                        form[i].classList.add("hidden");
                    }
                });
            });

            document.getElementById('numberPersonnel').addEventListener('input', () => {
                if (document.getElementById('numberPersonnel').value) {
                    document.getElementById('phoneCompany').classList.remove('hidden');

                }
            });

            document.getElementById('fullname').addEventListener('input', () => {
                if (document.getElementById('fullname').value) {
                    document.getElementById('nameCompany').classList.remove('hidden');

                }
            });

            document.getElementById('fullname').addEventListener('input', () => {
                if (document.getElementById('fullname').value) {
                    document.getElementById('nameCompany').classList.remove('hidden');

                }
            });

            document.getElementById('message').addEventListener('input', () => {
                if (document.getElementById('message').value) {
                    submitButton.classList.remove('hidden');

                }
            });


        });
    </script>
    <script src="{{ asset('Front/javascript/chatbox.js') }}"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->

    <script>
        $(document).ready(function() {
            $('#send2').on('click', function(e) {
                e.preventDefault(); // Empêche le comportement par défaut du formulaire

                let query = $('#search').val(); // Récupère la valeur du champ de recherche
                let url = $('form').attr('action'); // Récupère l'URL d'action du formulaire

                $.ajax({
                    url: url,
                    type: 'GET',
                    data: {
                        query: query
                    }, // Données envoyées au backend
                    dataType: 'json', // Le backend renvoie un JSON
                    success: function(response) {
                        // Cible le conteneur et le vide
                        let container = $('#target-containt');

                        container.empty();


                        // Parcourt les produits retournés
                        if (response.length > 0) {

                            response.forEach(product => {
                                // Crée l'élément HTML pour chaque produit
                                let productHtml = `
                                <div class="contain1">
                                    <a href="/BE_store/achat/${product.id}" class="btm">
                                        <img src="/storage/${product.image}" alt="${product.nom}">
                                    </a>
                                    <div class="details-contain">
                                        <h1>${product.nom}</h1>
                                        <div class="color-options">
                                            ${generateStars(product.etoile)}
                                        </div>
                                        <p>${product.description}</p>
                                        <h2>${product.prix}</h2>
                                        <button class="add-to-cart-btn btn_re" 
                                            data-id="${product.id}" 
                                            data-name="${product.nom}" 
                                            data-price="${product.prix}" 
                                            data-image="${product.image}">
                                            Ajouter
                                        </button>
                                    </div>
                                </div>
                            `;
                                container.append(
                                    productHtml); // Ajoute l'élément au conteneur
                            });
                        } else {
                            container.html(
                                "<p style='margin:auto; width:100%;font-size:1.5rem;'>Aucun produit trouvé.</p>"
                            );
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Erreur:', error);

                        alert('Une erreur s\'est produite.');
                    }
                });
            });

            // Génère les étoiles dynamiquement
            function generateStars(stars) {
                let starHtml = '';
                for (let index = 0; index < 5; index++) {
                    starHtml += index < stars ? '<span class="star" data-value="' + index + '">★</span>' :
                        '<span class="star" data-value="' + index + '">☆</span>';
                }
                return starHtml;
            }
        });
    </script>

    <script>
        btns = document.querySelectorAll('.add-to-cart-btn');


        function refreshCartCount() {
            $.ajax({
                url: "{{ route('count') }}", // URL de l'endpoint qui renvoie le nombre d'éléments
                method: 'GET',
                success: function(response) {
                    // Mise à jour de la section avec le nombre d'éléments dans le panier
                    $('#cartCount').text(response.count);
                },
                error: function() {
                    $('#cartCount').text('Erreur'); // Message d'erreur en cas de problème
                }
            });
        }
        btns.forEach((btn, i) => {
            btns[i].addEventListener('click', () => {
                refreshCartCount();
            });
        });



        // Appel automatique de la fonction pour rafraîchir toutes les x secondes (optionnel)
        setInterval(refreshCartCount, 1000); // Par exemple, toutes les 10 secondes
    </script>
    <script src="Front/javascript/menu.js"></script>



    <script>
        // Fonction pour rafraîchir le contenu du panier
        function refreshCart() {
            $.ajax({
                url: "{{ route('cart.items') }}",
                type: 'GET',
                success: function(response) {
                    let cartItems = response.cart;
                    let total = response.total;
                    let cartHtml = '';

                    if (Object.keys(cartItems).length > 0) {
                        $.each(cartItems, function(id, details) {
                            cartHtml += `
                    <li>
                        <article> 
                            <img src="/storage/${details.image}" alt="">
                            <div class="detail">
                                <h1 style='font-size:1.2vw;'>${details.nom}</h1>
                                <p class="price">${details.prix}</p>
                            </div>
                        </article>
                        <input type="number" class="numtext"  disabled value="${details.quantity}">
                        <button onclick="removeItem(${id})" style="color:#fff;" class="rmb"><i class="fa-solid fa-trash"></i></button>
                    
                    </li>
                    <hr>`;

                        });
                        $('#total-price').text(total + ' CFA');
                    } else {
                        cartHtml = '<p class="text_btn">Votre panier est vide</p>';
                        $('#total-price').text('0 CFA');
                    }

                    $('#cart-items').html(cartHtml);

                }
            });
        }

        // Fonction pour supprimer un article du panier
        function removeItem(id) {
            $.ajax({
                url: `/cart/remove/${id}`,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    refreshCart();
                    alert("le produit a été suppprimé.");
                }
            });
            document.querySelector('#sub-banner').style.display = 'none';
        }

        // Fonction pour vider le panier
        function clearCart() {
            $.ajax({
                url: "{{ route('cart.clear') }}",
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    refreshCart();
                }
            });
            document.querySelector('#sub-banner').style.display = 'none';
        }
    </script>
    <script src="Front/javascript/number.js"></script>
    <script>
        $(document).ready(function() {
            // Ciblage du bouton "Ajouter au panier" par classe ou ID
            $('.add-to-cart-btn').on('click', function(e) {
                e.preventDefault();

                // Récupération des données de l'élément (remplacer par vos valeurs)
                const itemId = $(this).data('id'); // ID de l'article
                const itemName = $(this).data('name');
                const itemCode = $(this).data('code');
                // Nom de l'article
                const itemPrice = $(this).data('price'); // Prix de l'article
                const itemImage = $(this).data('image'); // URL de l'image de l'article

                //Fonction de rafraichissement
                function refreshCart() {
                    $.ajax({
                        url: '{{ route('cart.items') }}',
                        type: 'GET',
                        success: function(response) {
                            let cartItems = response.cart;
                            let total = response.total;
                            let cartHtml = '';

                            if (Object.keys(cartItems).length > 0) {
                                $.each(cartItems, function(id, details) {
                                    cartHtml += `
                        <li>
                            <article> 
                                <img src="/storage/${details.image}" alt="${details.nom}">
                                <div class="detail">
                                    <h1 style='font-size:1.2vw;'>${details.nom}</h1>
                                    <p class="price">${details.prix}</p>
                                </div>
                            </article>
                            <input type="text" style="width:40%;" disabled value="${details.quantity}">
                            <button onclick="removeItem(${id})" class="iso_btn" style="color:#fff; border:0; background:transparent;"><i class="fa-solid fa-trash"></i></button>
                        </li>
                        <hr>`;
                                });
                            } else {
                                cartHtml = '<p>Votre panier est vide</p>';
                            }

                            $('#cart-items').html(cartHtml);
                            $('#total-price').text(total + ' CFA');
                        }
                    });
                }



                // Envoi de la requête AJAX
                $.ajax({
                    url: "{{ route('cart.add') }}", // URL de la route pour ajouter un élément au panier
                    type: "POST",
                    dataType: "json",
                    data: {
                        _token: "{{ csrf_token() }}", // CSRF token
                        id: itemId,
                        nom: itemName,
                        code: itemCode,
                        prix: itemPrice,
                        image: itemImage,
                        quantity: 1 // Quantité ajoutée par défaut
                    },
                    success: function(response) {
                        alert(response.success); // Message de confirmation
                        refreshCart
                            (); // Rafraîchir le panier (si la fonction `loadCartItems` existe)
                    },
                    error: function(error) {
                        console.error("Erreur lors de l'ajout au panier :", error);
                    }
                });
                document.querySelector('#sub-banner').style.display = 'none';
            });
        });
    </script>
    <script src="Front/javascript/carrousel-back.js"></script>

    <script src="Front/javascript/formulaire.js"></script>

    <script>
        //Recuperation des elements
        const elements = @json($produits);
        console.log(elements);

        //if(elements.length > 0){


        //Creation des tableaux el product
        const titres = [
            elements[0].nom,
            elements[1].nom,
            elements[2].nom
        ];
        const prix = [
            elements[0].prix,
            elements[1].prix,
            elements[2].prix
        ];
        const descriptions = [
            elements[0].description,
            elements[1].description,
            elements[2].description
        ];
        const illustrations = [
            elements[0].image,
            elements[1].image,
            elements[2].image
        ];



        //Script Carroussel
        document.addEventListener("DOMContentLoaded", function() {
            const nextBtn = document.getElementById('next');
            const prevBtn = document.getElementById('prev');
            const items = document.querySelectorAll('.container-carrousel .item-mg');
            const itemsub = document.querySelectorAll('.content-thumbnail .item');
            const images = document.querySelectorAll('.image');

            let counter = 0;
            let currentIndex = 0;
            let Index = 0;

            // Remplacer la source de l'image avec une nouvelle image
            document.getElementById('productImage1').src = './storage/' + illustrations[0];
            document.getElementById('productImage2').src = './storage/' + illustrations[1];
            document.getElementById('productImage3').src = './storage/' + illustrations[2];

            images.forEach((item, index) => {
                item.src = './storage/' + illustrations[index];
            });

            function subShowSlide(index) {
                itemsub.forEach((item, i) => {
                    item.classList.toggle('act', i === index);
                    item.classList.toggle('hidden', i !== index && i !== index + 1);
                });

            }

            function showSlide(index) {
                items.forEach((item, i) => {
                    item.classList.toggle('active', i === index);
                    item.classList.toggle('hidden', i !== index);
                });


            }

            // Fonction pour mettre à jour le contenu de l'élément avec l'ID 'affiche'
            function updateContent() {
                const titreElement = document.querySelector('#affiche h1');
                const priceElement = document.querySelector('#affiche .price');
                const descriptionElement = document.querySelector('#affiche .description');
                const imgElement = document.querySelectorAll('.container-carrousel .item-mg img');
                // Mettre à jour le contenu
                titreElement.innerText = titres[Index];
                priceElement.innerText = prix[Index];
                descriptionElement.innerText = descriptions[Index];

                // Passer à l'index suivant, revenir au début si on atteint la fin
                Index = (Index + 1) % titres.length;
            }
            // Appeler la fonction au chargement de la page
            updateContent();

            function nextSlide() {
                counter = (counter + 1) % itemsub.length;
                currentIndex = (currentIndex + 1) % items.length;
                subShowSlide(counter);
                showSlide(currentIndex);
            }

            nextBtn.onclick = nextSlide;

            prevBtn.onclick = function() {
                counter = (counter - 1 + itemsub.length) % itemsub.length;
                currentIndex = (currentIndex - 1 + items.length) % items.length;
                subShowSlide(counter);
                showSlide(currentIndex);
            };

            // Afficher le premier élément au chargement
            subShowSlide(counter);
            showSlide(currentIndex);

            // Changement automatique de diapositive toutes les 6 secondes
            setInterval(nextSlide, 6000);
            // Changer de contenu toutes les 3 secondes
            setInterval(updateContent, 6000);
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const panier = document.querySelector('.panier');
            const cart = document.getElementById('cart');


            cart.addEventListener('click', () => {
                panier.classList.toggle('hidden');
            });
        });
    </script>
    <script>
        //Gestion du menu
        const menuButton = document.getElementById('toggle-btn');
        const croixButton = document.getElementById('croix');
        const menu = document.getElementById('menu');

        menuButton.addEventListener('click', () => {
            croixButton.style.display = 'block';
            menuButton.style.display = 'none';
            menu.style.display = 'flex';
            menu.style.justifyContent = 'space-around';
        });

        croixButton.addEventListener('click', () => {
            croixButton.style.display = 'none';
            menuButton.style.display = 'block'
            menu.style.display = 'none';

        });
    </script>
</body>

</html>
