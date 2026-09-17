@extends('admin.layouts.app')

@section('title', 'Recording Sessions - Bathra Groups')

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
                Recording Sessions
            </h1>

            <p class="text-sm text-slate-500 mt-2">
                Manage your training recording videos.
            </p>

        </div>


        <!-- ADD RECORDING -->
        <a
            href="{{ route('admin.recordings.create') }}"
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

            Add Recording

        </a>

    </div>


    <!-- SUCCESS MESSAGE -->
    @if(session('success'))

        <div
            class="mb-6 rounded-2xl
                   border border-green-200
                   bg-green-50 px-5 py-4"
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


    <!-- RECORDINGS -->
    @if($recordings->count())

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

            @foreach($recordings as $recording)

                <div
                    class="bg-white rounded-2xl
                           border border-slate-200
                           overflow-hidden
                           shadow-sm
                           hover:shadow-xl
                           transition duration-300"
                >

                    <!-- VIDEO -->
                  <div
    class="aspect-video
           bg-slate-900
           overflow-hidden"
>
    @php
        $youtubeUrl = $recording->video;

        if (str_contains($youtubeUrl, 'youtu.be/')) {
            $videoId = explode('?', explode('youtu.be/', $youtubeUrl)[1])[0];
        } elseif (str_contains($youtubeUrl, 'youtube.com/watch?v=')) {
            $videoId = explode('&', explode('v=', $youtubeUrl)[1])[0];
        } else {
            $videoId = '';
        }
    @endphp

    @if($videoId)

        <iframe
            class="w-full h-full"
            src="https://www.youtube.com/embed/{{ $videoId }}"
            title="{{ $recording->title }}"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
        ></iframe>

    @else

        <div class="w-full h-full flex items-center justify-center text-white text-sm">
            Invalid YouTube video
        </div>

    @endif
</div>


                    <!-- DETAILS -->
                    <div class="p-5">

                        <div
                            class="flex items-start
                                   justify-between gap-3"
                        >

                            <h3
                                class="font-semibold text-lg
                                       text-slate-900"
                            >
                                {{ $recording->title }}
                            </h3>


                            <!-- STATUS -->
                            @if($recording->status)

                                <span
                                    class="shrink-0
                                           inline-flex items-center gap-1
                                           px-3 py-1.5
                                           text-xs font-semibold
                                           rounded-full
                                           bg-green-100
                                           text-green-700"
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
                                    class="shrink-0
                                           inline-flex items-center gap-1
                                           px-3 py-1.5
                                           text-xs font-semibold
                                           rounded-full
                                           bg-slate-100
                                           text-slate-500"
                                >

                                    <span
                                        class="w-1.5 h-1.5
                                               rounded-full
                                               bg-slate-400"
                                    ></span>

                                    Inactive

                                </span>

                            @endif

                        </div>


                        <!-- DESCRIPTION -->
                        @if($recording->description)

                            <p
                                class="text-sm text-slate-500
                                       mt-3 leading-6 line-clamp-3"
                            >
                                {{ $recording->description }}
                            </p>

                        @endif


                        <!-- ACTIONS -->
                        <div
                            class="flex items-center gap-2
                                   mt-5 pt-5
                                   border-t border-slate-100"
                        >

                            <!-- EDIT -->
                            <a
                                href="{{ route('admin.recordings.edit', $recording) }}"
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
                                method="POST"
                                action="{{ route('admin.recordings.destroy', $recording) }}"
                                class="flex-1"
                                onsubmit="return confirm('Are you sure you want to delete this recording?')"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="w-full inline-flex
                                           items-center justify-center
                                           px-4 py-2.5 rounded-xl
                                           bg-red-50 text-red-600
                                           text-sm font-semibold
                                           hover:bg-red-100
                                           transition"
                                >
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
                   shadow-sm p-12 text-center"
        >

            <div
                class="w-16 h-16 mx-auto
                       rounded-2xl
                       bg-slate-100
                       text-slate-500
                       flex items-center justify-center
                       text-2xl"
            >
                ▸
            </div>


            <h3
                class="mt-5 text-lg font-semibold
                       text-slate-900"
            >
                No Recording Sessions
            </h3>


            <p class="mt-2 text-sm text-slate-500">
                Add your first recording session.
            </p>


            <a
                href="{{ route('admin.recordings.create') }}"
                class="inline-flex items-center gap-2
                       mt-6 px-5 py-3 rounded-xl
                       bg-navy text-white
                       text-sm font-semibold
                       hover:bg-slate-800 transition"
            >

                <span>+</span>

                Add Recording

            </a>

        </div>

    @endif

</div>

@endsection