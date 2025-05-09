<!DOCTYPE html>
<html>
<head>
    <title>Editar Post</title>
</head>
<body>
    <h1>Editar Post</h1>

    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf
        @method('PUT')

        <label for="title">Título</label>
        <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required>

        <label for="content">Contenido</label>
        <textarea id="content" name="content" required>{{ old('content', $post->content) }}</textarea>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
