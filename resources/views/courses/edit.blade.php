<!DOCTYPE html>
<html>
<head>
    <title>Modifier le cours</title>
</head>
<body>
    <h1>Modifier le cours</h1>
    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Titre:</label>
        <input type="text" id="title" name="title" value="{{ $course->title }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ $course->description }}</textarea>
        <br>
        <button type="submit">Enregistrer les modifications</button>
    </form>
</body>
</html>
