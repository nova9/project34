<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="icon" href="{{ asset('assets/images/logo.svg') }}" type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <title>{{ $title ?? $value = env('APP_NAME', 'project34') }}</title>
</head>

<body class="font-['Plus_Jakarta_Sans']">

@if (session('success'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 6000)"
        x-show="show"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-4 scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 -translate-y-4 scale-95"
        class="group z-50 fixed items-center top-10 left-1/2 -translate-x-1/2 z-50 flex shadow-sm px-3 py-3 bg-white rounded border border-gray-50 gap-2"
    >
        <div class="text-green-500 size-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-icon lucide-circle-check"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
        </div>
        <span class="text-sm text-gray-600">{{ session('success') }}</span>
        <button
            @click="show = false"
            class="ml-16 text-gray-400 hover:text-gray-500 hover:bg-gray-50 rounded-full size-6 p-1.5 invisible group-hover:visible flex text-center"
        >
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x-icon lucide-x"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>
    </div>
@endif


{{ $slot }}

@livewireScripts
</body>
</html>
