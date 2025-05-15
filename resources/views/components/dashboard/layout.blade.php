<div class="w-full">
    <div class="fixed top-0 h-screen grid grid-cols-[auto_1fr] grid-rows-[50px_1fr] bg-gray-50 w-full">
        {{--            Logo--}}
        <div class="border-r border-b border-gray-200 flex items-center justify-center w-full bg-white">
            <x-logo class="size-8"/>
        </div>
        {{--        {{/* Top Bar */}}--}}
        <div class="border-b border-gray-200 bg-white text-gray-800 flex justify-end pr-4">
            <div class="flex items-center gap-4">
                {{--                 Progress --}}
                <div class="w-48 relative" x-data="{ open: false }">
                    <!-- Progress Bar -->
                    <div
                        class="relative h-8 w-full rounded-lg bg-gray-300 overflow-hidden cursor-pointer shadow-sm transition-shadow"
                        @click="open = !open"
                    >
                        <div
                            class="absolute left-0 top-0 h-full rounded-lg bg-rose-600 transition-all duration-500 ease-out"
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
                            <a href="/ds/profile">
                                <div class="flex gap-4 hover:bg-gray-100 rounded-sm p-2 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                         stroke-linejoin="round" class="lucide lucide-settings-icon lucide-settings">
                                        <path
                                            d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                    <span class="text-xs">Profile</span>
                                </div>
                            </a>
                        </div>

                        <div class="py-1 px-1">
                            <div class="flex gap-4 hover:bg-gray-100 rounded-sm p-2 cursor-pointer"
                                 onclick="document.getElementById('logout-form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                     stroke-linejoin="round" class="lucide lucide-log-out-icon lucide-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                                    <polyline points="16 17 21 12 16 7"/>
                                    <line x1="21" x2="9" y1="12" y2="12"/>
                                </svg>
                                <span class="text-xs">Logout</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        {{--        {{/* Left Bar */}}--}}
        <x-dashboard.sidebar :svgWidth="24">
            <x-dashboard.sidebar-nav-item label="Home" active href="/driving_school/dashboard">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-house">
                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/>
                    <path
                        d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                </svg>
            </x-dashboard.sidebar-nav-item>
            <x-dashboard.sidebar-nav-item label="Instructors" href="/driving_school/instructors">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-user-round">
                    <circle cx="12" cy="8" r="5"/>
                    <path d="M20 21a8 8 0 0 0-16 0"/>
                </svg>
            </x-dashboard.sidebar-nav-item>


            {{--                {{/* Spacer */}}--}}
            <div class="grow"></div>

            <form action="/logout" method="post" id="logout-form">
                @csrf
                <button type="submit" class="w-full">
                    <div
                        class="hover:bg-red-50 cursor-pointer transition-all duration-300 rounded-md flex items-center text-red-500 hover:text-red-600 p-1 gap-2">
                        <div class="shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" class="lucide lucide-log-out-icon lucide-log-out">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                                <polyline points="16 17 21 12 16 7"/>
                                <line x1="21" x2="9" y1="12" y2="12"/>
                            </svg>
                        </div>
                        <span class="hidden group-hover:block text-sm leading-0">Logout</span>
                    </div>
                </button>
            </form>
        </x-dashboard.sidebar>
        {{--        {{/* Content */}}--}}

        <div class="overflow-scroll">
            {{ $slot }}
        </div>
    </div>
</div>
