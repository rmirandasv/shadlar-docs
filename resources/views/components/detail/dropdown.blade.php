<x-layouts.web-layout title="Dropdown">
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
                <x-shadlar::breadcrumb-page>Dropdown</x-shadlar::breadcrumb-page>
            </x-shadlar::breadcrumb-item>
        </x-shadlar::breadcrumb-list>
    </x-shadlar::breadcrumb>

    <div class="mb-12">
        <h1 class="text-4xl font-bold mb-4" style="color: var(--color-foreground);">Dropdown</h1>
        <p class="text-lg" style="color: var(--color-muted-foreground);">
            A menu that appears when clicking on a trigger element, displaying a list of options or actions.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6" style="color: var(--color-foreground);">Examples</h2>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Basic Dropdown</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <x-shadlar::dropdown>
                    <x-shadlar::dropdown-trigger>
                        <x-shadlar::button variant="outlined">Open Menu</x-shadlar::button>
                    </x-shadlar::dropdown-trigger>
                    <x-shadlar::dropdown-content>
                        <x-shadlar::dropdown-item>Option 1</x-shadlar::dropdown-item>
                        <x-shadlar::dropdown-item>Option 2</x-shadlar::dropdown-item>
                        <x-shadlar::dropdown-item>Option 3</x-shadlar::dropdown-item>
                    </x-shadlar::dropdown-content>
                </x-shadlar::dropdown>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Dropdown with Icons and Shortcuts</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <x-shadlar::dropdown>
                    <x-shadlar::dropdown-trigger>
                        <x-shadlar::button variant="outlined">Account Menu</x-shadlar::button>
                    </x-shadlar::dropdown-trigger>
                    <x-shadlar::dropdown-content>
                        <x-shadlar::dropdown-label>My Account</x-shadlar::dropdown-label>
                        <x-shadlar::dropdown-item>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Profile
                            <x-shadlar::dropdown-shortcut>⇧⌘P</x-shadlar::dropdown-shortcut>
                        </x-shadlar::dropdown-item>
                        <x-shadlar::dropdown-item>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                            Billing
                            <x-shadlar::dropdown-shortcut>⌘B</x-shadlar::dropdown-shortcut>
                        </x-shadlar::dropdown-item>
                        <x-shadlar::dropdown-item>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Settings
                            <x-shadlar::dropdown-shortcut>⌘S</x-shadlar::dropdown-shortcut>
                        </x-shadlar::dropdown-item>
                        <x-shadlar::dropdown-separator />
                        <x-shadlar::dropdown-item variant="destructive">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            Log out
                            <x-shadlar::dropdown-shortcut>⇧⌘Q</x-shadlar::dropdown-shortcut>
                        </x-shadlar::dropdown-item>
                    </x-shadlar::dropdown-content>
                </x-shadlar::dropdown>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Dropdown with Groups and Links</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <x-shadlar::dropdown>
                    <x-shadlar::dropdown-trigger>
                        <x-shadlar::button variant="outlined">More Options</x-shadlar::button>
                    </x-shadlar::dropdown-trigger>
                    <x-shadlar::dropdown-content>
                        <x-shadlar::dropdown-label>Actions</x-shadlar::dropdown-label>
                        <x-shadlar::dropdown-item>Edit</x-shadlar::dropdown-item>
                        <x-shadlar::dropdown-item>Duplicate</x-shadlar::dropdown-item>
                        <x-shadlar::dropdown-item disabled>Archive</x-shadlar::dropdown-item>
                        <x-shadlar::dropdown-separator />
                        <x-shadlar::dropdown-label>Resources</x-shadlar::dropdown-label>
                        <x-shadlar::dropdown-item href="https://github.com">GitHub</x-shadlar::dropdown-item>
                        <x-shadlar::dropdown-item href="https://laravel.com">Documentation</x-shadlar::dropdown-item>
                        <x-shadlar::dropdown-separator />
                        <x-shadlar::dropdown-item>Support</x-shadlar::dropdown-item>
                    </x-shadlar::dropdown-content>
                </x-shadlar::dropdown>
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
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::dropdown&gt;
    &lt;x-shadlar::dropdown-trigger&gt;
        &lt;x-shadlar::button variant="outlined"&gt;Open Menu&lt;/x-shadlar::button&gt;
    &lt;/x-shadlar::dropdown-trigger&gt;
    &lt;x-shadlar::dropdown-content&gt;
        &lt;x-shadlar::dropdown-item&gt;Option 1&lt;/x-shadlar::dropdown-item&gt;
        &lt;x-shadlar::dropdown-item&gt;Option 2&lt;/x-shadlar::dropdown-item&gt;
        &lt;x-shadlar::dropdown-item&gt;Option 3&lt;/x-shadlar::dropdown-item&gt;
    &lt;/x-shadlar::dropdown-content&gt;
&lt;/x-shadlar::dropdown&gt;</code></pre>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>With Icons and Shortcuts</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::dropdown&gt;
    &lt;x-shadlar::dropdown-trigger&gt;
        &lt;x-shadlar::button&gt;Menu&lt;/x-shadlar::button&gt;
    &lt;/x-shadlar::dropdown-trigger&gt;
    &lt;x-shadlar::dropdown-content&gt;
        &lt;x-shadlar::dropdown-label&gt;My Account&lt;/x-shadlar::dropdown-label&gt;
        &lt;x-shadlar::dropdown-item&gt;
            &lt;svg class="w-4 h-4"&gt;...&lt;/svg&gt;
            Profile
            &lt;x-shadlar::dropdown-shortcut&gt;⇧⌘P&lt;/x-shadlar::dropdown-shortcut&gt;
        &lt;/x-shadlar::dropdown-item&gt;
        &lt;x-shadlar::dropdown-separator /&gt;
        &lt;x-shadlar::dropdown-item variant="destructive"&gt;
            Log out
        &lt;/x-shadlar::dropdown-item&gt;
    &lt;/x-shadlar::dropdown-content&gt;
&lt;/x-shadlar::dropdown&gt;</code></pre>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>With Links and Disabled Items</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::dropdown-content&gt;
    &lt;x-shadlar::dropdown-item href="https://example.com"&gt;External Link&lt;/x-shadlar::dropdown-item&gt;
    &lt;x-shadlar::dropdown-item disabled&gt;Disabled Option&lt;/x-shadlar::dropdown-item&gt;
    &lt;x-shadlar::dropdown-separator /&gt;
    &lt;x-shadlar::dropdown-item variant="destructive"&gt;Delete&lt;/x-shadlar::dropdown-item&gt;
&lt;/x-shadlar::dropdown-content&gt;</code></pre>
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
                            <x-shadlar::table-cell class="font-medium">dropdown</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Main dropdown container component</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">dropdown-trigger</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Button or element that opens the dropdown
                                menu</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">dropdown-content</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Container for dropdown menu items</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">dropdown-label</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Section label for grouping menu items</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">dropdown-item</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">variant</x-shadlar::table-cell>
                            <x-shadlar::table-cell>string</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Item style variant: default, destructive</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">dropdown-item</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">href</x-shadlar::table-cell>
                            <x-shadlar::table-cell>string</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Optional URL for link items</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">dropdown-item</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">disabled</x-shadlar::table-cell>
                            <x-shadlar::table-cell>boolean</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Disable the menu item</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">dropdown-item</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                            <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Item content (text, icons, shortcuts)</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">dropdown-shortcut</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Keyboard shortcut display (e.g., "⌘K")</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">dropdown-separator</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Visual separator between menu sections</x-shadlar::table-cell>
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
