@extends('layouts.main')
@section ('title')
 Conceder Permissão
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

        <h5 class="card-title">CONCEDER PERMISSÃO PARA CADASTRO DE PESSOAS DESAPARECIDAS</h5>
        <p><a href="/home" >Ir a pagina inicial</a>.</p>

        <!-- Table with stripped rows -->
        <table class="table ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Email</th>
              <th scope="col">Imagem</th>
              <th scope="col">Acções</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($users as $user)
            <tr>
                @if ($user->permissionGranted==0 && $user->isAdmin==0)
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                <td><img src="{{ asset('assets/img/'.$user->profile_image)}}" style="width:50px;height:50px;" class="rounded-circle"></td>
                <td class="action">
                    <form class="search-bar" method="POST" action="/conceder/{{$user->id}}">
                        @csrf
                        @method('PUT')
                        <div class="search-form d-flex align-items-center">
                          <button type="submit" class="btn btn-info bi bi-arrows-expand"></button>
                        </div>
                    </form>
                </td>
                @endif
            </tr>
            @endforeach

          </tbody>
        </table>
        <!-- End Table with stripped rows
        <input type="text" name="permission" id="permission">
        -->

      </div>
    </div>

</div>
</div>
</section>
    @endsection
