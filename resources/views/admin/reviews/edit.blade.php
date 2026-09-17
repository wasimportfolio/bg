@extends('admin.layouts.app')

@section('title', 'Edit Review - Bathra Groups')

@section('page-title', 'Reviews')

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
                Edit Review
            </h1>

            <p class="text-sm text-slate-500 mt-2">
                Update customer review details.
            </p>

        </div>


        <!-- BACK -->
        <a
            href="{{ route('admin.reviews') }}"
            class="inline-flex items-center justify-center
                   gap-2 px-5 py-3 rounded-xl
                   bg-white border border-slate-200
                   text-slate-700 text-sm font-semibold
                   hover:bg-slate-50 transition"
        >
            ← Back to Reviews
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
                    Review Information
                </h2>

                <p class="text-sm text-slate-500 mt-1">
                    Update the customer review information below.
                </p>

            </div>


            <!-- FORM -->
            <form
                action="{{ route('admin.reviews.update', $review->id) }}"
                method="POST"
                enctype="multipart/form-data"
                class="p-6 lg:p-8"
            >

                @csrf
                @method('PUT')


                <!-- CUSTOMER NAME -->
                <div class="mb-6">

                    <label
                        for="name"
                        class="block text-sm font-semibold
                               text-slate-700 mb-2"
                    >
                        Customer Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name', $review->name) }}"
                        required
                        class="w-full px-4 py-3 rounded-xl
                               border border-slate-200
                               bg-white text-slate-800
                               focus:outline-none
                               focus:ring-2 focus:ring-slate-300
                               focus:border-slate-400
                               transition"
                    >

                    @error('name')
                        <p class="text-sm text-red-500 mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <!-- REVIEW -->
                <div class="mb-6">

                    <label
                        for="review"
                        class="block text-sm font-semibold
                               text-slate-700 mb-2"
                    >
                        Review
                    </label>

                    <textarea
                        id="review"
                        name="review"
                        rows="6"
                        required
                        class="w-full px-4 py-3 rounded-xl
                               border border-slate-200
                               bg-white text-slate-800
                               focus:outline-none
                               focus:ring-2 focus:ring-slate-300
                               focus:border-slate-400
                               transition resize-y"
                    >{{ old('review', $review->review) }}</textarea>

                    @error('review')
                        <p class="text-sm text-red-500 mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <!-- RATING -->
                <div class="mb-6">

                    <label
                        for="rating"
                        class="block text-sm font-semibold
                               text-slate-700 mb-2"
                    >
                        Rating
                    </label>

                    <select
                        id="rating"
                        name="rating"
                        required
                        class="w-full px-4 py-3 rounded-xl
                               border border-slate-200
                               bg-white text-slate-800
                               focus:outline-none
                               focus:ring-2 focus:ring-slate-300
                               focus:border-slate-400
                               transition"
                    >

                        @for($i = 5; $i >= 1; $i--)

                            <option
                                value="{{ $i }}"
                                {{ old('rating', $review->rating) == $i ? 'selected' : '' }}
                            >
                                {{ str_repeat('★', $i) }} {{ $i }} Stars
                            </option>

                        @endfor

                    </select>

                    @error('rating')
                        <p class="text-sm text-red-500 mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <!-- CURRENT IMAGE -->
                @if($review->image)

                    <div class="mb-6">

                        <label
                            class="block text-sm font-semibold
                                   text-slate-700 mb-3"
                        >
                            Current Image
                        </label>

                        <div
                            class="w-28 h-28 rounded-2xl
                                   overflow-hidden
                                   border border-slate-200
                                   bg-slate-100"
                        >

                            <img
                                src="{{ asset('uploads/reviews/' . $review->image) }}"
                                alt="{{ $review->name }}"
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
                        Leave empty if you don't want to change the current image.
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

                        Update Review

                    </button>


                    <!-- CANCEL -->
                    <a
                        href="{{ route('admin.reviews') }}"
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