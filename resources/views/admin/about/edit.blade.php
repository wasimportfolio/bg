@extends('admin.layouts.app')

@section('title', 'Edit About - Bathra Groups')

@section('page-title', 'Edit About')

@section('content')

<div class="max-w-4xl">

    <!-- Heading -->
    <div class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

        <div>

            <p class="text-sm text-slate-500">
                Content Management
            </p>

            <h1 class="text-2xl font-bold text-slate-900 mt-1">
                Edit About Section
            </h1>

        </div>

        <a
            href="{{ route('admin.about') }}"
            class="inline-flex items-center justify-center px-5 py-3 rounded-xl border border-slate-300 bg-white hover:bg-slate-50 font-semibold"
        >
            ← Back
        </a>

    </div>


    <!-- Form Card -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm">

        <form
            action="{{ route('admin.about.update', $about->id) }}"
            method="POST"
            enctype="multipart/form-data"
            class="p-6"
        >

            @csrf
            @method('PUT')


            <!-- Title -->
            <div class="mb-5">

                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    Title
                </label>

                <input
                    type="text"
                    name="title"
                    value="{{ $about->title }}"
                    required
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-900"
                >

                @error('title')
                    <p class="text-sm text-red-500 mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            <!-- Description -->
            <div class="mb-5">

                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    Description
                </label>

                <textarea
                    name="description"
                    rows="8"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-900 resize-none"
                >{{ $about->description }}</textarea>

                @error('description')
                    <p class="text-sm text-red-500 mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            <!-- Change Image -->
            <div class="mb-5">

                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    Change Image
                </label>

                <input
                    type="file"
                    name="image"
                    accept="image/*"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white"
                >

                <p class="text-xs text-slate-500 mt-2">
                    Leave empty if you want to keep the current image.
                </p>

                @error('image')
                    <p class="text-sm text-red-500 mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            <!-- Current Image -->
            @if($about->image)

                <div class="mb-6">

                    <p class="text-sm font-semibold text-slate-700 mb-2">
                        Current Image
                    </p>

                    <img
                        src="{{ asset('uploads/about/' . $about->image) }}"
                        alt="{{ $about->title }}"
                        class="w-full max-w-sm h-56 object-cover rounded-xl border border-slate-200"
                    >

                </div>

            @endif


            <!-- Buttons -->
            <div class="flex gap-3 border-t border-slate-200 pt-5">

                <button
                    type="submit"
                    class="px-5 py-3 rounded-xl bg-slate-900 text-white font-semibold hover:bg-slate-800"
                >
                    Update About
                </button>

                <a
                    href="{{ route('admin.about') }}"
                    class="px-5 py-3 rounded-xl border border-slate-300 font-semibold hover:bg-slate-50"
                >
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>

@endsection