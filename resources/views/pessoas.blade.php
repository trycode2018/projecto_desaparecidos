@extends('layouts.main')
@section ('title')
 Ver Pessoas
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

        <h5 class="card-title">Lista de Pessoas Desaparecidas</h5>
        <p>Esta área é responsavél por apresentar a lista de todas as pessoas desaparecidas na cidade de Luanda, que estejam cadastrados no sistema.
        <a href="/home" >Ir a pagina inicial</a>.</p>

        <!-- Table with stripped rows -->
        <table class="table ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Endereço</th>
              <th scope="col">Idade</th>
              <th scope="col">Desaparecimento</th>
              <th scope="col">Telefone</th>
              <th scope="col">Estado</th>
              <th scope="col">Imagem</th>
              <th scope="col">Acçoes</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pessoas as $find)
            <tr>
                <th scope="row">{{ $find->id }}</th>
                <td>{{ $find->name}}</td>
                <td>{{ $find->address }}</td>
                <td>{{ $find->age }}</td>
                <td>{{ $find->date }}</td>
                <td>{{ $find->phone_number }}</td>
                @if ($find->status=="Ativo")
                <td>Desaparecido/a</td>
                @else
                <td>Encontrado/a</td>
                @endif
                <td><img src="{{ asset('assets/img/'.$find->picture)}}" style="width:50px;height:50px;" class="rounded-circle"></td>
                <td class="action">
                    <a href="/edit/{{$find->id}}" class="btn btn-info edit-btn">
                        <ion-icon class="bi bi-pencil" name="create-outline"></ion-icon>
                    </a>
                    <a href="/pessoas/{{$find->id}}" class="btn btn-primary view-btn">
                        <ion-icon class="bi bi-eye" name="eye-outline"></ion-icon>
                    </a>

                </td>
            </tr>
            @endforeach

          </tbody>
        </table>
        <!-- End Table with stripped rows -->

      </div>
    </div>

</div>
</div>
</section>
    @endsection
