<!-- SIDEBAR -->
<aside id="sidebar"
    class="fixed lg:static inset-y-0 left-0 z-50 w-64 bg-navy text-white
           transform -translate-x-full lg:translate-x-0 transition-transform duration-300">

    <div class="h-full flex flex-col">

        <!-- LOGO -->
        <div class="px-6 py-5 border-b border-white/10">

            <img src="{{ asset('assets/images/logo.png') }}"
                 alt="Bathra Groups"
                 class="w-full max-w-[170px] h-auto object-contain">

            <p class="text-xs text-slate-400 tracking-[3px] mt-2">
                ADMIN PANEL
            </p>

        </div>

        <!-- MENU -->
        <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">

            <p class="text-[10px] text-slate-500 font-semibold tracking-[2px] px-3 mb-3">
                MAIN
            </p>

            <!-- DASHBOARD -->
            <a href="{{ url('/admin/dashboard') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl
                      hover:bg-white/10 transition">

                <span class="w-5 text-center">▣</span>

                <span class="text-sm">
                    Dashboard
                </span>

            </a>

            <p class="text-[10px] text-slate-500 font-semibold tracking-[2px]
                      px-3 pt-5 mb-3">
                CONTENT
            </p>

            <!-- COURSES -->
            <a href="{{ route('admin.courses') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl
                      hover:bg-white/10 transition">

                <span class="w-5 text-center">▤</span>

                <span class="text-sm">
                    Courses
                </span>

            </a>

            <!-- UPCOMING -->
            <a href="{{ route('admin.upcoming') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl
                      hover:bg-white/10 transition">

                <span class="w-5 text-center">◷</span>

                <span class="text-sm">
                    Upcoming Training
                </span>

            </a>

            <!-- ABOUT -->
            <a href="{{ route('admin.about') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl
                      hover:bg-white/10 transition">

                <span class="w-5 text-center">ⓘ</span>

                <span class="text-sm">
                    About
                </span>

            </a>

            <!-- GALLERY -->
            <a href="{{ route('admin.gallery') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl
                      hover:bg-white/10 transition">

                <span class="w-5 text-center">▧</span>

                <span class="text-sm">
                    Gallery
                </span>

            </a>

            <!-- RECORDING SESSIONS -->
            <a href="{{ route('admin.recordings') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl
                      hover:bg-white/10 transition">

                <span class="w-5 text-center">▸</span>

                <span class="text-sm">
                    Recording Sessions
                </span>

            </a>

            <!-- REVIEWS -->
            <a href="{{ route('admin.reviews') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl
                      hover:bg-white/10 transition">

                <span class="w-5 text-center">★</span>

                <span class="text-sm">
                    Reviews
                </span>

            </a>

            <!-- BENEFITS -->
            <a href="{{ route('admin.benefits') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl
                      hover:bg-white/10 transition">

                <span class="w-5 text-center">✦</span>

                <span class="text-sm">
                    Benefits
                </span>

            </a>

            <!-- FAQS -->
            <a href="{{ route('admin.faqs') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl
                      hover:bg-white/10 transition">

                <span class="w-5 text-center">?</span>

                <span class="text-sm">
                    FAQs
                </span>

            </a>

            <p class="text-[10px] text-slate-500 font-semibold tracking-[2px]
                      px-3 pt-5 mb-3">
                WEBSITE
            </p>

            <!-- CONTACT -->
            <a href="{{ route('admin.contact') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl
                      hover:bg-white/10 transition">

                <span class="w-5 text-center">☎</span>

                <span class="text-sm">
                    Contact Details
                </span>

            </a>

        </nav>

        <!-- LOGOUT -->
        <div class="p-4 border-t border-white/10">

            <form action="{{ route('admin.logout') }}" method="POST">

                @csrf

                <button type="submit"
                    class="w-full flex items-center gap-3 px-4 py-3 rounded-xl
                           text-slate-300 hover:bg-red-500/10
                           hover:text-red-400 transition">

                    <span class="w-5 text-center">↪</span>

                    <span class="text-sm">
                        Logout
                    </span>

                </button>

            </form>

        </div>

    </div>

</aside>