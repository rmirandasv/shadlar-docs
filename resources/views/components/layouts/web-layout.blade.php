<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} - Shadlar</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="min-h-screen bg-background">
    <x-shadlar::navigation-menu class="px-4 py-3">
        <x-slot:start>
            <div class="flex items-center gap-2">
                <span class="text-xl font-bold" style="color: var(--navigation-foreground);">Shadlar</span>
            </div>
        </x-slot:start>

        <x-slot:center>
            <x-shadlar::navigation-menu-list>
                <x-shadlar::navigation-menu-item>
                    <x-shadlar::navigation-menu-link href="/" :active="request()->is('/')">
                        Home
                    </x-shadlar::navigation-menu-link>
                </x-shadlar::navigation-menu-item>

                <x-shadlar::navigation-menu-item>
                    <x-shadlar::navigation-menu-link href="/components" :active="request()->is('components*')">
                        Components
                    </x-shadlar::navigation-menu-link>
                </x-shadlar::navigation-menu-item>
            </x-shadlar::navigation-menu-list>
        </x-slot:center>

        <x-slot:end>
            <div class="flex items-center gap-2">
                <x-shadlar::button variant="ghost" size="sm">Documentation</x-shadlar::button>
                <x-shadlar::button size="sm">Get Started</x-shadlar::button>
                <div class="flex flex-wrap items-center gap-3" x-data="themeToggle()" x-init="init()">
                    <x-shadlar::button variant="ghost" size="sm" @click="toggle()"
                        aria-pressed="isDark" aria-label="Cambiar tema">
                        <span x-show="!isDark" class="flex">
                            <svg viewBox="0 0 24 24" fill="none" class="h-5 w-5">
                                <path
                                    d="M12 5V3m0 18v-2m7-7h2M3 12h2m13.95 6.95L17.54 18.5M6.46 5.5 5.05 4.05m13.9-.1L17.54 5.5M6.46 18.5l-1.41 1.45M12 8.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span x-show="isDark" class="flex">
                            <svg viewBox="0 0 24 24" fill="none" class="h-5 w-5">
                                <path d="M20 12.5A8 8 0 0 1 11.5 4 6.5 6.5 0 1 0 20 12.5Z" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </x-shadlar::button>
                </div>
            </div>
        </x-slot:end>
    </x-shadlar::navigation-menu>

    <main class="container mx-auto px-4 py-16">
        {{ $slot }}
    </main>

    <footer class="border-t mt-24 py-8" style="border-color: var(--color-border);">
        <div class="container mx-auto px-4 text-center">
            <p style="color: var(--color-muted-foreground);">
                Built with Shadlar. A Laravel Blade component library.
            </p>
        </div>
    </footer>

    @livewireScripts
</body>

</html>
