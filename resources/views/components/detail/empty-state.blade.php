<x-layouts.web-layout title="Empty State">
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
                    <x-shadlar::breadcrumb-page>Empty State</x-shadlar::breadcrumb-page>
                </x-shadlar::breadcrumb-item>
            </x-shadlar::breadcrumb-list>
        </x-shadlar::breadcrumb>

        <div class="mb-12">
            <h1 class="text-4xl font-bold mb-4" style="color: var(--color-foreground);">Empty State</h1>
            <p class="text-lg" style="color: var(--color-muted-foreground);">
                Display helpful messages and actions when there's no content to show.
            </p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6" style="color: var(--color-foreground);">Examples</h2>
            
            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Basic Empty State</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <x-shadlar::empty>
                        <x-shadlar::empty-icon>
                            <svg class="h-20 w-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                            </svg>
                        </x-shadlar::empty-icon>
                        <x-shadlar::empty-title>
                            No items found
                        </x-shadlar::empty-title>
                        <x-shadlar::empty-description>
                            There are no items to display at this time.
                        </x-shadlar::empty-description>
                    </x-shadlar::empty>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Empty State with Actions</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <x-shadlar::empty>
                        <x-shadlar::empty-icon>
                            <svg class="h-20 w-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </x-shadlar::empty-icon>
                        <x-shadlar::empty-title>
                            No Projects Yet
                        </x-shadlar::empty-title>
                        <x-shadlar::empty-description>
                            You haven't created any projects yet.
                            <br>
                            Get started by creating your first project.
                        </x-shadlar::empty-description>
                        <x-shadlar::empty-actions>
                            <x-shadlar::button>Create Project</x-shadlar::button>
                            <x-shadlar::button variant="outlined">Import Project</x-shadlar::button>
                        </x-shadlar::empty-actions>
                    </x-shadlar::empty>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Empty State with Link</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <x-shadlar::empty>
                        <x-shadlar::empty-icon>
                            <svg class="h-20 w-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </x-shadlar::empty-icon>
                        <x-shadlar::empty-title>
                            No Documents
                        </x-shadlar::empty-title>
                        <x-shadlar::empty-description>
                            You don't have any documents yet. Start by uploading your first document.
                        </x-shadlar::empty-description>
                        <x-shadlar::empty-actions>
                            <x-shadlar::button>Upload Document</x-shadlar::button>
                        </x-shadlar::empty-actions>
                        <x-shadlar::empty-link href="/docs">
                            Learn more about documents
                        </x-shadlar::empty-link>
                    </x-shadlar::empty>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Minimal Empty State</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <x-shadlar::empty>
                        <x-shadlar::empty-icon>
                            <svg class="h-16 w-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </x-shadlar::empty-icon>
                        <x-shadlar::empty-title>
                            Nothing here
                        </x-shadlar::empty-title>
                    </x-shadlar::empty>
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
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::empty&gt;
    &lt;x-shadlar::empty-icon&gt;
        &lt;svg class="h-20 w-20"&gt;...&lt;/svg&gt;
    &lt;/x-shadlar::empty-icon&gt;
    &lt;x-shadlar::empty-title&gt;
        No items found
    &lt;/x-shadlar::empty-title&gt;
    &lt;x-shadlar::empty-description&gt;
        There are no items to display at this time.
    &lt;/x-shadlar::empty-description&gt;
&lt;/x-shadlar::empty&gt;</code></pre>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>With Actions</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::empty&gt;
    &lt;x-shadlar::empty-icon&gt;
        &lt;svg class="h-20 w-20"&gt;...&lt;/svg&gt;
    &lt;/x-shadlar::empty-icon&gt;
    &lt;x-shadlar::empty-title&gt;
        No Projects Yet
    &lt;/x-shadlar::empty-title&gt;
    &lt;x-shadlar::empty-description&gt;
        You haven't created any projects yet.
    &lt;/x-shadlar::empty-description&gt;
    &lt;x-shadlar::empty-actions&gt;
        &lt;x-shadlar::button&gt;Create Project&lt;/x-shadlar::button&gt;
        &lt;x-shadlar::button variant="outlined"&gt;Import Project&lt;/x-shadlar::button&gt;
    &lt;/x-shadlar::empty-actions&gt;
&lt;/x-shadlar::empty&gt;</code></pre>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>With Link</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::empty&gt;
    &lt;x-shadlar::empty-icon&gt;
        &lt;svg class="h-20 w-20"&gt;...&lt;/svg&gt;
    &lt;/x-shadlar::empty-icon&gt;
    &lt;x-shadlar::empty-title&gt;
        No Documents
    &lt;/x-shadlar::empty-title&gt;
    &lt;x-shadlar::empty-description&gt;
        You don't have any documents yet.
    &lt;/x-shadlar::empty-description&gt;
    &lt;x-shadlar::empty-actions&gt;
        &lt;x-shadlar::button&gt;Upload Document&lt;/x-shadlar::button&gt;
    &lt;/x-shadlar::empty-actions&gt;
    &lt;x-shadlar::empty-link href="/docs"&gt;
        Learn more about documents
    &lt;/x-shadlar::empty-link&gt;
&lt;/x-shadlar::empty&gt;</code></pre>
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
                                <x-shadlar::table-cell class="font-medium">empty</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Main empty state container component</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">empty-icon</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Icon or illustration to display (typically SVG)</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">empty-title</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Main title or heading text</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">empty-description</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Optional description or explanation text</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">empty-actions</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Optional action buttons (e.g., "Create", "Import")</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">empty-link</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">href</x-shadlar::table-cell>
                                <x-shadlar::table-cell>string</x-shadlar::table-cell>
                                <x-shadlar::table-cell>URL for an optional help or documentation link</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">empty-link</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Link text (e.g., "Learn more", "View documentation")</x-shadlar::table-cell>
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

