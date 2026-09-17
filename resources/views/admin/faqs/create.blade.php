@extends('admin.layouts.app')

@section('title', 'Add FAQ - Bathra Groups')

@section('page-title', 'Add FAQ')

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

        <h1 class="text-2xl lg:text-3xl font-bold text-slate-900">
            Add New FAQ
        </h1>

        <p class="text-sm text-slate-500 mt-2">
            Add a frequently asked question and its answer.
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


    <!-- FORM CARD -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm">

        <!-- Card Header -->
        <div class="px-6 lg:px-8 py-6 border-b border-slate-100">

            <h2 class="text-lg font-semibold text-slate-900">
                FAQ Information
            </h2>

            <p class="text-sm text-slate-500 mt-1">
                Enter the question and answer for your FAQ.
            </p>

        </div>


        <form
            action="{{ route('admin.faqs.store') }}"
            method="POST"
            class="p-6 lg:p-8"
        >

            @csrf


            <!-- Question -->
            <div class="mb-6">

                <label
                    for="question"
                    class="block text-sm font-semibold text-slate-700 mb-2"
                >
                    Question
                </label>

                <input
                    type="text"
                    id="question"
                    name="question"
                    value="{{ old('question') }}"
                    placeholder="Enter the frequently asked question"
                    class="w-full px-4 py-3 rounded-xl
                           border border-slate-200
                           bg-white text-slate-800
                           placeholder-slate-400
                           focus:outline-none
                           focus:ring-2 focus:ring-slate-300
                           focus:border-slate-400
                           transition"
                >

                @error('question')
                    <p class="text-sm text-red-500 mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            <!-- Answer -->
            <div class="mb-8">

                <label
                    for="answer"
                    class="block text-sm font-semibold text-slate-700 mb-2"
                >
                    Answer
                </label>

                <textarea
                    id="answer"
                    name="answer"
                    rows="6"
                    placeholder="Enter the answer"
                    class="w-full px-4 py-3 rounded-xl
                           border border-slate-200
                           bg-white text-slate-800
                           placeholder-slate-400
                           focus:outline-none
                           focus:ring-2 focus:ring-slate-300
                           focus:border-slate-400
                           transition resize-y"
                >{{ old('answer') }}</textarea>

                @error('answer')
                    <p class="text-sm text-red-500 mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            <!-- Buttons -->
            <div
                class="flex flex-col sm:flex-row
                       gap-3 pt-6
                       border-t border-slate-100"
            >

                <!-- ADD -->
                <button
                    type="submit"
                    class="inline-flex items-center justify-center
                           gap-2 px-6 py-3 rounded-xl
                           bg-navy text-white
                           text-sm font-semibold
                           hover:bg-slate-800
                           transition shadow-sm"
                >

                    <span>
                        ✓
                    </span>

                    Add FAQ

                </button>


                <!-- CANCEL -->
                <a
                    href="{{ route('admin.faqs') }}"
                    class="inline-flex items-center justify-center
                           gap-2 px-6 py-3 rounded-xl
                           bg-slate-100 text-slate-700
                           text-sm font-semibold
                           hover:bg-slate-200 transition"
                >
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>

@endsection