@extends('admin.layouts.app')

@section('title', 'Admin Dashboard - Bathra Groups')

@section('page-title', 'Dashboard')

@section('content')

<!-- WELCOME -->
<div class="mb-8">

    <h1 class="text-2xl lg:text-3xl font-bold text-slate-900">
        Welcome back, {{ auth()->user()->name }}
    </h1>

    <p class="text-slate-500 mt-2">
        Here's what's happening with your website today.
    </p>

</div>


<!-- STAT CARDS -->
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5 mb-8">

    <!-- COURSES -->
    <a href="{{ route('admin.courses') }}"
       class="bg-white rounded-2xl p-6 border border-slate-200
              hover:-translate-y-1 hover:shadow-lg transition">

        <div class="flex items-center justify-between">

            <div>

                <p class="text-sm text-slate-500">
                    Courses
                </p>

                <h3 class="text-3xl font-bold text-slate-900 mt-2">
                    Manage
                </h3>

            </div>

            <div class="w-12 h-12 rounded-xl bg-slate-100
                        flex items-center justify-center
                        text-lg text-slate-700">
                ▤
            </div>

        </div>

        <p class="text-xs text-slate-400 mt-5">
            Add or update courses
        </p>

    </a>


    <!-- GALLERY -->
    <a href="{{ route('admin.gallery') }}"
       class="bg-white rounded-2xl p-6 border border-slate-200
              hover:-translate-y-1 hover:shadow-lg transition">

        <div class="flex items-center justify-between">

            <div>

                <p class="text-sm text-slate-500">
                    Gallery
                </p>

                <h3 class="text-3xl font-bold text-slate-900 mt-2">
                    Manage
                </h3>

            </div>

            <div class="w-12 h-12 rounded-xl bg-slate-100
                        flex items-center justify-center
                        text-lg text-slate-700">
                ▧
            </div>

        </div>

        <p class="text-xs text-slate-400 mt-5">
            Manage website images
        </p>

    </a>


    <!-- REVIEWS -->
    <a href="{{ route('admin.reviews') }}"
       class="bg-white rounded-2xl p-6 border border-slate-200
              hover:-translate-y-1 hover:shadow-lg transition">

        <div class="flex items-center justify-between">

            <div>

                <p class="text-sm text-slate-500">
                    Reviews
                </p>

                <h3 class="text-3xl font-bold text-slate-900 mt-2">
                    Manage
                </h3>

            </div>

            <div class="w-12 h-12 rounded-xl bg-slate-100
                        flex items-center justify-center
                        text-lg text-slate-700">
                ★
            </div>

        </div>

        <p class="text-xs text-slate-400 mt-5">
            Manage customer reviews
        </p>

    </a>


    <!-- CONTACT -->
    <a href="{{ route('admin.contact') }}"
       class="bg-white rounded-2xl p-6 border border-slate-200
              hover:-translate-y-1 hover:shadow-lg transition">

        <div class="flex items-center justify-between">

            <div>

                <p class="text-sm text-slate-500">
                    Contact
                </p>

                <h3 class="text-3xl font-bold text-slate-900 mt-2">
                    Manage
                </h3>

            </div>

            <div class="w-12 h-12 rounded-xl bg-slate-100
                        flex items-center justify-center
                        text-lg text-slate-700">
                ☎
            </div>

        </div>

        <p class="text-xs text-slate-400 mt-5">
            Phone & social links
        </p>

    </a>

</div>


<!-- LOWER SECTION -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

    <!-- QUICK ACTIONS -->
    <div class="bg-white rounded-2xl border border-slate-200 p-6">

        <div class="mb-5">

            <h3 class="text-lg font-semibold text-slate-900">
                Quick Actions
            </h3>

            <p class="text-sm text-slate-500 mt-1">
                Quickly manage your website content.
            </p>

        </div>


        <div class="grid grid-cols-2 gap-3">

            <!-- COURSES -->
            <a href="{{ route('admin.courses') }}"
               class="p-4 rounded-xl bg-slate-50
                      hover:bg-slate-100 transition">

                <span class="text-lg text-slate-700">
                    ▤
                </span>

                <p class="text-sm font-medium mt-2">
                    Courses
                </p>

            </a>


            <!-- GALLERY -->
            <a href="{{ route('admin.gallery') }}"
               class="p-4 rounded-xl bg-slate-50
                      hover:bg-slate-100 transition">

                <span class="text-lg text-slate-700">
                    ▧
                </span>

                <p class="text-sm font-medium mt-2">
                    Gallery
                </p>

            </a>


            <!-- RECORDINGS -->
            <a href="{{ route('admin.recordings') }}"
               class="p-4 rounded-xl bg-slate-50
                      hover:bg-slate-100 transition">

                <span class="text-lg text-slate-700">
                    ▸
                </span>

                <p class="text-sm font-medium mt-2">
                    Recordings
                </p>

            </a>


            <!-- REVIEWS -->
            <a href="{{ route('admin.reviews') }}"
               class="p-4 rounded-xl bg-slate-50
                      hover:bg-slate-100 transition">

                <span class="text-lg text-slate-700">
                    ★
                </span>

                <p class="text-sm font-medium mt-2">
                    Reviews
                </p>

            </a>


            <!-- FAQS -->
            <a href="{{ route('admin.faqs') }}"
               class="p-4 rounded-xl bg-slate-50
                      hover:bg-slate-100 transition">

                <span class="text-lg text-slate-700">
                    ?
                </span>

                <p class="text-sm font-medium mt-2">
                    FAQs
                </p>

            </a>

        </div>

    </div>


    <!-- WEBSITE STATUS -->
    <div class="bg-navy rounded-2xl p-6 text-white">

        <div class="flex items-start justify-between">

            <div>

                <p class="text-sm text-slate-400">
                    Website Status
                </p>

                <h3 class="text-2xl font-bold mt-2">
                    Bathra Groups
                </h3>

            </div>

            <div class="w-3 h-3 rounded-full bg-green-400 mt-2"></div>

        </div>


        <p class="text-sm text-slate-400 mt-5">
            Your website is connected to the admin panel.
        </p>


        <a href="{{ url('/') }}"
           target="_blank"
           class="inline-flex items-center gap-2 mt-6 px-5 py-3
                  bg-white text-navy rounded-xl text-sm font-semibold
                  hover:bg-slate-100 transition">

            View Website →

        </a>

    </div>

</div>

@endsection