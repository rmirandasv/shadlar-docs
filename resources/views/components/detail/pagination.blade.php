<x-layouts.web-layout title="Pagination">
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
                <x-shadlar::breadcrumb-page>Pagination</x-shadlar::breadcrumb-page>
            </x-shadlar::breadcrumb-item>
        </x-shadlar::breadcrumb-list>
    </x-shadlar::breadcrumb>

    <div class="mb-12">
        <h1 class="text-4xl font-bold mb-4" style="color: var(--color-foreground);">Pagination</h1>
        <p class="text-lg" style="color: var(--color-muted-foreground);">
            Navigate through multiple pages of content with previous/next buttons and page numbers.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6" style="color: var(--color-foreground);">Examples</h2>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Basic Pagination</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <x-shadlar::pagination>
                    <x-shadlar::pagination-content>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-link href="/page/1">1</x-shadlar::pagination-link>
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-link href="/page/2" :isActive="true">2</x-shadlar::pagination-link>
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-link href="/page/3">3</x-shadlar::pagination-link>
                        </x-shadlar::pagination-item>
                    </x-shadlar::pagination-content>
                </x-shadlar::pagination>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Pagination with Previous/Next</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <x-shadlar::pagination>
                    <x-shadlar::pagination-content>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-previous href="/page/1" />
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-link href="/page/1">1</x-shadlar::pagination-link>
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-link href="/page/2" :isActive="true">2</x-shadlar::pagination-link>
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-link href="/page/3">3</x-shadlar::pagination-link>
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-next href="/page/3" />
                        </x-shadlar::pagination-item>
                    </x-shadlar::pagination-content>
                </x-shadlar::pagination>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Pagination with Ellipsis</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <x-shadlar::pagination>
                    <x-shadlar::pagination-content>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-previous href="/page/1" />
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-link href="/page/1">1</x-shadlar::pagination-link>
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-link href="/page/2" :isActive="true">2</x-shadlar::pagination-link>
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-link href="/page/3">3</x-shadlar::pagination-link>
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-ellipsis />
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-link href="/page/10">10</x-shadlar::pagination-link>
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-next href="/page/3" />
                        </x-shadlar::pagination-item>
                    </x-shadlar::pagination-content>
                </x-shadlar::pagination>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Large Pagination Set</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <x-shadlar::pagination>
                    <x-shadlar::pagination-content>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-previous href="/page/4" />
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-link href="/page/1">1</x-shadlar::pagination-link>
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-ellipsis />
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-link href="/page/4">4</x-shadlar::pagination-link>
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-link href="/page/5" :isActive="true">5</x-shadlar::pagination-link>
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-link href="/page/6">6</x-shadlar::pagination-link>
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-ellipsis />
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-link href="/page/10">10</x-shadlar::pagination-link>
                        </x-shadlar::pagination-item>
                        <x-shadlar::pagination-item>
                            <x-shadlar::pagination-next href="/page/6" />
                        </x-shadlar::pagination-item>
                    </x-shadlar::pagination-content>
                </x-shadlar::pagination>
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
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::pagination&gt;
    &lt;x-shadlar::pagination-content&gt;
        &lt;x-shadlar::pagination-item&gt;
            &lt;x-shadlar::pagination-link href="/page/1"&gt;1&lt;/x-shadlar::pagination-link&gt;
        &lt;/x-shadlar::pagination-item&gt;
        &lt;x-shadlar::pagination-item&gt;
            &lt;x-shadlar::pagination-link href="/page/2" :isActive="true"&gt;2&lt;/x-shadlar::pagination-link&gt;
        &lt;/x-shadlar::pagination-item&gt;
        &lt;x-shadlar::pagination-item&gt;
            &lt;x-shadlar::pagination-link href="/page/3"&gt;3&lt;/x-shadlar::pagination-link&gt;
        &lt;/x-shadlar::pagination-item&gt;
    &lt;/x-shadlar::pagination-content&gt;
&lt;/x-shadlar::pagination&gt;</code></pre>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>With Previous and Next</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::pagination&gt;
    &lt;x-shadlar::pagination-content&gt;
        &lt;x-shadlar::pagination-item&gt;
            &lt;x-shadlar::pagination-previous href="/page/1" /&gt;
        &lt;/x-shadlar::pagination-item&gt;
        &lt;x-shadlar::pagination-item&gt;
            &lt;x-shadlar::pagination-link href="/page/2" :isActive="true"&gt;2&lt;/x-shadlar::pagination-link&gt;
        &lt;/x-shadlar::pagination-item&gt;
        &lt;x-shadlar::pagination-item&gt;
            &lt;x-shadlar::pagination-next href="/page/3" /&gt;
        &lt;/x-shadlar::pagination-item&gt;
    &lt;/x-shadlar::pagination-content&gt;
&lt;/x-shadlar::pagination&gt;</code></pre>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>With Ellipsis</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::pagination&gt;
    &lt;x-shadlar::pagination-content&gt;
        &lt;x-shadlar::pagination-item&gt;
            &lt;x-shadlar::pagination-link href="/page/1"&gt;1&lt;/x-shadlar::pagination-link&gt;
        &lt;/x-shadlar::pagination-item&gt;
        &lt;x-shadlar::pagination-item&gt;
            &lt;x-shadlar::pagination-ellipsis /&gt;
        &lt;/x-shadlar::pagination-item&gt;
        &lt;x-shadlar::pagination-item&gt;
            &lt;x-shadlar::pagination-link href="/page/5" :isActive="true"&gt;5&lt;/x-shadlar::pagination-link&gt;
        &lt;/x-shadlar::pagination-item&gt;
        &lt;x-shadlar::pagination-item&gt;
            &lt;x-shadlar::pagination-ellipsis /&gt;
        &lt;/x-shadlar::pagination-item&gt;
        &lt;x-shadlar::pagination-item&gt;
            &lt;x-shadlar::pagination-link href="/page/10"&gt;10&lt;/x-shadlar::pagination-link&gt;
        &lt;/x-shadlar::pagination-item&gt;
    &lt;/x-shadlar::pagination-content&gt;
&lt;/x-shadlar::pagination&gt;</code></pre>
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
                            <x-shadlar::table-cell class="font-medium">pagination</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Main pagination container component</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">pagination-content</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Container for pagination items</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">pagination-item</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Individual pagination item container</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">pagination-link</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">href</x-shadlar::table-cell>
                            <x-shadlar::table-cell>string</x-shadlar::table-cell>
                            <x-shadlar::table-cell>URL for the page link</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">pagination-link</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">isActive</x-shadlar::table-cell>
                            <x-shadlar::table-cell>boolean</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Whether this is the current active page</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">pagination-link</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                            <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Page number or text to display</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">pagination-previous</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">href</x-shadlar::table-cell>
                            <x-shadlar::table-cell>string</x-shadlar::table-cell>
                            <x-shadlar::table-cell>URL for the previous page</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">pagination-next</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">href</x-shadlar::table-cell>
                            <x-shadlar::table-cell>string</x-shadlar::table-cell>
                            <x-shadlar::table-cell>URL for the next page</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">pagination-ellipsis</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Visual indicator for omitted pages (shows
                                "...")</x-shadlar::table-cell>
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
