@extends('layouts.main')
@section('title')
    Registrar usuario
@endsection

@section('content')
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <h5 class="card-title">Registrar usuario</h5>
                                <p>Esta área é responsavél por o cadastro dos Administradores do sistema 
      
                                </p>

                                <div class="col-md-10 offset-md-1">

                                    <div class="row">

                                        <div id="image-container" class="col-md-6">
                                            <img src="assets/img/perfilsemfoto.jpg" alt=""
                                                class="img-fluid">
                                        </div>

                                        <div id="info-container" class="col-md-6">

                                            <div class="container-fluid">

                                                <div class="card mb-3">

                                                    <div class="card-body">

                                                        <div class="pt-4 pb-2">
                                                            <h5 class="card-title text-center pb-0 fs-4">Cria a sua conta
                                                            </h5>
                                                            <p class="text-center small">Informe seus dados para criar sua
                                                                conta</p>
                                                        </div>

                                                        <form class="row g-3 needs-validation"
                                                            action="{{ route('registerUser') }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            {!! csrf_field() !!}
                                                            <div class="col-12">
                                                                <label for="yourName" class="form-label">Seu nome</label>
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name" required>
                                                                <div class="invalid-feedback">Porfavor, informe seu nome!
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <label for="profile-image" class="form-label">Imagem do
                                                                    perfil</label>
                                                                <input type="file" name="profile_image"
                                                                    class="form-control" id="profile_image">

                                                            </div>

                                                            <div class="col-12">
                                                                <label for="yourUsername" class="form-label">Seu email
                                                                </label>
                                                                <div class="input-group has-validation">
                                                                    <span class="input-group-text"
                                                                        id="inputGroupPrepend">@</span>
                                                                    <input type="text" name="email"
                                                                        class="form-control" id="email" required>
                                                                    <div class="invalid-feedback">Porfavor escolhe um email
                                                                        de entrada.</div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <label for="yourPassword" class="form-label">Senha</label>
                                                                <input type="password" name="password" class="form-control"
                                                                    id="password" required>
                                                                <div class="invalid-feedback">Porfavor entre com uma senha!
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <button class="btn btn-primary w-100" type="submit">Registrar</button>
                                                            </div>
                                                           
                                                        </form>

                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
    </section>
@endsection
