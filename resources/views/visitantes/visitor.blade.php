<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--- font icon css---->

    <link rel="stylesheet" href="{{ asset('assets/visitantes/fonts/icons/fonticons.css') }}">

    <!---swiper plugin css---->
    <link
    rel="stylesheet"
    href="{{ asset('assets/visitantes/css/swiper-bundle-min.css') }}"
    />
    <!---main style css---->
    <link rel="stylesheet" href="{{ asset('assets/visitantes/css/main.css') }}">
    <title>Lostpeson</title>
</head>
<body>
    <header id="header" class="">
        <nav class="container">
            <a href="#" class="logo">Lost<span>person.</span></a>
            <!--------MENU---------->
            <div class="menu">
                <ul class="grid">
                    <li><a class="title" href="#home">Início</a></li>
                    <li><a class="title" href="#about">Sobre</a></li>
                    <li><a class="title" href="#services">Desaparecidos</a></li>
                    <li><a class="title" href="#testimonials">Depoimento</a></li>
                    <li><a class="title"  href="#contact">Registrar-se</a></li>
                </ul>
            </div>
            <!-------MENU------>

                <div class="toggle icon-menu"></div>
                <div class="toggle icon-cancel"></div>

        </nav>
    </header>

    <main>
        <!---------HOME---------->

        <section class="section" id="home">

            <section class="container grid" >
                <!------------imagebanner----->
                <div class="image">
                    <img src="{{ asset('assets/visitantes//images/img02.jpg') }}"  alt="Pessoa desaparecida em Luanda">
                </div>
                <!------------textbanner----->
                <div class="text">
                    <h2 class="title">
                        Desaparecimento de pessoas
                    </h2>
                    <p>
                        O desaparecimento de pessoas é um problema global amplo,
                        heterogêneo e com poucas estatísticas.
                        Na  busca por um familiar que desapareceu,
                        Além das pessoas lutarem para encontrar uma resposta sobre o que aconteceu,
                        essas famílias passam a ter necessidades em várias outras áreas de sua vida.
                    </p>
                    <a href="/entrar" class="button">Entrar no sistema</a>
                </div>
            </section>
        </section>

        <div class="divider-1"></div>

        <!---------ABOUT---------->
        <section class="section" id="about" >
            <section class="container grid" >
                <div class="image">
                    <img src="{{ asset('assets/visitantes/images/sobre.jpg') }}" alt="Pessoas desaparecidas">
                </div>
                <div class="text">
                    <h2 class="title">
                        Sobre desaparecimentos
                    </h2>
                    <p>
                        O desaparecimento tem consequências psicológicas, financeiras,
                         jurídicas, sobre a segurança e também sobre saúde física.
                    </p><br>
                    <p>
                        É importante que essas famílias tenham apoio das autoridades e da sociedade e
                        é por isso que esse trabalho tem bastante relevancia para a sociedade.
                    </p><br>

                    <p><b>
                        <i>
                            Centenas de milhares de pessoas estão atualmente desaparecidas no mundo todo em
                            decorrência de conflitos armados, violência, desastres naturais ou migrações.
                        </i>
                    </b>

                    </p>

                </div>
            </section>
        </section>

        <div class="divider-2"></div>

        <!----------SERVICES------------->
        <section class="section" id="services">
            <div class="container grid">
                <header>
                    <h2 class="title">Pessoas desaparecidas</h2>
                    <p class="subtitle">
                        SISTEMA DE INFORMAÇÃO DE <strong>PESSOAS DESAPARECIDAS </strong> NA PROVÍNCIA DE LUANDA
                    </p>
                </header>
                <div class="cards grid">
                    <div class="card">
                        <i class="#">
                            <img src="{{ asset('assets/visitantes/images/img02.jpg') }}" alt="Pessoas desaparecidas">
                        </i>
                        <h3 class="title">Lúcio Bengue</h3>
                        <p>
                            <h4>Município de Talatona, Camama</h4>
                            <h4>927476913</h4>
                        </p>
                    </div>
                    <div class="card">
                        <i class="#">
                            <img src="{{ asset('assets/visitantes/images/img02.jpg') }}" alt="Pessoas desaparecidas">
                        </i>
                        <h3 class="title">Lúcio Bengue</h3>
                        <p>
                            <h4>Município de Talatona, Camama</h4>
                            <h4>927476913</h4>
                        </p>
                    </div>
                    <div class="card">
                        <i class="#">
                            <img src="{{ asset('assets/visitantes/images/img02.jpg') }}" alt="Pessoas desaparecidas">
                        </i>
                        <h3 class="title">Lúcio Bengue</h3>
                        <p>
                            <h4>Município de Talatona, Camama</h4>
                            <h4>927476913</h4>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="divider-1"></div>

        <!----------TESTIMONIAL---------------->
        <section class="section" id="testimonials">
            <div class="container">
               <header>
                    <h2 class="title">Depoimentos de quem já foi encontrado</h2>
               </header>
               <div class="testimonials swiper">
                    <div class="swiper-wrapper">
                        <div class="testimonial swiper-slide">
                            <blockquote>
                                <p>
                                    <span>&ldquo;</span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum assumenda voluptas numquam, molestias corporis enim? Aperiam expedita
                                </p>
                                <cite>
                                    <img src="{{ asset('assets/visitantes//images/danniel.png')}}" alt="" srcset="">Daniel Geraldo
                                </cite>
                            </blockquote>
                        </div>

                        <div class="testimonial swiper-slide">
                            <blockquote>
                                <p>
                                    <span>&ldquo;</span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum assumenda voluptas numquam, molestias corporis enim? Aperiam expedita
                                </p>
                                <cite>
                                    <img src="./images/danniel.png" alt="" srcset="">Daniel Geraldo
                                </cite>
                            </blockquote>
                        </div>

                        <div class="testimonial swiper-slide">
                            <blockquote>
                                <p>
                                    <span>&ldquo;</span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum assumenda voluptas numquam, molestias corporis enim? Aperiam expedita
                                </p>
                                <cite>
                                    <img src="./images/danniel.png" alt="" srcset="">Daniel Geraldo
                                </cite>
                            </blockquote>
                        </div>

                     </div>

                     <div class="swiper-pagination"></div>
               </div>

            </div>
        </section>

        <div class="divider-2"></div>

        <!---------CONTACT----------->
        <section id="contact">
            <div class="container grid">
                <div class="text">
                    <h2 class="title">Registra-se na aplicação</h2>
                    <p>
                        Faça o cadastro na aplicação, e publique informações de pessoas desaparecidas relacionadas a tí.
                    </p>
                    <a href="/" class="button" target="_blank"><i class="icon-placeholder"></i>Área de cadastro</a>
                </div>

                <address class="links">
                    <ul class="grid">
                        <li><i class="icon-call"></i>(+244) 233-234-23</li>
                        <li><i class="icon-envelope-o"></i>danielneto@geral.com</li>
                        <li><i class="icon-placeholder"></i>Luanda/Kilamba</li>
                    </ul>
                </address>
            </div>
        </section>

        <div class="divider-1"></div>

    </main>

        <!--------FOOTER---------->
    <footer class="section">
        <div class="container grid">
            <div class="brand">
                <a href="#home" class="logo logo-alt">Lost<span>person.</span></a>
                <p>2024 Lostperson</p>
                <p>Todos direitos reservados.</p>
            </div>
            <div class="social">
                <a href=""><i class="icon-facebook"></i></a>
                <a href=""><i class="icon-instagram"></i></a>
                <a href=""><i class="icon-youtube"></i></a>
            </div>
        </div>
    </footer>


    <a href="#home" class="back-to-top">
        <img src="images/upwards-arrow.svg" alt="" srcset="">
    </a>


    <!---------scrollreveal--------->
    <script src="{{ asset('assets/visitantets/js/scrollreveal.min.js') }}"></script>

    <!---------swiper plugin js--------->
    <script src="{{ asset('assets/visitantes/js/swiper-bundle-min.js') }}"></script>

    <script src="{{ asset('assets/visitantets/js/main.js') }}"></script>
</body>
</html>
