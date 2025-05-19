<x-layouts.app>
    <div class="flex w-screen h-screen">
        <div class="relative top-0 bottom-0 right-0 flex-shrink-0 hidden w-1/3 overflow-hidden bg-cover lg:block">
            <a href="#_" class="absolute bottom-0 left-0  text-white z-30 m-4">
                <div class="flex items-center border-2 rounded-md border-white px-1 py-0.5">
                    <div class="-mt-0.5">six</div>
                    <div class="size-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-cog-icon lucide-cog">
                            <path d="M12 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16Z"/>
                            <path d="M12 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                            <path d="M12 2v2"/>
                            <path d="M12 22v-2"/>
                            <path d="m17 20.66-1-1.73"/>
                            <path d="M11 10.27 7 3.34"/>
                            <path d="m20.66 17-1.73-1"/>
                            <path d="m3.34 7 1.73 1"/>
                            <path d="M14 12h8"/>
                            <path d="M2 12h2"/>
                            <path d="m20.66 7-1.73 1"/>
                            <path d="m3.34 17 1.73-1"/>
                            <path d="m17 3.34-1 1.73"/>
                            <path d="m11 13.73-4 6.93"/>
                        </svg>
                    </div>
                </div>

            </a>
            <div class="absolute inset-0 z-20 w-full h-full opacity-70 bg-gradient-to-t from-black"></div>
            <img src="/assets/images/watercolor-car-painting-illustration.webp"
                 class="z-10 object-cover w-full h-full"/>
        </div>
        <div class="relative flex flex-wrap items-center w-full h-full px-8">
            <div class="relative w-full max-w-sm mx-auto lg:mb-0">
                <a href="/"
                   class="-translate-y-4 inline-flex items-center text-sm font-medium text-gray-600 hover:text-gray-800 transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="mr-1">
                        <path d="M15 18l-6-6 6-6"/>
                    </svg>
                    Go Back
                </a>
                <div class="relative text-center">
                    <span class="text-2xl font-semibold text-gray-900 inline-flex items-baseline mb-6">
                        <x-logo class="size-6"/>
                        riveConnect
                    </span>

                    <div class="flex flex-col mb-6 space-y-2">
                        <h1 class="text-2xl font-semibold tracking-tight">Create an account</h1>
                        <p class="text-sm text-neutral-500">Enter your details below to create your account</p>
                    </div>

                    {{--                    Form --}}
                    <form class="space-y-2" method="post">
                        @csrf
                        <div class="w-full">
                            <input
                                type="text"
                                placeholder="Name"
                                name="name"
                                value="{{ old('name') }}"
                                class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"
                            />
                            @error('name')
                            <div class="flex mt-1">
                                <p class="text-rose-600 text-xs">{{ $message }}</p>
                            </div>
                            @enderror
                        </div>
                        <div class="w-full">
                            <input
                                type="email"
                                placeholder="Email"
                                name="email"
                                value="{{ old('email') }}"
                                class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"
                            />
                            @error('email')
                            <div class="flex mt-1">
                                <p class="text-rose-600 text-xs">{{ $message }}</p>
                            </div>
                            @enderror
                        </div>
                        <div class="w-full">
                            <input
                                type="password"
                                placeholder="Password"
                                name="password"
                                class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"
                            />
                            @error('password')
                            <div class="flex mt-1">
                                <p class="text-rose-600 text-xs">{{ $message }}</p>
                            </div>
                            @enderror
                        </div>

                        <x-tabs :tabs="[
                            ['title' => 'Driving School'],
                            ['title' => 'Student'],
                        ]">
                            <x-tabs.tab>
                                <div class="w-full">
                                    <input
                                        type="text"
                                        placeholder="Driving school name"
                                        name="driving_school_name"
                                        class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"
                                    />
                                    @error('driving_school_name')
                                    <div class="flex mt-1">
                                        <p class="text-rose-600 text-xs">{{ $message }}</p>
                                    </div>
                                    @enderror
                                </div>
                            </x-tabs.tab>
                            <x-tabs.tab>
                            </x-tabs.tab>
                        </x-tabs>

                        <button type="submit"
                                class="inline-flex items-center justify-center w-full h-10 px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded-md bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">
                            Sign up
                        </button>
                    </form>
                </div>
                <p class="mt-4 text-sm text-center text-neutral-500">Already have an account?
                    <a href="/login" class="relative font-medium text-gray-900 group">
                        <span>Log in</span><span
                            class="absolute bottom-0 left-0 w-0 group-hover:w-full ease-out duration-300 h-0.5 bg-gray-900"></span>
                    </a>
                </p>
                <p class="px-8 mt-3 text-xs text-center text-neutral-500">By continuing, you agree to our <a
                        class="underline underline-offset-4 hover:text-primary" href="/terms">Terms</a> and <a
                        class="underline underline-offset-4 hover:text-primary" href="/privacy">Policy</a>.</p>
            </div>
        </div>
    </div>
</x-layouts.app>
