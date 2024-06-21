<?php

namespace App\Http\Controllers;

use App\Models\ListCourse;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;

class ListCourseController extends Controller
{
    public function index()
    {
        $listCourses = ListCourse::all();
        return view('list_course.index', compact('listCourses'));
    }

    public function create()
    {
        $users = User::all();
        $courses = Course::all();
        return view('list_course.create', compact('users', 'courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'course_id' => 'required|exists:courses,id',
            'creation_date' => 'nullable|date',
        ]);

        ListCourse::create($request->all());

        return redirect()->route('list_course.index')->with('success', 'ListCourse created successfully.');
    }

    public function show(ListCourse $listCourse)
    {
        return view('list_course.show', compact('listCourse'));
    }

    public function edit(ListCourse $listCourse)
    {
        $users = User::all();
        $courses = Course::all();
        return view('list_course.edit', compact('listCourse', 'users', 'courses'));
    }

    public function update(Request $request, ListCourse $listCourse)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'course_id' => 'required|exists:courses,id',
            'creation_date' => 'nullable|date',
        ]);

        $listCourse->update($request->all());

        return redirect()->route('list_course.index')->with('success', 'ListCourse updated successfully.');
    }

    public function destroy(ListCourse $listCourse)
    {
        $listCourse->delete();

        return redirect()->route('list_course.index')->with('success', 'ListCourse deleted successfully.');
    }
}
