<style>
    .contain-hidd_menu {
        display: none;
    }

    #espace_panier {
        display: none;
    }

    #croix {
        display: none;
    }

    main {
        width: 100vw !important;
        overflow-x: hidden !important;
    }

    .user {
        color: transparent;

        display: inline-flex;
        justify-content: space-around;
        align-content: center;
        clip-path: circle(28% at 10% 50%);
    }

    #menu li a {
        font-size: 1vw !important;
    }


    .user img {
        clip-path: circle(75%);
    }

    .user:hover {
        background: #fbc600;
        clip-path: circle(75%);
        transition: clip-path 1s ease;
    }

    .btn_icon #cart {
        position: relative;
    }



    .btn_icon #cart span {
        background: #fbc600;
        position: absolute;
        left: 0;
        width: 2vw !important;
        height: 2vw !important;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;

        border-radius: 50%;
    }

    @media(max-width:1000px) {
        .contain-mobile {
            width: fit-content !important;
            height: 100% !important;
            background: red !important;
        }
    }


    /*@media (min-width:400px) and (max-width:1000px) {
        #espace_panier {
            display: block;
        }

        main {
            overflow-x: hidden !important;
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
            cursor: pointer;
            transition: all 1s ease-in-out;
            z-index: 99;
            position: absolute;
            font-size: 1.5rem;
            margin-top: 4%;
            right: 8%;
            display: none;
        }

        #toggle-btn {
            cursor: pointer;
            transition: all 1s ease-in-out;
            z-index: 99;
            position: absolute;
            font-size: 1.5rem;
            margin-top: 4%;
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

    @media(max-width:400px) {
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

            position: absolute;

            left: -8%;
            background: transparent;
            height: 8vh;
        }

        .logo img {
            height: 100%
        }

        .contain-hidd_menu {
            margin-top: -5px;
            margin-left: 52%;
            width: 30%;
            background: transparent;
            display: flex;
            flex-direction: row;
            justify-content: right;
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

        #menu {
            z-index: 99;
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
            margin: 2% 0 0 0 !important;
            z-index: 99;
            font-size: 1.5rem;
            margin-top: 4% !important;
            right: 5% !important;
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


    }*/
</style>
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
                <span id="cartCount"></span>
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
                            <img src="{{ asset('Front/images/DRAPEAUX/France.png') }}" alt="fr" class="flag">
                            <span class="acronym">FR</span>
                        </div>
                        <div class="option" data-lang="en">
                            <img src="{{ asset('Front/images/DRAPEAUX/Canada.png') }}" alt="en" class="flag">
                            <span class="acronym">EN</span>
                        </div>
                        <div class="option" data-lang="es">
                            <img src="{{ asset('Front/images/DRAPEAUX/Italie.png') }}" alt="es" class="flag">
                            <span class="acronym">ES</span>
                        </div>
                        <div class="option" data-lang="al">
                            <img src="{{ asset('Front/images/DRAPEAUX/Deutch.png') }}" alt="al" class="flag">
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
        <div class="custom-select-container select-contain2" style="margin-right:-1.7vw; margin-bottom: -1.5vh;">
            <div class="custom-select select2">
                <div class="selected-option sect-opt2">
                    <img src="{{ asset('Front/images/DRAPEAUX/Cameroun.png') }}" alt="fr" class="flag">
                </div>
                <div class="select-options">
                    <div class="option opt2" data-lang="fr">
                        <img src="{{ asset('Front/images/DRAPEAUX/France.png') }}" alt="fr" class="flag">
                        <span class="acronym2">FR</span>
                    </div>
                    <div class="option opt2" data-lang="en">
                        <img src="{{ asset('Front/images/DRAPEAUX/Canada.png') }}" alt="en" class="flag">
                        <span class="acronym2">EN</span>
                    </div>
                    <div class="option opt2" data-lang="es">
                        <img src="{{ asset('Front/images/DRAPEAUX/Italie.png') }}" alt="es" class="flag">
                        <span class="acronym2">ES</span>
                    </div>
                    <div class="option opt2" data-lang="al">
                        <img src="{{ asset('Front/images/DRAPEAUX/Deutch.png') }}" alt="al" class="flag">
                        <span class="acronym2">DE</span>
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
            <a href="{{ route('login') }}" style="color:white;"><i class="fa-solid fa-circle-user customer"></i></a>
        @endif
        <div class="contain-mobile">
            <i class="fa-solid fa-x" id="croix"></i>
            <i id="toggle-btn" class="fa-solid fa-bars"></i>
        </div>
    </div>
</header>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

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


    // Appel automatique de la fonction pour rafraîchir toutes les x secondes (optionnel)
    setInterval(refreshCartCount, 5000); // Par exemple, toutes les 10 secondes
</script>
