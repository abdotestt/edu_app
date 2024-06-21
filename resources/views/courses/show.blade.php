
<!DOCTYPE html>
<html>
<head>
    <title>Détails du cours</title>
</head>
<body>
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->description }}</p>
    <a href="{{ route('courses.index') }}">Retour à la liste des cours</a>
</body>
</html>
