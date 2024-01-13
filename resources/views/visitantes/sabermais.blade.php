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

    {{-- boostrap --}}

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!--<link rel="icon" type="image/png" href="assets/img/favicon.png">-->

    <title>Pessoas desaparecidas</title>
</head>

<body>
    <header id="header" class="">
        <nav class="container">
            <a href="#" class="logo">Pessoas<span> desaparecidas</span></a>
            <!--------MENU---------->
            <div class="menu">
                <ul class="grid">
                    <li><a class="title" href="#home">Início</a></li>
                    <li><a class="title" href="#about">Sobre</a></li>
                    <li><a class="title" href="#services">Desaparecidos</a></li>
                    <li><a class="title" href="#testimonials">Depoimento</a></li>
                    <li><a class="title" href="cadastrar">Registrar-se</a></li>
                </ul>
            </div>
            <!-------MENU------>

            <div class="toggle icon-menu"></div>
            <div class="toggle icon-cancel"></div>

        </nav>
    </header>

        {{-- - section saber mas  --}}

        <main id="main" class="main">


            <div class="divider-1"></div>

            <div class="row">

                <section class="section profile">

                    <div class="row">
                        <div class="pagetitle">
                            <h1>Perfil</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/portaria/listar">Portaria</a></li>
                                </ol>
                            </nav>
                        </div><!-- End Page Title -->

                        <div class="col-xl-6">

                            <div class="card">
                                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                    @if ($pessoa->picture != null)
                                        <i class="#">
                                            <img src="{{ asset('assets/img/' . $pessoa->picture) }}"
                                                alt="Pessoas desaparecidas" with="">
                                        </i>
                                    @else
                                        <i class="#">
                                            <img src="{{ asset('assets/visitantes/images/img02.jpg') }}"
                                                alt="Pessoas desaparecidas" with="100%" height="100%">
                                        </i>
                                    @endif

                                    <h2 class="text-capitalize">{{ $pessoa->name }}</h2>
                                    <div class="social-links mt-2 d-none">
                                        <a href="/funcionario/editar/{{ $pessoa->id }}" class="btn btn-primary">
                                            <i class="bi bi-file-earmark-person"></i></a>
                                        <a href="#" class="twitter d-none"><i class="bi bi-twitter"></i></a>
                                        <a href="#" class="facebook d-none"><i class="bi bi-facebook"></i></a>
                                        <a href="#" class="instagram d-none"><i class="bi bi-instagram"></i></a>
                                        <a href="#" class="linkedin d-none"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-6">

                            <div class="card">
                                <div class="card-body pt-3">
                                    <!-- Bordered Tabs -->
                                    <ul class="nav nav-tabs nav-tabs-bordered">

                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab"
                                                data-bs-target="#profile-overview">Perfil</button>
                                        </li>

                                    </ul>
                                    <div class="tab-content pt-2">

                                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                            <h5 class="card-title">Acerca da pessoa desaparecida</h5>
                                            <p class="small fst-italic">{{ $pessoa->description }}</p>

                                            <h5 class="card-title">Detalhes do Perfil</h5>

                                            <div class="row P-2 fs-5">
                                                <div class="col-lg-3 col-md-4 label ">
                                                    <span class="text-success fs-5">
                                                        <i class="bi bi-file-earmark-person"></i></span>Nome Completo
                                                </div>

                                                <div class="col-lg-9 col-md-8">
                                                    {{ $pessoa->name }} </div>
                                            </div>

                                            <div class="row P-2 fs-5">
                                                <div class="col-lg-3 col-md-4 label">
                                                    <span class="text-info fs-5">
                                                        <i class="bi bi-pin-map-fill"></i></span>&nbsp;Endereço
                                                </div>
                                                <div class="col-lg-9 col-md-8">{{ $pessoa->address }}</div>
                                            </div>

                                        </div>

                                    </div><!-- End Bordered Tabs -->

                                </div>
                            </div>

                        </div>
                    </div>
                </section>

            </div>

            <div class="divider-1"></div>
            <!---------CONTACT----------->
            <section id="contact">
                <div class="container grid">
                    <div class="text">
                        <h2 class="title">Registra-se na aplicação</h2>
                        <p>
                            Faça o cadastro na aplicação, e publique informações de pessoas desaparecidas relacionadas a
                            tí.
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


            <!---------CONTACT----------->
            <section id="contact">
                <div class="container grid">
                    <div class="text">
                        <h2 class="title">Registra-se na aplicação</h2>
                        <p>
                            Faça o cadastro na aplicação, e publique informações de pessoas desaparecidas relacionadas a
                            tí.
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

        {{-- boost --}}

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
        <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
