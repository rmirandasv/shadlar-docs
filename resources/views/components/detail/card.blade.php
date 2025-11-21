<x-layouts.web-layout title="Card">
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
                <x-shadlar::breadcrumb-page>Card</x-shadlar::breadcrumb-page>
            </x-shadlar::breadcrumb-item>
        </x-shadlar::breadcrumb-list>
    </x-shadlar::breadcrumb>

    <div class="mb-12">
        <h1 class="text-4xl font-bold mb-4" style="color: var(--color-foreground);">Card</h1>
        <p class="text-lg" style="color: var(--color-muted-foreground);">
            Cards are a flexible content container with multiple variants and options.
        </p>
    </div>

    <section class="mb-12">
        <x-shadlar::card>
            <x-shadlar::card-header>
                <x-shadlar::card-title>Basic Usage</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <p>Cards are a flexible content container with multiple variants and options.</p>
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
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"> <code>&lt;x-shadlar::card&gt;
    &lt;x-shadlar::card-header&gt;
        &lt;x-shadlar::card-title&gt;Basic Usage&lt;/x-shadlar::card-title&gt;
    &lt;/x-shadlar::card-header&gt;
    &lt;x-shadlar::card-body&gt;
        &lt;p&gt;Cards are a flexible content container with multiple variants and options.&lt;/p&gt;
    &lt;/x-shadlar::card-body&gt;
&lt;/x-shadlar::card&gt;</code>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>With Header and Footer</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"> <code>&lt;x-shadlar::card&gt;
    &lt;x-shadlar::card-header&gt;
        &lt;x-shadlar::card-title&gt;Basic Usage&lt;/x-shadlar::card-title&gt;
    &lt;/x-shadlar::card-header&gt;
    &lt;x-shadlar::card-body&gt;
        &lt;p&gt;Cards are a flexible content container with multiple variants and options.&lt;/p&gt;
    &lt;/x-shadlar::card-body&gt;
    &lt;x-shadlar::card-footer&gt;
        &lt;x-shadlar::button&gt;View Details&lt;/x-shadlar::button&gt;
    &lt;/x-shadlar::card-footer&gt;
&lt;/x-shadlar::card&gt;</code>
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
                                <x-shadlar::table-head>Description</x-shadlar::table-head>
                            </x-shadlar::table-row>
                        </x-shadlar::table-header>
                        <x-shadlar::table-body>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Content slot for custom content</x-shadlar::table-cell>
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
