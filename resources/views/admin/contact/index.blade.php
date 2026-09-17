@extends('admin.layouts.app')

@section('title', 'Manage Contact Details - Bathra Groups')

@section('page-title', 'Contact Details')

@section('content')

<div class="max-w-3xl mx-auto">

    <!-- Page Header -->
    <div class="mb-8">

        <p class="text-sm text-slate-500">
            Website Management
        </p>

        <h1 class="text-2xl font-bold text-slate-900 mt-1">
            Manage Contact Details
        </h1>

        <p class="text-sm text-slate-500 mt-1">
            Update the contact information and social media links shown on your website.
        </p>

    </div>


    <!-- Success Message -->
    @if(session('success'))

        <div class="mb-6 rounded-2xl border border-green-200 bg-green-50 px-5 py-4">

            <div class="flex items-center gap-3">

                <div class="w-8 h-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center font-bold">
                    ✓
                </div>

                <p class="text-sm font-medium text-green-800">
                    {{ session('success') }}
                </p>

            </div>

        </div>

    @endif


    <!-- Validation Errors -->
    @if($errors->any())

        <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 p-5">

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


    <!-- Contact Form Card -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm">

        <div class="p-6 sm:p-8">

            <form
                action="{{ route('admin.contact.update') }}"
                method="POST"
            >

                @csrf
                @method('PUT')


                <!-- Contact Information -->
                <div class="mb-8">

                    <h3 class="text-base font-semibold text-slate-900">
                        Contact Information
                    </h3>

                    <p class="text-sm text-slate-500 mt-1">
                        These details will appear on your website.
                    </p>

                </div>


                <!-- Phone -->
                <div class="mb-6">

                    <label
                        for="phone"
                        class="block text-sm font-semibold text-slate-900 mb-2"
                    >
                        Phone Number
                    </label>

                    <input
                        type="text"
                        id="phone"
                        name="phone"
                        value="{{ old('phone', $contact->phone ?? '') }}"
                        placeholder="Enter phone number"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition"
                    >

                </div>


                <!-- WhatsApp -->
                <div class="mb-6">

                    <label
                        for="whatsapp"
                        class="block text-sm font-semibold text-slate-900 mb-2"
                    >
                        WhatsApp Number
                    </label>

                    <input
                        type="text"
                        id="whatsapp"
                        name="whatsapp"
                        value="{{ old('whatsapp', $contact->whatsapp ?? '') }}"
                        placeholder="Enter WhatsApp number"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition"
                    >

                    <p class="text-xs text-slate-500 mt-2">
                        Enter the 10-digit WhatsApp number without +91.
                    </p>

                </div>


                <!-- GPay -->
                <div class="mb-8">

                    <label
                        for="gpay"
                        class="block text-sm font-semibold text-slate-900 mb-2"
                    >
                        GPay / UPI
                    </label>

                    <input
                        type="text"
                        id="gpay"
                        name="gpay"
                        value="{{ old('gpay', $contact->gpay ?? '') }}"
                        placeholder="Enter GPay / UPI details"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition"
                    >

                </div>


                <!-- Divider -->
                <div class="border-t border-slate-200 pt-8 mb-8">

                    <h3 class="text-base font-semibold text-slate-900">
                        Social Media
                    </h3>

                    <p class="text-sm text-slate-500 mt-1">
                        Add your social media profile links.
                    </p>

                </div>


                <!-- Facebook -->
                <div class="mb-6">

                    <label
                        for="facebook"
                        class="block text-sm font-semibold text-slate-900 mb-2"
                    >
                        Facebook URL
                    </label>

                    <input
                        type="url"
                        id="facebook"
                        name="facebook"
                        value="{{ old('facebook', $contact->facebook ?? '') }}"
                        placeholder="https://facebook.com/..."
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition"
                    >

                </div>


                <!-- YouTube -->
                <div class="mb-6">

                    <label
                        for="youtube"
                        class="block text-sm font-semibold text-slate-900 mb-2"
                    >
                        YouTube URL
                    </label>

                    <input
                        type="url"
                        id="youtube"
                        name="youtube"
                        value="{{ old('youtube', $contact->youtube ?? '') }}"
                        placeholder="https://youtube.com/..."
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition"
                    >

                </div>


                <!-- Instagram -->
                <div class="mb-8">

                    <label
                        for="instagram"
                        class="block text-sm font-semibold text-slate-900 mb-2"
                    >
                        Instagram URL
                    </label>

                    <input
                        type="url"
                        id="instagram"
                        name="instagram"
                        value="{{ old('instagram', $contact->instagram ?? '') }}"
                        placeholder="https://instagram.com/..."
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition"
                    >

                </div>


                <!-- Buttons -->
                <div class="flex justify-end">

                    <button
                        type="submit"
                        class="inline-flex items-center justify-center px-6 py-3 rounded-xl bg-slate-900 text-white font-semibold hover:bg-slate-800 transition shadow-sm"
                    >
                        Save Contact Details
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection