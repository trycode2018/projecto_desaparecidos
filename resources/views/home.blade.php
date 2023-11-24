@extends('layouts.main')
@section ('title')
    Visualizar uma pessoa
@endsection

@section('content')
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="assets/img/profile-img.jpg" alt="" class="img-fluid">
            </div>
            <div id="info-container" class="col-md-6">
                <form action="#" method="get">
                    <p class="form-control">{{$pessoa->name}}</p>
                    <p class="form-control">{{$pessoa->address}}</p>
                    <p class="form-control">{{$pessoa->age}}</p>
                    <p class="form-control">{{$pessoa->date}}</p>
                </form>
            </div>
        </div>
    </div>
@endsection
