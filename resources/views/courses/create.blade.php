<!DOCTYPE html>
<html>
<head>
    <title>Créer un cours</title>
</head>
<body>
    <h1>Créer un nouveau cours</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <label for="title">Titre:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        <br>
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>
