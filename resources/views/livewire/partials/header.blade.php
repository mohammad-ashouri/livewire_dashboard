<header class="sticky top-0 z-999 flex w-full bg-white drop-shadow-1 dark:bg-boxdark dark:drop-shadow-none">
    <div class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 md:px-6 2xl:px-11">
        <!-- Hamburger Toggle Button -->
        <div class="flex items-center gap-2 sm:gap-4 lg:hidden">
            <button
                class="z-99999 block rounded-sm border border-stroke bg-white p-1.5 shadow-sm dark:border-strokedark dark:bg-boxdark lg:hidden"
                wire:click="toggleSidebar"
            >
                <span class="relative block h-5.5 w-5.5 cursor-pointer">
                    <span class="du-block absolute right-0 h-full w-full">
                    <!-- Span 1 -->
                    <span
                        class="relative left-0 top-0 my-1 block h-0.5 rounded-sm bg-black delay-[0] duration-200 ease-in-out dark:bg-white {{ $sidebarToggle ? '!w-full delay-300' : 'w-0' }}"
                    ></span>
                        <!-- Span 2 -->
                    <span
                        class="relative left-0 top-0 my-1 block h-0.5 rounded-sm bg-black delay-150 duration-200 ease-in-out dark:bg-white {{ $sidebarToggle ? '!w-full delay-400' : 'w-0' }}"
                    ></span>
                        <!-- Span 3 -->
                    <span
                        class="relative left-0 top-0 my-1 block h-0.5 rounded-sm bg-black delay-200 duration-200 ease-in-out dark:bg-white {{ $sidebarToggle ? '!w-full delay-500' : 'w-0' }}"
                    ></span>
                </span>
                <span class="du-block absolute right-0 h-full w-full rotate-45">
                    <!-- Span 4 -->
                    <span
                        class="absolute left-2.5 top-0 block h-full w-0.5 rounded-sm bg-black delay-300 duration-200 ease-in-out dark:bg-white {{ $sidebarToggle ? '!h-0 delay-[0]' : 'h-full' }}"
                    ></span>
                    <!-- Span 5 -->
                    <span
                        class="absolute left-0 top-2.5 block h-0.5 w-full rounded-sm bg-black delay-400 duration-200 ease-in-out dark:bg-white {{ $sidebarToggle ? '!h-0 delay-200' : 'h-0.5' }}"
                    ></span>
                </span>
                </span>
            </button>
            <a class="block flex-shrink-0 lg:hidden" href="index.html">
                <img src="{{ resource_path('images/defaults/logo/logo-icon.svg') }}" alt="Logo"/>
            </a>
        </div>

        <!-- Search Form -->
        <div class="hidden sm:block">
            <form method="POST">
                <div class="relative">
                    <button class="absolute left-0 top-1/2 -translate-y-1/2">
                        <svg
                            class="fill-body hover:fill-primary dark:fill-bodydark dark:hover:fill-primary"
                            width="20"
                            height="20"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M9.16666 3.33332C5.945 3.33332 3.33332 5.945 3.33332 9.16666C3.33332 12.3883 5.945 15 9.16666 15C12.3883 15 15 12.3883 15 9.16666C15 5.945 12.3883 3.33332 9.16666 3.33332ZM1.66666 9.16666C1.66666 5.02452 5.02452 1.66666 9.16666 1.66666C13.3088 1.66666 16.6667 5.02452 16.6667 9.16666C16.6667 13.3088 13.3088 16.6667 9.16666 16.6667C5.02452 16.6667 1.66666 13.3088 1.66666 9.16666Z"
                                fill=""
                            />
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M13.2857 13.2857C13.6112 12.9603 14.1388 12.9603 14.4642 13.2857L18.0892 16.9107C18.4147 17.2362 18.4147 17.7638 18.0892 18.0892C17.7638 18.4147 17.2362 18.4147 16.9107 18.0892L13.2857 14.4642C12.9603 14.1388 12.9603 13.6112 13.2857 13.2857Z"
                                fill=""
                            />
                        </svg>
                    </button>
                    <input
                        type="text"
                        placeholder="Type to search..."
                        class="w-full bg-transparent pl-9 pr-4 focus:outline-none xl:w-125"
                    />
                </div>
            </form>
        </div>

        <!-- Dark Mode Toggler -->
        <div class="flex items-center gap-3 2xsm:gap-7">
            <ul class="flex items-center gap-2 2xsm:gap-4">
                <li>
                    <label
                        class="relative m-0 block h-7.5 w-14 rounded-full {{ $darkMode ? 'bg-primary' : 'bg-stroke' }}"
                    >
                        <input
                            type="checkbox"
                            wire:change="toggleDarkMode"
                            class="absolute top-0 z-50 m-0 h-full w-full cursor-pointer opacity-0"
                        />
                        <span
                            class="absolute left-1 top-1/2 flex h-6 w-6 -translate-y-1/2 translate-x-0 items-center justify-center rounded-full bg-white shadow-switcher duration-75 ease-linear {{ $darkMode ? '!right-1 !translate-x-full' : '' }}"
                        >
                            <span class="{{ $darkMode ? 'hidden' : 'block' }}">
                                <svg
                                    class="h-4 w-4 text-gray-800"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                                    ></path>
                                </svg>
                            </span>

                            <span class="{{ $darkMode ? 'block' : 'hidden' }}">
                                <svg
                                    class="h-4 w-4 text-yellow-500"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"
                                    ></path>
                                </svg>
                            </span>
                        </span>
                    </label>
                </li>

            </ul>

            <!-- User Area -->
            <div class="relative">
                <a
                    class="flex items-center gap-4"
                    href="#"
                    wire:click.prevent="toggleUserDropdown"
                >
                    <span class="hidden text-right lg:block">
                        <span class="block text-sm font-medium text-black dark:text-white">Thomas Anree</span>
                        <span class="block text-xs font-medium">UX Designer</span>
                    </span>
                    <span class="h-12 w-12 rounded-full">
                        <img src="{{ resource_path('images/defaults/user/user-01.png') }}" alt="User"/>
                    </span>
                    <svg
                        class="hidden fill-current sm:block {{ $userDropdownOpen ? 'rotate-180' : '' }}"
                        width="12"
                        height="8"
                        viewBox="0 0 12 8"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M0.410765 0.910734C0.736202 0.585297 1.26384 0.585297 1.58928 0.910734L6.00002 5.32148L10.4108 0.910734C10.7362 0.585297 11.2638 0.585297 11.5893 0.910734C11.9147 1.23617 11.9147 1.76381 11.5893 2.08924L6.58928 7.08924C6.26384 7.41468 5.7362 7.41468 5.41077 7.08924L0.410765 2.08924C0.0853277 1.76381 0.0853277 1.23617 0.410765 0.910734Z"
                            fill=""
                        />
                    </svg>
                </a>

                @if($userDropdownOpen)
                    <div
                        class="absolute right-0 mt-4 flex w-62.5 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <ul class="flex flex-col gap-5 border-b border-stroke px-6 py-7.5 dark:border-strokedark">
                            <!-- محتوای منوی کاربر -->
                        </ul>
                        <button
                            class="flex items-center gap-3.5 px-6 py-4 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                            <!-- آیکون خروج -->
                            Log Out
                        </button>
                    </div>
                @endif
            </div>
        </div>
    </div>

</header>
