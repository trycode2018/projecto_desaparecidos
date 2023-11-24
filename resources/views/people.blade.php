@extends('layouts.main')
@section ('title')
    Visualizar uma pessoa
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
                <p>Esta área é responsavél por apresentar uma pessoa desaparecida.
                <a href="/home" >Ir a pagina inicial</a>.</p>

                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div id="image-container" class="col-md-6">
                            <img src="assets/img/profile-img.jpg" alt="" class="img-fluid">
                        </div>
                        <div id="info-container" class="col-md-6">
                            <div  class="container-fluid">
                                <p class="form-control">{{$pessoa->name}}</p>
                                <p class="form-control">{{$pessoa->address}}</p>
                                <p class="form-control">{{$pessoa->age}}</p>
                                <p class="form-control">{{$pessoa->date}}</p>
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
