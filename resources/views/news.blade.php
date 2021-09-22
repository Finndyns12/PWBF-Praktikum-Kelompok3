@extends('layout.main')

@section('container')
   
    @foreach ($news as $news)
        <article class= "mb-5">
            <h3>{{ $news["title"] }}</h3>
            <h5>Waktu: {{ $news["time"] }}</h5>
            <h5>Lokasi: {{ $news["location"] }}</h5>
            <h5>Kronologi: {{ $news["kronologi"] }}</h5>
        </article>
    @endforeach

@endsection