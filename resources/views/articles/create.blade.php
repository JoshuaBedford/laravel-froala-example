@extends('layouts.main')

@section('content')
    <div class="content">
        <div class="title">Create Article</div>
        <div class="form">
            {{ Form::open(['action' => 'ArticlesController@store', 'method' => 'POST']) }}
                {{ Form::label('Title') }}<br />
                {{ Form::text('title', null, ['placeholder' => 'Article Title']) }}<br />

                {{ Form::label('body', 'Body') }}<br />
                {{ Form::textarea('body') }}<br />

                {{ Form::label('excerpt', 'Excerpt') }}<br />
                {{ Form::textarea('excerpt') }}<br />

                {{ Form::submit('Create') }}
            {{ Form::close() }}
        </div>
    </div>
@stop

@section('scripts')
    <script>
        // Replace the <textarea id="body"> with a Froala
        // instance, using default configuration.
        $('#body, #excerpt').froalaEditor({
            toolbarButtons: ['undo', 'redo', 'html', '-', 'fontSize', 'paragraphFormat', 'align', 'quote', '|', 'formatOL', 'formatUL', '|', 'bold', 'italic', 'underline', '|', 'insertLink', 'insertImage', 'insertTable'],
            heightMin: 300,
            imageMove: true,
            imageUploadParam: 'file',
            imageUploadMethod: 'post',
            // Set the image upload URL.
            imageUploadURL: '/files/post',
            imageUploadParams: {
                location: 'images', // This allows us to distinguish between Froala or a regular file upload.
                _token: "{{ csrf_token() }}" // This passes the laravel token with the ajax request.
            },
            // URL to get all department images from
            imageManagerLoadURL: '/fileuploads',
            // Set the delete image request URL.
            imageManagerDeleteURL: "/fileuploads",
            // Set the delete image request type.
            imageManagerDeleteMethod: "DELETE",
            imageManagerDeleteParams: {
                _token: "{{ csrf_token() }}"
            }
        });
    </script>
@stop