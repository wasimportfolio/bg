@extends('admin.layouts.app')

@section('title', 'Upcoming Training - Bathra Groups')

@section('page-title', 'Upcoming Training')

@section('content')

<div>

    <!-- PAGE HEADER -->
    <div class="mb-8">

        <p class="text-sm text-slate-500 mb-1">
            Content Management
        </p>

        <h1 class="text-2xl lg:text-3xl font-bold text-slate-900">
            Manage Upcoming Section
        </h1>

        <p class="text-sm text-slate-500 mt-2">
            Manage the upcoming training displayed on your website.
        </p>

    </div>


    <!-- SUCCESS MESSAGE -->
    @if(session('success'))

        <div
            class="mb-6 px-5 py-4 rounded-2xl
                   bg-green-50 border border-green-200
                   text-green-700 text-sm"
        >
            {{ session('success') }}
        </div>

    @endif


    @if($upcoming)

        <!-- UPCOMING CARD -->
        <div
            class="max-w-4xl bg-white
                   rounded-2xl border border-slate-200
                   shadow-sm overflow-hidden"
        >

            <div class="grid md:grid-cols-2">

                <!-- IMAGE -->
                <div class="bg-slate-100">

                    @if($upcoming->image)

                        <img
                            src="{{ asset('uploads/upcoming/' . $upcoming->image) }}"
                            alt="{{ $upcoming->title }}"
                            class="w-full h-full min-h-[280px]
                                   object-cover"
                        >

                    @else

                        <div
                            class="min-h-[280px]
                                   flex items-center justify-center
                                   text-slate-400"
                        >
                            No Image
                        </div>

                    @endif

                </div>


                <!-- DETAILS -->
                <div
                    class="p-6 sm:p-8
                           flex flex-col justify-center"
                >

                    <!-- LABEL -->
                    <span
                        class="inline-flex w-fit
                               px-3 py-1 rounded-full
                               bg-green-100 text-green-700
                               text-xs font-semibold mb-4"
                    >
                        Upcoming Training
                    </span>


                    <!-- TITLE -->
                    <h2
                        class="text-2xl font-bold
                               text-slate-900"
                    >
                        {{ $upcoming->title }}
                    </h2>


                    <!-- DESCRIPTION -->
                    <p
                        class="text-slate-600 mt-4
                               leading-relaxed"
                    >
                        {{ $upcoming->description }}
                    </p>


                    <!-- PRICE -->
                    @if(isset($upcoming->price))

                        <div class="mt-5">

                            <p class="text-sm text-slate-500">
                                Training Price
                            </p>

                            <p
                                class="text-2xl font-bold
                                       text-slate-900 mt-1"
                            >
                                ₹{{ number_format($upcoming->price, 0) }}
                            </p>

                        </div>

                    @endif


                    <!-- EDIT BUTTON -->
                    <div class="mt-6">

                        <a
                            href="{{ route('admin.upcoming.edit', $upcoming->id) }}"
                            class="inline-flex items-center
                                   justify-center gap-2
                                   px-6 py-3 rounded-xl
                                   bg-navy text-white
                                   text-sm font-semibold
                                   hover:bg-slate-800
                                   transition shadow-sm"
                        >
                            Edit Upcoming Training
                        </a>

                    </div>

                </div>

            </div>

        </div>


    @else

        <!-- EMPTY STATE -->
        <div
            class="max-w-4xl bg-white
                   rounded-2xl border border-slate-200
                   shadow-sm p-10 text-center"
        >

            <div class="text-4xl mb-4">
                ◷
            </div>

            <h2
                class="text-xl font-bold
                       text-slate-900"
            >
                Upcoming Section Not Created Yet
            </h2>

            <p class="text-slate-500 mt-2">
                There is currently no upcoming training content.
            </p>

        </div>

    @endif

</div>

@endsection