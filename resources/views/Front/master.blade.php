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
    <link rel="shortcut icon" href="Front/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="Front/CSS/header.css">
    <link rel="stylesheet" href="Front/CSS/style.css">
    <link rel="stylesheet" href="Front/CSS/footer.css">
    <!--<link rel="stylesheet" href="Front/CSS/header-mobile.css">-->
    <title>BE-plateforme</title>
    <style>
        html, body{
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
        }
        * {
            font-size: 2.6vh;
        }

        #menu li a {
            cursor: pointer !important;
            z-index: 999 !important;
            font-size: .9vw !important;
        }

        .item {
            cursor: pointer !important;
        }

        .chat-bot svg {
            width: 50% !important;
            height: 50% !important;
        }


        h1,
        h2,
        h3 {
            margin-bottom: .5vh;
            font-size: 5vh;
        }

        .pointer i {
            font-size: 2.5vw;
        }

        .hauteur {
            height: 100vh !important;
        }

        .print1 {
            padding-top: 20vh !important;
        }

        .userContain {
            width: 100%;
            background: #000;
        }


        .print aside {
            height: fit-content !important;
        }

        .print4 div:nth-child(1)::after {
            margin-left: -23px;
            opacity: 0;
            position: absolute;
            top: -6vh;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80px;
            height: 30px;
            border-radius: 8px;
            background: #000;
            font-size: 1vw;
            content: "France";
        }


        .print4 div:nth-child(3)::after {
            margin-left: -23px;
            opacity: 0;
            position: absolute;
            top: -6vh;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80px;
            height: 30px;
            border-radius: 8px;
            background: #000;
            font-size: 1vw;
            content: "Italie";
        }

        .print4 div:nth-child(2)::after {
            margin-left: -23px;
            position: absolute;
            top: -6vh;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80px;
            height: 30px;
            opacity: 0;
            border-radius: 8px;
            background: #000;
            font-size: 1vw;
            content: "Cameroun";
        }

        main {
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }

        .print4 div:hover::after {
            opacity: 1;
        }

        .title p {
            font-size: 1.4vw;
        }

        /*REsponsive menu moblie*/

        .contain-hidd_menu {
            display: none;
        }

        #espace_panier {
            display: none;
        }

        #croix {
            display: none;
        }

        .user {
            color: transparent;
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

        @media (max-width:1030px) {
            #espace_panier {
                display: block;
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

                left: 0%;
                background: transparent;
                height: 8vh;
            }

            .logo img {
                height: 100%
            }

            .selected-option .flag {
                margin-top: -2rem;

            }

            .contain-hidd_menu {

                background: transparent;
                display: flex;
                position: absolute;
                top: 0px;
                right: 0px;
                flex-direction: row !important;
                justify-content: center;
                align-items: center;
                height: 100%;
                width: 30%;
            }

            .contain-hidd_menu i {
                margin-left: 1rem;
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
                font-size: 1.5rem;
                margin-top: 4%;
                display: none;
            }

            #toggle-btn {
                transition: all 1s ease-in-out;
                z-index: 99;
                font-size: 1.5rem;
                margin-top: 4%;
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

        /*Fin de responsive menu moblile*/



        /*Respnsive tablet*/
        /*Responsive mobile*/
        @media (max-width:700px) {

            .print {
                width: fit-content !important;
                overflow: hidden !important;

            }


            .print1 .title::before {
                position: absolute;
                top: -20% !important;
                left: 0%;
            }

            .i-ecran {
                display: none;
            }

            :where(.print2, .print3) .title::before {

                top: 5vw;
                left: 44%;
            }

            .title::before {
                margin: auto !important;
            }

            .title {
                width: 80% !important;
            }




            #menu li a {
                font-size: 12px !important;
            }

            .sld {
                overflow: hidden;
            }



            .item img {
                width: 5rem;
            }

            .diaporama-container {
                height: 8rem;

            }


            #print1 .title h2,
            #print2 .title h3,
            #print3 .title h2 {

                font-size: 1.1rem !important;
            }

            .planete {
                margin-top: 8rem;
            }

            .title::before {
                position: relative;
                font-size: 7vw;
                margin: 10px 0px;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 12vw;
                font-weight: 800;
                aspect-ratio: 1;
                background: #fff;
                border-radius: 100%;
            }


            #print1 .title p {

                font-size: .45rem;
            }

            #print2 .title p {

                font-size: .45rem;
            }

            #print3 .title p {

                font-size: .45rem;
            }

            .print aside {
                height: fit-content !important;
            }

            .diaporama {

                margin-bottom: 0rem;
            }

            .diaporama-container {
                gap: 100px;
                width: 2rem;
            }

            /*.contain-menu-mobile {
                width: fit-content !important;
                height: fit-content !important;

            }*/

            .item {
                cursor: pointer !important;
                width: 10rem;
                display: flex;
                justify-content: center;

            }

            .pointer::after {
                font-size: .6rem !important;
            }


            .pointer {
                background: transparent !important;

                border: 0;
                margin-top: -20px;
            }

            .arrow-up {
                width: 100% !important;
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
            <div class="contain-menu-mobile">
                <i class="fa-solid fa-x" id="croix"></i>
                <i id="toggle-btn" class="fa-solid fa-bars"></i>

            </div>
        </div>
    </header>

    <section class="print">

        <aside id="print1" class="print1">
            <div class="title" data-aos="fade-left">
                <h2>A propos</h2>
                <p>Bantou-Energy est une entreprise innovante dédiée à résoudre les problèmes énergétiques et d'accès à
                    l'eau au Cameroun. Conscients des défis majeurs auxquels notre pays est confronté, notamment en
                    matière d'accès à l'énergie dans un contexte
                    où 10 régions sont traversées par de nombreux cours d'eau, nous avons décidé de prendre les devants
                    face au manque d'initiatives gouvernementales. Notre mission est de promouvoir les énergies
                    renouvelables comme solution viable et
                    durable pour pallier le déficit énergétique qui affecte tant de communautés. Nous croyons fermement
                    que chaque Camerounais mérite un accès fiable à l'énergie, et nous nous engageons à faire de cette
                    vision une réalité.</p>

            </div>
        </aside>
        <div class="ind_1">
        </div>
        <aside id="print2" class="print2">
            <div class="title" data-aos="fade-right">
                <div>
                    <h3>Actualités</h3>
                    <p>Bantou-Energy, votre source privilégiée pour toutes les informations relatives à notre engagement
                        envers la transition énergétique au Cameroun. Ici, nous partageons les dernières nouvelles sur
                        nos initiatives, nos projets en cours,
                        ainsi que des événements marquants qui font avancer notre mission. Vous découvrirez également
                        des articles sur les tendances émergentes en matière d’énergies renouvelables, des études de cas
                        inspirantes et des témoignages de communautés
                        que nous avons pu aider. Restez informés des innovations que nous mettons en œuvre pour garantir
                        un accès durable à l’énergie et à l’eau pour tous. Dans cette rubrique, nous mettons également
                        en lumière les collaborations et partenariats
                        stratégiques qui renforcent notre impact et notre portée.</p>
                </div>
            </div>
        </aside>
        <aside id="print3" class="print3">
            <div class="title" data-aos="fade-left">

                <h2>Bantou-Room</h2>
                <p>Le Salon Bantou Énergie est une plateforme unique où les idées s'échangent et où les projets prennent
                    vie. Vous y trouverez des conférences inspirantes, des ateliers pratiques, des démonstrations de
                    technologies innovantes et des tables
                    rondes animées par des leaders d'opinion. C'est l'occasion idéale de découvrir les dernières
                    avancées dans le domaine des énergies renouvelables et de s'engager activement dans la transition
                    énergétique.
                </p>
            </div>
        </aside>
        <!--Logo-->


    </section>
    <aside class="sld">
        <h1>Nos Partenaires</h1>
        <div class="diaporama">

            <div class="diaporama-container">
                <div class="item" onclick="window.location.href='#'"><img
                        src="Front/images/Logo/Logos Bantou/BANTOU-04.png" class="diaporama-image">
                </div>
                <div class="item" onclick="window.location.href='#'"><img src="Front/images/Logo/BF/BF logo-02.png"
                        class="diaporama-image"></div>
                <div class="item" onclick="window.location.href='#'"><img
                        src="Front/images/Logo/BSwag/logo BH BF-03.png" class="diaporama-image">
                </div>
                <div class="item" onclick="window.location.href='#'"><img
                        src="Front/images/Logo/BI/BANTOU [Récupéré]-04.png" class="diaporama-image">
                </div>
                <div class="item" onclick="window.location.href='#'"><img
                        src="Front/images/Logo/BFund/logo BH BF-06.png" class="diaporama-image">
                </div>
            </div>
        </div>
    </aside>
    <section class="planete">
        <div class="print4">
            <div class="pointer"><i class="fa-solid fa-location-dot"></i></div>
            <div class="pointer"><i class="fa-solid fa-location-dot"></i></div>
            <div class="pointer"><i class="fa-solid fa-location-dot"></i></div>
            <img class="planisphere"
                src="Front/images/Image develppeur/Image develppeur/world-map-made-glowing-fireflies-each-wallpaper.jpg"
                alt="planisphere" class="planisphere">


        </div>
    </section>
    <div class="box-sub">
        <div class="arrow-up">
            <a href="#fer"><i class="fa-solid fa-arrow-up" style="color: #fff;"></i></a>
        </div>
        <div class="chat-bot"><a><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chat-dots"
                    viewBox="0 0 16 16">
                    <path
                        d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                    <path
                        d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2" />
                </svg></a></div>
    </div>
    @include('Front.layout.chatbox')
    <!--Debut du footer-->
    @include('Front.layout.footer')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            offset: 200,
        });
    </script>
    <script src="{{ asset('javascript/drapeau.js') }}"></script>
    <script src="{{ asset('Front/javascript/drapeaux2.js') }}"></script>
    <script src="{{ asset('Front/javascript/chatbox.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="Front/javascript/menu.js"></script>
