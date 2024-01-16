@auth

    <!doctype html>
    <html lang="pt">

    <head>
        <title>@yield('title') | Plataforma de pessoas desaparecidas</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <!-- Favicons -->
        <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

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
    </head>

    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">

            <div class="d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <img src="assets/img/logo.png" alt="">
                    <span class="d-none d-lg-block">SIPD</span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div>

            <form class="search-bar" method="GET" action="/buscaPorNome">
                <div class="search-form d-flex align-items-center">
                    <input type="text" name="query" id="query" placeholder="Busca de pessoas"
                        title="Busque uma pessoa">
                    <button type="submit" class="bi bi-search"></button>
                </div>
            </form>

            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link nav-icon search-bar-toggle " href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li><!-- End Search Icon-->

                    <li class="nav-item dropdown pe-3">
                        {{-- 
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown">
                            <img src="{{ asset('assets/img/' . Auth::user()->profile_image) }}" style="width: 50px;"
                                alt="Profile" class="rounded-circle">
                            <span
                                class="d-none d-md-block dropdown-toggle ps-2">{{ strtoupper(Auth::user()->name) }}</span>
                        </a><!-- End Profile Iamge Icon -->
                      --}}

                        @if (Auth::user()->profile_image != null)
                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                                data-bs-toggle="dropdown">
                                <img src="{{ asset('assets/img/' . Auth::user()->profile_image) }}" style="width: 50px;"
                                    alt="Profile" class="rounded-circle">
                                <span
                                    class="d-none d-md-block dropdown-toggle ps-2">{{ strtoupper(Auth::user()->name) }}</span>
                            </a><!-- End Profile Iamge Icon -->
                        @else
                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                                data-bs-toggle="dropdown">
                                <img src="assets/img/perfilsemfoto.jpg" style="width: 50px;" alt="Profile"
                                    class="rounded-circle">
                                <span
                                    class="d-none d-md-block dropdown-toggle ps-2">{{ strtoupper(Auth::user()->name) }}</span>
                            </a><!-- End Profile Iamge Icon -->
                        @endif

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6>{{ Auth::user()->name }}</h6>
                                @if (Auth::user()->isAdmin)
                                    <span>Administrador do sistema</span>
                                @else
                                    <span>Usuário Normal</span>
                                @endif

                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="/logout">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Terminar Sessão</span>
                                </a>
                            </li>



                        </ul>
            </nav><!-- End Icons Navigation -->

        </header><!-- End Header -->

        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">

            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-item">
                    <a class="nav-link " href="/home">
                        <i class="bi bi-grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-menu-button-wide"></i><span>Área de Registro</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                        <li>
                            <a href="/create">
                                <i class="bi bi-code"></i><span>Registrar Pessoas</span>
                            </a>
                        </li>
                        <li>
                            <a href="/pessoas">
                                <i class="bi bi-code-slash"></i><span>Visualizar Todos</span>
                            </a>
                        </li>

                    </ul>
                </li><!-- End Components Nav -->

                @if (Auth::user()->isAdmin)

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-layout-text-window-reverse"></i><span> Gestão de usuarios </span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        
                        <li>
                            <a href="/registrarUsuario" class="nav-link text-success">
                                <i class="bi bi-code-slash"></i>
                                <span>Registrar usuario</span>
                            </a>
                        </li>
                        <li>
                            <a href="/listar_usuarios" class="nav-link text-success">
                                <i class="bi bi-code-slash"></i>
                                <span>listar usuarios</span>
                            </a>
                        </li>
                        <li>
                            <a href="/conceder" class="nav-link text-danger">
                                <i class="bi bi-code-slash"></i>
                                <span>Conceder Permissão</span>
                            </a>
                        </li>
                        <li>
                            <a href="/show/aprovar" class="nav-link ">
                                <i class="bi bi-code-slash"></i>
                                <span>Aprovar publicação</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Tables Nav -->

              
                @endif

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-layout-text-window-reverse"></i><span>Área de Visualização</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        
                        <li>
                            <a href="/show">
                                <i class="bi bi-circle"></i><span>Desaparecidas</span>
                            </a>
                        </li>
                        <li>
                            <a href="/pessoas/aparecidas">
                                <i class="bi bi-circle"></i><span>Encontradas</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Tables Nav -->

                <li class="nav-heading">INFORMAÇÕES</li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="/perfil">
                        <i class="bi bi-person"></i>
                        <span>Ir ao Perfil</span>
                    </a>
                </li><!-- End Profile Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="/logout">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span>Terminar Sessão</span>
                    </a>
                </li><!-- End Login Page Nav -->


            </ul>

        </aside><!-- End Sidebar-->


        <main id="main" class="main">

            @yield('content')

        </main><!-- End #main -->


        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="copyright">
                &copy; Copyright <strong><span>Plataforma de busca de pessoas </span></strong>. Todos os direitos reservados
            </div>
            <div class="credits">
                Desenvolvido por <a href="/home">Daniel Neto</a>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>


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
@endauth
