@extends('layouts.main')

@section('content')
    <div class="content">
        <div class="title">{{ $article->title }}</div>
        <div class="article">
           {!! $article->body !!}
        </div>
    </div>
@stop
