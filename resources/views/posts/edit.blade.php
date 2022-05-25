<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/simple.css') }}">
    <title>Edit post</title>
</head>
<body>
    <h1>Edit post</h1>
    <hr>
    <div class="formContainer">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            <label for="title">Title</label>
            <input type="text" placeholder="Title" name="title" id="title" value="{{ $post->title }}">
            <br>
            <label for="content">Content</label>
            <textarea name="body" id="content" cols="30" rows="10" placeholder="Content" value="{{ $post->body }}></textarea>
            <input type="submit" value="Edit post">
        </form>
    </div>
</body>
</html>