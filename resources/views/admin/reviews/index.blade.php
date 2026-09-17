@extends('admin.layouts.app')

@section('title', 'Reviews - Bathra Groups')

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
                Manage Reviews
            </h1>

            <p class="text-sm text-slate-500 mt-2">
                Manage customer testimonials displayed on your website.
            </p>

        </div>


        <!-- ADD REVIEW -->
        <a
            href="{{ route('admin.reviews.create') }}"
            class="inline-flex items-center justify-center
                   gap-2 px-5 py-3 rounded-xl
                   bg-navy text-white
                   text-sm font-semibold
                   hover:bg-slate-800
                   transition shadow-sm"
        >

            <span class="text-lg">
                +
            </span>

            Add New Review

        </a>

    </div>


    <!-- SUCCESS MESSAGE -->
    @if(session('success'))

        <div
            class="mb-6 rounded-2xl
                   border border-green-200
                   bg-green-50 p-5"
        >

            <div class="flex items-center gap-3">

                <div
                    class="w-8 h-8 rounded-full
                           bg-green-100 text-green-600
                           flex items-center justify-center
                           font-bold"
                >
                    ✓
                </div>

                <p class="text-sm font-medium text-green-800">
                    {{ session('success') }}
                </p>

            </div>

        </div>

    @endif


    <!-- REVIEWS -->
    @if($reviews->count() > 0)

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

            @foreach($reviews as $review)

                <div
                    class="bg-white rounded-2xl
                           border border-slate-200
                           shadow-sm
                           hover:shadow-xl
                           transition duration-300
                           p-6"
                >

                    <!-- CUSTOMER -->
                    <div class="flex items-center gap-4">

                        @if($review->image)

                            <div
                                class="w-14 h-14 rounded-full
                                       overflow-hidden
                                       border border-slate-200
                                       flex-shrink-0"
                            >

                                <img
                                    src="{{ asset('uploads/reviews/' . $review->image) }}"
                                    alt="{{ $review->name }}"
                                    class="w-full h-full object-cover"
                                >

                            </div>

                        @else

                            <div
                                class="w-14 h-14 rounded-full
                                       bg-navy text-white
                                       flex items-center justify-center
                                       text-lg font-bold
                                       flex-shrink-0"
                            >
                                {{ strtoupper(substr($review->name, 0, 1)) }}
                            </div>

                        @endif


                        <div class="min-w-0">

                            <h2
                                class="font-bold text-slate-900 truncate"
                            >
                                {{ $review->name }}
                            </h2>

                            <div class="text-sm text-slate-500 mt-1">
                                {{ str_repeat('★', $review->rating) }}
                            </div>

                        </div>

                    </div>


                    <!-- REVIEW TEXT -->
                    <div class="mt-5">

                        <p
                            class="text-sm leading-6
                                   text-slate-600"
                        >
                            "{{ $review->review }}"
                        </p>

                    </div>


                    <!-- ACTIONS -->
                    <div
                        class="flex items-center gap-2
                               mt-6 pt-5
                               border-t border-slate-100"
                    >

                        <!-- EDIT -->
                        <a
                            href="{{ route('admin.reviews.edit', $review->id) }}"
                            class="flex-1 inline-flex
                                   items-center justify-center
                                   px-4 py-2.5 rounded-xl
                                   bg-slate-100
                                   text-slate-700
                                   text-sm font-semibold
                                   hover:bg-slate-200
                                   transition"
                        >
                            Edit
                        </a>


                        <!-- DELETE -->
                        <form
                            action="{{ route('admin.reviews.destroy', $review->id) }}"
                            method="POST"
                            class="flex-1"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                onclick="return confirm('Are you sure you want to delete this review?')"
                                class="w-full inline-flex
                                       items-center justify-center
                                       px-4 py-2.5 rounded-xl
                                       bg-red-50
                                       text-red-600
                                       text-sm font-semibold
                                       hover:bg-red-100
                                       transition"
                            >
                                Delete
                            </button>

                        </form>

                    </div>

                </div>

            @endforeach

        </div>


    @else

        <!-- EMPTY STATE -->
        <div
            class="bg-white rounded-2xl
                   border border-slate-200
                   shadow-sm
                   p-12 text-center"
        >

            <div
                class="w-16 h-16 mx-auto
                       rounded-2xl
                       bg-slate-100
                       text-slate-500
                       flex items-center justify-center
                       text-2xl"
            >
                ★
            </div>


            <h3
                class="mt-5 text-lg font-semibold
                       text-slate-900"
            >
                No Reviews Found
            </h3>


            <p class="mt-2 text-sm text-slate-500">
                Add your first customer review to display it on the website.
            </p>


            <a
                href="{{ route('admin.reviews.create') }}"
                class="inline-flex items-center gap-2
                       mt-6 px-5 py-3 rounded-xl
                       bg-navy text-white
                       text-sm font-semibold
                       hover:bg-slate-800
                       transition"
            >

                <span>+</span>

                Add New Review

            </a>

        </div>

    @endif

</div>

@endsection