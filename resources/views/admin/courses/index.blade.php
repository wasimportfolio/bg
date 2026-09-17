@extends('admin.layouts.app')

@section('title', 'Courses - Bathra Admin')

@section('page-title', 'Courses')

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
                Training Programs
            </h1>

            <p class="text-sm text-slate-500 mt-2">
                Add, edit and manage your training courses.
            </p>

        </div>


        <!-- ADD BUTTON -->
        <a
            href="{{ route('admin.courses.create') }}"
            class="inline-flex items-center justify-center
                   gap-2 px-5 py-3 rounded-xl
                   bg-navy text-white text-sm font-semibold
                   hover:bg-slate-800 transition shadow-sm"
        >

            <span class="text-lg">
                +
            </span>

            Add New Course

        </a>

    </div>


    <!-- SUCCESS -->
    @if(session('success'))

        <div class="mb-6 px-4 py-3 rounded-xl
                    bg-green-50 border border-green-200
                    text-green-700 text-sm">

            <div class="flex items-center gap-2">

                <span class="font-semibold">
                    ✓
                </span>

                {{ session('success') }}

            </div>

        </div>

    @endif


    <!-- COURSES -->
    @if($courses->count() > 0)

        <div class="grid grid-cols-1 md:grid-cols-2
                    xl:grid-cols-3 gap-6">

            @foreach($courses as $course)

                <!-- COURSE CARD -->
                <div
                    class="bg-white rounded-2xl
                           border border-slate-200
                           overflow-hidden
                           hover:shadow-xl
                           transition duration-300"
                >

                    <!-- IMAGE -->
                    <div class="relative h-52
                                bg-slate-100 overflow-hidden">

                        <img
                            src="{{ asset('uploads/courses/' . $course->image) }}"
                            alt="{{ $course->title }}"
                            class="w-full h-full object-cover
                                   hover:scale-105
                                   transition duration-500"
                        >


                        <!-- STATUS -->
                        <div class="absolute top-4 right-4">

                            @if($course->status)

                                <span
                                    class="inline-flex items-center
                                           gap-1 px-3 py-1.5
                                           rounded-full
                                           bg-green-100
                                           text-green-700
                                           text-xs font-semibold"
                                >

                                    <span
                                        class="w-1.5 h-1.5
                                               rounded-full
                                               bg-green-500"
                                    ></span>

                                    Active

                                </span>

                            @else

                                <span
                                    class="inline-flex items-center
                                           gap-1 px-3 py-1.5
                                           rounded-full
                                           bg-slate-200
                                           text-slate-600
                                           text-xs font-semibold"
                                >

                                    <span
                                        class="w-1.5 h-1.5
                                               rounded-full
                                               bg-slate-500"
                                    ></span>

                                    Hidden

                                </span>

                            @endif

                        </div>

                    </div>


                    <!-- CARD CONTENT -->
                    <div class="p-5">

                        <!-- TITLE -->
                        <h3 class="text-lg font-bold text-slate-900">

                            {{ $course->title }}

                        </h3>


                        <!-- DESCRIPTION -->
                        @if($course->description)

                            <p
                                class="text-sm text-slate-500
                                       mt-2 line-clamp-2"
                            >

                                {{ $course->description }}

                            </p>

                        @endif


                        <!-- PRICE -->
                        <div
                            class="mt-5 flex items-center
                                   justify-between"
                        >

                            <div>

                                <p
                                    class="text-xs text-slate-400
                                           uppercase tracking-wide"
                                >
                                    Course Fee
                                </p>

                                <p
                                    class="text-xl font-bold
                                           text-navy mt-1"
                                >
                                    ₹{{ number_format($course->price, 0) }}
                                </p>

                            </div>


                            <div
                                class="w-10 h-10 rounded-xl
                                       bg-slate-100
                                       text-slate-600
                                       flex items-center
                                       justify-center
                                       font-semibold"
                            >
                                ₹
                            </div>

                        </div>


                        <!-- ACTIONS -->
                        <div
                            class="flex gap-2 mt-5 pt-5
                                   border-t border-slate-100"
                        >

                            <!-- EDIT -->
                            <a
                                href="{{ route('admin.courses.edit', $course->id) }}"
                                class="flex-1 inline-flex
                                       items-center justify-center
                                       gap-2 px-4 py-2.5
                                       rounded-xl bg-slate-100
                                       text-slate-700
                                       text-sm font-semibold
                                       hover:bg-slate-200
                                       transition"
                            >

                                <span class="text-base">
                                    ✎
                                </span>

                                Edit

                            </a>


                            <!-- DELETE -->
                            <form
                                action="{{ route('admin.courses.destroy', $course->id) }}"
                                method="POST"
                                class="flex-1"
                                onsubmit="return confirm('Are you sure you want to delete this course?');"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="w-full inline-flex
                                           items-center
                                           justify-center gap-2
                                           px-4 py-2.5 rounded-xl
                                           bg-red-50 text-red-600
                                           text-sm font-semibold
                                           hover:bg-red-100
                                           transition"
                                >

                                    <span class="text-base">
                                        ×
                                    </span>

                                    Delete

                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <!-- EMPTY STATE -->
        <div
            class="bg-white rounded-2xl
                   border border-slate-200
                   p-12 text-center"
        >

            <div
                class="w-16 h-16 mx-auto
                       rounded-2xl bg-slate-100
                       text-slate-500
                       flex items-center justify-center
                       text-2xl"
            >
                ▤
            </div>


            <h3
                class="text-lg font-semibold
                       text-slate-900 mt-5"
            >
                No Courses Found
            </h3>


            <p class="text-sm text-slate-500 mt-2">
                Start by adding your first training program.
            </p>


            <a
                href="{{ route('admin.courses.create') }}"
                class="inline-flex items-center gap-2 mt-5
                       px-5 py-3 rounded-xl
                       bg-navy text-white
                       text-sm font-semibold
                       hover:bg-slate-800 transition"
            >

                <span>
                    +
                </span>

                Add New Course

            </a>

        </div>

    @endif

</div>

@endsection