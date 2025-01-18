<div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10 bg-whiten dark:bg-boxdark-2 h-[inherit]">
    <!-- Breadcrumb Start -->
    <div
        class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
    >
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Tables
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="index.html">Dashboard /</a>
                </li>
                <li class="font-medium text-primary">Tables</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->

    <!-- ====== Table Section Start -->
    <div class="flex flex-col gap-10 dark:bg-boxdark-2">
        <!-- ====== Table One Start -->
        @livewire('partials.table')
        <!-- ====== Table One End -->
    </div>
    <!-- ====== Table Section End -->
</div>
