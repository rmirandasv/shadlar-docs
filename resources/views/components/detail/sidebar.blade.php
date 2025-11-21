<x-layouts.web-layout title="Sidebar">
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
                    <x-shadlar::breadcrumb-page>Sidebar</x-shadlar::breadcrumb-page>
                </x-shadlar::breadcrumb-item>
            </x-shadlar::breadcrumb-list>
        </x-shadlar::breadcrumb>

        <div class="mb-12">
            <h1 class="text-4xl font-bold mb-4" style="color: var(--color-foreground);">Sidebar</h1>
            <p class="text-lg" style="color: var(--color-muted-foreground);">
                A collapsible sidebar component with header, content groups, and footer sections.
            </p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6" style="color: var(--color-foreground);">Examples</h2>
            
            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Basic Sidebar</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <div class="border rounded-lg p-4" style="border-color: var(--color-border);">
                        <x-shadlar::sidebar-provider>
                            <div class="flex h-64">
                                <x-shadlar::sidebar>
                                    <x-shadlar::sidebar-header>
                                        <div class="flex items-center gap-2">
                                            <h2 class="text-lg font-semibold" style="color: var(--sidebar-foreground);">
                                                My App
                                            </h2>
                                        </div>
                                    </x-shadlar::sidebar-header>
                                    <x-shadlar::sidebar-content>
                                        <x-shadlar::sidebar-group>
                                            <nav class="space-y-1">
                                                <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm transition-colors hover:bg-accent" style="color: var(--sidebar-foreground);">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                                    </svg>
                                                    Dashboard
                                                </a>
                                                <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm transition-colors hover:bg-accent" style="color: var(--sidebar-foreground);">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>
                                                    Settings
                                                </a>
                                            </nav>
                                        </x-shadlar::sidebar-group>
                                    </x-shadlar::sidebar-content>
                                </x-shadlar::sidebar>
                                <x-shadlar::sidebar-main>
                                    <div class="p-4">
                                        <x-shadlar::sidebar-trigger>
                                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                            </svg>
                                        </x-shadlar::sidebar-trigger>
                                        <p class="mt-4" style="color: var(--color-foreground);">Main content area</p>
                                    </div>
                                </x-shadlar::sidebar-main>
                            </div>
                        </x-shadlar::sidebar-provider>
                    </div>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Sidebar with Groups and Footer</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <div class="border rounded-lg p-4" style="border-color: var(--color-border);">
                        <x-shadlar::sidebar-provider>
                            <div class="flex h-80">
                                <x-shadlar::sidebar>
                                    <x-shadlar::sidebar-header>
                                        <div class="flex items-center gap-2">
                                            <h2 class="text-lg font-semibold" style="color: var(--sidebar-foreground);">
                                                My App
                                            </h2>
                                        </div>
                                    </x-shadlar::sidebar-header>
                                    <x-shadlar::sidebar-content>
                                        <x-shadlar::sidebar-group>
                                            <nav class="space-y-1">
                                                <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm transition-colors hover:bg-accent" style="color: var(--sidebar-foreground);">
                                                    Dashboard
                                                </a>
                                                <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm transition-colors hover:bg-accent" style="color: var(--sidebar-foreground);">
                                                    Settings
                                                </a>
                                            </nav>
                                        </x-shadlar::sidebar-group>
                                        <x-shadlar::sidebar-group>
                                            <h3 class="mb-2 px-3 text-xs font-semibold uppercase tracking-wider" style="color: var(--sidebar-muted-foreground);">
                                                Documentation
                                            </h3>
                                            <nav class="space-y-1">
                                                <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm transition-colors hover:bg-accent" style="color: var(--sidebar-foreground);">
                                                    Introduction
                                                </a>
                                                <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm transition-colors hover:bg-accent" style="color: var(--sidebar-foreground);">
                                                    Getting Started
                                                </a>
                                            </nav>
                                        </x-shadlar::sidebar-group>
                                    </x-shadlar::sidebar-content>
                                    <x-shadlar::sidebar-footer>
                                        <div class="flex items-center gap-2">
                                            <div class="flex-1">
                                                <p class="text-sm font-medium" style="color: var(--sidebar-foreground);">User Name</p>
                                                <p class="text-xs" style="color: var(--sidebar-muted-foreground);">user@example.com</p>
                                            </div>
                                        </div>
                                    </x-shadlar::sidebar-footer>
                                </x-shadlar::sidebar>
                                <x-shadlar::sidebar-main>
                                    <div class="p-4">
                                        <p style="color: var(--color-foreground);">Main content area with sidebar footer</p>
                                    </div>
                                </x-shadlar::sidebar-main>
                            </div>
                        </x-shadlar::sidebar-provider>
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
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::sidebar-provider&gt;
    &lt;div class="flex h-screen"&gt;
        &lt;x-shadlar::sidebar&gt;
            &lt;x-shadlar::sidebar-header&gt;
                &lt;h2&gt;My App&lt;/h2&gt;
            &lt;/x-shadlar::sidebar-header&gt;
            &lt;x-shadlar::sidebar-content&gt;
                &lt;x-shadlar::sidebar-group&gt;
                    &lt;nav class="space-y-1"&gt;
                        &lt;a href="/dashboard"&gt;Dashboard&lt;/a&gt;
                        &lt;a href="/settings"&gt;Settings&lt;/a&gt;
                    &lt;/nav&gt;
                &lt;/x-shadlar::sidebar-group&gt;
            &lt;/x-shadlar::sidebar-content&gt;
        &lt;/x-shadlar::sidebar&gt;
        &lt;x-shadlar::sidebar-main&gt;
            &lt;x-shadlar::sidebar-trigger&gt;
                &lt;!-- Menu icon --&gt;
            &lt;/x-shadlar::sidebar-trigger&gt;
            &lt;!-- Main content --&gt;
        &lt;/x-shadlar::sidebar-main&gt;
    &lt;/div&gt;
&lt;/x-shadlar::sidebar-provider&gt;</code></pre>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>With Multiple Groups</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::sidebar-content&gt;
    &lt;x-shadlar::sidebar-group&gt;
        &lt;nav&gt;
            &lt;a href="/dashboard"&gt;Dashboard&lt;/a&gt;
        &lt;/nav&gt;
    &lt;/x-shadlar::sidebar-group&gt;
    &lt;x-shadlar::sidebar-group&gt;
        &lt;h3&gt;Documentation&lt;/h3&gt;
        &lt;nav&gt;
            &lt;a href="/docs"&gt;Introduction&lt;/a&gt;
        &lt;/nav&gt;
    &lt;/x-shadlar::sidebar-group&gt;
&lt;/x-shadlar::sidebar-content&gt;</code></pre>
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
                                <x-shadlar::table-cell class="font-medium">sidebar-provider</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Main container that manages sidebar state</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">sidebar</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Sidebar container component</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">sidebar-header</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Header content (typically logo or title)</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">sidebar-content</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Main content area for navigation items</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">sidebar-group</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Optional group container for organizing navigation items</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">sidebar-footer</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Optional footer content (typically user info or actions)</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">sidebar-main</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Main content area that appears next to the sidebar</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">sidebar-trigger</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Button or element that toggles the sidebar visibility</x-shadlar::table-cell>
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

