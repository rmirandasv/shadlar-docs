<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ ucfirst($component) }} Component - Shadlar</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="min-h-screen bg-slate-900">
    <x-shadlar::navigation-menu>
        <x-slot:start>
            <div class="flex items-center gap-2">
                <a href="/" class="text-xl font-bold" style="color: var(--navigation-foreground);">Shadlar</a>
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
                <a href="/dashboard">
                    <x-shadlar::button variant="ghost" size="sm">View Examples</x-shadlar::button>
                </a>
            </div>
        </x-slot:end>
    </x-shadlar::navigation-menu>

    <main class="container mx-auto px-4 py-12 max-w-6xl">
        <x-shadlar::breadcrumb class="mb-8">
            <x-shadlar::breadcrumb-list>
                <x-shadlar::breadcrumb-item>
                    <x-shadlar::breadcrumb-link href="/">Home</x-shadlar::breadcrumb-link>
                    <x-shadlar::breadcrumb-separator />
                </x-shadlar::breadcrumb-item>
                <x-shadlar::breadcrumb-item>
                    <x-shadlar::breadcrumb-link href="/components">Components</x-shadlar::breadcrumb-link>
                    <x-shadlar::breadcrumb-separator />
                </x-shadlar::breadcrumb-item>
                <x-shadlar::breadcrumb-item>
                    <x-shadlar::breadcrumb-page>{{ ucfirst(str_replace('-', ' ', $component)) }}</x-shadlar::breadcrumb-page>
                </x-shadlar::breadcrumb-item>
            </x-shadlar::breadcrumb-list>
        </x-shadlar::breadcrumb>

        <div class="mb-12">
            <h1 class="text-4xl font-bold mb-4" style="color: var(--color-foreground);">{{ ucfirst(str_replace('-', ' ', $component)) }}</h1>
            <p class="text-lg" style="color: var(--color-muted-foreground);">
                Component documentation is coming soon. Check out the dashboard page to see examples of this component in action.
            </p>
        </div>

        <x-shadlar::card class="mb-12">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Examples</x-shadlar::card-title>
                <x-shadlar::card-description>
                    Visit the dashboard page to see all available examples and usage patterns for this component.
                </x-shadlar::card-description>
            </x-shadlar::card-header>
            <x-shadlar::card-footer class="flex gap-4">
                <a href="/dashboard">
                    <x-shadlar::button>View Dashboard</x-shadlar::button>
                </a>
                <a href="/components">
                    <x-shadlar::button variant="outlined">Back to Components</x-shadlar::button>
                </a>
            </x-shadlar::card-footer>
        </x-shadlar::card>
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

