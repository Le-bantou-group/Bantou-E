<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="Front/CSS/carrousel-realisation.css">
    <link rel="stylesheet" href="Front/CSS/style_panier.css">
    <link rel="shortcut icon" href="Front/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="Front/CSS/header.css">
    <link rel="stylesheet" href="Front/CSS/style_realisation.css">
    <link rel="stylesheet" href="Front/CSS/footer.css">
    <title>Nos réalisations</title>
    <style>
        html, body{
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
        }
        main {
            width:100vw!important;
            overflow-x: hidden!important;
        }


        .contain-hidd_menu {
            display: none;
        }

        .chat-bot svg {
            font-size: 1rem !important;
            width: 70% !important;
            height: 70% !important;
        }


        #espace_panier {
            display: none;
        }

        #container-gallery .gal1 img {
            width: 50vw !important;
            height: 100% !important;
        }

        #croix {
            display: none;
        }

        .user {

            clip-path: circle(28% at 10% 50%);
        }

        .user img {
            clip-path: circle(75%);
        }

        #cart a {
            margin-left: ;
        }

        .user:hover {
            background: #fbc600;
            clip-path: circle(75%);
            transition: clip-path 1s ease;
        }

        .counter {

            font-size: 3rem !important;
        }

        .third aside p {
            padding: 2px;
            text-align: justify;
            font-size: 1.1vw;
        }

        #menu li a {
            font-size: 1vw !important;
        }

        @media (max-width:700px) {
            .espace_panier {
                display: block;
            }

            .index {
                margin-bottom: -13vh !important;
                width: 90% !important;
            }

            .third aside p,
            .third aside h1 {
                margin: 10px !important;
            }



            #banner {
                display: flex;
                flex-direction: column;
                height: fit-content !important;
            }

            #menu li a {
                font-size: 1rem !important;
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

            .desc {
                display: none;
            }

            .etiquette_3 {
                padding: 10px;
                margin-bottom: 10vh !important;
            }

            .etiquette_3 p {
                margin: 20px;
                margin-top: 5vh;
            }

            .etiquette_4 {
                margin-top: -5vh !important;
            }

            .gal2 div:nth-child(2) img {
                height: 25vh !important;
            }

            #container-gallery {
                display: flex;
                flex-direction: column !important;
                height: 100vh;
            }


            .gal2 div {
                height: 10rem;
            }

            .logo {
                margin-top: 8px;
                width: 40px;
            }

            .logo img {
                height: 100%;
                width: 100%
            }

            .third {
                width: 100%;

            }

            .third aside {
                width: 70% !important;
                padding: 2% !important;
                overflow: scroll !important;
                margin-top: 10% !important;
            }

            .third aside p {
                font-size: 1rem;

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
        }

        @media(max-width:500px) {
            .third {
                padding-left: 0 !important;
                padding-right: 0 !important;
                width: 100vw;

            }
            .chat-bot{
                width:3rem!important;
                height:3rem!important;
            }

            .third aside {
            margin:2rem !important;
                width: 100% !important;

            }
        }

        /*Gestion tablette*/
        @media (min-width:700px) and (max-width:1000px) {
            #espace_panier {
                display: block;
            }

            #menu li a {
                font-size: 1rem !important;
            }




            .btn_icon {
                display: none;
                justify-content: right;

            }

            #cart {
                display: none;
            }


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
                font-size: 20px !important;
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
                font-size: 1.5rem;
                margin-top: -2% !important;
                right: 8%;
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
                color: #fff;
                margin-top: 10vh;
            }

            #menu li a:hover {
                color: #fff !important;
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
                <div id="cart">
                    <a href="{{ route('panier') }}"><img src="Front/images/icons8-cart-100.png"></a>
                </div>

                <!--Drapeaux-->
                <div class="custom-select-container">
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
                    <form method='post' action='{{ route('logout') }}' style='margin-left:-2vw; margin-right:-2vw;'>
                        @csrf
                        @if (auth()->user()->avatar !== null)
                            <div class='d-inline-flex justify-content-around align-content-center user'
                                style="position:relative; width:12vw; border-radius:35px;">
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
                    <a href="{{ route('login') }}" style="color:white;"><i class="fa-solid fa-circle-user"
                            style="font-size:2.5vw; margin-bottom: 1vh; margin-right:3vw;margin-left:-2vw;"></i></a>
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
        <h1>"O, Sunshine, The most precious Gold<br> to be found on earth "</h1>
    </header>
    <main>
        <!--animation caroussel-->
        <section id="over"></section>
        <section id="second-sect">
            <h1 class="counter" id='count'>0</h1>
            <h2 data-aos="fade-left">Ménages sastifaits par nos services<br>jusqu'à nos jours</h2>
        </section>
        <h1 style="margin-bottom: 5%;margin-top: 5%; text-align: center; margin-left: 5%;">Nos Réalisations</h1>
        <section id="container-gallery">
            <aside class="gal1" data-aos="fade-right">
                <img src="{{ asset('storage/' . $real->image_principal) }}" alt="">
            </aside>
            <aside class="gal2">
                <div data-aos="fade-down">
                    <img src="{{ asset('storage/' . $real->image_sous1) }}" alt="">
                    <h1 style="font-size: large;">{{ $real->sous_titre1 }}</h1>
                    <p class='desc' style="font-size: medium;">{{ $real->description1 }}</p>
                </div>
                <div data-aos="fade-up">
                    <img src="{{ asset('storage/' . $real->image_sous2) }}" alt="">
                    <h1 style="font-size: large;">{{ $real->sous_titre2 }}</h1>
                    <p class='desc' style="font-size: medium;">{{ $real->description2 }}</p>
                </div>
            </aside>
        </section>
        <section class="parent">


    <div class="div1">1</div>
    <div class="div2">2</div>
    <div class="div3">3</div>


        </section>
        <h1 class="index">Parcours clients</h1>
        <section class="third">
            <aside class="etiquette_1" data-aos="fade-right">
                <h1>conception</h1>
                <p>Tout commence par une écoute attentive. Nous prenons le temps de comprendre vos besoins spécifiques
                    et les défis que vous rencontrez. Grâce à des études de faisabilité, nous développons une solution
                    sur mesure qui allie innovation et durabilité. </p>
            </aside>
            <aside class="etiquette_2" data-aos="fade-right">
                <h1>Modélisation</h1>
                <p>Une fois la conception approuvée, nous passons à la modélisation. Nous utilisons des outils avancés
                    pour simuler le fonctionnement de votre installation, afin d’optimiser chaque détail. Cela vous
                    permet d’avoir une vision claire et de valider le projet avant sa mise en œuvre. </p>
            </aside>
            <aside class="etiquette_3" data-aos="fade-right">
                <h1>Installation</h1>
                <p>Notre équipe d'experts procède à l’installation de votre système avec rigueur et précision. Nous
                    garantissons que chaque composant est installé selon les normes les plus élevées, en respectant les
                    délais convenus et en minimisant les perturbations. </p>
            </aside>
            <aside class="etiquette_4" data-aos="fade-right">
                <h1>Maintenance</h1>
                <p>Après l’installation, notre engagement ne s’arrête pas là. Nous offrons un service de maintenance
                    proactive pour assurer le bon fonctionnement de votre système sur le long terme. Notre équipe reste
                    à votre disposition pour toute question ou besoin d'assistance, garantissant ainsi la durabilité et
                    l’efficacité de votre installation. </p>
            </aside>

        </section>

        <section id="banner">
            <section class="ftco-section ftco-intro p-1" data-aos="flip-left" style=" padding-bottom: 20px;">

                <div class="overlay"></div>
                <div class="container">
                    <div class="row justify-content-end " style="margin-left: -8vw;">
                        <div class="col-md-6 heading-section heading-section-white"
                            style="position:relative;height:40vh;border-radius: 10px; padding-top:10px;backdrop-filter: blur(15px); background: linear-gradient(135deg,#008eed6f 80%, #fff 100%); border-radius:10px;">
                            <h2 class="" style="margin-bottom:10px; margin-top:10px; font-size: 30px;">Une
                                formation qui s'adapte à vous</h2>
                            <p style="margin-top:-10px; width: 50%;">Les investissement en bourse, crypto et le money
                                management ne seront plus un secret pour vous</p>
                            <a href="https://resetbylebantou.com" target="_blank"
                                class="btn btn-primary float-end rounded btn-lg" style="top:80%; left: 2%;">Inscrivez
                                vous maintenant</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        </section>
        <!--<div class="aes">
            <section id="aes">
                /Code du personnage du font/
                <aside class="intro" data-aos="fade-left">
                    <div class="message" id="msg">Veillez a ne pas oublier de vous inscrire dans notre forum d'information! </div>
                    <div class="perso"><img id="perso" src="Front/images/medium-2.png" alt=""></div>
                </aside>
            </section>
        </div>-->
        @php
            $target = App\Models\User::all();
        @endphp
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
                offset: 200,
            }

        );

        const target = 663400;
        const counterElement = document.querySelector('.counter');
        const duration = 2000; // temps total en ms
        const incrementTime = 50; // temps entre chaque incrément en ms
        const totalSteps = duration / incrementTime;
        const incrementValue = Math.ceil(target / totalSteps);

        let currentCount = 0;
        const interval = setInterval(() => {
            currentCount += incrementValue;
            if (currentCount >= target) {
                currentCount = target;
                clearInterval(interval);
            }
            counterElement.textContent = currentCount.toLocaleString();
        }, incrementTime);
    </script>
    <script src="{{ asset('Front/javascript/chatbox.js') }}"></script>
    <script src="Front/javascript/carrousel.js"></script>
    <script src="Front/javascript/carrousel-realisation.js"></script>
    <script>
        const menuButton = document.getElementById('toggle-btn');
        const croixButton = document.getElementById('croix');
        const menu = document.getElementById('menu');
        //const cart = document.getElementById('cart');
        //const panier = document.querySelector('.panier');

        //document.querySelector('.panier').style.display = 'none';
        //Gestion du panieruttin
        //cart.addEventListener('click', () => {

        //  document.querySelector('.panier').style.display = panier.style.display === 'none' ? 'block' : 'none';
        //});
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
    <script src="Front/javascript/menu.js"></script>
</body>

</html>
