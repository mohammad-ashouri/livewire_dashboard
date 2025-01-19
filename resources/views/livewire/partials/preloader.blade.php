<div
    x-data="{ loaded: true }"
    x-show="loaded"
    x-init="window.addEventListener('DOMContentLoaded', () => {
        setTimeout(() => loaded = false, 2000);
    })"
    class="fixed left-0 top-0 z-50 flex h-screen w-screen items-center justify-center bg-gradient-to-br from-gray-800 via-gray-900 to-black"
>
    <div class="relative flex items-center justify-center h-24 w-24">
        <span class="loading loading-infinity loading-lg"></span>
    </div>
</div>


