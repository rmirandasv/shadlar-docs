<x-layouts.web-layout title="Badge">
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
                <x-shadlar::breadcrumb-page>Badge</x-shadlar::breadcrumb-page>
            </x-shadlar::breadcrumb-item>
        </x-shadlar::breadcrumb-list>
    </x-shadlar::breadcrumb>

    <div class="mb-12">
        <h1 class="text-4xl font-bold mb-4" style="color: var(--color-foreground);">Badge</h1>
        <p class="text-lg" style="color: var(--color-muted-foreground);">
            Small status indicators, labels, or tags that help categorize and highlight information.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6" style="color: var(--color-foreground);">Variants</h2>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Basic Variants</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <div class="flex flex-wrap gap-3">
                    <x-shadlar::badge>Primary</x-shadlar::badge>
                    <x-shadlar::badge variant="secondary">Secondary</x-shadlar::badge>
                    <x-shadlar::badge variant="destructive">Destructive</x-shadlar::badge>
                    <x-shadlar::badge variant="outlined">Outlined</x-shadlar::badge>
                    <x-shadlar::badge variant="success">Success</x-shadlar::badge>
                </div>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>With Icons</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <div class="flex flex-wrap gap-3 items-center">
                    <x-shadlar::badge variant="primary">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        Verified
                    </x-shadlar::badge>
                    <x-shadlar::badge variant="success">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Active
                    </x-shadlar::badge>
                    <x-shadlar::badge variant="destructive">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        Error
                    </x-shadlar::badge>
                </div>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Shapes</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <div class="flex flex-wrap gap-3 items-center">
                    <x-shadlar::badge variant="primary">Default</x-shadlar::badge>
                    <x-shadlar::badge variant="primary" shape="pill">Pill</x-shadlar::badge>
                    <x-shadlar::badge variant="primary" shape="square">Square</x-shadlar::badge>
                    <x-shadlar::badge variant="primary" shape="circle">8</x-shadlar::badge>
                    <x-shadlar::badge variant="destructive" shape="circle">99+</x-shadlar::badge>
                </div>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Use Cases</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <span style="color: var(--color-foreground);">Status:</span>
                        <x-shadlar::badge variant="success">Active</x-shadlar::badge>
                        <x-shadlar::badge variant="secondary">Pending</x-shadlar::badge>
                        <x-shadlar::badge variant="destructive">Inactive</x-shadlar::badge>
                    </div>
                    <div class="flex items-center gap-3">
                        <span style="color: var(--color-foreground);">Notifications:</span>
                        <x-shadlar::badge variant="primary" shape="circle">3</x-shadlar::badge>
                        <x-shadlar::badge variant="destructive" shape="circle">12</x-shadlar::badge>
                    </div>
                    <div class="flex items-center gap-3">
                        <span style="color: var(--color-foreground);">Tags:</span>
                        <x-shadlar::badge variant="outlined">New</x-shadlar::badge>
                        <x-shadlar::badge variant="outlined">Featured</x-shadlar::badge>
                        <x-shadlar::badge variant="outlined">Popular</x-shadlar::badge>
                    </div>
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
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::badge&gt;Primary&lt;/x-shadlar::badge&gt;
&lt;x-shadlar::badge variant="secondary"&gt;Secondary&lt;/x-shadlar::badge&gt;
&lt;x-shadlar::badge variant="destructive"&gt;Destructive&lt;/x-shadlar::badge&gt;
&lt;x-shadlar::badge variant="outlined"&gt;Outlined&lt;/x-shadlar::badge&gt;
&lt;x-shadlar::badge variant="success"&gt;Success&lt;/x-shadlar::badge&gt;</code></pre>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>With Icons</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::badge variant="primary"&gt;
    &lt;svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"&gt;
        &lt;path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" /&gt;
    &lt;/svg&gt;
    Verified
&lt;/x-shadlar::badge&gt;</code></pre>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>With Shapes</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::badge variant="primary" shape="pill"&gt;Pill&lt;/x-shadlar::badge&gt;
&lt;x-shadlar::badge variant="primary" shape="square"&gt;Square&lt;/x-shadlar::badge&gt;
&lt;x-shadlar::badge variant="primary" shape="circle"&gt;8&lt;/x-shadlar::badge&gt;</code></pre>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>With Custom Classes</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::badge variant="primary" class="text-sm"&gt;Small Badge&lt;/x-shadlar::badge&gt;
&lt;x-shadlar::badge variant="primary" class="ml-2"&gt;With Margin&lt;/x-shadlar::badge&gt;</code></pre>
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
                            <x-shadlar::table-cell class="font-medium">variant</x-shadlar::table-cell>
                            <x-shadlar::table-cell>string</x-shadlar::table-cell>
                            <x-shadlar::table-cell>primary</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Badge style variant: primary, secondary, destructive, outlined,
                                success</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">shape</x-shadlar::table-cell>
                            <x-shadlar::table-cell>string</x-shadlar::table-cell>
                            <x-shadlar::table-cell>default</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Badge shape: default, pill, square, circle</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">class</x-shadlar::table-cell>
                            <x-shadlar::table-cell>string</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Additional CSS classes for custom styling</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                            <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Badge content (text, icons, or both)</x-shadlar::table-cell>
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
</x-layouts.web-layout>
