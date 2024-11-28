<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="Front/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="Front/CSS/formulaire2.css">
    <link rel="stylesheet" href="Front/CSS/header.css">
    <link rel="stylesheet" href="Front/CSS/style_panier.css">
    <link rel="stylesheet" href="Front/CSS/style_contact.css">
    <link rel="stylesheet" href="Front/CSS/header-mobile.css">
    <link rel="stylesheet" href="Front/CSS/footer.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <title>Nous contacter</title>
    <style>
        html, body{
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
        }
        #country {
            margin-right: 10px;
            font-size: 1vw;
        }

        .inner {
            margin: 2rem !important;
            height: fit-content !important;

            position: relative !important;
        }

        .contain-btn-menu {
            display: none;
        }

        .inner h1 {
            margin: none;
        }

        .contact {
            margin-top: 2rem !important;
            height: fit-content !important;
        }

        #phone {
            margin-left: 10px;
            font-size: 1vw;
        }

        #phoneGroup {
            width: 110%;
        }

        .hidden {
            display: none;
        }


        .text-contain {
            display: none !important;
        }

        .subTrans {
            transform: scale(.9);
            opacity: .6;
        }

        #phoneGroup select {

            width: 6% !important;

        }

        .hidd {
            display: none;
        }

        .contain-user {
            display: flex;
            justify-content: center;
            color: #fff;
            font-size: 1.5rem;
            background: #008eef;
            font-weight: bold;
            height: 3.2rem;
            margin: auto !important;
            clip-path: none !important;
            border-radius: 50% !important;
        }

        .username::before {
            content: '@';
        }

        .btnForm {
            cursor: pointer;
            border: 1px solid #fbc600;
            background: #000;
            color: #fbc600;
            border-radius: 10px;
            padding: 10px;
        }

        .contain_btn {
            padding-top: 10px;
            margin-left: 50%;
        }

        .perso {
            display: block;
        }

        .text-contain {
            display: none;
        }

        .form-group aside {
            display: flex;
            flex-direction: column;
            justify-content: left;
            align-items: left;
            transition: 1s ease-in-out;
        }

        .form-group aside label {
            width: 100%;
            text-align: left;
        }

        .btnForm:hover {
            color: #fff;
            background: #fbc600;
            border: 0;
            transition: all 1s ease-in-out;
        }

        @media (max-width:800px) {
            body {

                overflow: !important;
            }

            .contain-btn-menu {
                background: transparent !important;
                display: block;
                width: 30%;
            }

            .text-contain {
                display: block;
            }

            .icon-face {
                margin: 0 !important;

                display: flex;
                justify-content: center;

            }

            .inner {
                height: 50rem !important;
            }

            .icon-mobile {
                top: 6em !important;
            }

            .message {
                position: absolute;
                top: 0vh;
                left: -10vw;

                font-size: .8rem !important;
            }

            .perso {

                position: relative;
                bottom: !important;

                height: 100%;
                margin-top: 20vh !important;
                margin-left: -80vw;
            }

            .perso img {
                height: 60vh;
                width: 100vw !important;
            }

            .contact div img {
                width: 80px;
                aspect-ratio: 1;
            }

            .testimonials {
                margin-top: -50vh !important;
            }

            #formulaire aside {
                display: flex !important;
                flex-direction: column !important;
            }

            .image-section {
                margin: 0%;
                padding: 0%;
                width: 85vw;

            }



            .content {
                height: fit-content;
            }

            .box {
                margin-top: 1vh;
            }

            .box-2 {
                margin-top: 1vh;
                margin-bottom: 1vh;
            }
        }
    </style>
</head>

