<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class AdminFaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::latest()->get();

        return view('admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
            'status' => true,
        ]);

        return redirect()
            ->route('admin.faqs')
            ->with('success', 'FAQ added successfully.');
    }

    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        $faq->question = $request->question;
        $faq->answer = $request->answer;

        $faq->save();

        return redirect()
            ->route('admin.faqs')
            ->with('success', 'FAQ updated successfully.');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()
            ->route('admin.faqs')
            ->with('success', 'FAQ deleted successfully.');
    }
}