<?php

namespace App\Http\Controllers;

use App\Models\Recording;
use Illuminate\Http\Request;

class AdminRecordingController extends Controller
{
    public function index()
    {
        $recordings = Recording::latest()->get();

        return view('admin.recordings.index', compact('recordings'));
    }

    public function create()
    {
        return view('admin.recordings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'video' => 'required|url|max:500',
        ]);

        Recording::create([
            'title' => $request->title,
            'description' => $request->description,
            'video' => $request->video,
            'status' => true,
        ]);

        return redirect()
            ->route('admin.recordings')
            ->with('success', 'Recording session added successfully.');
    }

    public function edit(Recording $recording)
    {
        return view('admin.recordings.edit', compact('recording'));
    }

    public function update(Request $request, Recording $recording)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'video' => 'required|url|max:500',
        ]);

        $recording->title = $request->title;
        $recording->description = $request->description;
        $recording->video = $request->video;

        $recording->save();

        return redirect()
            ->route('admin.recordings')
            ->with('success', 'Recording session updated successfully.');
    }

    public function destroy(Recording $recording)
    {
        $recording->delete();

        return redirect()
            ->route('admin.recordings')
            ->with('success', 'Recording session deleted successfully.');
    }
}