<body>
    <header id="fer">


        <nav>
            <a href="{{ route('home') }}" class="logo"><img
                    src="{{ asset('./Front/images/Logo/BE/BE_Plan de travail 1.png') }}" alt="Accueil"></a>
            <ul id="menu" class="menu">

                <li><a href="{{ route('realisation') }}">Nos réalisations</a></li>
                <li><a href="{{ route('services') }}">Prestations de services</a></li>
                <li><a href="{{ route('store') }}">BE_store</a></li>
                <li><a href="{{ route('contact') }}">Nous contacter</a></li>
                <li><a href="{{ route('panier') }}" id="espace_panier">Panier</a></li>
            </ul>
            <div class="btn_icon">
                <div id="cart">
                    <a href="{{ route('panier') }}"><img src="{{ asset('Front/images/icons8-cart-100.png') }}"></a>
                </div>

                <!--Drapeaux-->
                <div class="custom-select-container">
                    <div class="custom-select">
                        <div class="selected-option">
                            <img src="{{ asset('Front/images/DRAPEAUX/Cameroun.png') }}" alt="fr" class="flag cm">
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
                                    style='color:#fff; background:transparent; border:0;'>Deconnexion</button>
                            </div>
                        @else
                            <button type="submit" style='background:transparent; border:0; color:#fff;'><i
                                    class="fa-solid fa-circle-user" class='user'
                                    style="font-size:2.5vw; margin-bottom: 1vh;"></i></button>
                        @endif
                    </form>
                @else
                    <a href="{{ route('login') }}" style="color:white;"><i class="fa-solid fa-circle-user"
                            style="font-size:2.5vw; margin-bottom: 1vh; margin-right:3vw;"></i></a>
                @endif
            </div>

            <audio id="myAudio" style='display:none;' src="{{ asset('front/bantou.mp3') }}" autoplay loop></audio>
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
            <div class="contain-btn-menu">
                <i class="fa-solid fa-x" id="croix"></i>
                <i id="toggle-btn" class="fa-solid fa-bars"></i>
            </div>
        </div>
    </header>

    <main>
        <section class="header" id="print1">
            <!--<div class="année" data-aos="fade-right">2022</div>-->

            <aside class="intro">
                <div class="message " id="msg">Bienvenue ! </div>
                <div data-aos="fade-left" class="perso"><img src="Front/images/medium-2.png" alt=""
                        id="perso"></div>

            </aside>
            <aside class="text-contain">
                <div class='title'>Contact</div>
            </aside>
        </section>
        <!--<section id="intro">
            <aside>
                <img src="Front/images/P3.jpg" alt="">
            </aside>
            <aside>
                <h1>Contact</h1>
                <div>
                    <div><img src="Front/images/p1.jpg" alt="" srcset=""></div>
                    <div><img src="Front/images/p2.jpg" alt="" srcset=""></div>
                    <div><img src="Front/images/P3.jpg" alt="" srcset=""></div>
                    <div><img src="Front/images/femme.jpg" alt="" srcset=""></div>
                </div>
            </aside>
        </section>-->
        <div class="inner">
            <h1 class="index">Notre Equipe</h1>
            <section class="contact" id="print2">
                <div class="contain1" data-aos="fade-down">
                    <img src="Front/images/Equipe/mr_Kendzo.jpg" alt="" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <h1>Bertho Kendzo<br>Founder</br></h1>

                </div>
                <div class="contain2" data-aos="fade-down">
                    <img src="Front/images/Equipe/Kakine.jpg" alt="" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <h1>Kakine Jules<br>Ing Polytechnicien gérant</br></h1>

                </div>
                <div class="contain3" data-aos="fade-down">
                    <img src="Front/images/Equipe/Arnaud.jpg" alt="" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <h1>Arnaud Kendzo<br>Ing,Directeur technique</br></h1>

                </div>
                <div class="contain4" data-aos="fade-down">
                    <img src="Front/images/Equipe/Goldie.jpg" alt="" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <h1>Djomo Brelle Goldie<br>Responsable de Com</br></h1>

                </div>
                <div class="contain4" data-aos="fade-down">
                    <img src="Front/images/Equipe/Manuela.jpg" alt="" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <h1>Maipa Manuela<br>Assistante de direction</br></h1>

                </div>
                <div class="contain4" data-aos="fade-down">
                    <img src="Front/images/Equipe/verlin.jpg" alt="" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <h1>Kapnang verlin<br>Technicien</br></h1>

                </div>
            </section>

        </div>
        <section class="contain-equipe">
            <div data-aos="fade-down">
                <img src="Front/images/Equipe/mr_Kendzo.jpg" alt="" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <h1>Bertho Kendzo<br>Founder</br></h1>

            </div>
            <div data-aos="fade-down">
                <img src="Front/images/Equipe/Kakine.jpg" alt="" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <h1>Kakine Jules<br>Ing Polytechnicien gérant</br></h1>

            </div>
            <div  data-aos="fade-down">
                <img src="Front/images/Equipe/Arnaud.jpg" alt="" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <h1>Arnaud Kendzo<br>Ing,Directeur technique</br></h1>

            </div>
            <div class="contain4" data-aos="fade-down">
                <img src="Front/images/Equipe/Goldie.jpg" alt="" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <h1>Djomo Brelle Goldie<br>Responsable de Com</br></h1>

            </div>
            <div class="contain4" data-aos="fade-down">
                <img src="Front/images/Equipe/Manuela.jpg" alt="" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <h1>Maipa Manuela<br>Assistante de direction</br></h1>

            </div>
            <div class="contain4" data-aos="fade-down">
                <img src="Front/images/Equipe/verlin.jpg" alt="" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <h1>Kapnang verlin<br>Technicien</br></h1>

            </div>
        </section>
        <!-- temoignage -->
        <section class="testimonials">
            <!-- titre -->
            <div class="testimonials-heading" data-aos="fade-down">
                <span>Espace</span>
                <h1>Vos avis</h1>
            </div>

            @php

                $tab = [
                    'fade-right',
                    'fade-left',
                    'fade-right',
                    'fade-left',
                    'fade-right',
                    'fade-left',
                    'fade-down',
                    'fade-down',
                ];
                $i = 0;
            @endphp
            @if (Auth::user())
                @php
                    $image = auth()->user()->id;
                @endphp
            @else
                @php
                    $image = 0;
                @endphp
            @endif

            <!-- testimonials-box-container -->
            <div class="testimonials-box-container">
                @foreach ($commentaires as $commentaire)
                    <!-- box 1 -->
                    <div class="testimonial-box" data-aos="{{ $tab[$i++] }}">
                        <div class="box-top">
                            <!-- profile -->
                            <div class="profile">
                                <div class="profile-img">
                                    @if ($commentaire->image != null)
                                        @php
                                            $pic = App\Models\User::find($commentaire->image);
                                            $pic = $pic->avatar;
                                        @endphp
                                        <img src="{{ asset('storage/' . $pic) }}" alt="{{ $commentaire->nom }}">
                                    @else
                                        @php
                                            $pic = 0;
                                        @endphp
                                        <div class="contain-user"></div>
                                    @endif


                                </div>
                                <div class="name-user">
                                    <strong>{{ $commentaire->nom }}</strong>
                                    <span class='username2'>{{ $commentaire->nom }}</span>
                                </div>
                            </div>
                            <!-- review -->
                            <div class="review">
                                <!--<i class="fa-solid fa-thumbs-up"></i>-->
                                <i class="fa-regular fa-thumbs-up like"></i>

                                <!--<i class="fa-solid fa-thumbs-down"></i>-->
                                <i class="fa-regular fa-thumbs-down like"></i>
                                <!--<i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>-->
                            </div>
                        </div>
                        <!-- comments -->
                        <div class="client-comment">
                            <p>{{ $commentaire->message }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>



        <h1 class="sub_title ">Top social networking sites</h1>
        <section class="content" id="print4">
            <div class="box">
                <svg>
                    <circle cx="70px" cy="70px" r="70px"></circle>
                    <circle cx="70px" cy="70px" r="70px"></circle>
                </svg>
                <span>75%</span>
                <div data-aos="zoom-in-right">
                    <i class="fa-brands fa-instagram"></i>
                    <h1>Instagram</h1>
                </div>
            </div>

            <div class="box box-2">
                <svg>
                    <circle cx="70px" cy="70px" r="70px"></circle>
                    <circle cx="70px" cy="70px" r="70px"></circle>
                </svg>
                <span>50%</span>
                <div data-aos="zoom-in">
                    <i class="fab fa-facebook icon-face"></i>
                    <h1>Facebook</h1>
                </div>
            </div>
            <div class="box">
                <svg>
                    <circle cx="70px" cy="70px" r="70px"></circle>
                    <circle cx="70px" cy="70px" r="70px"></circle>
                </svg>
                <span>25%</span>
                <div data-aos="zoom-in-left">
                    <i class="fa-brands fa-youtube"></i>
                    <h1>Youtube</h1>
                </div>
            </div>


        </section>
        <aside id="backup" style="border-radius: 20px;">
            <div class="container-from" id="formulaire" style="border-radius: 20px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach

                    <aside>
                        <div class="image-section">
                            <img src="Front/images/Image develppeur/Image develppeur/Screen transitions (1).gif"
                                alt="photo">
                        </div>
                        <div class="form-container">
                            <h1>Formulaire de Contact</h1>
                            <form method='POST' action='{{ route('form_contact') }}' id="partnershipForm">
                                @csrf
                                <div class="form-group" id="nameGroup">
                                    <aside id="nameperso">
                                        <label for="lastname">Nom <span style="color:red;">*</span></label>
                                        <input type="text" id="lastname" name='nom' required
                                            placeholder="Votre nom ">
                                    </aside>
                                    <aside id="prenomperso" class="hidden">
                                        <label for="firstname">Prénom <span style="color:red;">*</span></label>
                                        <input type="text" id="firstname" name='prenom' required
                                            placeholder="Votre prénom">
                                    </aside>
                                    <aside id="emailperso" class="hidden">
                                        <label for="email">Email <span style="color:red;">*</span></label>
                                        <input type="email" id="email" name='email' required
                                            placeholder="Entrer votre email">
                                    </aside>

                                </div>
                                <input type="text" id="pic" name="image" style="display:none;"
                                    value="">
                                <div class="form-group hidden" style="width:100%;" id="phoneGroup">
                                    <aside id="numeroperso" style="position:relative;">
                                        <label for="phone">Numéro de Téléphone <span
                                                style="color:red;">*</span></label>
                                        <select id="country" name='pays'
                                            style="position:absolute; width:300px; height:30px; bottom:21%; left:10%; width:100%;"
                                            required onchange="updatePhoneNumber()">
                                            <option value="">Sélectionnez votre pays</option>
                                            <option value="Canada">+1</option>
                                            <option value="Cameroun">+237</option>
                                            <option value="Allemagne">+49</option>
                                            <option value="France">+33</option>
                                            <option value="Chine">+86</option>
                                            <option value="Angleterre">+44</option>
                                            <option value="Belgique">+32</option>
                                            <option value="Suisse">+41</option>
                                            <option value="USA">+1</option>
                                            <option value="Argentine">+54</option>
                                            <option value="Espagne">+34</option>
                                        </select>
                                        <input type="text" id="phone" name='numero' required
                                            placeholder="Votre numéro de téléphone">
                                    </aside>

                                    <aside id="villeperso" class="hidden">
                                        <label for="city">Ville <span style="color:red;">*</span></label>
                                        <input type="city" id="city" name='city' required
                                            placeholder="Entrer votre ville">

                                    </aside>
                                </div>

                                <div class="form-group hidden" id="messageGroup">
                                    <label for="message">Message <span style="color:red;">*</span></label>
                                    <textarea id="message" required placeholder="Votre message" name='message'></textarea>

                                </div>
                                <div class="contain_btn">

                                    <a id="precedent" class="btnForm"><i class="fa-solid fa-arrow-left"></i></a>
                                    <a id="suite" class="btnForm"><i class="fa-solid fa-arrow-right"></i></a>
                                </div>

                                <button type="submit" class="hidden" id="submitButton">Envoyer</button>


                            </form>
                        </div>
                    </aside>
            </div>
        </aside>
        <div class="box-sub">
            <div class="arrow-up">
                <a href="#fer"> <i class="fa-solid fa-arrow-up" style="color: #fff;"></i></a>
            </div>
            <div class="chat-bot"><a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                        <path
                            d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                        <path
                            d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2" />
                    </svg></a></div>
        </div>
        @include('Front.layout.chatbox')
    </main>

    <!--Debut du footer-->
    @include('Front.layout.footer')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            onset: 500,
            offset: 200,
        });
    </script>
