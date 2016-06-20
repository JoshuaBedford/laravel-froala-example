@extends('layouts.froala')

@section('content')
    <div class="content">
        <div class="title">Create Article</div>
        <div class="form">
            {{ Form::model($article, ['action' => ['Froala\ArticlesController@update', $article->id], 'method' => 'PATCH']) }}
                {{ Form::label('Title') }}<br />
                {{ Form::text('title') }}<br />

                {{ Form::label('body', 'Body') }}<br />
                {{ Form::textarea('body') }}<br />

                {{ Form::label('excerpt', 'Excerpt') }}<br />
                {{ Form::textarea('excerpt') }}<br />

                {{ Form::submit('Save') }}
            {{ Form::close() }}
        </div>
    </div>
@stop

@section('scripts')
    <script>
        // Replace the <textarea id="body"> and <textarea id="excerpt"> with a Froala
        // instance.
        $('#body, #excerpt').froalaEditor({
          toolbarButtons: ['undo', 'redo', 'html', '-', 'fontSize', 'paragraphFormat', 'align', 'quote', '|', 'formatOL', 'formatUL', '|', 'bold', 'italic', 'underline', '|', 'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable'],
          heightMin: 300,
          imageMove: true,
          imageUploadParam: 'image',
          imageUploadMethod: 'post',
          // Set the image upload URL.
          imageUploadURL: '/files/post',
          imageUploadParams: {
            location: 'images', // This allows us to distinguish between Froala or a regular file upload.
            _token: "{{ csrf_token() }}" // This passes the laravel token with the ajax request.
          }
        });
    </script>
@stop