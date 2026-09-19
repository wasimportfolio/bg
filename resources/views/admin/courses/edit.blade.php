@extends('admin.layouts.app')

@section('title', 'Edit Course - Bathra Admin')

@section('page-title', 'Edit Course')

@section('content')

<div>

    <!-- PAGE HEADER -->
    <div class="flex flex-col sm:flex-row
                sm:items-center sm:justify-between
                gap-4 mb-8">

        <div>

            <p class="text-sm text-slate-500 mb-1">
                Training Programs
            </p>

            <h1 class="text-2xl lg:text-3xl font-bold text-slate-900">
                Edit Course
            </h1>

            <p class="text-sm text-slate-500 mt-2">
                Update the course information below.
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


    <!-- FORM -->
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
                    Modify the details of this training program.
                </p>

            </div>


            <!-- FORM -->
            <form
                action="{{ route('admin.courses.update', $course->id) }}"
                method="POST"
                enctype="multipart/form-data"
                class="p-6 lg:p-8"
            >

                @csrf
                @method('PUT')


                <!-- CURRENT MEDIA -->
                <div class="mb-8">

                    <label
                        class="block text-sm font-semibold
                               text-slate-700 mb-3"
                    >
                        Current Course Media
                    </label>


                    @if($course->image)

                        <!-- CURRENT IMAGE -->
                        <div
                            class="w-full sm:w-72 h-48
                                   rounded-2xl overflow-hidden
                                   bg-slate-100
                                   border border-slate-200"
                        >

                            <img
                                src="{{ asset('uploads/courses/' . $course->image) }}"
                                alt="{{ $course->title }}"
                                class="w-full h-full object-cover"
                            >

                        </div>


                    @elseif($course->video)

                        <!-- CURRENT VIDEO -->
                        <div
                            class="w-full sm:w-72
                                   rounded-2xl overflow-hidden
                                   bg-slate-100
                                   border border-slate-200"
                        >

                            <video
                                src="{{ asset('uploads/courses/' . $course->video) }}"
                                controls
                                class="w-full h-auto"
                            ></video>

                        </div>


                    @else

                        <p class="text-sm text-slate-400">
                            No course media uploaded.
                        </p>

                    @endif

                </div>


                <!-- TITLE -->
                <div class="mb-6">

                    <label
                        class="block text-sm font-semibold
                               text-slate-700 mb-2"
                    >
                        Course Title
                    </label>

                    <input
                        type="text"
                        name="title"
                        value="{{ old('title', $course->title) }}"
                        required
                        class="w-full px-4 py-3 rounded-xl
                               border border-slate-200
                               bg-white text-slate-800
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


                <!-- CHANGE COURSE MEDIA -->
                <div class="mb-6">

                    <label
                        class="block text-sm font-semibold
                               text-slate-700 mb-3"
                    >
                        Change Course Image or Video
                    </label>


                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">


                        <!-- IMAGE -->
                        <div>

                            <label
                                for="image"
                                class="block text-sm font-medium
                                       text-slate-600 mb-2"
                            >
                                New Course Image
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
                                Upload an image to replace the current media.
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
                                class="block text-sm font-medium
                                       text-slate-600 mb-2"
                            >
                                New Course Video
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


                    <p class="text-xs text-slate-400 mt-3">
                        Upload either an image or a video to replace the current media.
                    </p>

                </div>


                <!-- DESCRIPTION -->
                <div class="mb-6">

                    <label
                        class="block text-sm font-semibold
                               text-slate-700 mb-2"
                    >
                        Description
                    </label>

                    <textarea
                        name="description"
                        rows="5"
                        class="w-full px-4 py-3 rounded-xl
                               border border-slate-200
                               bg-white text-slate-800
                               focus:outline-none
                               focus:ring-2 focus:ring-slate-300
                               focus:border-slate-400
                               transition resize-y"
                    >{{ old('description', $course->description) }}</textarea>

                    @error('description')
                        <p class="text-sm text-red-500 mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <!-- FEATURES -->
                <div class="mb-6">

                    <label
                        class="block text-sm font-semibold
                               text-slate-700 mb-2"
                    >
                        Features
                    </label>

                    <textarea
                        name="features"
                        rows="6"
                        placeholder="Enter one feature per line"
                        class="w-full px-4 py-3 rounded-xl
                               border border-slate-200
                               bg-white text-slate-800
                               focus:outline-none
                               focus:ring-2 focus:ring-slate-300
                               focus:border-slate-400
                               transition resize-y"
                    >{{ old('features', $course->features) }}</textarea>

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
                        class="block text-sm font-semibold
                               text-slate-700 mb-2"
                    >
                        Course Price
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
                            name="price"
                            value="{{ old('price', $course->price) }}"
                            min="0"
                            class="w-full pl-9 pr-4 py-3
                                   rounded-xl
                                   border border-slate-200
                                   bg-white text-slate-800
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

                        Update Course

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