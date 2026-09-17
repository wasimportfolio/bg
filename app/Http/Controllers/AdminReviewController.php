<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class AdminReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->get();

        return view('admin.reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('admin.reviews.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|max:2048',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(
                public_path('uploads/reviews'),
                $imageName
            );
        }

        Review::create([
            'name' => $request->name,
            'review' => $request->review,
            'rating' => $request->rating,
            'image' => $imageName,
            'status' => true,
        ]);

        return redirect()
            ->route('admin.reviews')
            ->with('success', 'Review added successfully.');
    }

    public function edit(Review $review)
    {
        return view('admin.reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {

            $oldImage = public_path('uploads/reviews/' . $review->image);

            if ($review->image && file_exists($oldImage)) {
                unlink($oldImage);
            }

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(
                public_path('uploads/reviews'),
                $imageName
            );

            $review->image = $imageName;
        }

        $review->name = $request->name;
        $review->review = $request->review;
        $review->rating = $request->rating;

        $review->save();

        return redirect()
            ->route('admin.reviews')
            ->with('success', 'Review updated successfully.');
    }

    public function destroy(Review $review)
    {
        $imagePath = public_path('uploads/reviews/' . $review->image);

        if ($review->image && file_exists($imagePath)) {
            unlink($imagePath);
        }

        $review->delete();

        return redirect()
            ->route('admin.reviews')
            ->with('success', 'Review deleted successfully.');
    }
}