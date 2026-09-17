<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use Illuminate\Http\Request;

class AdminBenefitController extends Controller
{
    public function index()
    {
        $benefits = Benefit::latest()->get();

        return view('admin.benefits.index', compact('benefits'));
    }

    public function create()
    {
        return view('admin.benefits.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:100',
        ]);

        Benefit::create([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $request->icon,
            'status' => true,
        ]);

        return redirect()
            ->route('admin.benefits')
            ->with('success', 'Benefit added successfully.');
    }

    public function edit(Benefit $benefit)
    {
        return view('admin.benefits.edit', compact('benefit'));
    }

    public function update(Request $request, Benefit $benefit)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:100',
        ]);

        $benefit->title = $request->title;
        $benefit->description = $request->description;
        $benefit->icon = $request->icon;

        $benefit->save();

        return redirect()
            ->route('admin.benefits')
            ->with('success', 'Benefit updated successfully.');
    }

    public function destroy(Benefit $benefit)
    {
        $benefit->delete();

        return redirect()
            ->route('admin.benefits')
            ->with('success', 'Benefit deleted successfully.');
    }
}