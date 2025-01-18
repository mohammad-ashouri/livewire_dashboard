<div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10 bg-whiten dark:bg-boxdark-2 h-[inherit]">
    <!-- Breadcrumb Start -->
    <div
        class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
    >
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            {{ $mainHeaderTitle ?? 'Dashboard' }}
        </h2>

        @livewire('partials.breadcrumb')
    </div>
    <!-- Breadcrumb End -->

    <!-- ====== Table Section Start -->
    <div class="flex flex-col gap-10 dark:bg-boxdark-2">
        @switch($currentPage)
            @case('Table')
                @livewire('pages.Table')
                @break
            @default
                @livewire('pages.Dashboard')
        @endswitch
    </div>
    <!-- ====== Table Section End -->
</div>
