<x-layouts.web-layout title="Navigation Menu">
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
                    <x-shadlar::breadcrumb-page>Navigation Menu</x-shadlar::breadcrumb-page>
                </x-shadlar::breadcrumb-item>
            </x-shadlar::breadcrumb-list>
        </x-shadlar::breadcrumb>

        <div class="mb-12">
            <h1 class="text-4xl font-bold mb-4" style="color: var(--color-foreground);">Navigation Menu</h1>
            <p class="text-lg" style="color: var(--color-muted-foreground);">
                A horizontal navigation bar with slots for start, center, and end content areas.
            </p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6" style="color: var(--color-foreground);">Examples</h2>
            
            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Basic Navigation Menu</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <x-shadlar::navigation-menu>
                        <x-slot:start>
                            <div class="flex items-center gap-2">
                                <span class="text-lg font-bold" style="color: var(--navigation-foreground);">Shadlar</span>
                            </div>
                        </x-slot:start>
                        <x-slot:center>
                            <x-shadlar::navigation-menu-list>
                                <x-shadlar::navigation-menu-item>
                                    <x-shadlar::navigation-menu-link href="/">Home</x-shadlar::navigation-menu-link>
                                </x-shadlar::navigation-menu-item>
                                <x-shadlar::navigation-menu-item>
                                    <x-shadlar::navigation-menu-link href="/components">Components</x-shadlar::navigation-menu-link>
                                </x-shadlar::navigation-menu-item>
                                <x-shadlar::navigation-menu-item>
                                    <x-shadlar::navigation-menu-link href="/docs">Docs</x-shadlar::navigation-menu-link>
                                </x-shadlar::navigation-menu-item>
                            </x-shadlar::navigation-menu-list>
                        </x-slot:center>
                        <x-slot:end>
                            <div class="flex items-center gap-2">
                                <x-shadlar::button variant="ghost" size="sm">Sign In</x-shadlar::button>
                            </div>
                        </x-slot:end>
                    </x-shadlar::navigation-menu>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Navigation Menu with Logo and Actions</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <x-shadlar::navigation-menu>
                        <x-slot:start>
                            <div class="flex items-center gap-2">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                                <span class="text-lg font-bold" style="color: var(--navigation-foreground);">Acme Inc</span>
                            </div>
                        </x-slot:start>
                        <x-slot:center>
                            <x-shadlar::navigation-menu-list>
                                <x-shadlar::navigation-menu-item>
                                    <x-shadlar::navigation-menu-link href="/products">Products</x-shadlar::navigation-menu-link>
                                </x-shadlar::navigation-menu-item>
                                <x-shadlar::navigation-menu-item>
                                    <x-shadlar::navigation-menu-link href="/pricing">Pricing</x-shadlar::navigation-menu-link>
                                </x-shadlar::navigation-menu-item>
                                <x-shadlar::navigation-menu-item>
                                    <x-shadlar::navigation-menu-link href="/blog">Blog</x-shadlar::navigation-menu-link>
                                </x-shadlar::navigation-menu-item>
                                <x-shadlar::navigation-menu-item>
                                    <x-shadlar::navigation-menu-link href="/docs">Docs</x-shadlar::navigation-menu-link>
                                </x-shadlar::navigation-menu-item>
                            </x-shadlar::navigation-menu-list>
                        </x-slot:center>
                        <x-slot:end>
                            <div class="flex items-center gap-2">
                                <x-shadlar::button variant="ghost" size="sm">Sign In</x-shadlar::button>
                                <x-shadlar::button size="sm">Get Started</x-shadlar::button>
                            </div>
                        </x-slot:end>
                    </x-shadlar::navigation-menu>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Navigation Menu with Active State</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <x-shadlar::navigation-menu>
                        <x-slot:start>
                            <div class="flex items-center gap-2">
                                <span class="text-lg font-bold" style="color: var(--navigation-foreground);">My App</span>
                            </div>
                        </x-slot:start>
                        <x-slot:center>
                            <x-shadlar::navigation-menu-list>
                                <x-shadlar::navigation-menu-item>
                                    <x-shadlar::navigation-menu-link href="/" :active="true">Home</x-shadlar::navigation-menu-link>
                                </x-shadlar::navigation-menu-item>
                                <x-shadlar::navigation-menu-item>
                                    <x-shadlar::navigation-menu-link href="/about">About</x-shadlar::navigation-menu-link>
                                </x-shadlar::navigation-menu-item>
                                <x-shadlar::navigation-menu-item>
                                    <x-shadlar::navigation-menu-link href="/contact">Contact</x-shadlar::navigation-menu-link>
                                </x-shadlar::navigation-menu-item>
                            </x-shadlar::navigation-menu-list>
                        </x-slot:center>
                        <x-slot:end>
                            <div class="flex items-center gap-2">
                                <x-shadlar::button variant="ghost" size="sm">Login</x-shadlar::button>
                            </div>
                        </x-slot:end>
                    </x-shadlar::navigation-menu>
                </x-shadlar::card-body>
            </x-shadlar::card>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6" style="color: var(--color-foreground);">Code Examples</h2>
            
            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Basic Usage</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::navigation-menu&gt;
    &lt;x-slot:start&gt;
        &lt;div class="flex items-center gap-2"&gt;
            &lt;span class="text-lg font-bold"&gt;Logo&lt;/span&gt;
        &lt;/div&gt;
    &lt;/x-slot:start&gt;
    &lt;x-slot:center&gt;
        &lt;x-shadlar::navigation-menu-list&gt;
            &lt;x-shadlar::navigation-menu-item&gt;
                &lt;x-shadlar::navigation-menu-link href="/"&gt;Home&lt;/x-shadlar::navigation-menu-link&gt;
            &lt;/x-shadlar::navigation-menu-item&gt;
            &lt;x-shadlar::navigation-menu-item&gt;
                &lt;x-shadlar::navigation-menu-link href="/about"&gt;About&lt;/x-shadlar::navigation-menu-link&gt;
            &lt;/x-shadlar::navigation-menu-item&gt;
        &lt;/x-shadlar::navigation-menu-list&gt;
    &lt;/x-slot:center&gt;
    &lt;x-slot:end&gt;
        &lt;div class="flex items-center gap-2"&gt;
            &lt;x-shadlar::button size="sm"&gt;Sign In&lt;/x-shadlar::button&gt;
        &lt;/div&gt;
    &lt;/x-slot:end&gt;
