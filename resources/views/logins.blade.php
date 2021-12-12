@extends('layout.main')

@section('container')

    @foreach ($logins as $login)
        <article class= "mb-5">
            <h3>
                {{ $login["title"]  }}
            </h3>
            <h5>
                {{ $login["username"]  }}
            </h5>
            <h5>
                {{ $login["password"]  }}
            </h5>
        </article>
    @endforeach    

@endsection
