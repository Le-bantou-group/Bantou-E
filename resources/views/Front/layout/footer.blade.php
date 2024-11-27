<style>
    #third .newsletter h2 {
        font-size: 1.8vw;
    }

    #first a img {
        width: 50%;
    }

    .icon-mobile {
        display: none;
    }

    #first-footer {
        height: fit-content !important;
    }

    #third form {
        margin-left: 10px;
    }

    #third form .send {
        font-size: 1.2vw;
    }

    #second {
        height: fit-content !important;
    }

    #second .details li {


        font-size: 1rem !important;
    }

    #second .details {
        margin-bottom: 3rem !important;
    }

    .icon {
        margin-top: 10px !important;
    }


    .icon {
        display: flex;
        flex-direction: row;
        justify-content: center;
        margin: auto;
        width: 100% list-style: none;
    }

    .chat-bot svg {
        width: 50% !important;
        height: 50% !important;
        margin: 22% !important;
    }





    @media (min-width:900px) and (max-width:1000px) {


        .chat-bot {
            width: 50% !important;
            height: 50% !important;
            border-radius: 50%;
        }


        .accueil p {
            width: 80vw;
            text-align: justify;
        }

        #menu li a {
            font-size: 1rem !important;
        }

        .chat-bot svg {
            width: 70% !important;
            height: 70% !important;
            margin: 25% !important;
        }

        .arrow-up {
            font-size: 2.2vw !important;
            width: 4vw;
            aspect-ratio: 1;
        }

        .form-news .send {
            margin-left: 1.5vw !important;
            margin-bottom: -1vw;
        }

        #sub .icon {
            display: none !important;
        }

        .chart {
            position: relative !important;
            margin: auto !important;
            height: fit-content !important;


        }

        .details {
            height: fit-content;
        }


        .form-news form {
            margin-left: 3rem !important;
            margin-bottom: 5rem !important;
        }


        .form-news form #email {
            font-size: 15px !important;
        }

        .newsletter h2 {
            text-align: center;
            margin-left: -5px;

        }

        .newsletter {

            margin-top: 2rem !important;
            margin-bottom: 2rem !important;
            margin-right: 5vw !important;
            padding: 0px;
            height: 30px !important;

        }

        .about {
            margin-left: -20px !important;

            margin-right: 0px !important;
            width: 30vw !important;
        }

        .about li {
            font-size: 15px !important;
            margin: 0px !important;
            padding: 0px !important;


        }

        #first {
            width: 30vw !important;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #first a img {
            width: 60% !important;
        }

        #second {
            margin: 0px;
            padding: 0px;
            width: 35vw;
        }




        /*.submenu {

            
            display: inline-flex;
            justify-content: center;
            padding: 0px;
            margin: 0px;
            margin-bottom: 10px;

            width: 100vw !important;
        }*/
        .submenu {
            display: none !important;
        }
    }

    @media (max-width:900px) {
        * {
            font-size: 1em;
        }

        #menu li a {
            font-size: 1rem !important;
        }

        .icon {
            display: none !important;
        }

        .chat-bot {
            width: 3rem !important;
            height: 3rem !important;
            border-radius: 50%;
        }

        .chat-bot svg {
            width: 50% !important;
            height: 50% !important;
            margin: 25% !important;
        }

        .arrow-up {
            font-size: 2.2vw !important;
            width: 8vw;
            aspect-ratio: 1;
        }

        .submenu {
            margin: 0;
            padding: 0;
            width: 100vw;
            font-size: 1vw;
        }

        #first {
            margin: 0;
        }

        #second {
            margin: 0;
        }

        #third {
            width: 25vw !important;
            margin: 0px;
        }

        .icon-mobile {
            top: 6.5rem !important;
            position: absolute;
            display: flex;
            flex-direction: row;
            gap: 10px;
            list-style: none;
        }

        #first-footer {
            display: flex;
            flex-direction: column;
        }

        #sub {
            display: none;
        }

        #first {
            margin-top: -5vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        #first a img {
            width: 40%;
            margin: 30%;
        }

        .details h2 {
            margin-left: -10vw;
            font-size: 2em;
        }


        .about li i {
            margin-right: 20px;
            font-size: 1rem;
        }

        .about li {

            font-size: .8rem;
        }

        #third {
            display: none;
        }

        footer form {
            display: none;
        }

        .submenu {
            display: flex;
            flex-direction: row;

        }



        .chart img {

            width: 30vw !important;

        }

    }

    @media (min-width:1000px) {
        .content-anim h2 {
            top: -1vh;
        }

        .submenu {
            font-size: 1.5vw;
        }

        .form-news .send {
            margin-left: 1vw;
            margin-bottom: -1vw;
        }

        #first {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

    }
</style>

<!--Debut du footer-->

<footer>
    <section id="first-footer">
        <aside id="first">
            <a href="{{ route('home') }}"><img src="{{ asset('Front/images/Logo/BE/BE00_Plan de travail 1.png') }}"
                    alt="submenu"></a>
            <ul class='icon-mobile'>
                <li><i class="fab fa-facebook icon"></i></li>
                <li><i class="fab fa-twitter icon"></i></li>
                <li> <i class="fab fa-instagram icon"></i></li>
                <li> <i class="fab fa-linkedin icon"></i></li>
            </ul>
        </aside>
        <!--Police -->
        <aside id="third" class="form-news content-anim">
            <div class="newsletter">

                <h2>Newsletter</h2>
                <h2>Newsletter</h2>
            </div>


            <form action="#" method="post">
                <input type="email" name="email" id="email" placeholder=" Entrer votre E-mail" required>
                <input type="submit" value="S'inscrire" class="send">
            </form>
        </aside>
        <!--aside des contact -->
        <aside id="second">
            <div class="details">

                <div class="content-anim">
                    <div class="contact-footer">
                        <h2>Contact</h2>
                        <h2>Contact</h2>
                    </div>

                </div>

                <ul class="about">
                    <li class="phone"><i class="fa-solid fa-phone"></i>(+237) 698 997 773 / 674 09 68 83</li>
                    <li class="email"><i class="fa-solid fa-envelope"></i>contact@bantou-energy.com</li>
                </ul>
                <div class="i-ecran">
                    <ul class="icon">
                        <li>
                            <i class="fab fa-facebook icon"></i>
                        </li>
                        <li><i class="fab fa-twitter icon"></i></li>
                        <li> <i class="fab fa-instagram icon"></i></li>
                        <li> <i class="fab fa-linkedin icon"></i></li>
                    </ul>
                </div>

            </div>
        </aside>
    </section>
    <section id="sub">
        <ul class="submenu">
            <li><a href="{{ route('realisation') }}">Nos réalisations</a></li>
            <li><a href="{{ route('services') }}">Prestations de services</a></li>
            <li><a href="{{ route('store') }}">BE_store</a></li>
            <li><a href="{{ route('contact') }}">Nous contacter</a></li>
        </ul>

    </section>
    <audio id="myAudio" src="{{ asset('Front/bantou_UBBtzoLZ.mp3') }}" autoplay loop></audio>
    <section class="chart">
        <img src="{{ asset('Front/images/DESIGN-bantou.png') }}" alt="design">
    </section>
</footer>
<script src="{{ asset('Front/javascript/drapeau.js') }}"></script>
