@extends('layout\main')

@section('container')
    <article>
        <p>{{ $newss->body }}</p>
    </article>
    <a href="/news">Back</a>
@endsection