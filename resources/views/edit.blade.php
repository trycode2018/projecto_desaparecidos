@extends('layouts.main')
@section ('title')
 Actualizar
@endsection

@section('content')
<div class="pagetitle">
    <h1>Área de actualizaçao</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="/home">Pagina inicial</a></li>
        <li class="breadcrumb-item active">Actualizar dados</li>
        <li class="breadcrumb-item active">Visualiar</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
        <div class="col-sm-12 col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Editar informacoes da pessoa desaparecida</h5>
                <h6 class="text-muted text-justify" style="font-size: 12px;">Nesta área a gente pode alterar informaçoes como a <b>data do desaparecimento</b>,
                    <b>descriçao</b>, <b>endereço</b> e o <b>estado</b> a pessoa já foi encontrada pelos seus familiares.
                    <p>Podemos também alterar o número de telefone em caso de incutirmos a responsabilidade em outra pessoa,<br />
                    as possibilidades para o estado sao <b>Inativo(Encontrado)</b> e/ou <b>Ativo(Desaparecido)</b></p>
                </h6>

                <!-- General Form Elements -->
                <form action="/update/{{$pessoa->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" value="{{$pessoa->name}}" readonly>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Idade</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="age" value="{{$pessoa->age}}" readonly>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Telefone</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="phone_number" value="{{$pessoa->phone_number}}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                      <!--<input class="form-control" type="file" id="formFile" name="image" readonly >-->
                      <img src="{{asset('assets/img/'.$pessoa->picture)}}" alt="" style="width: 150px;height:150px;" class="img-fluid">
                    </div>
                  </div>


                  <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Data</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="date" ">
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
                    <label for="inputPassword" class="col-sm-2 col-form-label">Estado do desaparecimento</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="status" value="{{$pessoa->status}}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Submeter</label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                  </div>

                  </div>

                </form><!-- End General Form Elements -->

              </div>
            </div>
    </div>
  </section>
@endsection

