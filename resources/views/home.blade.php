@extends('layout.main')
@section('content')
    <main>
        <div class="jumbotron"></div>
        <div class="container">
            <div class="series">
                <h1>CURRENT SERIES</h1>
                <div class="wrapper">
                    <TvSeries v-for="(comic, index) in comics" :key="index" :image="comic.thumb"
                        :serieTitle="comic.series" />
                </div>
                <div class="container button"><button>LOAD MORE</button></div>

            </div>
        </div>
    </main>
@endsection
