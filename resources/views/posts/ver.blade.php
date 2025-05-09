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
            <a href="{{ route('posts.edit', $post) }}">
            <button>Editar</button>
            </a>

            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('¿Estás seguro de que quieres eliminar este post?')">Eliminar</button>
</form>

        </div>
    @endforeach
</body>
</html>
