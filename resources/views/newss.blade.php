@extends('layout.main')

@section('container')
   <h2 class="mb-5">Halaman News</h2>

    @foreach ($newss as $news)
        <article>
            <h5>
            <a href="news/{{ $news["id"] }}">{{ $news->title  }}</a>
            </h5>
            <h6>{{ $news->excerpt }}</h6>
        </article>
    @endforeach

@endsection