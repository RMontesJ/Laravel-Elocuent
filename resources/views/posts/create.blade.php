<!DOCTYPE html>
<html>
<head>
    <title>Crear Post</title>
</head>
<body>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/crear-post" method="POST">
        @csrf
        <label for="title">Título:</label><br>
        <input type="text" id="title" name="title"><br><br>

        <label for="content">Contenido:</label><br>
        <textarea id="content" name="content"></textarea><br><br>

        <label for="categoria">Categoría:</label><br>
        <input type="text" id="categoria" name="categoria"><br><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
