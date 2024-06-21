<?php
namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $course = new Course([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'user_id' => auth()->id(),
        ]);
        $course->save();

        return redirect('/courses')->with('success', 'Course saved!');
    }

    public function show($id)
    {
        $course = Course::find($id);
        return view('courses.show', compact('course'));
    }

    public function edit($id)
    {
        $course = Course::find($id);
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $course = Course::find($id);
        $course->title = $request->get('title');
        $course->description = $request->get('description');
        $course->save();

        return redirect('/courses')->with('success', 'Course updated!');
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();

        return redirect('/courses')->with('success', 'Course deleted!');
    }
}
