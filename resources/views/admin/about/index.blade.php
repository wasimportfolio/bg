@extends('admin.layouts.app')

@section('title', 'Manage About - Bathra Groups')

@section('page-title', 'About')

@section('content')

    <!-- Heading -->
    <div class="mb-6">

        <p class="text-sm text-slate-500">
            Content Management
        </p>

        <h1 class="text-2xl font-bold text-slate-900 mt-1">
            Manage About Section
        </h1>

        <p class="text-sm text-slate-500 mt-1">
            Manage the About section displayed on your website.
        </p>

    </div>


    <!-- Success -->
    @if(session('success'))

        <div class="mb-6 px-4 py-3 rounded-xl bg-green-50 border border-green-200 text-green-700">
            {{ session('success') }}
        </div>

    @endif


    @if($about)

        <!-- About Card -->
        <div class="max-w-4xl bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">

            <div class="grid md:grid-cols-2">

                <!-- Image -->
                <div class="bg-slate-100">

                    @if($about->image)

                        <img
                            src="{{ asset('uploads/about/' . $about->image) }}"
                            alt="{{ $about->title }}"
                            class="w-full h-full min-h-[280px] object-cover"
                        >

                    @else

                        <div class="min-h-[280px] flex items-center justify-center text-slate-400">
                            No Image
                        </div>

                    @endif

                </div>


                <!-- Details -->
                <div class="p-6 sm:p-8 flex flex-col justify-center">

                    <span class="inline-flex w-fit px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold mb-4">
                        About Section
                    </span>

                    <h2 class="text-2xl font-bold text-slate-900">
                        {{ $about->title }}
                    </h2>

                    <p class="text-slate-600 mt-4 leading-relaxed">
                        {{ $about->description }}
                    </p>

                    <div class="mt-6">

                        <a
                            href="{{ route('admin.about.edit', $about->id) }}"
                            class="inline-flex items-center justify-center px-5 py-3 rounded-xl bg-slate-900 text-white font-semibold hover:bg-slate-800 transition"
                        >
                            Edit About
                        </a>

                    </div>

                </div>

            </div>

        </div>

    @else

        <!-- Empty State -->
        <div class="max-w-4xl bg-white rounded-2xl border border-slate-200 shadow-sm p-10 text-center">

            <div class="text-4xl mb-4">
                ◉
            </div>

            <h2 class="text-xl font-bold text-slate-900">
                About Section Not Created Yet
            </h2>

            <p class="text-slate-500 mt-2">
                There is currently no About section content.
            </p>

        </div>

    @endif

@endsection