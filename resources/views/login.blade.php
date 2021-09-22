@extends('layout.main')

@section('container')

    @foreach ($login as $login)
        <article class= "mb-5">
            <h3>
                <a href="/login/{{ $login["slug"] }}">{{ $login["title"]  }}</a>
            </h3>
        </article>
    @endforeach    

@endsection