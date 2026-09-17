@extends('admin.layouts.app')

@section('title', 'Manage FAQs - Bathra Groups')

@section('page-title', 'FAQ')

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
                Manage FAQs
            </h1>

            <p class="text-sm text-slate-500 mt-2">
                Manage frequently asked questions displayed on your website.
            </p>

        </div>


        <!-- ADD FAQ -->
        <a
            href="{{ route('admin.faqs.create') }}"
            class="inline-flex items-center justify-center
                   gap-2 px-5 py-3 rounded-xl
                   bg-navy text-white text-sm font-semibold
                   hover:bg-slate-800 transition shadow-sm"
        >

            <span class="text-lg">
                +
            </span>

            Add FAQ

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


    <!-- FAQ LIST -->
    @if($faqs->count())

        <div class="space-y-4">

            @foreach($faqs as $faq)

                <div
                    class="bg-white rounded-2xl
                           border border-slate-200
                           shadow-sm overflow-hidden"
                >

                    <div class="p-5 sm:p-6">

                        <div
                            class="flex flex-col lg:flex-row
                                   lg:items-start
                                   lg:justify-between
                                   gap-5"
                        >

                            <!-- FAQ CONTENT -->
                            <div class="flex gap-4 min-w-0">

                                <div
                                    class="shrink-0 w-11 h-11
                                           rounded-xl bg-slate-100
                                           text-slate-700
                                           flex items-center
                                           justify-center
                                           font-bold text-lg"
                                >
                                    ?
                                </div>


                                <div class="min-w-0">

                                    <h3
                                        class="text-base sm:text-lg
                                               font-semibold
                                               text-slate-900"
                                    >
                                        {{ $faq->question }}
                                    </h3>


                                    <p
                                        class="text-sm text-slate-600
                                               mt-2 leading-6"
                                    >
                                        {{ $faq->answer }}
                                    </p>

                                </div>

                            </div>


                            <!-- ACTIONS -->
                            <div
                                class="flex items-center gap-2
                                       shrink-0"
                            >

                                <!-- EDIT -->
                                <a
                                    href="{{ route('admin.faqs.edit', $faq) }}"
                                    class="inline-flex items-center
                                           justify-center px-4 py-2.5
                                           rounded-xl bg-slate-100
                                           text-slate-700
                                           font-semibold text-sm
                                           hover:bg-slate-200
                                           transition"
                                >
                                    Edit
                                </a>


                                <!-- DELETE -->
                                <form
                                    action="{{ route('admin.faqs.destroy', $faq) }}"
                                    method="POST"
                                    onsubmit="return confirm('Delete this FAQ?')"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="inline-flex items-center
                                               justify-center px-4 py-2.5
                                               rounded-xl bg-red-50
                                               text-red-600
                                               font-semibold text-sm
                                               hover:bg-red-100
                                               transition"
                                    >
                                        Delete
                                    </button>

                                </form>

                            </div>

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
                   shadow-sm"
        >

            <div class="px-6 py-16 text-center">

                <div
                    class="w-16 h-16 mx-auto
                           rounded-2xl bg-slate-100
                           flex items-center justify-center
                           text-2xl text-slate-500"
                >
                    ?
                </div>


                <h3
                    class="mt-5 text-lg font-semibold
                           text-slate-900"
                >
                    No FAQs yet
                </h3>


                <p class="mt-2 text-sm text-slate-500">
                    Add your first FAQ to display it on the website.
                </p>


                <a
                    href="{{ route('admin.faqs.create') }}"
                    class="inline-flex items-center gap-2 mt-6
                           px-5 py-3 rounded-xl
                           bg-navy text-white
                           text-sm font-semibold
                           hover:bg-slate-800 transition"
                >

                    <span>
                        +
                    </span>

                    Add FAQ

                </a>

            </div>

        </div>

    @endif

</div>

@endsection