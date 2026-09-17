@extends('admin.layouts.app')

@section('title', 'Gallery - Bathra Groups')

@section('page-title', 'Gallery')

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
                Gallery Images
            </h1>

            <p class="text-sm text-slate-500 mt-2">
                Manage the images displayed on your website.
            </p>

        </div>


        <!-- ADD GALLERY -->
        <a
            href="{{ url('/admin/gallery/create') }}"
            class="inline-flex items-center justify-center
                   gap-2 px-5 py-3 rounded-xl
                   bg-navy text-white text-sm font-semibold
                   hover:bg-slate-800 transition shadow-sm"
        >

            <span class="text-lg">
                +
            </span>

            Add Gallery Image

        </a>

    </div>


    <!-- SUCCESS MESSAGE -->
    @if(session('success'))

        <div
            class="mb-6 px-4 py-3 rounded-xl
                   bg-green-50 border border-green-200
                   text-green-700 text-sm"
        >

            <div class="flex items-center gap-2">

                <span class="font-semibold">
                    ✓
                </span>

                {{ session('success') }}

            </div>

        </div>

    @endif


    <!-- GALLERY -->
    @if($galleries->count() > 0)

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">

            @foreach($galleries as $gallery)

                <div
                    class="bg-white rounded-2xl
                           border border-slate-200
                           overflow-hidden
                           hover:shadow-xl
                           transition duration-300"
                >

                    <!-- IMAGE -->
                    <div
                        class="relative aspect-[4/3]
                               bg-slate-100 overflow-hidden"
                    >

                        <img
                            src="{{ asset('uploads/gallery/' . $gallery->image) }}"
                            alt="{{ $gallery->title }}"
                            class="w-full h-full object-cover
                                   hover:scale-105
                                   transition duration-500"
                        >


                        <!-- STATUS -->
                        <div class="absolute top-4 right-4">

                            @if($gallery->status)

                                <span
                                    class="inline-flex items-center gap-1
                                           px-3 py-1.5 rounded-full
                                           text-xs font-semibold
                                           bg-green-100 text-green-700"
                                >

                                    <span
                                        class="w-1.5 h-1.5
                                               rounded-full bg-green-500"
                                    ></span>

                                    Active

                                </span>

                            @else

                                <span
                                    class="inline-flex items-center gap-1
                                           px-3 py-1.5 rounded-full
                                           text-xs font-semibold
                                           bg-slate-200 text-slate-600"
                                >

                                    <span
                                        class="w-1.5 h-1.5
                                               rounded-full bg-slate-500"
                                    ></span>

                                    Hidden

                                </span>

                            @endif

                        </div>

                    </div>


                    <!-- DETAILS -->
                    <div class="p-5">

                        <h3
                            class="text-lg font-bold
                                   text-slate-900"
                        >
                            {{ $gallery->title }}
                        </h3>


                        <!-- ACTIONS -->
                        <div
                            class="flex items-center gap-2
                                   mt-5 pt-5
                                   border-t border-slate-100"
                        >

                            <!-- EDIT -->
                            <a
                                href="{{ route('admin.gallery.edit', $gallery->id) }}"
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
                                action="{{ route('admin.gallery.destroy', $gallery->id) }}"
                                method="POST"
                                class="flex-1"
                                onsubmit="return confirm('Are you sure you want to delete this image?')"
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
                       rounded-2xl bg-slate-100
                       text-slate-500
                       flex items-center justify-center
                       text-2xl"
            >
                ▧
            </div>


            <h3
                class="mt-5 text-lg font-semibold
                       text-slate-900"
            >
                No Gallery Images
            </h3>


            <p class="mt-2 text-sm text-slate-500">
                Add your first gallery image to display it on the website.
            </p>


            <a
                href="{{ url('/admin/gallery/create') }}"
                class="inline-flex items-center gap-2
                       mt-6 px-5 py-3 rounded-xl
                       bg-navy text-white
                       text-sm font-semibold
                       hover:bg-slate-800 transition"
            >

                <span>+</span>

                Add Gallery Image

            </a>

        </div>

    @endif

</div>

@endsection