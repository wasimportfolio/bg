@extends('admin.layouts.app')

@section('title', 'Add Gallery Image - Bathra Groups')
@section('page-title', 'Gallery')

@section('content')

<div>

    <!-- Heading -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">

        <div>
            <p class="text-sm text-slate-500 mb-1">Content Management</p>

            <h1 class="text-2xl lg:text-3xl font-bold text-slate-900">
                Add Gallery Image
            </h1>

            <p class="text-sm text-slate-500 mt-2">
                Upload a new image to your website gallery.
            </p>
        </div>

        <a href="{{ route('admin.gallery') }}"
           class="inline-flex items-center justify-center px-5 py-3 rounded-xl border border-slate-200 bg-white text-sm font-semibold text-slate-700 hover:bg-slate-50 transition">
            ← Back to Gallery
        </a>

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
    <div class="max-w-3xl">

        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">

            <div class="px-6 lg:px-8 py-6 border-b border-slate-100">

                <h2 class="text-lg font-semibold text-slate-900">
                    Gallery Image Information
                </h2>

                <p class="text-sm text-slate-500 mt-1">
                    Upload an image and add a title for your gallery.
                </p>

            </div>


            <form
                action="{{ route('admin.gallery.store') }}"
                method="POST"
                enctype="multipart/form-data"
                class="p-6 lg:p-8"
            >

                @csrf


                <!-- Image -->
                <div class="mb-6">

                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Gallery Image
                    </label>

                    <input
                        type="file"
                        name="image"
                        accept="image/*"
                        required
                        class="block w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-600
                               file:mr-4 file:rounded-lg file:border-0
                               file:bg-slate-900 file:px-4 file:py-2
                               file:text-sm file:font-semibold file:text-white
                               hover:file:bg-slate-800"
                    >

                    <p class="mt-2 text-xs text-slate-500">
                        Upload a JPG, JPEG, PNG or WebP image.
                    </p>

                </div>


                <!-- Title -->
                <div class="mb-8">

                    <label
                        for="title"
                        class="block text-sm font-semibold text-slate-700 mb-2"
                    >
                        Title
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title') }}"
                        placeholder="Enter image title"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200
                               bg-white text-slate-800
                               focus:outline-none focus:ring-2
                               focus:ring-slate-300 focus:border-slate-400
                               transition"
                    >

                </div>


                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-3 pt-6 border-t border-slate-100">

                    <button
                        type="submit"
                        class="inline-flex items-center justify-center gap-2 px-6 py-3
                               rounded-xl bg-navy text-white text-sm font-semibold
                               hover:bg-slate-800 transition shadow-sm"
                    >
                        <span>✓</span>
                        Upload Image
                    </button>


                    <a
                        href="{{ route('admin.gallery') }}"
                        class="inline-flex items-center justify-center px-6 py-3
                               rounded-xl bg-slate-100 text-slate-700
                               text-sm font-semibold hover:bg-slate-200 transition"
                    >
                        Cancel
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection