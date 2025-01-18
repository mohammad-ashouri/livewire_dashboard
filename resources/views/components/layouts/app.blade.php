<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'TALL Stack Admin Dashboard' }}</title>
    @livewireStyles
    @vite(['resources/css/app.css','resources/css/satoshi.css','resources/js/app.js'])
</head>
<body
    class="{{ session('darkMode', false) ? 'dark' : 'light' }}"
>

<!-- ===== Preloader Start ===== -->
@livewire('partials.preloader')
<!-- ===== Preloader End ===== -->

<!-- ===== Page Wrapper Start ===== -->
<div class="flex h-screen overflow-hidden"
>
    <!-- ===== Sidebar Start ===== -->
    @livewire('partials.sidebar')
    <!-- ===== Sidebar End ===== -->

    <!-- ===== Content Area Start ===== -->
    <div
        class="relative flex flex-1 flex-col h-full overflow-y-auto overflow-x-hidden"
    >
        <!-- ===== Header Start ===== -->
        @livewire('partials.header')
        <!-- ===== Header End ===== -->

        <!-- ===== Main Content Start ===== -->
        <main class="bg-whiten dark:bg-boxdark-2 h-[inherit]">
            {{ $slot }}
        </main>
        <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Content Area End ===== -->
</div>
<!-- ===== Page Wrapper End ===== -->
@livewireScripts
</body>
</html>

