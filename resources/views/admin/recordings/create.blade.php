@extends('admin.layouts.app')

@section('title', 'Add Recording - Bathra Groups')

@section('page-title', 'Recording Sessions')

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
                Add Recording Session
            </h1>

            <p class="text-sm text-slate-500 mt-2">
                Add a YouTube training recording video.
            </p>

        </div>


        <!-- BACK -->
        <a
            href="{{ route('admin.recordings') }}"
            class="inline-flex items-center justify-center
                   gap-2 px-5 py-3 rounded-xl
                   bg-white border border-slate-200
                   text-slate-700 text-sm font-semibold
                   hover:bg-slate-50 transition"
        >
            ← Back to Recordings
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


    <!-- FORM -->
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
                    Recording Information
                </h2>

                <p class="text-sm text-slate-500 mt-1">
                    Add the title, description and YouTube video link.
                </p>

            </div>


            <!-- FORM -->
            <form
                method="POST"
                action="{{ route('admin.recordings.store') }}"
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
                        Recording Title
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title') }}"
                        required
                        placeholder="Enter recording title"
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
                        placeholder="Enter recording description"
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


                <!-- YOUTUBE VIDEO URL -->
                <div class="mb-8">

                    <label
                        for="video"
                        class="block text-sm font-semibold
                               text-slate-700 mb-2"
                    >
                        YouTube Video URL
                    </label>

                    <input
                        type="url"
                        id="video"
                        name="video"
                        value="{{ old('video') }}"
                        required
                        placeholder="https://youtu.be/xxxxxxxxxxx"
                        class="w-full px-4 py-3 rounded-xl
                               border border-slate-200
                               bg-white text-slate-800
                               placeholder-slate-400
                               focus:outline-none
                               focus:ring-2 focus:ring-slate-300
                               focus:border-slate-400
                               transition"
                    >

                    <p class="text-xs text-slate-400 mt-2">
                        Paste the YouTube video link here.
                        Example: https://youtu.be/0wWNdi7xzso
                    </p>

                    @error('video')
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

                    <!-- ADD -->
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

                        <span>✓</span>

                        Add Recording

                    </button>


                    <!-- CANCEL -->
                    <a
                        href="{{ route('admin.recordings') }}"
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