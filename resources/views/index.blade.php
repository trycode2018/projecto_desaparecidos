@extends('layouts.main')
@section ('title')
 Pagina Inicial
@endsection

@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Pagina Inicial</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section dashboard">
  <div class="row">
  <!-- Left side columns -->
  <div class="col-lg-12">
    <div class="row">

      <!-- Sales Card -->
      <div class="col-xxl-6 col-md-6">
        <div class="card info-card sales-card">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filtrar</h6>
              </li>

              <li><a class="dropdown-item" href="#">Hoje</a></li>
              <li><a class="dropdown-item" href="#">Este Mes</a></li>
              <li><a class="dropdown-item" href="#">Este Ano</a></li>
            </ul>
           </div>

          <div class="card-body">
            <h5 class="card-title">Pessoas Desaparecidas <span>| Actualizado</span></h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-people"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $total }}</h6>
                @if($count>0)
                <span class="text-success small pt-1 fw-bold">{{(($total*100)/($count))}}%</span>
                @else
                <span class="text-success small pt-1 fw-bold">Nenhum dado disponivel</span>
                @endif

              </div>
            </div>
          </div>

        </div>
      </div><!-- End Sales Card -->

      <!-- Revenue Card -->
      <div class="col-xxl-6 col-md-6">
        <div class="card info-card revenue-card">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filtrar</h6>
              </li>

              <li><a class="dropdown-item" href="#">Hoje</a></li>
              <li><a class="dropdown-item" href="#">Este Mes</a></li>
              <li><a class="dropdown-item" href="#">Este Ano</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Pessoas Encontradas <span>| Actualizado</span></h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-people"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $founded }}</h6>
                @if($count > 0)
                <span class="text-success small pt-1 fw-bold">{{ ($founded * 100) / $count }}%</span>
                @else
                <span class="text-muted small pt-1 fw-bold">Nenhum dado disponível para calcular a porcentagem.</span>
                @endif
              </div>
            </div>
          </div>

        </div>
      </div><!-- End Revenue Card -->

      <!-- Customers Card -->
      <div class="col-xxl-6 col-xl-12">

        <div class="card info-card customers-card">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          </div>

          <div class="card-body">
            <h5 class="card-title">Total de pessoas cadastradas <span>| Totalidade</span></h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-people"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $count }}</h6>
                @if($count>0)
                <span class="text-danger small pt-1 fw-bold">100%</span>
                @else
                <span class="text-danger small pt-1 fw-bold">0%</span>
                @endif
                <span class="text-muted small pt-2 ps-1">Actualizado</span>

              </div>
            </div>

          </div>
        </div>

      </div><!-- End Customers Card -->


    </div>
  </div><!-- End Left side columns -->


    @if(isset($error))
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12" align="center">
                    <h5 style="color: red;">{{$error}}</h5>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(isset($success))
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 my-4" align="center">
                    <h5 style="color: green;">{{$success}}</h5>
                </div>
            </div>
        </div>
    </div>
    @endif

  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">

        <h5 class="card-title">Lista de Pessoas Cadastradas</h5>
        <p>Informaçoes sobre as pessoas inseridas no sistema.</p>

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
              <th scope="col">Imagem</th>
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
                <td><img src="assets/img/{{ $find->picture }}" style="width:50px;height:50px;" class="rounded-circle"></td>
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