</body>
<script>
    const container = document.querySelector('.diaporama-container');
    const items = document.querySelectorAll('.item');
    const totalItems = items.length;
    const itemWidth = items[0].offsetWidth + 105; // Largeur de l'élément + marge
    let index = 0;

    // Clone les éléments pour un défilement infini
    for (let i = 0; i < totalItems; i++) {
        const clone = items[i].cloneNode(true);
        container.appendChild(clone);
    }

    // Fonction pour déplacer le carrousel
    function moveCarousel() {
        index++;
        if (index >= totalItems) {
            index = 0; // Réinitialise l'index
            container.style.transition = 'none'; // Supprime la transition pour le saut instantané
            container.style.transform = 'translateX(0)'; // Retour à la position initiale
            setTimeout(() => {
                container.style.transition = 'transform 0.5s ease-in-out'; // Rétablit la transition
            }, 50); // Petite pause pour permettre le saut
        } else {
            container.style.transform = `translateX(-${index * itemWidth}px)`; // Déplace le conteneur
        }
    }

    // Change la position toutes les 2 secondes
    setInterval(moveCarousel, 2000); // Change d'image toutes les 2 secondes
</script>
<script>
    const menuButton = document.getElementById('toggle-btn');
    const croixButton = document.getElementById('croix');
    const menu = document.getElementById('menu');
    const print = document.querySelector('.print');
    const print1 = document.querySelector('#print1');
    const print2 = document.querySelector('#print2');
    const print3 = document.querySelector('#print3');



    menuButton.addEventListener('click', () => {
        croixButton.style.display = 'block';
        menuButton.style.display = 'none';
        menu.style.display = 'flex';
        menu.style.justifyContent = 'space-around';
        print1.style.display = 'none';
        print2.style.display = 'none';
        print3.style.display = 'none';
        print.classList.add('hauteur');
    });

    croixButton.addEventListener('click', () => {
        croixButton.style.display = 'none';
        menuButton.style.display = 'block'
        menu.style.display = 'none';
        print.classList.remove('hauteur');
        print1.style.display = 'block';
        print2.style.display = 'block';
        print3.style.display = 'block';

    });
</script>


</html>
