@extends('layout.main')

@section('title')
    series detail
@endsection
@section('content')
<div class="container-detail">

    <div class="card">
        <img src="{{$serie['src']}}"  alt="{{$serie['titolo']}}">
        <div class="card-body">
        <h5 class="card-title">{{$serie['titolo']}}</h5>
        <p class="card-text">Prezzo: {{$serie['price']}} <br> Tipo: {{$serie['type']}}</p>
        <a href="#" class="btn btn-primary">Acquista</a>
        </div>
    </div>

</div>




@endsection
