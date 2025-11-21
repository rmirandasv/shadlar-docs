<x-layouts.web-layout title="Button">
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
                    <x-shadlar::breadcrumb-page>Button</x-shadlar::breadcrumb-page>
                </x-shadlar::breadcrumb-item>
            </x-shadlar::breadcrumb-list>
        </x-shadlar::breadcrumb>

        <div class="mb-12">
            <h1 class="text-4xl font-bold mb-4" style="color: var(--color-foreground);">Button</h1>
            <p class="text-lg" style="color: var(--color-muted-foreground);">
                A versatile button component with multiple variants and sizes for all your action needs.
            </p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6" style="color: var(--color-foreground);">Variants</h2>
            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Primary</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <div class="flex gap-4 flex-wrap">
                        <x-shadlar::button variant="primary" size="sm">Small</x-shadlar::button>
                        <x-shadlar::button variant="primary">Default</x-shadlar::button>
                        <x-shadlar::button variant="primary" size="lg">Large</x-shadlar::button>
                    </div>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Secondary</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <div class="flex gap-4 flex-wrap">
                        <x-shadlar::button variant="secondary" size="sm">Small</x-shadlar::button>
                        <x-shadlar::button variant="secondary">Default</x-shadlar::button>
                        <x-shadlar::button variant="secondary" size="lg">Large</x-shadlar::button>
                    </div>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Outlined</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <div class="flex gap-4 flex-wrap">
                        <x-shadlar::button variant="outlined" size="sm">Small</x-shadlar::button>
                        <x-shadlar::button variant="outlined">Default</x-shadlar::button>
                        <x-shadlar::button variant="outlined" size="lg">Large</x-shadlar::button>
                    </div>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Ghost</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <div class="flex gap-4 flex-wrap">
                        <x-shadlar::button variant="ghost" size="sm">Small</x-shadlar::button>
                        <x-shadlar::button variant="ghost">Default</x-shadlar::button>
                        <x-shadlar::button variant="ghost" size="lg">Large</x-shadlar::button>
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
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::button&gt;Click me&lt;/x-shadlar::button&gt;</code></pre>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>With Variant</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::button variant="primary"&gt;Primary Button&lt;/x-shadlar::button&gt;
&lt;x-shadlar::button variant="secondary"&gt;Secondary Button&lt;/x-shadlar::button&gt;
&lt;x-shadlar::button variant="outlined"&gt;Outlined Button&lt;/x-shadlar::button&gt;
&lt;x-shadlar::button variant="ghost"&gt;Ghost Button&lt;/x-shadlar::button&gt;</code></pre>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>With Size</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::button size="sm"&gt;Small Button&lt;/x-shadlar::button&gt;
&lt;x-shadlar::button&gt;Default Button&lt;/x-shadlar::button&gt;
&lt;x-shadlar::button size="lg"&gt;Large Button&lt;/x-shadlar::button&gt;</code></pre>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Combined</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::button variant="primary" size="lg"&gt;
    Large Primary Button
&lt;/x-shadlar::button&gt;</code></pre>
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
                                <x-shadlar::table-cell>Button style variant: primary, secondary, outlined, ghost</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">size</x-shadlar::table-cell>
                                <x-shadlar::table-cell>string</x-shadlar::table-cell>
                                <x-shadlar::table-cell>default</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Button size: sm, default, lg</x-shadlar::table-cell>
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

    <footer class="border-t mt-24 py-8" style="border-color: var(--color-border);">
        <div class="container mx-auto px-4 text-center">
            <p style="color: var(--color-muted-foreground);">
                Built with Shadlar. A Laravel Blade component library.
            </p>
        </div>
</x-layouts.web-layout>
