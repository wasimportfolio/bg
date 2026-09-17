<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login - Bathra Groups</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: '#07111f',
                        gold: '#c9a227'
                    }
                }
            }
        }
    </script>
</head>

<body class="min-h-screen bg-slate-100 flex items-center justify-center px-5">

    <!-- LOGIN CARD -->
    <div class="w-full max-w-md">

        <!-- BRAND -->
        <div class="text-center mb-8">

            <div class="inline-flex items-center justify-center
                        w-16 h-16 rounded-2xl bg-navy text-white
                        text-2xl font-bold shadow-lg">

                B

            </div>

            <h1 class="text-2xl font-bold text-slate-900 mt-5">
                BATHRA
            </h1>

            <p class="text-xs text-slate-500 tracking-[3px] mt-1">
                ADMIN PANEL
            </p>

        </div>


        <!-- LOGIN CARD -->
        <div class="bg-white rounded-2xl border border-slate-200
                    shadow-sm p-6 sm:p-8">

            <div class="mb-6">

                <h2 class="text-xl font-semibold text-slate-900">
                    Welcome Back
                </h2>

                <p class="text-sm text-slate-500 mt-1">
                    Login to manage your Bathra Groups website.
                </p>

            </div>


            <!-- ERRORS -->
            @if ($errors->any())

                <div class="mb-5 rounded-xl bg-red-50 border border-red-100
                            px-4 py-3">

                    @foreach ($errors->all() as $error)

                        <p class="text-sm text-red-600">
                            {{ $error }}
                        </p>

                    @endforeach

                </div>

            @endif


            <!-- LOGIN FORM -->
            <form action="{{ route('admin.login.submit') }}" method="POST">

                @csrf


                <!-- EMAIL -->
                <div class="mb-5">

                    <label for="email"
                           class="block text-sm font-medium text-slate-700 mb-2">

                        Email Address

                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        placeholder="admin@bathragroups.com"
                        class="w-full px-4 py-3 rounded-xl
                               border border-slate-200
                               bg-slate-50
                               text-slate-900
                               placeholder:text-slate-400
                               focus:outline-none
                               focus:ring-2 focus:ring-navy/10
                               focus:border-navy
                               transition"
                    >

                </div>


                <!-- PASSWORD -->
                <div class="mb-6">

                    <label for="password"
                           class="block text-sm font-medium text-slate-700 mb-2">

                        Password

                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        placeholder="Enter your password"
                        class="w-full px-4 py-3 rounded-xl
                               border border-slate-200
                               bg-slate-50
                               text-slate-900
                               placeholder:text-slate-400
                               focus:outline-none
                               focus:ring-2 focus:ring-navy/10
                               focus:border-navy
                               transition"
                    >

                </div>


                <!-- LOGIN BUTTON -->
                <button
                    type="submit"
                    class="w-full px-5 py-3 rounded-xl
                           bg-navy text-white
                           text-sm font-semibold
                           hover:bg-slate-800
                           transition
                           shadow-sm">

                    Login to Admin Panel

                </button>

            </form>

        </div>


        <!-- FOOTER -->
        <p class="text-center text-xs text-slate-400 mt-6">
            © {{ date('Y') }} Bathra Groups. All rights reserved.
        </p>

    </div>

</body>
</html>