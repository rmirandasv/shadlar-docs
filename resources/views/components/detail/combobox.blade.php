<x-layouts.web-layout title="Combobox">
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
                    <x-shadlar::breadcrumb-page>Combobox</x-shadlar::breadcrumb-page>
                </x-shadlar::breadcrumb-item>
            </x-shadlar::breadcrumb-list>
        </x-shadlar::breadcrumb>

        <div class="mb-12">
            <h1 class="text-4xl font-bold mb-4" style="color: var(--color-foreground);">Combobox</h1>
            <p class="text-lg" style="color: var(--color-muted-foreground);">
                An autocomplete input component that combines a text input with a searchable dropdown list of options.
            </p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6" style="color: var(--color-foreground);">Examples</h2>
            
            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Basic Combobox</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <x-shadlar::combobox>
                        <x-shadlar::combobox-trigger placeholder="Select framework..." />
                        <x-shadlar::combobox-content>
                            <x-shadlar::combobox-input placeholder="Search framework..." />
                            <div class="max-h-[300px] overflow-auto">
                                <x-shadlar::combobox-item value="react">React</x-shadlar::combobox-item>
                                <x-shadlar::combobox-item value="vue">Vue</x-shadlar::combobox-item>
                                <x-shadlar::combobox-item value="angular">Angular</x-shadlar::combobox-item>
                                <x-shadlar::combobox-item value="svelte">Svelte</x-shadlar::combobox-item>
                            </div>
                            <x-shadlar::combobox-empty>No framework found.</x-shadlar::combobox-empty>
                        </x-shadlar::combobox-content>
                    </x-shadlar::combobox>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Combobox with Many Options</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <x-shadlar::combobox>
                        <x-shadlar::combobox-trigger placeholder="Select a country..." />
                        <x-shadlar::combobox-content>
                            <x-shadlar::combobox-input placeholder="Search country..." />
                            <div class="max-h-[300px] overflow-auto">
                                <x-shadlar::combobox-item value="us">United States</x-shadlar::combobox-item>
                                <x-shadlar::combobox-item value="uk">United Kingdom</x-shadlar::combobox-item>
                                <x-shadlar::combobox-item value="ca">Canada</x-shadlar::combobox-item>
                                <x-shadlar::combobox-item value="mx">Mexico</x-shadlar::combobox-item>
                                <x-shadlar::combobox-item value="es">Spain</x-shadlar::combobox-item>
                                <x-shadlar::combobox-item value="fr">France</x-shadlar::combobox-item>
                                <x-shadlar::combobox-item value="de">Germany</x-shadlar::combobox-item>
                                <x-shadlar::combobox-item value="it">Italy</x-shadlar::combobox-item>
                            </div>
                            <x-shadlar::combobox-empty>No country found.</x-shadlar::combobox-empty>
                        </x-shadlar::combobox-content>
                    </x-shadlar::combobox>
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
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::combobox&gt;
    &lt;x-shadlar::combobox-trigger placeholder="Select framework..." /&gt;
    &lt;x-shadlar::combobox-content&gt;
        &lt;x-shadlar::combobox-input placeholder="Search framework..." /&gt;
        &lt;div class="max-h-[300px] overflow-auto"&gt;
            &lt;x-shadlar::combobox-item value="react"&gt;React&lt;/x-shadlar::combobox-item&gt;
            &lt;x-shadlar::combobox-item value="vue"&gt;Vue&lt;/x-shadlar::combobox-item&gt;
            &lt;x-shadlar::combobox-item value="angular"&gt;Angular&lt;/x-shadlar::combobox-item&gt;
        &lt;/div&gt;
        &lt;x-shadlar::combobox-empty&gt;No framework found.&lt;/x-shadlar::combobox-empty&gt;
    &lt;/x-shadlar::combobox-content&gt;
&lt;/x-shadlar::combobox&gt;</code></pre>
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
                                <x-shadlar::table-cell class="font-medium">combobox</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Main combobox container component</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">combobox-trigger</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">placeholder</x-shadlar::table-cell>
                                <x-shadlar::table-cell>string</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Placeholder text for the trigger input</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">combobox-content</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Container for combobox dropdown content</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">combobox-input</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">placeholder</x-shadlar::table-cell>
                                <x-shadlar::table-cell>string</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Placeholder text for the search input</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">combobox-item</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">value</x-shadlar::table-cell>
                                <x-shadlar::table-cell>string</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Unique value identifier for the option</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">combobox-item</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Display text for the option</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">combobox-empty</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Message displayed when no options match the search</x-shadlar::table-cell>
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

