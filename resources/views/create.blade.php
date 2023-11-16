@extends('layouts.main')
@section ('title')
 Cadastrar
@endsection

@section('content')
<div class="pagetitle">
    <h1>Área de cadastro</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="index.html">Pagina inicial</a></li>
        <li class="breadcrumb-item active">Cadastro</li>
        <li class="breadcrumb-item active">Visualiar</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
        <div class="col-sm-12 col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Submeter informaçoes de pessoas desaparecidas</h5>

                <!-- General Form Elements -->
                <form action="/store" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Idade</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="age">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Telefone</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="phone_number">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="file" id="formFile" name="image">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Data</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="date">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Endereço</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" style="height: 100px" name="address"></textarea>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Descriçao</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" style="height: 100px" name="description"></textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Submeter</label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Terminar cadastro</button>
                    </div>
                  </div>

                  </div>

                </form><!-- End General Form Elements -->

              </div>
            </div>


    </div>
  </section>
@endsection
