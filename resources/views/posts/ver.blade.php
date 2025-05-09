<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver Todos los Posts</title>
</head>
<body>
    <h1>Todos los Posts</h1>

    @foreach ($posts as $post)
        <div style="margin-bottom: 20px; padding: 10px; border: 1px solid #ccc;">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
        </div>
    @endforeach
</body>
</html>
