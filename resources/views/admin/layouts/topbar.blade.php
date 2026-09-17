<header class="h-20 bg-white border-b border-slate-200
               flex items-center justify-between px-5 lg:px-8">

    <div class="flex items-center gap-4">

        <button id="menuBtn"
            class="lg:hidden w-10 h-10 rounded-xl bg-slate-100
                   flex items-center justify-center">
            ☰
        </button>

        <div>

            <h2 class="text-lg font-semibold text-slate-900">
                @yield('page-title', 'Admin Panel')
            </h2>

            <p class="text-xs text-slate-500 hidden sm:block">
                Manage your Bathra Groups website
            </p>

        </div>

    </div>

    <div class="flex items-center gap-3">

        <div class="text-right hidden sm:block">

            <p class="text-sm font-semibold text-slate-900">
                {{ auth()->user()->name }}
            </p>

            <p class="text-xs text-slate-500">
                Administrator
            </p>

        </div>

        <div class="w-10 h-10 rounded-full bg-navy text-white
                    flex items-center justify-center font-semibold">

            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

        </div>

    </div>

</header>