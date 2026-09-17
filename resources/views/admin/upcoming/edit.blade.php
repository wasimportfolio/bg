@extends('admin.layouts.app')

@section('title', 'Edit Upcoming - Bathra Groups')

@section('page-title', 'Upcoming Training')

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
                Edit Upcoming Section
            </h1>

            <p class="text-sm text-slate-500 mt-2">
                Update the upcoming training displayed on your website.
            </p>

        </div>


        <!-- BACK -->
        <a
            href="{{ route('admin.upcoming') }}"
            class="inline-flex items-center justify-center
                   gap-2 px-5 py-3 rounded-xl
                   bg-white border border-slate-200
                   text-slate-700 text-sm font-semibold
                   hover:bg-slate-50 transition"
        >
            ← Back
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
                    Upcoming Training Information
                </h2>

                <p class="text-sm text-slate-500 mt-1">
                    Update the title, description, price and image.
                </p>

            </div>


            <!-- FORM -->
            <form
                action="{{ route('admin.upcoming.update', $upcoming->id) }}"
                method="POST"
                enctype="multipart/form-data"
                class="p-6 lg:p-8"
            >

                @csrf
                @method('PUT')


                <!-- TITLE -->
                <div class="mb-6">

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
                        value="{{ old('title', $upcoming->title) }}"
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
                        rows="8"
                        class="w-full px-4 py-3 rounded-xl
                               border border-slate-200
                               bg-white text-slate-800
                               focus:outline-none
                               focus:ring-2 focus:ring-slate-300
                               focus:border-slate-400
                               transition resize-y"
                    >{{ old('description', $upcoming->description) }}</textarea>

                    @error('description')
                        <p class="text-sm text-red-500 mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <!-- PRICE -->
                <div class="mb-6">

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
                                   text-slate-500"
                        >
                            ₹
                        </span>

                        <input
                            type="number"
                            id="price"
                            name="price"
                            value="{{ old('price', $upcoming->price) }}"
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


                <!-- CURRENT IMAGE -->
                @if($upcoming->image)

                    <div class="mb-6">

                        <label
                            class="block text-sm font-semibold
                                   text-slate-700 mb-3"
                        >
                            Current Image
                        </label>

                        <div
                            class="w-full max-w-sm
                                   h-56 rounded-2xl
                                   overflow-hidden
                                   border border-slate-200
                                   bg-slate-100"
                        >

                            <img
                                src="{{ asset('uploads/upcoming/' . $upcoming->image) }}"
                                alt="{{ $upcoming->title }}"
                                class="w-full h-full object-cover"
                            >

                        </div>

                    </div>

                @endif


                <!-- CHANGE IMAGE -->
                <div class="mb-8">

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

                        <span>✓</span>

                        Update Upcoming

                    </button>


                    <!-- CANCEL -->
                    <a
                        href="{{ route('admin.upcoming') }}"
                        class="inline-flex items-center
                               justify-center
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