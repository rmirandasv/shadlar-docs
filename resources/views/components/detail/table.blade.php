<x-layouts.web-layout title="Table">
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
                <x-shadlar::breadcrumb-page>Table</x-shadlar::breadcrumb-page>
            </x-shadlar::breadcrumb-item>
        </x-shadlar::breadcrumb-list>
    </x-shadlar::breadcrumb>

    <div class="mb-12">
        <h1 class="text-4xl font-bold mb-4" style="color: var(--color-foreground);">Table</h1>
        <p class="text-lg" style="color: var(--color-muted-foreground);">
            Display structured data in a clean and organized table format with header, body, and optional footer
            sections.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6" style="color: var(--color-foreground);">Examples</h2>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Basic Table</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <x-shadlar::table>
                    <x-shadlar::table-header>
                        <x-shadlar::table-row>
                            <x-shadlar::table-head>Name</x-shadlar::table-head>
                            <x-shadlar::table-head>Email</x-shadlar::table-head>
                            <x-shadlar::table-head align="right">Status</x-shadlar::table-head>
                        </x-shadlar::table-row>
                    </x-shadlar::table-header>
                    <x-shadlar::table-body>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">John Doe</x-shadlar::table-cell>
                            <x-shadlar::table-cell>john@example.com</x-shadlar::table-cell>
                            <x-shadlar::table-cell align="right">
                                <x-shadlar::badge variant="success">Active</x-shadlar::badge>
                            </x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">Jane Smith</x-shadlar::table-cell>
                            <x-shadlar::table-cell>jane@example.com</x-shadlar::table-cell>
                            <x-shadlar::table-cell align="right">
                                <x-shadlar::badge variant="secondary">Pending</x-shadlar::badge>
                            </x-shadlar::table-cell>
                        </x-shadlar::table-row>
                    </x-shadlar::table-body>
                </x-shadlar::table>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Table with Footer</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <x-shadlar::table>
                    <x-shadlar::table-header>
                        <x-shadlar::table-row>
                            <x-shadlar::table-head>Product</x-shadlar::table-head>
                            <x-shadlar::table-head align="right">Price</x-shadlar::table-head>
                        </x-shadlar::table-row>
                    </x-shadlar::table-header>
                    <x-shadlar::table-body>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell>Laptop</x-shadlar::table-cell>
                            <x-shadlar::table-cell align="right">$999.99</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell>Mouse</x-shadlar::table-cell>
                            <x-shadlar::table-cell align="right">$29.99</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell>Keyboard</x-shadlar::table-cell>
                            <x-shadlar::table-cell align="right">$79.99</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                    </x-shadlar::table-body>
                    <x-shadlar::table-footer>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">Total</x-shadlar::table-cell>
                            <x-shadlar::table-cell align="right" class="font-medium">$1,109.97</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                    </x-shadlar::table-footer>
                </x-shadlar::table>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Table with Actions</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <x-shadlar::table>
                    <x-shadlar::table-header>
                        <x-shadlar::table-row>
                            <x-shadlar::table-head>Name</x-shadlar::table-head>
                            <x-shadlar::table-head>Email</x-shadlar::table-head>
                            <x-shadlar::table-head align="center">Status</x-shadlar::table-head>
                            <x-shadlar::table-head align="right">Actions</x-shadlar::table-head>
                        </x-shadlar::table-row>
                    </x-shadlar::table-header>
                    <x-shadlar::table-body>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">Pedro Duarte</x-shadlar::table-cell>
                            <x-shadlar::table-cell>pedro@example.com</x-shadlar::table-cell>
                            <x-shadlar::table-cell align="center">
                                <x-shadlar::badge variant="success">Active</x-shadlar::badge>
                            </x-shadlar::table-cell>
                            <x-shadlar::table-cell align="right">
                                <div class="flex gap-2 justify-end">
                                    <x-shadlar::button variant="ghost" size="sm">Edit</x-shadlar::button>
                                    <x-shadlar::button variant="ghost" size="sm">Delete</x-shadlar::button>
                                </div>
                            </x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">María García</x-shadlar::table-cell>
                            <x-shadlar::table-cell>maria@example.com</x-shadlar::table-cell>
                            <x-shadlar::table-cell align="center">
                                <x-shadlar::badge variant="secondary">Pending</x-shadlar::badge>
                            </x-shadlar::table-cell>
                            <x-shadlar::table-cell align="right">
                                <div class="flex gap-2 justify-end">
                                    <x-shadlar::button variant="ghost" size="sm">Edit</x-shadlar::button>
                                    <x-shadlar::button variant="ghost" size="sm">Delete</x-shadlar::button>
                                </div>
                            </x-shadlar::table-cell>
                        </x-shadlar::table-row>
                    </x-shadlar::table-body>
                </x-shadlar::table>
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
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::table&gt;
    &lt;x-shadlar::table-header&gt;
        &lt;x-shadlar::table-row&gt;
            &lt;x-shadlar::table-head&gt;Name&lt;/x-shadlar::table-head&gt;
            &lt;x-shadlar::table-head&gt;Email&lt;/x-shadlar::table-head&gt;
        &lt;/x-shadlar::table-row&gt;
    &lt;/x-shadlar::table-header&gt;
    &lt;x-shadlar::table-body&gt;
        &lt;x-shadlar::table-row&gt;
            &lt;x-shadlar::table-cell&gt;John Doe&lt;/x-shadlar::table-cell&gt;
            &lt;x-shadlar::table-cell&gt;john@example.com&lt;/x-shadlar::table-cell&gt;
        &lt;/x-shadlar::table-row&gt;
    &lt;/x-shadlar::table-body&gt;
