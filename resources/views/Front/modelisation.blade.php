<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="shortcut icon" href="{{ asset('Front/images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('Front/CSS/header.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/style_views.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/footer.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>BANTOU-ENERGY || Modelisations</title>
    <style>
        main {
            overflow: hidden;
        }

        .opac {
            opacity: 0;
        }

        .hidden {
            display: none;
        }

        .btn-abs {
            color: #000;
            background: transparent;
            border: 0;
            opacity: .8;
        }

        .btn-abs:hover {
            padding: 20px;
            border-radius: 20px;
            background: #fbc600;
            color: #fff;
        }

        .img-aside {
            padding: 0;
            display: flex;
            flex: flex-end;
            justify-content: center;


        }

        .img-aside div {
            width: 100%;
            height: 100%;
        }

        .text-aside {
            margin: 0;
        }

        .carrousel-contain {
            height: 100%;
            background: transparent;
            display: flex;
            flex-direction: row;
            gap: 2rem;
        }

        .item {
            transition: all 1s ease-in-out;
            position: absolute;
            background: rgba(0, 0, 0, .3);
            width: 100%;
            height: 100%;
        }

        .text-contain {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #008eed;
            width: 100%;
            height: 100%;
        }

        .text-contain h1 {
            font-size: 'Baron Neue';
            width: 50%;
            text-align: center;
            margin-bottom: 10px;
        }

        .text-contain p {
            font-size: 'Baron Neue';
            width: 50%;
            opacity: .6;
            color: #fff;
            text-align: justify;
        }

        .text-contain h1 {
            font-size: 'Baron Neue';
        }

        .text-contain button {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            color: #fbc600;
            margin-top: 10px;
            padding: 10px;
            background: transparent;
            border-radius: 10px;
            border: 1px solid #fbc600;
        }

        .text-contain button i {
            margin-left: 4px;
            margin-top: 4px;
            color: #fbc600;
        }

        .text-contain button:hover i {
            transition: 1s ease-in-out;
            color: #fff;
        }

        .text-contain button:hover {
            transition: all 1s ease-in-out;
            background: #fbc600;
            color: #fff;
            border-radius: 20px;
            border: none;
        }

        .carousel {
            animation: carousel 40s ease-in-out infinite forwards;
        }

        @media(max-width:600px) {
            #toggle-btn {
                margin-top: -1vh !important;
            }

            .carousel {
                width: 100%;
            }

            .img-aside {
                margin: 5vw;
                width: 90% !important;
            }

            .text-contain p {
                width: 70vw !important;

                font-size: 12px !important;
            }

            .text-aside {
                font-size: 12px !important;
                margin-left: 5vw;
                width: 100vw !important;
            }

            #banner {
                display: none;
            }
        }
    </style>

</head>

