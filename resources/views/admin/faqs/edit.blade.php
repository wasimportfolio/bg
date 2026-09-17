@extends('admin.layouts.app')

@section('title', 'Edit FAQ - Bathra Groups')

@section('page-title', 'Edit FAQ')

@section('content')

<div class="max-w-3xl mx-auto">

    <!-- Heading -->
    <div class="mb-8">

        <div class="flex items-center gap-3 mb-2">

            <a href="{{ route('admin.faqs') }}"
               class="text-sm text-slate-500 hover:text-slate-900 transition">
                ← FAQ
            </a>

        </div>

        <h1 class="text-2xl font-bold text-slate-900">
            Edit FAQ
        </h1>

        <p class="text-sm text-slate-500 mt-1">
            Update the question and answer below.
        </p>

    </div>


    <!-- Validation Errors -->
    @if($errors->any())

        <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 p-5">

            <div class="flex gap-3">

                <div class="text-red-600 text-lg">
                    !
                </div>

                <div>

                    <h3 class="font-semibold text-red-800">
                        Please fix the following errors
                    </h3>

                    <ul class="mt-2 space-y-1 text-sm text-red-700">

                        @foreach($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach

                    </ul>

                </div>

            </div>

        </div>

    @endif


    <!-- Form Card -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm">

        <div class="p-6 sm:p-8">

            <form
                action="{{ route('admin.faqs.update', $faq) }}"
                method="POST"
            >

                @csrf
                @method('PUT')


                <!-- Question -->
                <div class="mb-6">

                    <label
                        for="question"
                        class="block text-sm font-semibold text-slate-900 mb-2"
                    >
                        Question
                    </label>

                    <input
                        type="text"
                        id="question"
                        name="question"
                        value="{{ old('question', $faq->question) }}"
                        placeholder="Enter the frequently asked question"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300
                               bg-white text-slate-900 placeholder-slate-400
                               focus:outline-none focus:ring-2 focus:ring-slate-900
                               focus:border-transparent transition"
                    >

                </div>


                <!-- Answer -->
                <div class="mb-8">

                    <label
                        for="answer"
                        class="block text-sm font-semibold text-slate-900 mb-2"
                    >
                        Answer
                    </label>

                    <textarea
                        id="answer"
                        name="answer"
                        rows="6"
                        placeholder="Enter the answer"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300
                               bg-white text-slate-900 placeholder-slate-400
                               focus:outline-none focus:ring-2 focus:ring-slate-900
                               focus:border-transparent transition resize-y"
                    >{{ old('answer', $faq->answer) }}</textarea>

                </div>


                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-3 sm:justify-end">

                    <a
                        href="{{ route('admin.faqs') }}"
                        class="inline-flex items-center justify-center
                               px-5 py-3 rounded-xl border border-slate-300
                               bg-white text-slate-700 font-semibold
                               hover:bg-slate-50 transition"
                    >
                        Cancel
                    </a>

                    <button
                        type="submit"
                        class="inline-flex items-center justify-center
                               px-5 py-3 rounded-xl bg-slate-900
                               text-white font-semibold
                               hover:bg-slate-800 transition shadow-sm"
                    >
                        Update FAQ
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection