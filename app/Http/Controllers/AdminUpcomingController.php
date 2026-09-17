<?php

namespace App\Http\Controllers;

use App\Models\Upcoming;
use Illuminate\Http\Request;

class AdminUpcomingController extends Controller
{
    public function index()
    {
        $upcoming = Upcoming::latest()->first();

        return view('admin.upcoming.index', compact('upcoming'));
    }

    public function edit(Upcoming $upcoming)
    {
        return view('admin.upcoming.edit', compact('upcoming'));
    }

    public function update(Request $request, Upcoming $upcoming)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'price' => 'nullable|numeric',
        ]);

        if ($request->hasFile('image')) {

            $oldImage = public_path('uploads/upcoming/' . $upcoming->image);

            if ($upcoming->image && file_exists($oldImage)) {
                unlink($oldImage);
            }

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(
                public_path('uploads/upcoming'),
                $imageName
            );

            $upcoming->image = $imageName;
        }

        $upcoming->title = $request->title;
        $upcoming->description = $request->description;
        $upcoming->price = $request->price;

        $upcoming->save();

        return redirect()
            ->route('admin.upcoming')
            ->with('success', 'Upcoming section updated successfully.');
    }
}