<x-layouts.web-layout title="Avatar">
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
                    <x-shadlar::breadcrumb-page>Avatar</x-shadlar::breadcrumb-page>
                </x-shadlar::breadcrumb-item>
            </x-shadlar::breadcrumb-list>
        </x-shadlar::breadcrumb>

        <div class="mb-12">
            <h1 class="text-4xl font-bold mb-4" style="color: var(--color-foreground);">Avatar</h1>
            <p class="text-lg" style="color: var(--color-muted-foreground);">
                Display user profile pictures, initials, or icons in a circular or rounded container.
            </p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6" style="color: var(--color-foreground);">Examples</h2>
            
            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Avatar with Image</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <div class="flex gap-4 items-center">
                        <x-shadlar::avatar src="https://github.com/shadcn.png" alt="User avatar" size="md" />
                        <x-shadlar::avatar src="https://github.com/shadcn.png" alt="User avatar" size="lg" />
                    </div>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Avatar with Initials</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <div class="flex gap-4 items-center">
                        <x-shadlar::avatar size="md">JD</x-shadlar::avatar>
                        <x-shadlar::avatar size="lg">AB</x-shadlar::avatar>
                        <x-shadlar::avatar size="md">CN</x-shadlar::avatar>
                    </div>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Avatar with Fallback</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <div class="flex gap-4 items-center">
                        <x-shadlar::avatar src="https://github.com/user.png" fallback="CN" size="md" />
                        <x-shadlar::avatar src="https://invalid-url.png" fallback="JD" size="lg" />
                    </div>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Avatar with Icon</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <div class="flex gap-4 items-center">
                        <x-shadlar::avatar size="md">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </x-shadlar::avatar>
                        <x-shadlar::avatar size="lg">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </x-shadlar::avatar>
                    </div>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Avatar Sizes</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <div class="flex gap-4 items-center">
                        <x-shadlar::avatar size="sm">SM</x-shadlar::avatar>
                        <x-shadlar::avatar size="md">MD</x-shadlar::avatar>
                        <x-shadlar::avatar size="lg">LG</x-shadlar::avatar>
                    </div>
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
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::avatar src="https://example.com/avatar.png" alt="User avatar" size="md" /&gt;</code></pre>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>With Initials</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::avatar size="md"&gt;
    JD
&lt;/x-shadlar::avatar&gt;</code></pre>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>With Fallback Prop</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::avatar src="https://example.com/avatar.png" fallback="CN" size="lg" /&gt;</code></pre>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>With Icon</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::avatar size="md"&gt;
    &lt;svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"&gt;
        &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /&gt;
    &lt;/svg&gt;
&lt;/x-shadlar::avatar&gt;</code></pre>
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
                                <x-shadlar::table-head>Prop</x-shadlar::table-head>
                                <x-shadlar::table-head>Type</x-shadlar::table-head>
                                <x-shadlar::table-head>Default</x-shadlar::table-head>
                                <x-shadlar::table-head>Description</x-shadlar::table-head>
                            </x-shadlar::table-row>
                        </x-shadlar::table-header>
                        <x-shadlar::table-body>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">src</x-shadlar::table-cell>
                                <x-shadlar::table-cell>string</x-shadlar::table-cell>
                                <x-shadlar::table-cell>-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>URL of the avatar image</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">alt</x-shadlar::table-cell>
                                <x-shadlar::table-cell>string</x-shadlar::table-cell>
                                <x-shadlar::table-cell>-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Alternative text for the image</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">size</x-shadlar::table-cell>
                                <x-shadlar::table-cell>string</x-shadlar::table-cell>
                                <x-shadlar::table-cell>md</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Avatar size: sm, md, lg</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">fallback</x-shadlar::table-cell>
                                <x-shadlar::table-cell>string</x-shadlar::table-cell>
                                <x-shadlar::table-cell>-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Text to display if image fails to load</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Fallback content (initials, icon, or custom content) when no image is provided</x-shadlar::table-cell>
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

