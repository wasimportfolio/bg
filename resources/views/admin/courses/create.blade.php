@extends('admin.layouts.app')

@section('title', 'Add Course - Bathra Groups')

@section('page-title', 'Add New Course')

@section('content')

<div>

    <!-- PAGE HEADER -->
    <div class="flex flex-col sm:flex-row
                sm:items-center sm:justify-between
                gap-4 mb-8">

        <div>

            <p class="text-sm text-slate-500 mb-1">
                Courses
            </p>

            <h1 class="text-2xl lg:text-3xl font-bold text-slate-900">
                Add New Course
            </h1>

            <p class="text-sm text-slate-500 mt-2">
                Create a new training program.
            </p>

        </div>


        <!-- BACK -->
        <a
            href="{{ route('admin.courses') }}"
            class="inline-flex items-center justify-center
                   gap-2 px-5 py-3 rounded-xl
                   bg-white border border-slate-200
                   text-slate-700 text-sm font-semibold
                   hover:bg-slate-50 transition"
        >
            ← Back to Courses
        </a>

    </div>


    <!-- FORM CARD -->
    <div class="max-w-4xl">

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
                    Course Information
                </h2>

                <p class="text-sm text-slate-500 mt-1">
                    Enter the details for your new training program.
                </p>

            </div>


            <!-- FORM -->
            <form
                action="{{ route('admin.courses.store') }}"
                method="POST"
                enctype="multipart/form-data"
                class="p-6 lg:p-8"
            >

                @csrf


                <!-- TITLE -->
                <div class="mb-6">

                    <label
                        for="title"
                        class="block text-sm font-semibold
                               text-slate-700 mb-2"
                    >
                        Course Title
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title') }}"
                        placeholder="Enter course title"
                        required
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


               <!-- COURSE MEDIA -->
<div class="mb-6">

    <label class="block text-sm font-semibold text-slate-700 mb-3">
        Course Image or Video
    </label>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

        <!-- IMAGE -->
        <div>
            <label
                for="image"
                class="block text-sm font-medium text-slate-600 mb-2"
            >
                Course Image
            </label>

            <input
                type="file"
                id="image"
                name="image"
                accept="image/*"
                class="w-full px-4 py-3 rounded-xl
                       border border-slate-200
                       bg-slate-50
                       text-sm text-slate-600
                       cursor-pointer"
            >

            <p class="text-xs text-slate-400 mt-2">
                Upload an image if you want to use an image.
            </p>

            @error('image')
                <p class="text-sm text-red-500 mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <!-- VIDEO -->
        <div>
            <label
                for="video"
                class="block text-sm font-medium text-slate-600 mb-2"
            >
                Course Video
            </label>

            <input
                type="file"
                id="video"
                name="video"
                accept="video/mp4,video/webm,video/quicktime"
                class="w-full px-4 py-3 rounded-xl
                       border border-slate-200
                       bg-slate-50
                       text-sm text-slate-600
                       cursor-pointer"
            >

            <p class="text-xs text-slate-400 mt-2">
                Upload a video up to 100 MB.
            </p>

            @error('video')
                <p class="text-sm text-red-500 mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>

    @error('media')
        <p class="text-sm text-red-500 mt-2">
            {{ $message }}
        </p>
    @enderror

    <p class="text-xs text-slate-400 mt-3">
        Upload either an image or a video for this course.
    </p>

</div>

                <!-- DESCRIPTION -->
                <div class="mb-6">

                    <label
                        for="description"
                        class="block text-sm font-semibold
                               text-slate-700 mb-2"
                    >
                        Description
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="5"
                        placeholder="Enter course description"
                        class="w-full px-4 py-3 rounded-xl
                               border border-slate-200
                               bg-white text-slate-800
                               placeholder-slate-400
                               focus:outline-none
                               focus:ring-2 focus:ring-slate-300
                               focus:border-slate-400
                               transition resize-y"
                    >{{ old('description') }}</textarea>

                    @error('description')
                        <p class="text-sm text-red-500 mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <!-- FEATURES -->
                <div class="mb-6">

                    <label
                        for="features"
                        class="block text-sm font-semibold
                               text-slate-700 mb-2"
                    >
                        Features
                    </label>

                    <textarea
                        id="features"
                        name="features"
                        rows="6"
                        placeholder="Enter each feature on a separate line"
                        class="w-full px-4 py-3 rounded-xl
                               border border-slate-200
                               bg-white text-slate-800
                               placeholder-slate-400
                               focus:outline-none
                               focus:ring-2 focus:ring-slate-300
                               focus:border-slate-400
                               transition resize-y"
                    >{{ old('features') }}</textarea>

                    <p class="text-xs text-slate-400 mt-2">
                        Enter each feature on a separate line.
                    </p>

                    @error('features')
                        <p class="text-sm text-red-500 mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <!-- PRICE -->
                <div class="mb-8">

                    <label
                        for="price"
                        class="block text-sm font-semibold
                               text-slate-700 mb-2"
                    >
                        Price
                    </label>

                    <div class="relative">

                        <span
                            class="absolute left-4 top-1/2
                                   -translate-y-1/2
                                   text-slate-500 font-medium"
                        >
                            ₹
                        </span>

                        <input
                            type="number"
                            id="price"
                            name="price"
                            value="{{ old('price') }}"
                            placeholder="Enter price"
                            min="0"
                            class="w-full pl-9 pr-4 py-3
                                   rounded-xl
                                   border border-slate-200
                                   bg-white text-slate-800
                                   placeholder-slate-400
                                   focus:outline-none
                                   focus:ring-2 focus:ring-slate-300
                                   focus:border-slate-400
                                   transition"
                        >

                    </div>

                    @error('price')
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

                    <!-- SAVE -->
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

                        Save Course

                    </button>


                    <!-- CANCEL -->
                    <a
                        href="{{ route('admin.courses') }}"
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