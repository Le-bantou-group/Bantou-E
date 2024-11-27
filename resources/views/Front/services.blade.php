<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="shortcut icon" href="Front/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="Front/CSS/style_panier.css">
    <link rel="stylesheet" href="Front/CSS/header.css">
    <link rel="stylesheet" href="Front/CSS/style_services.css">
    <link rel="stylesheet" href="Front/CSS/footer.css">
    <title>Prestation du services</title>
    <style>
        .abs-img {
            width: 60%;


            margin-top: 20%;
            border-radius: 20px;
        }

        .first {
            overflow: hidden;
        }

        .abs-img img {

            width: 100% !important;

        }

        .lg-item p {
            margin-left: 20%;
        }

        .cote {
            display: flex;
            justify-content: right;



        }

        #hight_view {
            display: block;
        }

        #mobile_view {
            display: none;
        }

        p {
            text-align: justify;
        }

        .long-text {
            padding: 20px;


            width: 100vw !important;
            height: 100%;
        }

        .itn {

            width: 80vw;
        }

        .itn img {
            width: 100%;

        }

        #affiche-first {
            position: relative;
            margin: 0;
            height: 100%;
            overflow: hidden;
        }

        #affiche-first #affiche {
            position: relative;
            margin-left: 6vw;
        }

        .nm2 h1 {
            font-size: 1.5vw;
        }

        .nm2 p {

            width: 20rem;
        }

        .nm2 {
            padding: 0 5rem;
        }





        .btn_nt {
            margin-left: 10vw !important;
        }

        #last-img {
            width: 100% !important;
            height: 100% !important;
        }

        @media(min-width:500px) and (max-width:1000px) {


            header {
                height: 10% !important;

            }

            .first p {
                font-size: 1rem !important;
                width: 80vw !important;
            }

            #menu li a {
                font-size: 1rem !important;
            }

            #mobile_view {
                height: 175rem !important;
                background: #f00;
                position: relative !important;
                padding: 20px 0;
            }

            .nm1 {
                width: 50vw !important;
            }



            .contain-img {
                height: 100% !important;
            }

        }

        @media(max-width:500px) {

            #menu li a {
                font-size: 1rem !important;
            }

            header {
                height: 10% !important;
                overflow-x: hidden !important;
            }

            .first p {
                font-size: .7rem !important;
                width: 80vw !important;
            }

            .first h1 {
                font-size: 1rem !important;
            }

            #hight_view {
                display: none;
            }

            .btn {
                padding-top: 20px !important;
            }

            #mobile_view {

                height: 100% !important;

                display: flex;
            }

            .text-contain {
                padding: 0 10% !important;
            }

            .text-contain h1 {
                font-size: 1.2rem !important;
                margin-top: 13vh;
            }

            .text-contain p {
                font-size: .75rem !important;
            }

            .round1,
            .round2,
            .round3,
            .round4,
            .round5 {
                display: none;
            }

            .ball,
            .ball2,
            .ball3,
            .ball4,
            .ball5 {
                display: none;
            }





            #view_mobile #affiche-first {

                margin: 0%;
            }



            .btn_nt {
                width: 10vw;
                padding: 10px
            }

            .btn button {
                border: 2px solid #fbc600;
                background: #000;
                color: #fbc600;
                font-size: 1rem;
                border-radius: 15px;
                width: 30vw;
                padding: 10px;

            }

            .btn button:hover {
                transition: all 1s ease-in-out;
                background: #fbc600;
                color: #fff;
            }

            #affiche-first #affiche {
                margin: 0%;
                display: flex;
                flex-direction: column-reverse;
                width: 100vw;
                height: 100vh;

            }



            .contain-img img {
                margin: 11% !important;
                margin-bottom: -10vh !important;
                border-radius: 20px;
                width: 80%;
                height: 100%;
            }

            #mobile_view {

                padding: 20px 0;
            }

        }
    </style>
</head>

<body>
    @include('Front.layout.header')
    <main>
        <section class="first" id="print1">
            <h1>Accompagnement </h1>
            <p> Nous travaillons main dans la main avec nos clients pour comprendre leurs besoins spécifiques et les
                guider dans la mise en œuvre de solutions énergétiques adaptées. Notre approche sur mesure garantit que
                chaque projet est conçu pour maximiser l'impact et la satisfaction.</p>
        </section>
        <article id="hight_view">


            <section id="affiche-first">
                <div class="round1"></div>
                <div class="ball"></div>
                <section id="affiche">
                    <aside class="nm2">
                        <h1>Conseils et Audits</h1>
                        <p> Nos experts réalisent des audits approfondis afin d’évaluer l’efficacité énergétique
                            actuelle de
                            nos clients. Sur cette base, nous fournissons des conseils stratégiques pour optimiser les
                            ressources et améliorer la performance énergétique.</p>
                        <div class="bbb">
                            <button onclick="window.location.href='{{ route('audits') }}'">Voir plus</button>

                        </div>
                    </aside>
                    <aside class="nm1">
                        <img src="{{ asset('Front/images/Carousel/audit2.jpg') }}" alt="">
                    </aside>
                </section>
                <section id="affiche">
                    <aside class="nm1">
                        <img src="{{ asset('Front/images/Carousel/modelisation (2).jpg') }}" alt="">
                    </aside>
                    <aside class="nm2">
                        <h1>Modélisation</h1>
                        <p> Nous utilisons des outils avancés pour modéliser des solutions énergétiques qui répondent
                            aux
                            besoins uniques de chaque client. Cette étape essentielle nous permet d'anticiper les défis
                            et
                            de concevoir des solutions robustes et durables.</p>
                        <div class="bbb cote">
                            <button class="btn_nt" onclick="window.location.href='{{ route('modelisation') }}'">Voir
                                plus</button>

                        </div>
                    </aside>
                </section>
                <div class="round2"></div>
                <div class="ball2"></div>
            </section>

            <section id="affiche-first">
                <div class="round3"></div>
                <div class="ball3"></div>
                <section id="affiche">
                    <aside class="nm2">
                        <h1>Conception</h1>
                        <p> Notre équipe de spécialistes conçoit des systèmes énergétiques innovants, alliant
                            technologie de
                            pointe et pratiques durables. Chaque conception est pensée pour maximiser l’efficacité tout
                            en
                            minimisant l'impact environnemental.</p>
                        <div class="bbb">
                            <button onclick="window.location.href='{{ route('conception') }}'">Voir plus</button>

                        </div>
                    </aside>
                    <aside class="nm1">
                        <img src="{{ asset('Front/images/Carousel/conception (1).jpg') }}" alt="">
                    </aside>
                </section>

                <section id="affiche">
                    <aside class="nm1">
                        <img src="{{ asset('Front/images/Carousel/solution.jpg') }}" alt="">
                    </aside>
                    <aside class="nm2">
                        <h1>Déploiement de solutions propriétaires</h1>
                        <p>Nous mettons en œuvre des solutions propriétaires qui intègrent les meilleures pratiques et
                            technologies disponibles sur le marché. Notre objectif est de garantir que chaque solution
                            déployée soit non seulement efficace, mais également durable à long terme.</p>
                        <div class="bbb cote">
                            <button class="btn_nt" onclick="window.location.href='{{ route('solution') }}'">Voir
                                plus</button>

                        </div>
                    </aside>
                </section>
                <div class="round2"></div>
                <div class="ball4"></div>
            </section>
            <section id="affiche-first">
                <section id="affiche">
                    <aside class="nm2 long-text">
                        <h1>Vente de KEA (KIT ELECTRIQUE AUTONOME)</h1>
                        <p>Chez Bantou Énergie, nous croyons en des solutions pratiques, accessibles et durables pour
                            répondre aux besoins énergétiques de nos communautés. C’est pourquoi nous proposons une
                            gamme
                            complète de kits d’électrification conçus pour offrir une énergie fiable, quelle que soit la
                            situation géographique ou les infrastructures disponibles.</p>
                        <div class="bbb">
                            <button onclick="window.location.href ='{{ route('vente') }}'">Voir plus</button>

                        </div>
                    </aside>
                    <aside class="nm1 itn">
                        <img src="Front/images/Image develppeur/Image develppeur/solar-panels-futuristic-lunar-base-harnessing-renewable-energy.jpg"
                            alt="">
                    </aside>
                </section>
                <section id="affiche">
                    <aside class="contain-img abs-img">
                        <img src="Front/images/Image develppeur/Image develppeur/formation.jpg" alt="">
                    </aside>
                    <aside class="nm2 lg-item">
                        <h1>Formation</h1>
                        <p>Nous sommes convaincus que la clé d’un avenir énergétique durable passe non seulement par des
                            solutions innovantes, mais aussi par la transmission de savoirs. C’est pourquoi nous offrons
                            des
                            programmes de formation spécialisés pour accompagner les individus, les entreprises et les
                            collectivités dans la gestion et l’optimisation de l’énergie.</p>
                        <div class="bbb cote">
                            <button class="btn_nt"
                                onclick="window.location.href = 'https:/resetbylebantou.com'">S'inscrire</button>

                        </div>
                    </aside>
                </section>
                <div class="round4"></div>
                <div class="ball5"></div>
            </section>
        </article>
        <section id="mobile_view">
            <section id="mobile_affiche">
                <section id="view_mobile">
                    <aside class="contain-img">
                        <img src="{{ asset('Front/images/Carousel/audit2.jpg') }}" alt="">
                    </aside>
                    <aside class="text-contain">
                        <h1>Conseils et Audits</h1>
                        <p> Nos experts réalisent des audits approfondis afin d’évaluer l’efficacité énergétique
                            actuelle de
                            nos clients. Sur cette base, nous fournissons des conseils stratégiques pour optimiser les
                            ressources et améliorer la performance énergétique.</p>
                        <div class="btn">
                            <button class="btn_nt" onclick="window.location.href='{{ route('audits') }}'">Voir
                                plus</button>

                        </div>
                    </aside>

                </section>
                <section id="view_mobile">
                    <aside class="contain-img">
                        <img src="{{ asset('Front/images/Carousel/modelisation (2).jpg') }}" alt="">
                    </aside>
                    <aside class="text-contain">
                        <h1>Modélisation</h1>
                        <p> Nous utilisons des outils avancés pour modéliser des solutions énergétiques qui répondent
                            aux
                            besoins uniques de chaque client. Cette étape essentielle nous permet d'anticiper les défis
                            et
                            de concevoir des solutions robustes et durables.</p>
                        <div class="btn">
                            <button class="btn_nt" onclick="window.location.href='{{ route('modelisation') }}'">Voir
                                plus</button>

                        </div>
                    </aside>

                </section>
                <section id="view_mobile">
                    <aside class="contain-img">
                        <img src="{{ asset('Front/images/Carousel/conception (1).jpg') }}" alt="">
                    </aside>
                    <aside class="text-contain">
                        <h1>Conception</h1>
                        <p> Notre équipe de spécialistes conçoit des systèmes énergétiques innovants, alliant
                            technologie de
                            pointe et pratiques durables. Chaque conception est pensée pour maximiser l’efficacité tout
                            en
                            minimisant l'impact environnemental.</p>
                        <div class="btn">
                            <button onclick="window.location.href='{{ route('conception') }}'">Voir plus</button>

                        </div>
                    </aside>

                </section>
                <section id="view_mobile">
                    <aside class="contain-img">
                        <img src="{{ asset('Front/images/Carousel/solution.jpg') }}" alt="">
                    </aside>
                    <aside class="text-contain">
                        <h1>Déploiement de solutions propriétaires</h1>
                        <p>Nous mettons en œuvre des solutions propriétaires qui intègrent les meilleures pratiques et
                            technologies disponibles sur le marché. Notre objectif est de garantir que chaque solution
                            déployée soit non seulement efficace, mais également durable à long terme.</p>
                        <div class="btn">
                            <button class="btn_nt" onclick="window.location.href='{{ route('solution') }}'">Voir
                                plus</button>

                        </div>
                    </aside>

                </section>
                <section id="view_mobile">
                    <aside class="contain-img">
                        <img src="Front/images/Image develppeur/Image develppeur/solar-panels-futuristic-lunar-base-harnessing-renewable-energy.jpg"
                            alt="">
                    </aside>
                    <aside class="text-contain">
                        <h1>Vente de KEA (KIT ELECTRIQUE AUTONOME)</h1>
                        <p>Chez Bantou Énergie, nous croyons en des solutions pratiques, accessibles et durables pour
                            répondre aux besoins énergétiques de nos communautés. C’est pourquoi nous proposons une
                            gamme
                            complète de kits d’électrification conçus pour offrir une énergie fiable, quelle que soit la
                            situation géographique ou les infrastructures disponibles.</p>
                        <div class="btn">
                            <button onclick="window.location.href ='{{ route('vente') }}'">Voir plus</button>
                        </div>
                    </aside>
                </section>
                <section id="view_mobile" class="last-cnt">
                    <aside class="contain-img">
                        <img src="Front/images/Image develppeur/Image develppeur/formation.jpg" alt="">
                    </aside>
                    <aside class="text-contain">
                        <h1>Formation</h1>
                        <p>Nous sommes convaincus que la clé d’un avenir énergétique durable passe non seulement par des
                            solutions innovantes, mais aussi par la transmission de savoirs. C’est pourquoi nous offrons
                            des
                            programmes de formation spécialisés pour accompagner les individus, les entreprises et les
                            collectivités dans la gestion et l’optimisation de l’énergie.</p>
                        <div class="btn">
                            <button class="btn_nt"
                                onclick="window.location.href = 'https:/resetbylebantou.com'">S'inscrire</button>

                        </div>
                    </aside>
                </section>
            </section>
        </section>
        <div class="box-sub">
            <div class="arrow-up">
                <a href="#fer"> <i class="fa-solid fa-arrow-up" style="color: #fff;"></i></a>
            </div>
            <div class="chat-bot"><a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="bi bi-chat-dots" viewBox="0 0 16 16">
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
</body>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    var s = skrollr.init();
    AOS.init({
        duration: 1000,
        offset: 200,
    });
</script>
<script src="{{ asset('Front/javascript/chatbox.js') }}"></script>
<script src="Front/javascript/menu.js"></script>
-->

</html>
