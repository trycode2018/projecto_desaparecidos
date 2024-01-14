@extends('layouts.main')
@section('title')
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
                                <p><a href="/home">Ir a pagina inicial</a>.</p>

                                <!-- Table with stripped rows -->
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Imagem</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Acções</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($users as $user)
                                            <tr>
                                                {{--  @if ($user->permissionGranted == 1 && $user->isAdmin == 0) --}}

                                                <th scope="row">{{ $user->id }}</th>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>

                                                @if ($user->profile_image != null)
                                                    <td><img src="{{ asset('assets/img/' . $user->profile_image) }}"
                                                            style="width:50px;height:50px;" class="rounded-circle"></td>
                                                @else
                                                    <td><img src="assets/img/perfilsemfoto.jpg"
                                                            style="width:50px;height:50px;" class="rounded-circle"></td>
                                                @endif

                                                @if ($user->permissionGranted)
                                                    <td>Habilitado</td>
                                                @else
                                                    <td>Desabilitado</td>
                                                @endif

                                                {{-- Mostrar botão habilitar ou desabilitar --}}
                                                @if ($user->permissionGranted)
                                                    <td class="action">
                                                        <form class="search-bar" method="POST"
                                                            action="/conceder/Desabilitar/{{ $user->id }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="search-form d-flex align-items-center">
                                                                <button type="submit"
                                                                    class="btn btn-danger bi bi-arrows-expand"
                                                                    title="Desabilitar"></button>
                                                            </div>
                                                        </form>
                                                    </td>
                                                @else
                                                    <td class="action">
                                                        <form class="search-bar" method="POST"
                                                            action="/conceder/habilitar/{{ $user->id }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="search-form d-flex align-items-center">
                                                                <button type="submit"
                                                                    class="btn btn-success bi bi-arrows-expand"
                                                                    title="Habilitar"></button>
                                                            </div>
                                                        </form>
                                                    </td>
                                                @endif
                                                {{-- @endif --}}
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
