<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    public function index()
    {
        $about = About::latest()->first();

        return view('admin.about.index', compact('about'));
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {

            $oldImage = public_path('uploads/about/' . $about->image);

            if ($about->image && file_exists($oldImage)) {
                unlink($oldImage);
            }

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(
                public_path('uploads/about'),
                $imageName
            );

            $about->image = $imageName;
        }

        $about->title = $request->title;
        $about->description = $request->description;

        $about->save();

        return redirect()
            ->route('admin.about')
            ->with('success', 'About section updated successfully.');
    }
}