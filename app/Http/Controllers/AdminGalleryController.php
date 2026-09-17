<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class AdminGalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();

        return view('admin.gallery.index', compact('galleries'));
    }
    public function create()
    {
        return view('admin.gallery.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
            'title' => 'nullable|string|max:255',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(
            public_path('uploads/gallery'),
            $imageName
        );

        Gallery::create([
            'image' => $imageName,
            'title' => $request->title,
            'status' => true,
        ]);

        return redirect()
            ->route('admin.gallery')
            ->with('success', 'Gallery image uploaded successfully.');
    }
    public function destroy(Gallery $gallery)
{
    $imagePath = public_path('uploads/gallery/' . $gallery->image);

    if (file_exists($imagePath)) {
        unlink($imagePath);
    }

    $gallery->delete();

    return redirect()
        ->route('admin.gallery')
        ->with('success', 'Gallery image deleted successfully.');
}

public function edit(Gallery $gallery)
{
    return view('admin.gallery.edit', compact('gallery'));
}

public function update(Request $request, Gallery $gallery)
{
    $request->validate([
        'image' => 'nullable|image|max:2048',
        'title' => 'nullable|string|max:255',
    ]);

    if ($request->hasFile('image')) {

        $oldImage = public_path('uploads/gallery/' . $gallery->image);

        if (file_exists($oldImage)) {
            unlink($oldImage);
        }

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(
            public_path('uploads/gallery'),
            $imageName
        );

        $gallery->image = $imageName;
    }

    $gallery->title = $request->title;

    $gallery->save();

    return redirect()
        ->route('admin.gallery')
        ->with('success', 'Gallery image updated successfully.');
}
}
