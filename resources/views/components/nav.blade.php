<section class="sticky z-60 top-0 w-full text-gray-700 bg-white shadow-sm">
    <div class="container flex flex-col flex-wrap items-center justify-between py-3 mx-auto md:flex-row px-6">
        <div class="relative flex flex-col md:flex-row">
            <a href="/">
                <span class="text-3xl font-semibold text-gray-900 inline-flex items-baseline">
                    <x-logo class="size-8"/>
                    riveConnect
                </span>
            </a>
            <nav class="flex flex-wrap items-center mb-5 md:mb-0 md:pl-8 md:ml-8 md:border-l md:border-gray-200">
                <x-nav-item href="/" :active="request()->is('/')">Learn</x-nav-item>
                <x-nav-item href="/teach" :active="request()->is('     teach')">Teach</x-nav-item>
                <x-nav-item href="/about" :active="request()->is('about')">About</x-nav-item>
            </nav>
        </div>

        <div class="inline-flex items-center ml-5 space-x-6 lg:justify-end">
            <a href="/login"
               class=" font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-gray-900">
                Log in
            </a>
            <a href="/signup"
               class="inline-flex items-center justify-center px-4 py-2  font-medium leading-6 text-white
               whitespace-no-wrap bg-gray-900 border border-transparent rounded-md shadow-sm hover:bg-gray-700
               focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600 transition"
            >
                Sign up
            </a>
        </div>
    </div>
</section>
