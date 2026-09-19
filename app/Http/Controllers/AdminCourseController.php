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
            'image' => 'nullable|image|max:2048',
            'video' => 'nullable|mimetypes:video/mp4,video/webm,video/quicktime|max:102400',
            'description' => 'nullable|string',
            'features' => 'nullable|string',
            'price' => 'nullable|numeric',
        ]);

        // Image OR Video - one is required
        if (!$request->hasFile('image') && !$request->hasFile('video')) {
            return back()
                ->withErrors(['media' => 'Please upload either an image or a video.'])
                ->withInput();
        }

        $imageName = null;
        $videoName = null;

        // Upload Image
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(
                upload_path('courses'),
                $imageName
            );
        }

        // Upload Video
        if ($request->hasFile('video')) {
            $videoName = time() . '_video.' . $request->video->extension();

            $request->video->move(
                upload_path('courses'),
                $videoName
            );
        }

        Course::create([
            'title' => $request->title,
            'image' => $imageName,
            'video' => $videoName,
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
            'video' => 'nullable|mimetypes:video/mp4,video/webm,video/quicktime|max:102400',
            'description' => 'nullable|string',
            'features' => 'nullable|string',
            'price' => 'nullable|numeric',
        ]);

        // If new image is uploaded
        if ($request->hasFile('image')) {

            // Delete old image
            if ($course->image) {
                $oldImage = upload_path('courses') . DIRECTORY_SEPARATOR . $course->image;

                if (file_exists($oldImage)) {
                    unlink($oldImage);
                }
            }

            // Delete old video
            if ($course->video) {
                $oldVideo = upload_path('courses') . DIRECTORY_SEPARATOR . $course->video;

                if (file_exists($oldVideo)) {
                    unlink($oldVideo);
                }

                $course->video = null;
            }

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(
                upload_path('courses'),
                $imageName
            );

            $course->image = $imageName;
        }

        // If new video is uploaded
        if ($request->hasFile('video')) {

            // Delete old video
            if ($course->video) {
                $oldVideo = upload_path('courses') . DIRECTORY_SEPARATOR . $course->video;

                if (file_exists($oldVideo)) {
                    unlink($oldVideo);
                }
            }

            // Delete old image
            if ($course->image) {
                $oldImage = upload_path('courses') . DIRECTORY_SEPARATOR . $course->image;

                if (file_exists($oldImage)) {
                    unlink($oldImage);
                }

                $course->image = null;
            }

            $videoName = time() . '_video.' . $request->video->extension();

            $request->video->move(
                upload_path('courses'),
                $videoName
            );

            $course->video = $videoName;
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
        // Delete image
        if ($course->image) {
            $imagePath = upload_path('courses') . DIRECTORY_SEPARATOR . $course->image;

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete video
        if ($course->video) {
            $videoPath = upload_path('courses') . DIRECTORY_SEPARATOR . $course->video;

            if (file_exists($videoPath)) {
                unlink($videoPath);
            }
        }

        $course->delete();

        return redirect()
            ->route('admin.courses')
            ->with('success', 'Course deleted successfully.');
    }
}