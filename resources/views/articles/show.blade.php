@extends('layouts.main')

@section('content')
    <div class="content">
        <div class="title">{{ $article->title }} <small><a href="{{ url('/articles/' . $article->id . '/edit') }}">edit</a></small></div>
        <div class="article">
           {!! $article->body !!}
        </div>
    </div>
@stop
