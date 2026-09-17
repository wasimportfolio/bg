<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Panel - Bathra Groups')</title>

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

<body class="bg-slate-100 text-slate-800">

<div class="min-h-screen flex">

    @include('admin.layouts.sidebar')

    <div class="flex-1 min-w-0">

        @include('admin.layouts.topbar')

        <main class="p-5 lg:p-8">

            @yield('content')

        </main>

    </div>

</div>

@include('admin.layouts.mobile-menu')

</body>

</html>