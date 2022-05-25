<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('css/simple.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Posts</h1>
    <a href="/posts/create" class="button">Create new post &rarr;</a>
    <hr>
    @foreach ($posts as $post)
    <div>
        <h3>Created at: {{$post->created_at}}</h3>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
    </div>
    <a href="posts/{{ $post->id }}/edit" class="button">Edit &rarr;</a>
    <hr>
    @endforeach


  
</body>
</html>