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
    <link rel="stylesheet" href="Front/CSS/formulaire.css">
    <link rel="shortcut icon" href="Front/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="Front/CSS/header.css">
    <link rel="stylesheet" href="Front/CSS/panier.css">
    <link rel="stylesheet" href="Front/CSS/footer.css">
    <link rel="stylesheet" href="Front/CSS/header-mobile.css">
    <title>Panier</title>

    <style>
        html, body{
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
        }
        .intro {
            display: flex;
            justify-content: center;
            width: 100%;
            height: 80vh;
            background: url('Front/images/Image develppeur/Image develppeur/167155.jpg') scroll no-repeat center;
            background-size: cover;
        }

        header {
            top: 0;
            margin: 0;
            position: absolute !important;
            background: #ffffff18 !important;
        }

        #lastName {
            width: 20vw;
            margin-left: 5vw;
        }

        .lbg_b {
            width: 40vw;
        }

        .zip {
            width: 10vw;
        }

        .intro div {
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .intro div i {
            font-size: 2em;
        }

        .hidden {
            display: none;
        }

        main input {
            font-size: 1.2vw;
        }

        .shipGroup {
            text-align: left;
            display: flex;
            flex-direction: row;
            align-items: first baseline;
            justify-content: left;
            width: 100%;
        }

        .shipGroup label {
            width: 100%;
        }

        .card .card-body:hover {
            padding-top: 20% !important;
            transform: scale(1) !important;
            box-shadow: inset 0px -80px 120px 0px #008cffa9 !important;
        }

        .card .card-body button {
            width: 40px;
            aspect-ratio: 1;
            border: 0;
            border-radius: 50%;
            background: #fbc600;
            color: #fff;
        }

        .shipGroup input {
            width: 12px;
            height: 12px;
        }



        .vitrine {
            border-radius: 10px;
            margin-top: 30vh;
            padding: 20px;
            height: 30vh;
            background: #ffffff18;
            backdrop-filter: blur(15px);
        }

        .btn:hover {
            background: #fff;
            color: #f00;
        }

        .us .contain {
            overflow: hidden;
        }

        .us .contain :hover {
            transition: 1s ease;
            transform: translateY(-10px);
        }

        .us .contain img:hover {
            transition: 1s ease;
            transform: scale(1.05);
        }

        .bg-svg {
            height: 300vh;
            position: absolute;
            top: 0vh;
            left: 0vw;
            z-index: -1;
            transform: rotateX(180deg);
        }

        .bg-svg img {
            height: 100%;
            width: 100vw;
        }

        .title {
            margin: 20px 0px 0px 20px;
        }

        .contain .card {
            border-radius: 20px !important;
            padding: 0;
            position: relative;
        }

        .contain .card img {
            border-radius: 10px;
            height: 40vh;
        }

        .contain .card .card-body {

            color: #fff;
            width: 100%;
            height: 100%;
            padding-top: 100%;
            position: absolute;
        }

        .empty {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2vw;
            margin-top: 10vh;
            margin-bottom: 10vh;
            width: 35vw;
        }

        .contain-img {
            width: 130%;

            height: 08vw;
        }

        .contain-img img {

            display: inline-flex;
            height: 60%;
        }

        .custom-radio {
            position: relative;
            margin-bottom: 10px;
        }

        .custom-radio label {
            position: absolute;
            top: 0;


        }

        .formulaire_contain {
            transition: all 1s ease-in-out;
            display: flex;
            flex-direction: column;


        }

        .uber {
            width: 100%;
        }

        @media(max-width:1000px) and (max-width:800px) {
            .uub .card-body {
                margin-top: 0% !important;
            }

            .uub {
                width: 25% !important;
                height: 80% !important;
            }

            .card {
                width: 100% !important;
                height: 80% !important;
            }

            .contain-img img {
                display: inline-flex;
                height: 60% !important;
            }
        }

        @media(max-width:800px) {
            .rect {
                display: flex !important;
                flex-direction: column !important;
                justify-content: center;
            }

            .total_dep {
                font-size: 12px !important;
            }

            .total h3 {
                font-size: 15px !important;
            }

            .prod {
                font-size: 12px !important;
            }

            .prod div h1,
            #num {
                color: #000;
                font-size: 12px !important;
            }

            .empty {
                width: 100%;
                padding: auto;
                font-size: 1rem !important;
            }

            .input-lg input {
                width: 70vw !important;
            }

            .uub {
                margin: auto !important;
                width: 80% !important;
                height: 80% !important;
            }

            .nombre {
                display: flex;
                justify-content: center;
                align-content: center;
                color: #000 !important;
                font-size: 12px !important;

            }


            .contain-img img {
                height: 50% !important;
            }


            .ub-prod {
                font-size: 15px;
            }



            .uub .card-body {

                margin-top: -10vh;
            }

            #lastName {
                margin-left: 0%;
                width: 100% !important;
            }

            #firstName {
                margin-left: 0%;
                width: 100% !important;
            }


            #state {
                font-size: 12px !important;
            }

            .lbg_b {
                width: 100% !important;
            }

            .custom-radio input {
                margin-left: 40vw;
            }

            .mb-e {
                font-size: 12px !important;
            }

            .unemi {
                margin: auto;
                width: 80% !important;
                background: transparent;
                border: none;
            }

            .unemi img {

                width: 100% !important;
            }

            #username {
                height: 8vh !important;


                width: 38vw !important;
            }

            .contain-img {
                margin-left: 0vw !important;
            }

            .form-control {
                width: 100% !important;
            }

            .item {
                font-size: 12px !important;
            }



        }
    </style>
