<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--- font icon css---->

    <link rel="stylesheet" href="{{ asset('assets/visitantes/fonts/icons/fonticons.css') }}">

    <!---swiper plugin css---->
    <link rel="stylesheet" href="{{ asset('assets/visitantes/css/swiper-bundle-min.css') }}" />
    <!---main style css---->
    <link rel="stylesheet" href="{{ asset('assets/visitantes/css/main.css') }}">
    <title>Pessoas desaparecidas</title>
</head>

<body>
    <header id="header" class="">
        <nav class="container">
            <a href="/" class="logo">Pessoas<span> desaparecidas</span></a>
            <!--------MENU---------->
            <div class="menu">
                <ul class="grid">
                    <li><a class="title" href="home">Início</a></li>
                    <li><a class="title" href="#about">Sobre</a></li>
                    <li><a class="title" href="/desaparecidos">Desaparecidos</a></li>
                    <li><a class="title" href="#testimonials">Depoimento</a></li>
                    <li><a class="title" href="cadastrar">Registrar-se</a></li>
                </ul>
            </div>
            <!-------MENU------>

            <div class="toggle icon-menu"></div>
            <div class="toggle icon-cancel"></div>

        </nav>
    </header>

    <main>
        
        <!----------SERVICES------------->
        <section class="section" id="services">
            <div class="container grid">
                <header>
                    <h2 class="title">Pessoas desaparecidas</h2>
                    <p class="subtitle">
                        SISTEMA DE INFORMAÇÃO DE <strong>PESSOAS DESAPARECIDAS </strong> NA PROVÍNCIA DE LUANDA
                    </p>
                </header>

                @if (count($pessoas) > 0)
                    <div class="cards grid">
                        @foreach ($pessoas as $pessoa)

                        @if ($pessoa->approved)
                            <div class="card">

                                @if ($pessoa->picture != null)
                                    <i class="#">
                                        <img src="{{ asset('assets/img/' . $pessoa->picture) }}"
                                            alt="Pessoas desaparecidas" with="100%" height="100%">
                                    </i>
                                @else
                                    <i class="#">
                                        <img src="{{ asset('assets/visitantes/images/img02.jpg') }}"
                                            alt="Pessoas desaparecidas" with="100%" height="100%">
                                    </i>
                                @endif

                                <h3 class="title">{{ $pessoa->name }}</h3>
                                <p>
                                <h4>{{ $pessoa->address }}</h4>
                                <h4>{{ $pessoa->phone_number }}</h4>
                                <a href="/sabermais/{{ $pessoa->id }}" class="button">Saber mas</a>
                                </p>
                            </div>
                        @endif
                        @endforeach
                    </div>

                @endif

                {{-- 
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
                --}}
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
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum assumenda voluptas
                                    numquam, molestias corporis enim? Aperiam expedita
                                </p>
                                <cite>
                                    <img src="{{ asset('assets/visitantes//images/danniel.png') }}" alt=""
                                        srcset="">Daniel Geraldo
                                </cite>
                            </blockquote>
                        </div>

                        <div class="testimonial swiper-slide">
                            <blockquote>
                                <p>
                                    <span>&ldquo;</span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum assumenda voluptas
                                    numquam, molestias corporis enim? Aperiam expedita
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
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum assumenda voluptas
                                    numquam, molestias corporis enim? Aperiam expedita
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
                    <a href="/" class="button" target="_blank"><i class="icon-placeholder"></i>Área de
                        cadastro</a>
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
