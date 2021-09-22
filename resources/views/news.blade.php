@extends('layout.main')

@section('container')
   
@foreach ($news as $news)
<h3>{{ $news["title"] }}</h3>
<h5>{{ $news["time"] }}</h5>
<h5>{{ $news["location"] }}</h5>
<h5>{{ $news["kronologi"] }}</h5>
@endforeach

@endsection