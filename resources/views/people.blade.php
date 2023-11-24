@extends('layouts.main')
@section ('title')
    Ver pessoa
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

                <h5 class="card-title">Pessoa Desaparecida</h5>
                <p>Esta área é responsavél por apresentar <a href="#">uma unica</a> pessoa desaparecida.
                <a href="/home" >Ir a pagina inicial</a>.</p>

                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div id="image-container" class="col-md-6">
                            <img src="{{ asset('assets/img/'.$pessoa->picture)}}" alt="" class="img-fluid">
                        </div>
                        <div id="info-container" class="col-md-6">
                            <div  class="container-fluid">

                                <p class="form-control">
                                    <label for="" class="col-form-label">Nome Completo :</label>
                                    {{$pessoa->name}}</p>

                                <p class="form-control">
                                    <label for="" class="col-form-label">Endereço de referencia :</label>
                                    {{$pessoa->address}}</p>

                                <p class="form-control">
                                    <label for="" class="col-form-label">Idade :</label>
                                    {{$pessoa->age}}</p>

                                <p class="form-control">
                                    <label for="" class="col-form-label">Data do desaparecimento :</label>
                                    {{$pessoa->date}}</p>

                                <p class="form-control">
                                    <label for="" class="col-form-label">Número do telefone :</label>
                                    {{$pessoa->phone_number}}</p>

                                <p class="form-control">
                                    <label for="" class="col-form-label">Breve descriçao :</label>
                                    {{$pessoa->description}}</p>

                                @if ($pessoa->status=="Ativo")
                                <p class="form-control">
                                    <label for="" class="col-form-label">Estado do desaparecimento :</label>
                                    Continua desaparecida</p>
                                @else
                                <p class="form-control">
                                    <label for="" class="col-form-label">Estado do desaparecimento :</label>
                                    Pessoa encontrada</p>
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
@endsection
