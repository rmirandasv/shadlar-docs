<x-layouts.web-layout title="Tabs">
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
                <x-shadlar::breadcrumb-page>Tabs</x-shadlar::breadcrumb-page>
            </x-shadlar::breadcrumb-item>
        </x-shadlar::breadcrumb-list>
    </x-shadlar::breadcrumb>

    <div class="mb-12">
        <h1 class="text-4xl font-bold mb-4" style="color: var(--color-foreground);">Tabs</h1>
        <p class="text-lg" style="color: var(--color-muted-foreground);">
            Organize content into tabbed interfaces that allow users to switch between different views or sections.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6" style="color: var(--color-foreground);">Examples</h2>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Basic Tabs</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <x-shadlar::tabs defaultValue="tab1">
                    <x-shadlar::tabs-list>
                        <x-shadlar::tabs-trigger value="tab1">Overview</x-shadlar::tabs-trigger>
                        <x-shadlar::tabs-trigger value="tab2">Analytics</x-shadlar::tabs-trigger>
                        <x-shadlar::tabs-trigger value="tab3">Settings</x-shadlar::tabs-trigger>
                    </x-shadlar::tabs-list>

                    <x-shadlar::tabs-content value="tab1">
                        <div class="mt-4">
                            <p style="color: var(--color-foreground);">This is the overview tab content. You can display
                                any information here.</p>
                        </div>
                    </x-shadlar::tabs-content>

                    <x-shadlar::tabs-content value="tab2">
                        <div class="mt-4">
                            <p style="color: var(--color-foreground);">Analytics data and charts would go here.</p>
                        </div>
                    </x-shadlar::tabs-content>

                    <x-shadlar::tabs-content value="tab3">
                        <div class="mt-4">
                            <p style="color: var(--color-foreground);">Settings and configuration options would be
                                displayed here.</p>
                        </div>
                    </x-shadlar::tabs-content>
                </x-shadlar::tabs>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Tabs with Rich Content</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <x-shadlar::tabs defaultValue="account">
                    <x-shadlar::tabs-list>
                        <x-shadlar::tabs-trigger value="account">Account</x-shadlar::tabs-trigger>
                        <x-shadlar::tabs-trigger value="password">Password</x-shadlar::tabs-trigger>
                        <x-shadlar::tabs-trigger value="notifications">Notifications</x-shadlar::tabs-trigger>
                    </x-shadlar::tabs-list>

                    <x-shadlar::tabs-content value="account">
                        <x-shadlar::card class="mt-4">
                            <x-shadlar::card-header>
                                <x-shadlar::card-title>Account Settings</x-shadlar::card-title>
                                <x-shadlar::card-description>
                                    Make changes to your account here. Click save when you're done.
                                </x-shadlar::card-description>
                            </x-shadlar::card-header>
                            <x-shadlar::card-body>
                                <div class="space-y-4">
                                    <div>
                                        <label class="text-sm font-medium"
                                            style="color: var(--color-foreground);">Name</label>
                                        <input type="text" class="w-full rounded border px-3 py-2 mt-1"
                                            style="background-color: var(--color-muted); border-color: var(--color-border); color: var(--color-foreground);"
                                            value="Pedro Duarte">
                                    </div>
                                    <div>
                                        <label class="text-sm font-medium"
                                            style="color: var(--color-foreground);">Email</label>
                                        <input type="email" class="w-full rounded border px-3 py-2 mt-1"
                                            style="background-color: var(--color-muted); border-color: var(--color-border); color: var(--color-foreground);"
                                            value="pedro@example.com">
                                    </div>
                                </div>
                            </x-shadlar::card-body>
                            <x-shadlar::card-footer>
                                <x-shadlar::button>Save changes</x-shadlar::button>
                            </x-shadlar::card-footer>
                        </x-shadlar::card>
                    </x-shadlar::tabs-content>

                    <x-shadlar::tabs-content value="password">
                        <x-shadlar::card class="mt-4">
                            <x-shadlar::card-header>
                                <x-shadlar::card-title>Change Password</x-shadlar::card-title>
                                <x-shadlar::card-description>
                                    Update your password here. After saving, you'll be logged out.
                                </x-shadlar::card-description>
                            </x-shadlar::card-header>
                            <x-shadlar::card-body>
                                <div class="space-y-4">
                                    <div>
                                        <label class="text-sm font-medium"
                                            style="color: var(--color-foreground);">Current Password</label>
                                        <input type="password" class="w-full rounded border px-3 py-2 mt-1"
                                            style="background-color: var(--color-muted); border-color: var(--color-border); color: var(--color-foreground);">
                                    </div>
                                    <div>
                                        <label class="text-sm font-medium" style="color: var(--color-foreground);">New
                                            Password</label>
                                        <input type="password" class="w-full rounded border px-3 py-2 mt-1"
                                            style="background-color: var(--color-muted); border-color: var(--color-border); color: var(--color-foreground);">
                                    </div>
                                </div>
                            </x-shadlar::card-body>
                            <x-shadlar::card-footer>
                                <x-shadlar::button>Save password</x-shadlar::button>
                            </x-shadlar::card-footer>
                        </x-shadlar::card>
                    </x-shadlar::tabs-content>

                    <x-shadlar::tabs-content value="notifications">
                        <x-shadlar::card class="mt-4">
                            <x-shadlar::card-header>
                                <x-shadlar::card-title>Notification Preferences</x-shadlar::card-title>
                                <x-shadlar::card-description>
                                    Manage how you receive notifications.
                                </x-shadlar::card-description>
                            </x-shadlar::card-header>
                            <x-shadlar::card-body>
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <span style="color: var(--color-foreground);">Email notifications</span>
                                        <input type="checkbox" checked>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span style="color: var(--color-foreground);">Push notifications</span>
                                        <input type="checkbox">
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span style="color: var(--color-foreground);">SMS notifications</span>
                                        <input type="checkbox">
                                    </div>
                                </div>
                            </x-shadlar::card-body>
                        </x-shadlar::card>
                    </x-shadlar::tabs-content>
                </x-shadlar::tabs>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Tabs with Icons</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <x-shadlar::tabs defaultValue="home">
                    <x-shadlar::tabs-list>
                        <x-shadlar::tabs-trigger value="home">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Home
                        </x-shadlar::tabs-trigger>
                        <x-shadlar::tabs-trigger value="messages">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            Messages
                        </x-shadlar::tabs-trigger>
                        <x-shadlar::tabs-trigger value="settings">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Settings
                        </x-shadlar::tabs-trigger>
                    </x-shadlar::tabs-list>

                    <x-shadlar::tabs-content value="home">
                        <div class="mt-4">
                            <p style="color: var(--color-foreground);">Welcome to the home tab with an icon.</p>
                        </div>
                    </x-shadlar::tabs-content>

                    <x-shadlar::tabs-content value="messages">
                        <div class="mt-4">
                            <p style="color: var(--color-foreground);">Your messages would appear here.</p>
                        </div>
                    </x-shadlar::tabs-content>

                    <x-shadlar::tabs-content value="settings">
                        <div class="mt-4">
                            <p style="color: var(--color-foreground);">Settings and preferences go here.</p>
                        </div>
                    </x-shadlar::tabs-content>
                </x-shadlar::tabs>
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
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::tabs defaultValue="tab1"&gt;
    &lt;x-shadlar::tabs-list&gt;
        &lt;x-shadlar::tabs-trigger value="tab1"&gt;Tab 1&lt;/x-shadlar::tabs-trigger&gt;
        &lt;x-shadlar::tabs-trigger value="tab2"&gt;Tab 2&lt;/x-shadlar::tabs-trigger&gt;
        &lt;x-shadlar::tabs-trigger value="tab3"&gt;Tab 3&lt;/x-shadlar::tabs-trigger&gt;
    &lt;/x-shadlar::tabs-list&gt;

    &lt;x-shadlar::tabs-content value="tab1"&gt;
        &lt;p&gt;Content for Tab 1&lt;/p&gt;
    &lt;/x-shadlar::tabs-content&gt;

    &lt;x-shadlar::tabs-content value="tab2"&gt;
        &lt;p&gt;Content for Tab 2&lt;/p&gt;
    &lt;/x-shadlar::tabs-content&gt;

    &lt;x-shadlar::tabs-content value="tab3"&gt;
        &lt;p&gt;Content for Tab 3&lt;/p&gt;
    &lt;/x-shadlar::tabs-content&gt;