&lt;/x-shadlar::navigation-menu&gt;</code></pre>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>With Active State</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::navigation-menu-link href="/" :active="request()-&gt;is('/')"&gt;
    Home
&lt;/x-shadlar::navigation-menu-link&gt;</code></pre>
                </x-shadlar::card-body>
            </x-shadlar::card>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6" style="color: var(--color-foreground);">Props</h2>
            <x-shadlar::card>
                <x-shadlar::card-body>
                    <x-shadlar::table>
                        <x-shadlar::table-header>
                            <x-shadlar::table-row>
                                <x-shadlar::table-head>Component</x-shadlar::table-head>
                                <x-shadlar::table-head>Prop</x-shadlar::table-head>
                                <x-shadlar::table-head>Type</x-shadlar::table-head>
                                <x-shadlar::table-head>Description</x-shadlar::table-head>
                            </x-shadlar::table-row>
                        </x-shadlar::table-header>
                        <x-shadlar::table-body>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">navigation-menu</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">class</x-shadlar::table-cell>
                                <x-shadlar::table-cell>string</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Additional CSS classes for custom styling</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">navigation-menu</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">start (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Content for the left side (typically logo or brand)</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">navigation-menu</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">center (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Content for the center (typically navigation links)</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">navigation-menu</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">end (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Content for the right side (typically action buttons)</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">navigation-menu-list</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Container for navigation menu items</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">navigation-menu-item</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Individual navigation menu item container</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">navigation-menu-link</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">href</x-shadlar::table-cell>
                                <x-shadlar::table-cell>string</x-shadlar::table-cell>
                                <x-shadlar::table-cell>URL for the navigation link</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">navigation-menu-link</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">active</x-shadlar::table-cell>
                                <x-shadlar::table-cell>boolean</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Whether the link is currently active</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">navigation-menu-link</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Link text or content</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                        </x-shadlar::table-body>
                    </x-shadlar::table>
                </x-shadlar::card-body>
            </x-shadlar::card>
        </section>

        <div class="flex gap-4 justify-center">
            <a href="/components">
                <x-shadlar::button variant="outlined">Back to Components</x-shadlar::button>
            </a>
            <a href="/dashboard">
                <x-shadlar::button>View All Examples</x-shadlar::button>
            </a>
        </div>
    </main>
</x-layouts.web-layout>

