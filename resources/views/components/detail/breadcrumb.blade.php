<x-layouts.web-layout title="Breadcrumb">
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
                <x-shadlar::breadcrumb-page>Breadcrumb</x-shadlar::breadcrumb-page>
            </x-shadlar::breadcrumb-item>
        </x-shadlar::breadcrumb-list>
    </x-shadlar::breadcrumb>

    <div class="mb-12">
        <h1 class="text-4xl font-bold mb-4" style="color: var(--color-foreground);">Breadcrumb</h1>
        <p class="text-lg" style="color: var(--color-muted-foreground);">
            Navigation paths that show the current location within a hierarchical structure.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6" style="color: var(--color-foreground);">Examples</h2>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Basic Breadcrumb</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <x-shadlar::breadcrumb>
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
                            <x-shadlar::breadcrumb-page>Breadcrumb</x-shadlar::breadcrumb-page>
                        </x-shadlar::breadcrumb-item>
                    </x-shadlar::breadcrumb-list>
                </x-shadlar::breadcrumb>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Breadcrumb with Multiple Levels</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <x-shadlar::breadcrumb>
                    <x-shadlar::breadcrumb-list>
                        <x-shadlar::breadcrumb-item>
                            <x-shadlar::breadcrumb-link href="/dashboard">Dashboard</x-shadlar::breadcrumb-link>
                            <x-shadlar::breadcrumb-separator />
                        </x-shadlar::breadcrumb-item>
                        <x-shadlar::breadcrumb-item>
                            <x-shadlar::breadcrumb-link href="/dashboard/settings">Settings</x-shadlar::breadcrumb-link>
                            <x-shadlar::breadcrumb-separator />
                        </x-shadlar::breadcrumb-item>
                        <x-shadlar::breadcrumb-item>
                            <x-shadlar::breadcrumb-link
                                href="/dashboard/settings/profile">Profile</x-shadlar::breadcrumb-link>
                            <x-shadlar::breadcrumb-separator />
                        </x-shadlar::breadcrumb-item>
                        <x-shadlar::breadcrumb-item>
                            <x-shadlar::breadcrumb-page>Edit</x-shadlar::breadcrumb-page>
                        </x-shadlar::breadcrumb-item>
                    </x-shadlar::breadcrumb-list>
                </x-shadlar::breadcrumb>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Breadcrumb with Icons</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <x-shadlar::breadcrumb>
                    <x-shadlar::breadcrumb-list>
                        <x-shadlar::breadcrumb-item>
                            <x-shadlar::breadcrumb-link href="/dashboard" class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Dashboard
                            </x-shadlar::breadcrumb-link>
                            <x-shadlar::breadcrumb-separator />
                        </x-shadlar::breadcrumb-item>
                        <x-shadlar::breadcrumb-item>
                            <x-shadlar::breadcrumb-link href="/dashboard/users" class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                Users
                            </x-shadlar::breadcrumb-link>
                            <x-shadlar::breadcrumb-separator />
                        </x-shadlar::breadcrumb-item>
                        <x-shadlar::breadcrumb-item>
                            <x-shadlar::breadcrumb-page>John Doe</x-shadlar::breadcrumb-page>
                        </x-shadlar::breadcrumb-item>
                    </x-shadlar::breadcrumb-list>
                </x-shadlar::breadcrumb>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Simple Breadcrumb</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <x-shadlar::breadcrumb>
                    <x-shadlar::breadcrumb-list>
                        <x-shadlar::breadcrumb-item>
                            <x-shadlar::breadcrumb-link href="/">Home</x-shadlar::breadcrumb-link>
                            <x-shadlar::breadcrumb-separator />
                        </x-shadlar::breadcrumb-item>
                        <x-shadlar::breadcrumb-item>
                            <x-shadlar::breadcrumb-page>About</x-shadlar::breadcrumb-page>
                        </x-shadlar::breadcrumb-item>
                    </x-shadlar::breadcrumb-list>
                </x-shadlar::breadcrumb>
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
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::breadcrumb&gt;
    &lt;x-shadlar::breadcrumb-list&gt;
        &lt;x-shadlar::breadcrumb-item&gt;
            &lt;x-shadlar::breadcrumb-link href="/"&gt;Home&lt;/x-shadlar::breadcrumb-link&gt;
            &lt;x-shadlar::breadcrumb-separator /&gt;
        &lt;/x-shadlar::breadcrumb-item&gt;
        &lt;x-shadlar::breadcrumb-item&gt;
            &lt;x-shadlar::breadcrumb-link href="/components"&gt;Components&lt;/x-shadlar::breadcrumb-link&gt;
            &lt;x-shadlar::breadcrumb-separator /&gt;
        &lt;/x-shadlar::breadcrumb-item&gt;
        &lt;x-shadlar::breadcrumb-item&gt;
            &lt;x-shadlar::breadcrumb-page&gt;Breadcrumb&lt;/x-shadlar::breadcrumb-page&gt;
        &lt;/x-shadlar::breadcrumb-item&gt;
    &lt;/x-shadlar::breadcrumb-list&gt;
&lt;/x-shadlar::breadcrumb&gt;</code></pre>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>With Icons</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::breadcrumb-item&gt;
    &lt;x-shadlar::breadcrumb-link href="/dashboard" class="flex items-center gap-2"&gt;
        &lt;svg class="w-4 h-4"&gt;...&lt;/svg&gt;
        Dashboard
    &lt;/x-shadlar::breadcrumb-link&gt;
    &lt;x-shadlar::breadcrumb-separator /&gt;
&lt;/x-shadlar::breadcrumb-item&gt;</code></pre>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>With Custom Classes</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::breadcrumb class="mb-8"&gt;
    &lt;x-shadlar::breadcrumb-list&gt;
        &lt;!-- breadcrumb items --&gt;
    &lt;/x-shadlar::breadcrumb-list&gt;
&lt;/x-shadlar::breadcrumb&gt;</code></pre>
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
                            <x-shadlar::table-cell class="font-medium">breadcrumb</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">class</x-shadlar::table-cell>
                            <x-shadlar::table-cell>string</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Additional CSS classes for custom styling</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">breadcrumb-list</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Container for breadcrumb items</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">breadcrumb-item</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Individual breadcrumb item container</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">breadcrumb-link</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">href</x-shadlar::table-cell>
                            <x-shadlar::table-cell>string</x-shadlar::table-cell>
                            <x-shadlar::table-cell>URL for the breadcrumb link</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">breadcrumb-link</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">class</x-shadlar::table-cell>
                            <x-shadlar::table-cell>string</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Additional CSS classes (useful for adding
                                icons)</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">breadcrumb-link</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                            <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Link text or content (text, icons, or both)</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">breadcrumb-separator</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Visual separator between breadcrumb items</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">breadcrumb-page</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Current page indicator (non-clickable, typically the last
                                item)</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">breadcrumb-page</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                            <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Current page name or text</x-shadlar::table-cell>
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
    </div>

</x-layouts.web-layout>