</head>

<body>
    <header id="fer">
        <i class="fa-solid fa-x" id="croix"></i>
        <i id="toggle-btn" class="fa-solid fa-bars"></i>

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
        </div>
    </header>
    <main>
        <section class="intro">
            <div class="vitrine">
                <i class="fa-solid fa-credit-card"></i>
                <h1 style="text-align:center;">Tous ce que vous voulez<br> vous l'obtenez</h1>
            </div>
        </section>
        <div class="bg-svg">
            <img src="{{ asset('Front/images/bg.svg') }}" alt="super-svg">
        </div>
        <!--formulaire-->
        <section class="rect">
            <aside class="form-check">
                <div class="form-container">
                    <h1>Détails de facturation</h1>
                    <div style="margin-left: 2vw; margin-bottom:5vh;"><a href="">Accueil/</a><a
                            href="">BE-store/</a><a href="">Panier/</a></div>
                    <div class="col-md-8">
                        <form>
                            <aside class="formulaire_contain">


                                <div class="row">
                                    <div class="col-md-6 mb-3 input-lg">

                                        <input type="text" class="form-control" id="firstName"
                                            placeholder="Entrer votre nom" style=" width:20vw;"required>
                                    </div>
                                    <div class="col-md-6 mb-3 input-lg">

                                        <input type="text" class="form-control" id="lastName"
                                            placeholder="Entrer votre prénom" required>
                                    </div>
                                </div>

                                <div class="mb-3 w-100 input-lg">

                                    <div class="input-group lbg_b">
                                        <div class="input-group-prepend " style="height:8vh;">
                                            <span class="input-group-text h-100">@</span>
                                        </div>
                                        <input type="text" class="form-control " id="username"
                                            placeholder="Username" required>
                                    </div>
                                </div>

                                <div class="mb-3 input-lg">
                                    <input type="email" class="form-control" id="email"
                                        placeholder="you@example.com">
                                </div>

                                <div class="mb-3 input-lg">
                                    <input type="text" class="form-control" id="address"
                                        placeholder="1234 Main St" required>
                                </div>

                                <div class="mb-3 input-lg">
                                    <input type="text" class="form-control" id="address2"
                                        placeholder="Apartment or suite">
                                </div>

                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="country">Pays</label>
                                        <select class="custom-select d-block w-100" id="country" required>
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
                                    <div class="col-md-4 mb-3">
                                        <label for="state">ville</label>
                                        <input type="text" class="custom-select d-block w-100" id="state"
                                            style="width:13vw;" placeholder="Entrer votre ville " required>


                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="zip">Zip</label>
                                        <input type="text" class="form-control zip" id="zip" placeholder=""
                                            required>
                                    </div>
                                </div>


                                <div class="custom-control custom-checkbox hidden">
                                    <input type="checkbox" class="custom-control-input" id="same-address">
                                    <label class="custom-control-label" for="same-address">Shipping address is the
                                        same as my billing address</label>
                                </div>
                                <div class="custom-control custom-checkbox hidden" style="width:100%;">
                                    <input type="checkbox" class="custom-control-input" id="save-info">
                                    <label class="custom-control-label" for="save-info">Save this information for next
                                        time</label>
                                </div>


                                <h4 class="mb-3">Payment</h4>
                                <div class="contain-img">
                                    <img src="{{ asset('Front/images/Image develppeur/Image develppeur/cards.png') }}"
                                        alt="">
                                    <img src="{{ asset('Front/images/OM.jpg') }}" alt="Orange money">
                                    <img src="{{ asset('Front/images/momo.jpg') }}" alt="Mobil money">
                                </div>

                                <aside id="form-contain-pay">
                                    <div class="d-block my-3">
                                        <div class="custom-control custom-radio">
                                            <input id="OM" name="paymentMethod" type="radio"
                                                class="custom-control-input" checked required>
                                            <label class="custom-control-label" for="credit">Orange money </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input id="MM" name="paymentMethod" type="radio"
                                                class="custom-control-input" checked required>
                                            <label class="custom-control-label" for="credit">Mobile money </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input id="credit" name="paymentMethod" type="radio"
                                                class="custom-control-input" checked required>
                                            <label class="custom-control-label" for="credit">Carte de Credit
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input id="debit" name="paymentMethod" type="radio"
                                                class="custom-control-input" required>
                                            <label class="custom-control-label" for="debit">Cheque</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input id="paypal" name="paymentMethod" type="radio"
                                                class="custom-control-input" required>
                                            <label class="custom-control-label" for="paypal">PayPal</label>
                                        </div>
                                    </div>
                                    <div class="container-form check-contain">
                                        <fieldset class='hidden check'>
                                            <div class="form-group">
                                                <label for="address">Adresse de facturation</label>
                                                <input type="text" id="address" class="mb-e"
                                                    placeholder="Entrer votre adresse" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="check-number">Numero de cheque</label>
                                                <input type="number" id="check-number" class="mb-e"
                                                    placeholder="Entrer votre Numero de cheque" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="amount">Quantité</label>
                                                <input type="number" id="amount" class="mb-e"
                                                    placeholder="Entrer le montant" required>
                                            </div>

                                        </fieldset>

                                        <!--Carte-->
                                        <fieldset class='hidden check'>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="cc-name">Nom sur la carte</label>
                                                    <input type="text" class="form-control" style="width:14vw;"
                                                        id="cc-name" placeholder="" required>
                                                    <small class="text-muted">Nom complet comme sur la carte</small>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="cc-number">Credit card number</label>
                                                    <input type="text" class="form-control" style="width:26vw;"
                                                        id="cc-number" placeholder="" required>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="cc-expiration">Expiration</label>
                                                    <input type="text" class="form-control" style="width:14vw;"
                                                        id="cc-expiration" placeholder="" required>
                                                </div>
                                                <div class="col-md-6 mb-3 ">
                                                    <label for="cc">CVV</label>
                                                    <input type="text" class="form-control" style="width:26vw;"
                                                        id="cc-number" placeholder="" required>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class='hidden check'>
                                            <button
                                                class='fa-cc-paypal btn btn-primary'style="margin-bottom:20px;">Valider</button>
                                        </fieldset>
                                        <!--OM-->
                                        <fieldset class='hidden check'>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="cc-name">Nom</label>
                                                    <input type="text" class="form-control" style="width:14vw;"
                                                        id="cc-name" placeholder="" required>
                                                    <!--<small class="text-muted">Nom complet comme sur la carte</small>-->
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="cc-number">Prénom</label>
                                                    <input type="text" class="form-control" style="width:26vw;"
                                                        id="cc-number" placeholder="" required>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="cc-expiration">Numero</label>
                                                    <input type="text" name="om_number" class="form-control"
                                                        style="width:14vw;" id="cc-expiration" placeholder="">
                                                </div>
                                                <div class="col-md-6 mb-3 ">
                                                    <label for="cc">Adresse</label>
                                                    <input type="text" class="form-control" style="width:26vw;"
                                                        id="cc-number" placeholder="" required>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!--MOMO-->
                                        <fieldset class='hidden check'>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="cc-name">Nom</label>
                                                    <input type="text" class="form-control" style="width:14vw;"
                                                        id="cc-name" placeholder="" required>
                                                    <!--<small class="text-muted">Nom complet comme sur la carte</small>-->
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="cc-number">Prénom</label>
                                                    <input type="text" name="momo_number" class="form-control"
                                                        style="width:26vw;" id="cc-number" placeholder="" required>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="cc-expiration">Numéro</label>
                                                    <input type="text" class="form-control" style="width:14vw;"
                                                        id="cc-expiration" placeholder="" required>
                                                </div>
                                                <div class="col-md-6 mb-3 ">
                                                    <label for="cc">Adresse</label>
                                                    <input type="text" class="form-control" style="width:26vw;"
                                                        id="cc-number" placeholder="" required>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </aside>
                            </aside>
                            <button class="btn btn-primary btn-lg btn-block"
                                style="margin-bottom:3vh; border:0;"type="submit">Valider la commande</button>
                        </form>
                    </div>
                </div>
            </aside>
            <aside class="contain_panier">
                <h1 class="title">Panier</h1>
                @if (Session::has('cart') && count(Session::get('cart')) > 0)
                    <aside class="panier">

                        <ul class="container_items">
                            @foreach (Session::get('cart') as $id => $details)
                                <li class="item prod">
                                    <img src="{{ asset('storage/' . $details['image']) }}"
                                        alt="{{ $details['nom'] }}">

                                    <div class="detail">
                                        <h1>{{ $details['nom'] }}</h1>

                                        <p class="price">{{ $details['prix'] }}</p>
                                    </div>
                                    <form action="cart.view" method="get">
                                        <!--<div id="status-message"></div>-->
                                        <input type="number" name="num" id="num"
                                            value="{{ $details['quantity'] }}" class="nombre">
                                    </form>
                                    <form action="{{ route('cart.del', $id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class='btn btn-danger'><i class="fa-solid fa-trash"
                                                style='color:#000;'></i></button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>

                        <aside class="sub-banner">
                            <div class="total">


                                <h3>Total</h3>
                                <p class="total_dep">
                                    {{ array_sum(array_map(fn($item) => $item['prix'] * $item['quantity'], Session::get('cart'))) }}
                                    CFA</p>
                            </div>
                        </aside>
                    </aside>

                    <div class="sub-img"><img
                            src="{{ asset('Front/images/Image develppeur/Image develppeur/tg_image_554365933.png') }}"
                            alt=""></div>
            </aside>
        @else
            <p class="empty">

                Votre panier est vide.</p>

            @endif

        </section>
        <aside class="d-flex justify-between flex-row w-100 uber">
            <h2 style="margin-left:34px;" class="ub-prod">D'autre articles à acheter</h2>
            <button class='btn' onclick="window.location.href ='{{ route('store') }}'" style="margin-left:50vw;"
                class="ub-prod2">Voir plus</button>
        </aside>
        @php
            $products = App\Models\Produits::Paginate(4);

        @endphp
        <!-- Product Recommendation Section -->
        <div class="row mt-5 us" style="margin-bottom:10vh; margin:0 10px 10vh 10px;">
            @foreach ($products as $pro)
                <div class="col-md-3 contain uub">
                    <div class="card unemi">
                        <img src="{{ asset('storage/' . $pro->image) }}" alt="{{ $pro->nom }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $pro->nom }}</h5>
                            <p class="card-text">{{ $pro->description }}</p>
                            <p><strong>{{ $pro->prix }} CFA</strong></p>
                            <!--<button><i class="fa-solid fa-magnifying-glass"></i></button>-->

                            <form action="{{ route('cart.addition', $pro->id) }}" method="POST">
                                @csrf
                                <input type="number" class="hidden" name="number" value="1" required>
                                <button type="submit"> <i class="fa-solid fa-plus"></i></button>

                            </form>


                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Add other product cards here -->
        </div>

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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const formulaire = document.querySelector('.formulaire_contain');
            const zip = document.getElementById('zip');
            const MOMO = document.getElementById('MM');
            const OM = document.getElementById('OM');
            const credit = document.getElementById('credit');
            const debit = document.getElementById('debit');
            const paypal = document.getElementById('paypal');
            const checks = document.querySelectorAll('.check-contain .check')
            //const ship = document.getElementById('ship');
            const addr = document.getElementById('addr');
            /* ship.addEventListener("change",function(){
                  if(ship.checked()){
                      addr.classList.remove('hidden');
                  }
             });*/
            //console.log('formulaire');
            //console.log(credit.checked);
            zip.addEventListener('input', () => {
                if (zip.value) {
                    formulaire.style.flexDirection = 'column-reverse';
                } else {
                    formulaire.style.flexDirection = 'column';
                }
            });
            document.addEventListener('change', () => {

                if (credit.checked) {
                    checks[1].classList.remove('hidden');
                    checks[0].classList.add('hidden');
                    checks[2].classList.add('hidden');
                    checks[3].classList.add('hidden');
                    checks[4].classList.add('hidden');
                }

                if (debit.checked) {
                    checks[0].classList.remove('hidden');
                    checks[1].classList.add('hidden');
                    checks[2].classList.add('hidden');
                    checks[3].classList.add('hidden');
                    checks[4].classList.add('hidden');
                }

                if (paypal.checked) {
                    checks[2].classList.remove('hidden');
                    checks[0].classList.add('hidden');
                    checks[1].classList.add('hidden');
                    checks[3].classList.add('hidden');
                    checks[4].classList.add('hidden');
                }

                if (OM.checked) {
                    checks[3].classList.remove('hidden');
                    checks[0].classList.add('hidden');
                    checks[2].classList.add('hidden');
                    checks[1].classList.add('hidden');
                    checks[4].classList.add('hidden');
                }

                if (MOMO.checked) {
                    checks[4].classList.remove('hidden');
                    checks[0].classList.add('hidden');
                    checks[2].classList.add('hidden');
                    checks[3].classList.add('hidden');
                    checks[1].classList.add('hidden');
                }
            });

        });
    </script>

    <script src="{{ asset('Front/javascript/chatbox.js') }}"></script>
    <script src="Front/javascript/number.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Ciblage du bouton "Ajouter au panier" par classe ou ID
            $('.add-to-cart-btn').on('click', function(e) {
                e.preventDefault();

                // Récupération des données de l'élément (remplacer par vos valeurs)
                const itemId = $(this).data('id'); // ID de l'article
                const itemName = $(this).data('name');

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
                        <li class="item">
                            <img src="/storage/${details.image}" alt="">
                            <div class="detail">
                                <h1>${details.nom}</h1>

                                <p class="price">${details.prix}</p>
                            </div>

                                <input  style="width:40%;" disabled value="${details.quantity}">
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
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Surveiller les changements dans l'input
            $('#num').on('input', function() {
                let quantity = $(this).val(); // Récupérer la nouvelle quantité
                let id = $(this).data('id'); // Récupérer l'ID du produit

                // Envoyer la requête AJAX
                $.ajax({
                    url: "{{ route('updateQuantityAjax') }}", // La route vers le contrôleur
                    type: "PUT", // Méthode HTTP PUT pour la mise à jour
                    data: {
                        "_token": "{{ csrf_token() }}", // Token CSRF pour la sécurité
                        "id": id,
                        "quantity": quantity
                    },
                    success: function(response) {
                        $('#status-message').html(
                            '<div class="alert alert-success">Quantité mise à jour !</div>');
                    },
                    error: function(xhr) {
                        $('#status-message').html(
                            '<div class="alert alert-danger">Erreur lors de la mise à jour.</div>'
                        );
                    }
                });
            });
        });
    </script>
    <script>
        const menuButton = document.getElementById('toggle-btn');
        const croixButton = document.getElementById('croix');
        const menu = document.getElementById('menu');
        const print1 = document.querySelector('.vitrine');


        menuButton.addEventListener('click', () => {
            croixButton.style.display = 'block';
            menuButton.style.display = 'none';
            menu.style.display = 'flex';
            menu.style.justifyContent = 'space-around';
            print1.style.display = 'none';
        });

        croixButton.addEventListener('click', () => {
            croixButton.style.display = 'none';
            menuButton.style.display = 'block'
            menu.style.display = 'none';
            print1.style.display = 'flex';

        });
    </script>


    <!--  <script>
        paypal.Buttons({
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '100.00' // Montant du paiement
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Rediriger vers la route captureTransaction après succès
                    window.location.href = "{{ route('captureTransaction') }}?token=" + data.orderID;
                });
            }
        }).render('#paypal-button-container');
    </script>-->
</body>

</html>
