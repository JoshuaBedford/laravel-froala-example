@extends('layouts.main')

@section('content')
    <div class="content">
        <div class="title">Articles</div>
        <div class="list">
            <ul class="articles">
                @foreach($articles as $article)
                    <li><a href="{{ url('/articles/' . $article->id) }}" class="title">{{ $article->title }}</a> | <a href="{{ url('/articles/' . $article->id . "/edit") }}">edit</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@stop