&lt;/x-shadlar::tabs&gt;</code></pre>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>With Rich Content</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::tabs defaultValue="account"&gt;
    &lt;x-shadlar::tabs-list&gt;
        &lt;x-shadlar::tabs-trigger value="account"&gt;Account&lt;/x-shadlar::tabs-trigger&gt;
        &lt;x-shadlar::tabs-trigger value="password"&gt;Password&lt;/x-shadlar::tabs-trigger&gt;
    &lt;/x-shadlar::tabs-list&gt;

    &lt;x-shadlar::tabs-content value="account"&gt;
        &lt;x-shadlar::card&gt;
            &lt;x-shadlar::card-header&gt;
                &lt;x-shadlar::card-title&gt;Account Settings&lt;/x-shadlar::card-title&gt;
            &lt;/x-shadlar::card-header&gt;
            &lt;x-shadlar::card-body&gt;
                &lt;!-- Form content --&gt;
            &lt;/x-shadlar::card-body&gt;
        &lt;/x-shadlar::card&gt;
    &lt;/x-shadlar::tabs-content&gt;
&lt;/x-shadlar::tabs&gt;</code></pre>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>With Icons</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::tabs-trigger value="home"&gt;
    &lt;svg class="w-4 h-4 mr-2"&gt;...&lt;/svg&gt;
    Home
&lt;/x-shadlar::tabs-trigger&gt;</code></pre>
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
                            <x-shadlar::table-cell class="font-medium">tabs</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">defaultValue</x-shadlar::table-cell>
                            <x-shadlar::table-cell>string</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Value of the tab that should be active by
                                default</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">tabs-list</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Container for tab triggers</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">tabs-trigger</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">value</x-shadlar::table-cell>
                            <x-shadlar::table-cell>string</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Unique identifier for the tab (must match tabs-content
                                value)</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">tabs-trigger</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                            <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Tab label (text, icons, or both)</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">tabs-content</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">value</x-shadlar::table-cell>
                            <x-shadlar::table-cell>string</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Unique identifier matching the corresponding tabs-trigger
                                value</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">tabs-content</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                            <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Content displayed when the tab is active</x-shadlar::table-cell>
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