</body>
<script src="{{ asset('Front/javascript/chatbox.js') }}"></script>
<script src="Front/javascript/menu.js"></script>
<script>
    // Récupération de la div avec la classe .name-user
    const nameUserDiv = document.querySelector('.username2');
    //alert(nameUserDiv);

    // Vérification si l'élément existe et récupération de la première lettre
    if (nameUserDiv) {
        const firstLetter = nameUserDiv.textContent.trim().charAt(0);

        // Récupération de la div avec la classe .contain-user
        const containUserDiv = document.querySelector('.contain-user');

        // Vérification si l'élément existe, et affichage de la première lettre
        if (containUserDiv) {
            containUserDiv.textContent = firstLetter;
        }
    }
</script>
<script src="Front/javascript/number.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        //Bouton
        const btn_next = document.getElementById('suite');
        const btn_pev = document.getElementById('precedent');
        const submitButton = document.getElementById('submitButton');

        const form = document.querySelectorAll('.form-group');
        let currentValue = 0;


        //alert(btn_prev);
        btn_next.addEventListener('click', () => {
            if (currentValue < form.length - 1) {
                currentValue++;
            }


            form.forEach((btn, i) => {
                if (i === currentValue) {
                    form[i].classList.remove("hidden");
                } else {
                    form[i].classList.add("hidden");
                }
            });
        });

        btn_pev.addEventListener('click', () => {
            if (currentValue > 0) {
                currentValue -= 1;
            }


            form.forEach((btn, i) => {
                if (i === currentValue) {
                    form[i].classList.remove("hidden");
                } else {
                    form[i].classList.add("hidden");
                }
            });
        });

        document.getElementById('lastname').addEventListener('input', () => {
            if (document.getElementById('lastname').value) {
                document.getElementById('prenomperso').classList.remove('hidden');
            }

        });
        document.getElementById('firstname').addEventListener('input', () => {
            if (document.getElementById('firstname').value) {
                document.getElementById('emailperso').classList.remove('hidden');

            }
        });
        document.getElementById('phone').addEventListener('input', () => {
            if (document.getElementById('phone').value) {
                document.getElementById('villeperso').classList.remove('hidden');

            }
        });
        document.getElementById('message').addEventListener('input', () => {
            if (document.getElementById('message').value) {
                submitButton.classList.remove('hidden');

            }
        });

    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const elements = document.querySelectorAll('.like');
        elements.forEach((element, i) => {
            element.addEventListener('click', function() {
                if (element.classList.contains('fa-regular')) {
                    element.classList.replace('fa-regular', 'fa-solid');
                } else {
                    element.classList.replace('fa-solid', 'fa-regular');
                }
            });
        });

    });
</script>
<script>
    const menuButton = document.getElementById('toggle-btn');
    const croixButton = document.getElementById('croix');
    const menu = document.getElementById('menu');
    const intro = document.querySelector('.intro');


    menuButton.addEventListener('click', () => {
        croixButton.style.display = 'block';
        menuButton.style.display = 'none';
        intro.style.display = 'none';
        menu.style.display = 'flex';
        menu.style.justifyContent = 'space-around';
    });

    croixButton.addEventListener('click', () => {
        intro.style.display = 'block'
        croixButton.style.display = 'none';
        menuButton.style.display = 'block';
        menu.style.display = 'none';

    });
</script>

<script>
    //Gestion du menu
    const menuButton = document.getElementById('toggle-btn');
    const croixButton = document.getElementById('croix');


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

</html>
