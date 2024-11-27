<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('Front/images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('Front/CSS/formulaire3.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/style_panier.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/header.css') }}">

    <link rel="stylesheet" href="{{ asset('Front/CSS/style-prod.css') }}">

    <title>BE_store</title>
    <style>
        :root {
            --huge: 6.5rem;
            --x-large: 4rem;
            --large: 2.5rem;
            --medium: 2rem;
            --small: 1.5rem;
            --x-small: 1.1rem;
            --tiny: .8rem;
        }

        main {

            overflow: hidden;
        }


        .form-group label {
            margin-bottom: 10px;
        }

        .hidden {
            display: none;
        }

        .newhidden {
            position: absolute;
            z-index: -1;

        }

        .opac {
            opacity: .6;
            transform: scale(.9);
        }



        .contain h1 {
            font-size: 1vw !important;
        }

        p {
            font-family: 'Ubuntu-Medium' !important;
        }

        .us {
            width: 100vw;
            display: flex;
            justify-content: space-around;
            flex-direction: row;
        }

        .us .contain {
            overflow: hidden;
            border-radius: 20px;
            border: 0;

        }

        .us .contain img:hover {
            transition: 1s ease;
            transform: scale(1.1);
        }

        footer {
            background: #000;
        }

        .contain p {
            font-size: 1vw;
        }

        .star {
            font-size: 1.5rem;
            margin-bottom: .5rem;
            color: #fbc600;
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

        .etoile {
            margin-left: -1vw;
            background: transparent !important;
            box-shadow: none !important;
            margin-bottom: -5px !important;
            height: 20px !important;
            display: flex;

            justify-content: center;
        }

        .etoile span {
            width: 15px;
            height: 15px;
            opacity: .6;
            background: #8b8b8b;
            clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
        }

        .etoile span:hover {
            opacity: 1;
            background: #fbc600 !important;
        }

        #shop {
            display: flex;
            flex-direction: row;
            justify-content: left;
            width: 100vw;
            padding: 0 10vw 0 10vw;
        }

        #shop aside {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            text-align: left;
        }

        .fig div {
            border-radius: 10px;
            margin-right: 10vw;
            width: 30vw;
            height: 30vw;
        }

        .fig div img {
            width: 100%;
            height: 100%;
        }

        .elements {
            margin-top: 15vh;
            height: 50vh;
        }

        .elements span {
            opacity: .6;
        }

        .elements span a {
            color: #000;
            text-decoration: none;
        }

        .elements .prix {
            font-family: 'Bantou Neue';
            font-weight: bold;
            font-size: 1.3em;
        }

        .elements form #number {
            padding: 10px;
            text-align: center;
            width: 3vw;
            color: #000;
            border: 1px solid #fbc600;
        }

        .elements form .send {
            padding: 10px;
            color: #fff;
            border: 0;
            background: #fbc600;
            border-radius: 20px;
        }

        .inf h1 {
            width: 70%;
        }

        .desc {
            font-family: 'Ubuntu-Medium';
            width: 90%;
        }

        .contain1 {
            width: 30vw;
            height: 40vw;
        }

        .head {
            width: 100vw;
            color: #000 padding-left:10px;
            padding-right: 10px;
        }

        .head button {
            border: 0;
            opacity: .6;
            border-radius: 20px;
        }

        .head button:hover {
            opacity: 1;
            background: #000;
            color: #fbc600;
        }

        .card {
            display: flex;
            flex-direction: column;
            width: 20vw;
            overflow: hidden;
            justify-content: left;
        }

        .card img {
            border-radius: 10px;
            height: 50%;
            width: 100%;

        }

        .tag {
            padding: 8px;
            border-radius: 50%;
            aspect-ratio: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card p,
        h5 {
            margin-top: 10px;
        }

        .card button {
            margin: 10px;
            padding: 10px;
            border: 0;
            color: #000;
            opacity: .6;
        }

        .sender:hover {
            border: 0;
            padding: 1px5;
            border-radius: 20px;
            transition: 1s ease-in;
            background: #fbc600;
            color: #fff;
        }

        .card button:hover {
            background: #fbc600;
            color: #fff;

        }

        .image-section {
            overflow: hidden;
            width: 40%;

        }

        .image-section img {
            width: 100%;

        }

        .image-section img:hover {
            transform: scale(1.1);
            transition: 1s ease-in;
        }

        .text-contain {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .txt-1 {
            padding: 0 3rem;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            text-align: right;
        }

        .txt-1 h1 {
            font-family: 'Baron Neue';
            font-size: 4rem;
            background-image: linear-gradient(120deg, #fbc600, #fff);
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .product-ca {
            display: flex !important;
            flex-direction: row !important;
            padding-right: 20px;
            justify-content: space-between;
        }

        .product-ca button {

            background: transparent;
            opacity: .6;
            color: #000;
        }

        .product-ca .bouton:hover {
            border: 0;
            opacity: 1;
            transition: all 1s ease-in;
            border-radius: 10px;
            background: #fbc600 !important;
            color: #fff;
        }

        .txt-1 button {
            text-align: right;
        }

        .txt-2 {
            overflow: hidden;
            width: 30%;
            padding-right: 2vw;
            height: 90%;
            align-self: flex-end;
        }

        .txt-2 img {
            transform: rotateY(9 0deg);
            height: 100%;
        }

        .slider-container {
            position: relative;
            height: 6.5rem;
            width: 44vw;
            top: 17vh;

            overflow: hidden;
            min-width: 500px;
        }

        .slider-container .sd-contain {
            position: absolute;
            top: 100%;
            height: 100%;
            right: 0vw;
            color: #fff;
            display: flex;
            flex-direction: column;
            gap: .5rem;
            animation: translate 4s ease-in-out infinite backwards;
        }

        @keyframes translate {
            0% {
                top: 100%;
            }

            25% {
                top: 0%;
            }

            50% {
                top: -130%;
            }

            75% {
                top: -250%;
            }

            100% {
                top: -380%;
            }
        }

        .slider-container .sd-contain div {
            font-size: var(--huge);
            text-align: right;
        }

        #number {
            width: 5vw;
            border: 0;
            text-align: center;
            padding: 10px;
        }

        .cards-wrapper {
            display: flex;
            flex-direction: column;
            gap: 3rem;
            line-height: 1.3;
        }

        .hedadline {
            font-size: var(--medium);
            width: 900px;
        }

        .headline span {
            font-weight: bold;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            place-items: center;
        }

        .color-options {
            display: flex;
            flex-direction: row;
        }

        .card {
            background: rgba(255, 255, 255, .1);
            padding: 2rem;
            max-width: 400px;
            display: flex;
            flex-direction: column;
            gap: .5rem;
            border-radius: 5px;
            backdrop-filter: blur(15px);
        }

        .card .icon {
            background: rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            width: 50px;
            aspect-ratio: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /*Liste de produit*/
        .contain {
            width: 100vw;
            display: flex;
            justify-content: space-around;
        }

        .contain .cart {
            margin: 10px;
            height: 18rem;
            border-radius: 20px !important;
            padding: 0px;
            position: relative;
        }

        .contain .cart .card-body {

            color: #fff;
            width: 100%;
            height: 100%;
            padding: 10px;
            top: 0%;
            padding-top: 100%;
            position: absolute;
        }

        .cart img {
            border-radius: 20px !important;
            width: 100%;
            height: 100%;
        }

        .cart img:hover {
            transition: 1s ease-in;
            transform: scale(1.05) !important;
        }

        .cart .card-body:hover {
            transition: all 1s ease-in-out;
            padding-top: 20%;
            border-radius: 20px !important;
            transform: scale(1) !important;
            box-shadow: inset 0px -80px 120px 0px #008cffa9 !important;

        }

        .cart .card-body p {
            margin-top: 10px;

        }

        .cart .card-body .card-text {
            opacity: .8;
        }

        .cart .card-body button,
        .cart .card-body a {
            width: 40px;
            aspect-ratio: 1;
            border: 0;
            display: inline-flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background: #fbc600;
            color: #fff;
        }

        .icon i {
            margin: auto;
            font-size: var(--x-small);
        }

        .title {
            font-size: var(--small);
            font-weight: bold;
            max-width: 200px;
        }

        p {
            font-size: 'Ubuntu';
        }

        .bbb {
            width: 30% !important;
            background: transparent;
        }

        .bbb:hover {
            background: #008eed;
            transition: background 1s ease-in;
        }

        desc {
            font-size: var(--x-small);
        }

        /*Banner*/

        #banner {
            padding-top: 5vh;
            color: #fff;
            width: 99vw;
            border-radius: 20px;
            height: 52vh;
            background: #008eed;
        }

        .current-price::after {
            content: "CFA";
        }

        #old-price::after {
            content: "CFA";
        }

        #banner .container {
            background: url('{{ asset('Front/images/IMG_1944.jpeg') }}') scroll no-repeat center;
            background-size: cover;
        }

        .contain-section {
            position: relative;
            padding: 20px;
            margin-left: 50%;
            width: 50%;
        }

        .panier {
            z-index: 999;
            right: none;
            left: 2vw;
        }

        .contain-section p {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .btn_a {
            padding: .8rem;
            border-radius: 5px;
            color: #fff;
            border: 0;

            background: #008eed;
        }

        .contain-section a {
            color: #fff;
            text-decoration: none;
            border: 0;
            background: #008eed;
            position: absolute;
            bottom: 2rem !important;
            margin-left: 3%;
            border-radius: 10px;
            padding: 20px 30px;
        }

        #submitButton {
            width: 30%;
        }

        .hdd {
            display: none;
        }

        .review h3 {
            font-size: 1rem;
        }

        .contain-section h2 {
            margin-bottom: 10px;
        }

        .comment-section {
            width: 100%;
            max-width: 500px;
            background-color: #fff;
            border-radius: 8px;
            padding: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .comment-section h2 {
            color: #555;
            margin-bottom: 16px;
        }

        .comment-box {
            display: flex;
            flex-direction: column;
            margin-bottom: 16px;
        }

        .comment-box textarea {
            width: 100%;
            padding: 12px;
            resize: none;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .comment-box button {
            align-self: flex-end;
            padding: 8px 16px;
            border: none;
            background-color: #1877f2;
            color: #fff;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
        }

        .comment-box button:hover {
            background-color: #155dbd;
        }

        .asb {
            margin-left: 34px;
        }

        .comment {
            display: flex;
            flex-direction: column;
            padding: 12px;
            background-color: #f9f9f9;
            border: 1px solid #eee;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .comment .username {
            font-weight: bold;
            color: #1877f2;
            margin-bottom: 4px;
        }

        .comment .text {
            color: #333;
            font-size: 14px;
        }

        #backup {
            display: none;

        }

        #croix {
            display: none;
        }

        .txt-2 {
            display: block;
        }

        #espace_panier {
            display: none;
        }

        @media(max-width:800px) {
            .slider-container {
                height: 2.6rem;
            }

            .product-info {
                width: 100%;
            }

            .txt-2 {
                display: none;
            }

            .sd-contain div {
                text-align: left;
                margin-right: 50vw;
                font-size: 2.6rem !important;
            }

            .title_head {
                margin: 0;
                width: 100vw !important;
                display: flex;
                margin-left: 40vw;
                text-align: left !important;
                justify-content: left !important;
                font-size: 2.6rem !important;
            }

            .product-details {
                display: flex;
                flex-direction: column;
                justify-content: left;
            }

            .color-options {
                width: 100%;
            }

            #number {
                color: #000;
                width: 10vw !important;
            }

            .bouton {

                margin-left: 80%;
            }

            .us {
                display: flex;

                flex-direction: column !important;
            }

            #form_contain {
                display: inline-flex;
            }

            .star {

                font-size: 1rem !important;
            }

            .image-section {


                width: 100% !important;
            }

            #banner {
                display: none;
            }

            .image-section img {
                width: 100%;
                height: 100%;
            }

            #backup .container {
                display: flex !important;
                flex-direction: column !important;
            }

            .form-container input {
                width: 80vw !important;
            }

            .asb {
                width: 100vw !important;
                margin-left: 10px;
                font-size: 1rem !important;
            }

            .us .contain {
                width: 100vw;
                display: flex;
                flex-direction: column;
            }

            .card-text,
            .count-2 {
                font-size: 1rem !important;
            }


        }
    </style>
