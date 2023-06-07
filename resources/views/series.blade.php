@extends('layout.main')

@section('content')



<main>
    <div class="jumbotron"></div>
        <div class="container">
            <div class="series">
                <h1>CURRENT SERIES</h1>
                <div class="wrapper">

                    @forelse ($series as $serie )
                    <div class="card">
                        <img src="{{$serie['src']}}" alt="seriesName">
                        <p>{{$serie['titolo']}}</p>
                    </div>
                    @empty

                    @endforelse



                </div>

                <div class="container button"><button>LOAD MORE</button></div>
            </div>
        </div>




</main>



@endsection