<body>
    @include('Front.layout.header')
    <main>
        <section class="header-views">
            <h1 class="title-view">Modélisation</h1>
            <div class="description"><a href="{{ route('home') }}" target="_blank"
                    rel="noopener noreferrer">Accueil/</a><a href="services.html" target="_blank"
                    rel="noopener noreferrer">Prestations des services/</a><a href="#" target="_blank"
                    rel="noopener noreferrer">Conseils et Audits/</a></div>
        </section>
        <section class="contain">
            <!--Description-->
            <aside class="text-aside">

                <p>À l’instar des grands penseurs qui jadis traçaient les contours de l’univers, nous usons d’outils
                    modernes et de méthodes rigoureuses pour modéliser des solutions énergétiques adaptées aux besoins
                    spécifiques de chaque client. La modélisation que nous pratiquons n’est point un simple exercice
                    théorique, mais l’acte de donner forme et vie à une solution qui épousera au plus près les réalités
                    de chaque projet.

                    Cette étape est cruciale, car elle nous permet d’anticiper les défis qui pourraient surgir, et de
                    concevoir des réponses robustes, capables de résister aux caprices du temps et aux exigences du
                    terrain. Ainsi, chaque modélisation réalisée par Bantou Énergie est le fruit d’une intelligence
                    pratique et d’une rigueur sans faille, ouvrant la voie à des solutions qui non seulement répondent
                    aux attentes, mais les surpassent.</p>
                <!--<button>Enregister</button>-->
            </aside>
            <aside class="img-aside">
                <div><img src="{{ asset('Front/images/Carousel/modelisation (2).jpg') }}" alt=""></div>
            </aside>
        </section>
        <!--Carousel-->
        <section id="carousel">
            <aside class="flou">
                <div class='carousel'style="margin:5vw;">
                    <div class="carrousel-contain">

                        <div class='item'>
                            <div class='text-contain'>
                                <h1>Conseils et Audits</h1>
                                <p>Nos experts réalisent des audits approfondis afin d’évaluer l’efficacité énergétique
                                    actuelle de nos clients. Sur cette base, nous fournissons des conseils stratégiques
                                    pour optimiser les ressources et améliorer la performance énergétique.</p>
                                <button onclick="window.location.href='{{ route('audits') }}'">Revoir <i
                                        class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                        <div class='item'>

                            <div class='text-contain'>
                                <h1>Modélisation</h1>
                                <p>Nous utilisons des outils avancés pour modéliser des solutions énergétiques qui
                                    répondent aux besoins uniques de chaque client. Cette étape essentielle nous permet
                                    d'anticiper les défis et de concevoir des solutions robustes et durables.</p>
                                <button onclick="window.location.href='{{ route('modelisation') }}'"><i
                                        class="fa-solid fa-arrow-left"></i>Revenir</button>
                            </div>
                        </div>
                        <div class='item'>

                            <div class='text-contain'>
                                <h1>Conceptions</h1>
                                <p>Notre équipe de spécialistes conçoit des systèmes énergétiques innovants, alliant
                                    technologie de pointe et pratiques durables. Chaque conception est pensée pour
                                    maximiser l’efficacité tout en minimisant l'impact environnemental.</p>
                                <button onclick="window.location.href='{{ route('conception') }}'"><i
                                        class="fa-solid fa-arrow-left"></i>Revenir</button>
                            </div>
                        </div>
                        <div class='item'>

                            <div class='text-contain'>
                                <h1>Déploiement de solutions propriétaires</h1>
                                <p>Nous mettons en œuvre des solutions propriétaires qui intègrent les meilleures
                                    pratiques et technologies disponibles sur le marché. Notre objectif est de garantir
                                    que chaque solution déployée soit non seulement efficace, mais également durable à
                                    long terme.</p>
                                <button onclick="window.location.href='{{ route('solution') }}'"><i
                                        class="fa-solid fa-arrow-left"></i>Revenir</button>
                            </div>
                        </div>
                        <div class='item'>

                            <div class='text-contain'>
                                <h1>Vente de KEA (KIT ELECTRIQUE AUTONOME)</h1>
                                <p>Chez Bantou-Energy, nous croyons en des solutions pratiques, accessibles et durables
                                    pour répondre aux besoins énergétiques de nos communautés. C’est pourquoi nous
                                    proposons une gamme complète de kits d’électrification conçus pour offrir une
                                    énergie fiable, quelle que soit la situation géographique ou les infrastructures
                                    disponibles.</p>
                                <button onclick="window.location.href='{{ route('vente') }}'"><i
                                        class="fa-solid fa-arrow-left"></i>Revenir</button>
                            </div>
                        </div>
                        <div class='item'>

                            <div class='text-contain'>
                                <h1>Formation</h1>
                                <p>Nous sommes convaincus que la clé d’un avenir énergétique durable passe non seulement
                                    par des solutions innovantes, mais aussi par la transmission de savoirs. C’est
                                    pourquoi nous offrons des programmes de formation spécialisés pour accompagner les
                                    individus, les entreprises et les collectivités dans la gestion et l’optimisation de
                                    l’énergie.</p>
                                <button onclick="window.location.href = 'https:/resetbylebantou.com'"><i
                                        class="fa-solid fa-arrow-left"></i>Revenir</button>
                            </div>
                        </div>
                    </div>

                </div>

            </aside>
        </section>
        <!--Banner-->
        <section id="banner">
            <section class="ftco-section ftco-intro p-1" style=" padding-bottom: 20px;">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row justify-content-end " style="margin-left: -8vw;">
                        <div class="col-md-6 heading-section heading-section-white"
                            style="position:relative;height:40vh;border-radius: 10px; padding-top:10px;backdrop-filter: blur(15px); background: linear-gradient(135deg,#008eed6f 80%, #fff 100%); border-radius:10px;">
                            <h2 class="" style="margin-bottom:10px; margin-top:10px; font-size: 30px;">Une
                                formation qui s'adapte à vous</h2>
                            <p style="margin-top:-10px; width: 50%;">Les investissement en bourse, crypto et le money
                                management ne seront plus un secret pour vous</p><a href="https://resetbylebantou.com"
                                target="_blank" class="btn btn-primary float-end rounded btn-lg"
                                style="top:80%; left: 2%;">Inscrivez vous maintenant</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <div class="box-sub">
            <div class="arrow-up">
                <a href="#fer"> <i class="fa-solid fa-arrow-up" style="color: #fff;"></i></a>
            </div>
            <div class="chat-bot"><a href="{{ route('chat') }}"><svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                        <path
                            d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                        <path
                            d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2" />
                    </svg></a></div>
        </div>
        @include('Front.layout.chatbox')
    </main>
    @include('Front.layout.footer')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('carousel');
            const carouselItems = document.querySelectorAll('.carousel-item');

            function updateBackground() {
                // Trouver l'élément actif
                const activeItem = document.querySelector('.carousel-item.active img');
                if (activeItem) {
                    // Récupérer la source de l'image
                    const imageUrl = activeItem.src;
                    // Appliquer l'image comme arrière-plan
                    carousel.style.backgroundImage = url($ {
                        imageUrl
                    });
                    carousel.style.backgroundSize = 'cover'; // Ajuster la taille de l'image
                    carousel.style.backgroundPosition = 'center'; // Centrer l'image
                }
            }

            // Mettre à jour l'arrière-plan au chargement initial
            updateBackground();
            // Écouter les événements de changement de slide
            const carouselElement = document.getElementById('carouselExampleDark');
            carouselElement.addEventListener('slid.bs.carousel', updateBackground);

        });
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script>
        //Script Carroussel
        document.addEventListener("DOMContentLoaded", function() {
            const items = document.querySelectorAll('.item');
            let currentIndex = 0;
            // Fonction pour mettre à jour le contenu de l'élément avec l'ID 'affiche'
            function showSlide(index) {
                items.forEach((item, i) => {
                    item.classList.toggle('active', i === index);
                    item.classList.toggle('hidden', i !== index);
                });
            }

            function nextSlide() {
                //passer à la valeure suivante
                currentIndex = (currentIndex + 1) % items.length;
                showSlide(currentIndex);
            }
            // Changement automatique de diapositive toutes les 6 secondes
            setInterval(nextSlide, 10000);
        });
    </script>
    <script src="{{ asset('Front/javascript/chatbox.js') }}"></script>
    <script src="javascript/menu.js"></script>
    <script src="javascript/drapeau.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            offset: 200,
        });
    </script>
</body>

</html>
