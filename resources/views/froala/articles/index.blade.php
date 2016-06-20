@extends('layouts.froala')

@section('content')
    <div class="content">
        <div class="title">Articles</div>
        <div class="subtitle">Deleted Daily (11:15 AM CST)</div>
        <div class="list">
            <ul class="articles">
                @foreach($articles as $article)
                    <li><a href="{{ url('/froala/articles/' . $article->id) }}" class="title">{{ $article->title }}</a> | <a href="{{ url('/froala/articles/' . $article->id . "/edit") }}">edit</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@stop
