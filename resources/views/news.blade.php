@extends('layout/main')

@section('container')
   <h1 class="mb-5">Halaman News</h1>

    @foreach ($news as $news)
        <article>
            <h5>
                {{ $news["title"] }}
            </h5>
            <p>{{ $news["body"] }}</p>
        </article>
    @endforeach

@endsection