&lt;/x-shadlar::table&gt;</code></pre>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>With Alignment</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::table-head align="right"&gt;Price&lt;/x-shadlar::table-head&gt;
&lt;x-shadlar::table-cell align="center"&gt;Status&lt;/x-shadlar::table-cell&gt;
&lt;x-shadlar::table-cell align="right"&gt;$99.99&lt;/x-shadlar::table-cell&gt;</code></pre>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>With Footer</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::table&gt;
    &lt;x-shadlar::table-header&gt;
        &lt;x-shadlar::table-row&gt;
            &lt;x-shadlar::table-head&gt;Product&lt;/x-shadlar::table-head&gt;
            &lt;x-shadlar::table-head align="right"&gt;Price&lt;/x-shadlar::table-head&gt;
        &lt;/x-shadlar::table-row&gt;
    &lt;/x-shadlar::table-header&gt;
    &lt;x-shadlar::table-body&gt;
        &lt;x-shadlar::table-row&gt;
            &lt;x-shadlar::table-cell&gt;Laptop&lt;/x-shadlar::table-cell&gt;
            &lt;x-shadlar::table-cell align="right"&gt;$999.99&lt;/x-shadlar::table-cell&gt;
        &lt;/x-shadlar::table-row&gt;
    &lt;/x-shadlar::table-body&gt;
    &lt;x-shadlar::table-footer&gt;
        &lt;x-shadlar::table-row&gt;
            &lt;x-shadlar::table-cell colspan="2" align="center"&gt;Total: $999.99&lt;/x-shadlar::table-cell&gt;
        &lt;/x-shadlar::table-row&gt;
    &lt;/x-shadlar::table-footer&gt;
&lt;/x-shadlar::table&gt;</code></pre>
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
                            <x-shadlar::table-cell class="font-medium">table</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Main table wrapper component</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">table-header</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Container for table header rows</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">table-body</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Container for table body rows</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">table-footer</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Optional container for table footer rows</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">table-row</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Table row component</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">table-head</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">align</x-shadlar::table-cell>
                            <x-shadlar::table-cell>string</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Text alignment: left (default), center, right</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">table-cell</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">align</x-shadlar::table-cell>
                            <x-shadlar::table-cell>string</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Text alignment: left (default), center, right</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">table-cell</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">class</x-shadlar::table-cell>
                            <x-shadlar::table-cell>string</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Additional CSS classes (e.g., "font-medium")</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">table-cell</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">colspan</x-shadlar::table-cell>
                            <x-shadlar::table-cell>number</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Number of columns to span (useful in footer)</x-shadlar::table-cell>
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
