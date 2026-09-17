<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->get();

        return view('admin.courses.index', compact('courses'));
    }
    public function create()
{
    return view('admin.courses.create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'required|image|max:2048',
        'description' => 'nullable|string',
        'features' => 'nullable|string',
        'price' => 'nullable|numeric',
    ]);

    $imageName = time() . '.' . $request->image->extension();

    $request->image->move(
        public_path('uploads/courses'),
        $imageName
    );

    Course::create([
        'title' => $request->title,
        'image' => $imageName,
        'description' => $request->description,
        'features' => $request->features,
        'price' => $request->price,
        'status' => true,
    ]);

    return redirect()
        ->route('admin.courses')
        ->with('success', 'Course added successfully.');
}

public function edit(Course $course)
{
    return view('admin.courses.edit', compact('course'));
}

public function update(Request $request, Course $course)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'nullable|image|max:2048',
        'description' => 'nullable|string',
        'features' => 'nullable|string',
        'price' => 'nullable|numeric',
    ]);

    if ($request->hasFile('image')) {

        $oldImage = public_path('uploads/courses/' . $course->image);

        if (file_exists($oldImage)) {
            unlink($oldImage);
        }

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(
            public_path('uploads/courses'),
            $imageName
        );

        $course->image = $imageName;
    }

    $course->title = $request->title;
    $course->description = $request->description;
    $course->features = $request->features;
    $course->price = $request->price;

    $course->save();

    return redirect()
        ->route('admin.courses')
        ->with('success', 'Course updated successfully.');
}

public function destroy(Course $course)
{
    $imagePath = public_path('uploads/courses/' . $course->image);

    if (file_exists($imagePath)) {
        unlink($imagePath);
    }

    $course->delete();

    return redirect()
        ->route('admin.courses')
        ->with('success', 'Course deleted successfully.');
}
}