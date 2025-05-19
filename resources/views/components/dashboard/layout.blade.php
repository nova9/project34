<div class="w-full">
    <div class="h-screen grid grid-cols-[auto_1fr] grid-rows-[50px_1fr] bg-gray-50 w-full">
        {{--            Logo--}}
        <div class="border-r border-b border-gray-200 flex items-center justify-center w-full bg-white">
            <x-logo class="size-8"/>
        </div>
        {{--        {{/* Top Bar */}}--}}
        <div class="border-b border-gray-200 bg-white text-gray-800 flex justify-between px-4">
            <div class="flex items-center">
                <livewire:team-select />
            </div>
            <div class="flex items-center gap-4">
                {{--                 Progress --}}
                <div class="w-48 relative" x-data="{ open: false }">
                    <!-- Progress Bar -->
                    <div
                        class="relative h-8 w-full rounded-lg bg-gray-300 overflow-hidden cursor-pointer shadow-sm transition-shadow"
                        @click="open = !open"
                    >
                        <div
                            class="absolute left-0 top-0 h-full rounded-lg bg-rose-700 transition-all duration-500 ease-out"
                            style="width: 75%;"
                        ></div>
                        <span
                            class="absolute inset-0 flex items-center justify-center text-sm font-medium text-white drop-shadow-md">
                                75% Complete
                            </span>
                    </div>

                    <!-- Pop-up Menu -->
                    <div
                        x-show="open"
                        x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        class="absolute z-10 mt-2 w-64 right-0 rounded-lg bg-white shadow-md border border-gray-100"
                        @click.outside="open = false"
                    >
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-900">Profile Completion</h3>
                            <p class="text-sm text-gray-500 mt-1">Complete these steps to make your profile visible
                                to students.</p>
                            <ul class="mt-4 space-y-3">
                                <li class="flex items-center space-x-2">
                                    <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span class="text-sm text-gray-700">Basic Information</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span class="text-sm text-gray-700">Instructor Details</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span class="text-sm text-gray-700">Vehicle Information</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                    <span class="text-sm text-gray-700">Upload Certifications</span>
                                </li>
                            </ul>
                            <button
                                class="mt-4 w-full bg-gray-900 text-white text-sm font-medium py-2 rounded-md hover:bg-gray-700 transition-colors"
                                @click="open = false"
                            >
                                Continue
                            </button>
                        </div>
                    </div>
                </div>

                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-inbox-icon lucide-inbox">
                        <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/>
                        <path
                            d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/>
                    </svg>
                </div>

                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-circle-help-icon lucide-circle-help">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                        <path d="M12 17h.01"/>
                    </svg>
                </div>

                {{--                {{/* Profile Icon */}}--}}
                <div x-data="{ open: false }" class="relative">
                    <img src="/assets/images/default_profile.svg" alt="profile" class="size-10 cursor-pointer"
                         @click="open = !open"/>

                    <div
                        x-show="open"
                        x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        class="absolute right-0 z-10 w-64 mt-2 rounded-lg bg-white shadow-md border border-gray-100"
                        @click.outside="open = false"
                    >
                        <div class="border-b border-gray-200 pb-2 px-2">
                            {{ auth()->user()->name }}
                            <div class="text-xs">
                                {{ auth()->user()->email }}
                            </div>
                        </div>

                        <div class="border-b border-gray-200 py-1 px-1">
                            <a href="/profile">
                                <div class="flex gap-4 hover:bg-gray-100 rounded-sm p-2 cursor-pointer">
                                    <i data-lucide="circle-user" class="size-4"></i>
                                    <span class="text-xs">Profile</span>
                                </div>
                            </a>
                        </div>

                        <div class="py-1 px-1">
                            <div class="flex gap-4 hover:bg-gray-100 rounded-sm p-2 cursor-pointer"
                                 onclick="document.getElementById('logout-form').submit();">
                                <i data-lucide="log-out" class="size-4"></i>
                                <span class="text-xs">Logout</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        {{--        {{/* Left Bar */}}--}}
        <x-dashboard.navbar :svgWidth="40">
            <x-dashboard.navbar-item
                label="Dashboard"
                href="/driving_school/dashboard"
                :active="request()->is('driving_school/dashboard*')"
                icon="layout-dashboard"
            >
            </x-dashboard.navbar-item>
            <x-dashboard.navbar-item
                label="Instructors"
                href="/driving_school/instructors"
                :active="request()->is('driving_school/instructors*')"
                icon="user-round"
            />
            <x-dashboard.navbar-item
                label="Packages"
                href="/driving_school/packages"
                :active="request()->is('driving_school/packages*')"
                icon="package"
            />
            <x-dashboard.navbar-item
                label="Students"
                href="/driving_school/students"
                :active="request()->is('driving_school/students*')"
                icon="graduation-cap"
            />
            <x-dashboard.navbar-item
                label="Lessons"
                href="/driving_school/lessons"
                :active="request()->is('driving_school/lessons*')"
                icon="car-front"
            />


            {{--                {{/* Spacer */}}--}}
            <div class="grow"></div>

            <x-dashboard.navbar-item
                label="Settings"
                href="/driving_school/settings"
                :active="request()->is('driving_school/settings*')"
                icon="cog"
            />

            <form action="/logout" method="post" id="logout-form">
                @csrf
                <button type="submit" class="w-full">
                    <x-dashboard.navbar-item
                        label="Logout"
                        href="#"
                        icon="log-out"
                        variant="danger"
                    />
                </button>
            </form>
        </x-dashboard.navbar>
        {{--        {{/* Content */}}--}}

        <div class="overflow-scroll">
            @if(isset($sidebar))
                <div class="flex h-full overflow-hidden">
                    <div class="border-r border-gray-200 min-w-48 bg-white">
                        {{ $sidebar }}
                    </div>
                    <div class="grow overflow-scroll">
                        {{ $slot }}

                    </div>
                </div>
            @else
                {{ $slot }}
            @endif
        </div>
    </div>
</div>
