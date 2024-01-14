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

    <body>

        {{-- - section saber mas  --}}

        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <h5 class="card-title">PESSOA DESAPARECIDA</h5>
                                    <p>Esta área é responsavél por apresentar <a href="#">uma unica</a> pessoa
                                        desaparecida.
                                        <a href="/">Ir a pagina inicial</a>.
                                    </p>

                                    <div class="col-md-10 offset-md-1">
                                        <div class="row">
                                            <div id="image-container" class="col-md-6">

                                                @if ($pessoa->picture != null)
                                                    <img src="{{ asset('assets/img/' . $pessoa->picture) }}"
                                                        alt="" class="img-fluid">
                                                @else
                                                    <i class="#">
                                                        <img src="{{ asset('assets/visitantes/images/img02.jpg') }}"
                                                            alt="Pessoas desaparecidas" class="img-fluid">
                                                    </i>
                                                @endif
                                            </div>
                                            <div id="info-container" class="col-md-6">
                                                <div class="container-fluid">

                                                    <p class="form-control">
                                                        <label for="" class="col-form-label">Nome Completo
                                                            :</label>
                                                        <b>{{ $pessoa->name }}</b>
                                                    </p>

                                                    <p class="form-control">
                                                        <label for="" class="col-form-label">Endereço de
                                                            referencia :</label>
                                                        <b>{{ $pessoa->address }}</b>
                                                    </p>

                                                    <p class="form-control">
                                                        <label for="" class="col-form-label">Idade :</label>
                                                        <b>{{ $pessoa->age }}</b>
                                                    </p>

                                                    <p class="form-control">
                                                        <label for="" class="col-form-label">Data do
                                                            desaparecimento :</label>
                                                        <b>{{ $pessoa->date }}</b>
                                                    </p>

                                                    <p class="form-control">
                                                        <label for="" class="col-form-label">Número do telefone
                                                            :</label>
                                                        <a href="#">{{ $pessoa->phone_number }}</a>
                                                    </p>

                                                    <p class="form-control">
                                                        <label for="" class="col-form-label">Breve descriçao
                                                            :</label>
                                                        <b>{{ $pessoa->description }}</b>
                                                    </p>

                                                    @if ($pessoa->status == 'Ativo')
                                                        <p class="form-control">
                                                            <label for="" class="col-form-label">Estado do
                                                                desaparecimento :</label>
                                                            <b> desaparecida</b>
                                                        </p>
                                                    @else
                                                        <p class="form-control">
                                                            <label for="" class="col-form-label">Estado do
                                                                desaparecimento :</label>
                                                            <b>Pessoa encontrada</b>
                                                        </p>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
        </section>

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