</head>

<body>
    @include('Front.layout.header')

    <main>
        <section class="accueil">
            <div class="text-contain">
                <div class="txt-1">
                    <div class="slider-container">
                        <div class="sd-contain">
                            <div>Profitez</div>
                            <div>Sans fin</div>
                            <div>D'Energie</div>
                            <div>Illimitée</div>
                        </div>
                    </div>
                    <h1 class='title_head'>Prenez <br>en main
                        <br> Votre avenir
                    </h1>
                    <!--<button class="btn-1 bbb"><i class="fa-solid fa-arrow-right"></i></button>-->
                </div>

                <div class="txt-2" style="z-index:0;">
                    <img data-aos="fade-left"
                        src="{{ asset('Front/images/Image develppeur/Image develppeur/perso-1.png') }}" alt="perso">
                </div>
            </div>
        </section>
        <!--Presentation du produit-->
        <section class="product-section">
            <div class="container">
                <div class="product-details">
                    <div class="image-section"><img src="{{ asset('storage/' . $produit->image) }}"
                            alt="{{ $produit->nom }}">
                        <!--<div class="discount-tag tag">-30%</div>-->
                        @php
                            $reduction = 0;
                        @endphp
                    </div>
                    <div class="product-info inf">
                        <h1>{{ $produit->nom }}</h1>
                        <p class="product-code code">Product Code: {{ $produit->code }}</p>
                        <p class="product-description desc">{{ $produit->description }}.</p>
                        <div class="color-options">
                            <p class='star' id="star-rating">
                                <span class="star" data-value="1">★</span>
                                <span class="star" data-value="2">★</span>
                                <span class="star" data-value="3">★</span>
                                <span class="star" data-value="4">★</span>
                                <span class="star" data-value="5">☆</span>
                            </p>
                        </div>



                        <div class="actions">
                            <form action="{{ route('cart.addition',$produit->id) }}" method="POST">
                                @csrf
                                <aside id="form_contain">

                                    <a id='sub_btn_moin' class="btn_a moin">-</a>

                                    <input type="number" id="number" name="number" style=' padding:10px;'
                                        value="1" disabled>

                                    <a id='sub_btn_plus' class='btn_a plus'>+</a>
                                 </aside>
                                <div class="price"><span class="current-price"
                                        id="prix">{{ $produit->prix   }}</span>
                                    <span class="old-price" id='old-price'>{{ $produit->prix }}</span>
                                </div>
                                <!--<i class="fa-regular fa-message">Commentaire</i>
                        <i class="fa-regular fa-thumbs-up">J'aime</i>
                        <i class="fa-solid fa-thumbs-up">J'aime</i>-->

                                <button class="add-to-cart-btn btn_re" type="submit">
                                    Ajouter
                                </button>
                            </form>

                        </div>
                        <!--<i class="fa-solid fa-share-nodes"></i>-->


                        <!--<div class="shipping-return">
                            <p>Shipping and Return</p><a href="#">Read our Terms and Conditions</a></div>
                    </div>-->
                    </div>
                </div>
            </div>
        </section>
        @php
            $commentaires = App\Models\Commentaires::Paginate(3);
        @endphp



        <section class="reviews-section">
            <div class="container">
                <h2 style="margin-top:-10vh;margin-bottom:3vh;">Commentaires</h2>
                @foreach ($commentaires as $commentaire)
                    @php
                        $i = $commentaire->note;
                    @endphp
                    <div class="review">
                        <h3>{{ $commentaire->name }}</h3>
                        <p class='star'>
                            @for ($id = 0; $id < 5; $id += 1)
                                @if ($commentaire->note - $id >= 0)
                                    ★
                                @else
                                    ☆
                                @endif
                            @endfor
                        </p>
                        <p>{{ $commentaire->commentaire }}</p>
                        <p class="review-date"> {{ $commentaire->created_at->format('d F Y / H:i') }}</p>

                    </div>
                @endforeach
                <div class="review">
                    <h3>Administrateur</h3>
                    <p class='star'>★★★☆☆</p>
                    <p>"Nous vous souhaitons de passer un bon moment sur notre site."</p>
                    <p class="review-date">29 January 2022 / 19:25</p>
                </div>
            </div>
        </section>
        <!--Fin-->


        <!-- Product Recommendation Section -->
        <aside class=" product-ca" style='width:100vw;'>
            <h2 class='asb'>D'autre articles à acheter</h2>
            <button class='btn bouton' onclick="window.location.href ='{{ route('store') }}'">Voir plus <i
                    class="fa-solid fa-arrow-right"></i></button>
        </aside>
        @php
            $produits = App\Models\Produits::Paginate(4);

        @endphp
        <div class="row mt-5 us" style="margin:0 10px 10px 0px;">
            @foreach ($produits as $product)
                <div class="col-md-3 contain">
                    <div class="cart">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->nom }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->nom }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="count-2"><strong>{{ $product->prix }}CFA</strong></p>
                            <!--<button><i class="fa-solid fa-magnifying-glass"></i></button>-->
                            <form action="{{ route('cart.addition', $product->id) }}" method="POST">
                                @csrf
                                <input type="number" class="hidden" name="number" value="1" required>
                                <button type="submit">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </form>





                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Add other product cards here -->
        </div>


        @if (Auth::user())
            @php
                $id = auth()->user()->id;
            @endphp
        @else
            @php
                $id = 0;
            @endphp
        @endif
        <div class="box-sub">
            <div class="arrow-up">
                <a href="#fer"> <i class="fa-solid fa-arrow-up" style="color: #fff;"></i></a>
            </div>
            <div class="chat-bot"><a><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                        <path
                            d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                        <path
                            d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2" />
                    </svg></a></div>
        </div>
        <aside id="backup" style="border-radius: 20px;">
            <div class="container-from" id="formulaire" style="border-radius: 20px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach

                    <aside>
                        <div class="image-section">
                            <img src="{{ asset('Front/images/Image develppeur/Image develppeur/Screen transitions (1).gif') }}"
                                alt="photo">
                        </div>
                        <div class="form-container">
                            <h1 style="color:#fff;">Laisser un commentaire</h1>
                            @if (Auth::user())
                                <form method='POST' action='{{ route('Commentaires', $produit->id) }}'
                                    id="partnershipForm">
                                    @csrf

                                    <div class="form-group hidden">
                                        <label for="fullname">Nom Complet <span style="color:red;">*</span></label>
                                        <input type="text" id="fullname" name='name'
                                            value ='{{ auth()->user()->nom }}' required
                                            placeholder="Votre nom complet">

                                    </div>

                                    <div class="form-group" id="emailGroup" style="display:none;">
                                        <label for="email">Email <span style="color:red;">*</span></label>
                                        <input type="email" id="email" name='email'
                                            value ='{{ auth()->user()->email }}' required
                                            placeholder="Entrer votre email">
                                    </div>
                                    <input type="number" id="note" name='note' value='4'
                                        style ="display:none;"required>
                                    <input type="text" name='user' value='{{ $id }}'
                                        style ="display:none;"required>

                                    <div class="form-group" id="messageGroup">
                                        <label for="message">Message <span style="color:red;">*</span></label>
                                        <textarea id="message" style="height:20vh;" required placeholder="Votre message" name='commentaire'></textarea>

                                    </div>

                                    <button type="submit" id="submitButton">Envoyer</button>


                                </form>
                            @else
                                <form method='POST' action='{{ route('Commentaires', $produit->id) }}'
                                    id="partnershipForm">
                                    @csrf

                                    <div class="form-group ">
                                        <label for="fullname">Nom Complet <span style="color:red;">*</span></label>
                                        <input type="text" id="fullname" name='name' required
                                            placeholder="Votre nom complet">

                                    </div>

                                    <div class="form-group" id="emailGroup">
                                        <label for="email">Email <span style="color:red;">*</span></label>
                                        <input type="email" id="email" name='email' required
                                            placeholder="Entrer votre email">
                                    </div>
                                    <input type="number" id="note" name='note' value='4'
                                        style ="display:none;"required>


                                    <div class="form-group" id="messageGroup">
                                        <label for="message">Message <span style="color:red;">*</span></label>
                                        <textarea id="message" style="height:20vh;" required placeholder="Votre message" name='commentaire'></textarea>

                                    </div>

                                    <button type="submit" id="submitButton">Envoyer</button>


                                </form>
                            @endif

                        </div>
                    </aside>
            </div>
        </aside>
        <!--Banner-->
        <section id="banner">
            <section class="ftco-section ftco-intro p-1" style=" padding-bottom: 20px;">

                <div class="overlay"></div>
                <div class="container">
                    <div class="row justify-content-end " style="margin-left: -8vw;">
                        <div class="col-md-6 heading-section heading-section-white contain-section"
                            style="position:relative;height:40vh;border-radius: 10px; padding-top:10px;backdrop-filter: blur(15px); background: linear-gradient(135deg,#008eed6f 80%, #fff 100%); border-radius:10px;">
                            <h2 class="" style="margin-bottom:10px; margin-top:10px; font-size: 30px;">Une
                                formation qui s'adapte à vous</h2>
                            <p style="width: 50%;">Les investissement en bourse, crypto et le money management ne
                                seront plus un secret pour vous</p>
                            <a href="https://resetbylebantou.com" target="_blank"
                                class="btn btn-primary float-end rounded btn-lg" style="margin-top:20%;">Inscrivez
                                vous maintenant</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        @include('Front.layout.chatbox')
    </main>
    @include('Front.layout.footer')
    <script src="{{ asset('Front/javascript/menu.js') }}"></script>
    <script src="{{ asset('Front/javascript/chatbox.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('Front/javascript/menu.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        const backup = document.getElementById('backup');
        const msd = document.querySelectorAll('.msd');
        msd.forEach((btn, i) => {
            msd[i].addEventListener('click', () => {
                backup.style.display = backup.style.display === 'none' ? 'block' : 'none';
            });
        });
    </script>
    <script src="{{ asset('Front/javascript/menu.js') }}"></script>
    <script>
        // Récupérer les éléments du DOM

        const minusButton = document.getElementById('sub_btn_moin');
        const plusButton = document.getElementById('sub_btn_plus');
        const numberDisplay = document.getElementById('number');

        // Convertir le contenu de l'élément 'a' en nombre
        let currentValue = numberDisplay.value;
        // Récupérer le prix actuel et l'ancien prix
        let prixElement = document.getElementById('prix');
        //let oldPriceElement = document.getElementById('old-price');



        // Fonction pour diminuer la valeur
        minusButton.addEventListener('click', () => {
            if (currentValue >= 1) {
                currentValue--;
                numberDisplay.value = currentValue;

                minusButton.style.opacity = '1';
                newPrice = prix * currentValue;
                //newoldPrice = oldPrice * currentValue;
                prixElement.textContent = newPrice.toFixed(2).replace('.', ',');
                //oldPriceElement.textContent = newoldPrice.toFixed(2).replace('.', ',');
            } else {
                minusButton.style.opacity = '.8';
            }
        });

        // Fonction pour retirer les points et convertir en nombre
        function parsePrice(price) {
            return parseFloat(price.replace(',', ''));
        }

        // Convertir les prix en nombres
        let prix = parsePrice(prixElement.textContent);
        //let oldPrice = parsePrice(oldPriceElement.textContent);

        // Afficher le résultat dans l'élément 'prix'
        //prixElement.textContent = newPrice.toFixed(3).replace('.', ',');

        // Fonction pour augmenter la valeur
        plusButton.addEventListener('click', () => {
            currentValue++;
            numberDisplay.value = currentValue;

            newPrice = prix * currentValue;
            //newoldPrice = oldPrice * currentValue;
            prixElement.textContent = newPrice.toFixed(2).replace('.', ',');
            //oldPriceElement.textContent = newoldPrice.toFixed(2).replace('.', ',');
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // Récupérer tous les éléments d'étoiles
        const stars = document.querySelectorAll('#star-rating .star');
        const num = document.querySelector('#note');

        // Ajouter un événement 'click' à chaque étoile
        stars.forEach(star => {
            star.addEventListener('click', function() {
                const rating = this.getAttribute(
                    'data-value'); // Récupère la note (position de l'étoile cliquée)
                //Attribuer la valeur au input
                num.value = rating - 1;
                // Mettre à jour les étoiles : Remplit de ★ jusqu'à la position cliquée
                stars.forEach((s, index) => {
                    if (index < rating) {
                        s.textContent = '★'; // Pleine étoile
                    } else {
                        s.textContent = '☆'; // Étoile vide
                    }
                });
            });
        });
    </script>
    <!--<script>
        function refreshCartCount() {
            $.ajax({
                url: '/cart/count', // URL de l'endpoint qui renvoie le nombre d'éléments
                method: 'GET',
                success: function(response) {
                    // Mise à jour de la section avec le nombre d'éléments dans le panier
                    $('#cartCount').text(response.count);
                },
                error: function() {
                    $('#cartCount').text('0'); // Message d'erreur en cas de problème
                }
            });
        }


        // Appel automatique de la fonction pour rafraîchir toutes les x secondes (optionnel)
        setInterval(refreshCartCount, 1000); // Par exemple, toutes les 10 secondes
    </script>-->




    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            onset: 500,
            offset: 200,
        });
    </script>
</body>

</html>
