@extends('admin.layouts.app')

@section('title', 'Edit Gallery Image - Bathra Groups')

@section('page-title', 'Gallery')

@section('content')

<div>

    <!-- PAGE HEADER -->
    <div class="flex flex-col sm:flex-row
                sm:items-center sm:justify-between
                gap-4 mb-8">

        <div>

            <p class="text-sm text-slate-500 mb-1">
                Content Management
            </p>

            <h1 class="text-2xl lg:text-3xl font-bold text-slate-900">
                Edit Gallery Image
            </h1>

            <p class="text-sm text-slate-500 mt-2">
                Update the gallery image or title.
            </p>

        </div>


        <!-- BACK -->
        <a
            href="{{ route('admin.gallery') }}"
            class="inline-flex items-center justify-center
                   gap-2 px-5 py-3 rounded-xl
                   bg-white border border-slate-200
                   text-slate-700 text-sm font-semibold
                   hover:bg-slate-50 transition"
        >
            ← Back to Gallery
        </a>

    </div>


    <!-- VALIDATION ERRORS -->
    @if($errors->any())

        <div
            class="mb-6 rounded-2xl
                   border border-red-200
                   bg-red-50 p-5"
        >

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
    <div class="max-w-3xl">

        <div
            class="bg-white rounded-2xl
                   border border-slate-200
                   shadow-sm overflow-hidden"
        >

            <!-- CARD HEADER -->
            <div
                class="px-6 lg:px-8 py-6
                       border-b border-slate-100"
            >

                <h2 class="text-lg font-semibold text-slate-900">
                    Gallery Information
                </h2>

                <p class="text-sm text-slate-500 mt-1">
                    Update the image details below.
                </p>

            </div>


            <!-- FORM -->
            <form
                action="{{ route('admin.gallery.update', $gallery->id) }}"
                method="POST"
                enctype="multipart/form-data"
                class="p-6 lg:p-8"
            >

                @csrf
                @method('PUT')


                <!-- CURRENT IMAGE -->
                <div class="mb-8">

                    <label
                        class="block text-sm font-semibold
                               text-slate-700 mb-3"
                    >
                        Current Image
                    </label>

                    <div
                        class="w-full sm:w-96
                               rounded-2xl overflow-hidden
                               border border-slate-200
                               bg-slate-100"
                    >

                        <img
                            src="{{ asset('uploads/gallery/' . $gallery->image) }}"
                            alt="{{ $gallery->title }}"
                            class="w-full h-auto object-cover"
                        >

                    </div>

                </div>


                <!-- CHANGE IMAGE -->
                <div class="mb-6">

                    <label
                        for="image"
                        class="block text-sm font-semibold
                               text-slate-700 mb-2"
                    >
                        Change Image
                    </label>

                    <input
                        type="file"
                        id="image"
                        name="image"
                        accept="image/*"
                        class="block w-full rounded-xl
                               border border-slate-200
                               bg-slate-50 px-4 py-3
                               text-sm text-slate-600
                               cursor-pointer
                               file:mr-4
                               file:rounded-lg
                               file:border-0
                               file:bg-slate-900
                               file:px-4 file:py-2
                               file:text-sm
                               file:font-semibold
                               file:text-white
                               hover:file:bg-slate-800"
                    >

                    <p class="text-xs text-slate-400 mt-2">
                        Leave empty if you want to keep the current image.
                    </p>

                    @error('image')
                        <p class="text-sm text-red-500 mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <!-- TITLE -->
                <div class="mb-8">

                    <label
                        for="title"
                        class="block text-sm font-semibold
                               text-slate-700 mb-2"
                    >
                        Title
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title', $gallery->title) }}"
                        placeholder="Enter image title"
                        class="w-full px-4 py-3 rounded-xl
                               border border-slate-200
                               bg-white text-slate-800
                               placeholder-slate-400
                               focus:outline-none
                               focus:ring-2 focus:ring-slate-300
                               focus:border-slate-400
                               transition"
                    >

                    @error('title')
                        <p class="text-sm text-red-500 mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <!-- BUTTONS -->
                <div
                    class="flex flex-col sm:flex-row
                           gap-3 pt-6
                           border-t border-slate-100"
                >

                    <!-- UPDATE -->
                    <button
                        type="submit"
                        class="inline-flex items-center
                               justify-center gap-2
                               px-6 py-3 rounded-xl
                               bg-navy text-white
                               text-sm font-semibold
                               hover:bg-slate-800
                               transition shadow-sm"
                    >

                        <span>
                            ✓
                        </span>

                        Update Gallery

                    </button>


                    <!-- CANCEL -->
                    <a
                        href="{{ route('admin.gallery') }}"
                        class="inline-flex items-center
                               justify-center gap-2
                               px-6 py-3 rounded-xl
                               bg-slate-100
                               text-slate-700
                               text-sm font-semibold
                               hover:bg-slate-200
                               transition"
                    >
                        Cancel
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection