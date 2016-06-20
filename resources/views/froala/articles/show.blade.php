@extends('layouts.froala')

@section('content')
    <div class="content">
        <div class="title">{{ $article->title }} <small><a href="{{ url('/froala/articles/' . $article->id . '/edit') }}">edit</a></small></div>
        <div class="article">
           {!! $article->body !!}
        </div>
    </div>
@stop
