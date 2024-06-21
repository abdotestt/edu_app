<!-- <!DOCTYPE html>
<html>
<head>
    <title>Liste des cours</title>
</head>
<body>
    <h1>Liste des cours</h1>
    <a href="{{ route('courses.create') }}">Créer un cours</a>
    <ul>
        @foreach ($courses as $course)
            <li>
                <a href="{{ route('courses.show', $course->id) }}">{{ $course->title }}</a>
                <a href="{{ route('courses.edit', $course->id) }}">Modifier</a>
                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html> -->
@extends('layouts.def')
@section('main')


      <!-- blog section start -->
      <div class="blog_section layout_padding">
         <div class="container">
            <h1 class="news_taital">Our Courses</h1>
            <!-- <p class="news_text">do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            @foreach ($courses as $course )
            
           
                <div class="blog_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <img src="./images/img-7.png" class="image_7" style="width:100%">
                    </div>
                    <div class="col-md-6">
                        <h4 class="classes_text">{{$course->title}}</h4>
                        <p class="ipsum_text">{{$course->description}}</p>
                    </div>
                </div>
                </div>
                
            @endforeach
            <div class="read_bt"><a href="#">Add to my list</a></div>
         </div>
      </div>
      <!-- blog section end -->
     
@endsection
