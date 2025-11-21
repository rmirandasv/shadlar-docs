<x-layouts.web-layout title="Components">
    <div class="mb-12">
        <x-shadlar::breadcrumb>
            <x-shadlar::breadcrumb-list>
                <x-shadlar::breadcrumb-item>
                    <x-shadlar::breadcrumb-link href="/">Home</x-shadlar::breadcrumb-link>
                    <x-shadlar::breadcrumb-separator />
                </x-shadlar::breadcrumb-item>
                <x-shadlar::breadcrumb-item>
                    <x-shadlar::breadcrumb-page>Components</x-shadlar::breadcrumb-page>
                </x-shadlar::breadcrumb-item>
            </x-shadlar::breadcrumb-list>
        </x-shadlar::breadcrumb>

        <h1 class="text-4xl font-bold mt-8 mb-4" style="color: var(--color-foreground);">
            Components
        </h1>
        <p class="text-lg mb-8" style="color: var(--color-muted-foreground);">
            Browse all available components in the Shadlar library. Each component is ready to use and fully
            customizable.
        </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
        <a href="/components/button" class="block h-full">
            <x-shadlar::card class="hover:shadow-lg transition-shadow h-full flex flex-col">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Buttons</x-shadlar::card-title>
                    <x-shadlar::card-description>
                        Multiple variants and sizes for all your action needs.
                    </x-shadlar::card-description>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <div class="flex flex-wrap gap-2">
                        <x-shadlar::button variant="primary" size="sm">Primary</x-shadlar::button>
                        <x-shadlar::button variant="secondary" size="sm">Secondary</x-shadlar::button>
                        <x-shadlar::button variant="outlined" size="sm">Outlined</x-shadlar::button>
                        <x-shadlar::button variant="ghost" size="sm">Ghost</x-shadlar::button>
                    </div>
                </x-shadlar::card-body>
                <x-shadlar::card-footer class="mt-auto">
                    <x-shadlar::badge variant="secondary">4 variants</x-shadlar::badge>
                    <x-shadlar::badge variant="secondary">3 sizes</x-shadlar::badge>
                    <x-shadlar::button variant="ghost" size="sm" class="ml-auto">View Details →</x-shadlar::button>
                </x-shadlar::card-footer>
            </x-shadlar::card>
        </a>

        <a href="/components/alert" class="block h-full">
            <x-shadlar::card class="hover:shadow-lg transition-shadow h-full flex flex-col">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Alerts</x-shadlar::card-title>
                    <x-shadlar::card-description>
                        Display important messages and notifications to users.
                    </x-shadlar::card-description>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <x-shadlar::alert variant="info" title="Info alert example">
                        <x-slot:icon>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </x-slot:icon>
                    </x-shadlar::alert>
                </x-shadlar::card-body>
                <x-shadlar::card-footer class="mt-auto">
                    <x-shadlar::badge variant="secondary">4 variants</x-shadlar::badge>
                    <x-shadlar::button variant="ghost" size="sm" class="ml-auto">View Details →</x-shadlar::button>
                </x-shadlar::card-footer>
            </x-shadlar::card>
        </a>

        <a href="/components/card" class="block h-full">
            <x-shadlar::card class="hover:shadow-lg transition-shadow h-full flex flex-col">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Cards</x-shadlar::card-title>
                    <x-shadlar::card-description>
                        Flexible containers for displaying content and actions.
                    </x-shadlar::card-description>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <p class="text-sm" style="color: var(--color-muted-foreground);">
                        Cards include header, body, and footer sections.
                    </p>
                </x-shadlar::card-body>
                <x-shadlar::card-footer class="mt-auto">
                    <x-shadlar::button variant="ghost" size="sm" class="ml-auto">View Details →</x-shadlar::button>
                </x-shadlar::card-footer>
            </x-shadlar::card>
        </a>

        <a href="/components/form" class="block h-full">
            <x-shadlar::card class="hover:shadow-lg transition-shadow h-full flex flex-col">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Forms</x-shadlar::card-title>
                    <x-shadlar::card-description>
                        Complete form components with validation support.
                    </x-shadlar::card-description>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <div class="space-y-2">
                        <x-shadlar::input placeholder="Text input" />
                        <x-shadlar::textarea placeholder="Textarea" rows="2" />
                    </div>
                </x-shadlar::card-body>
                <x-shadlar::card-footer class="mt-auto overflow-x-auto">
                    <x-shadlar::badge variant="secondary">6 components</x-shadlar::badge>
                    <x-shadlar::button variant="ghost" size="sm" class="ml-auto">View Details →</x-shadlar::button>
                </x-shadlar::card-footer>
            </x-shadlar::card>
        </a>

        <a href="/components/table" class="block h-full">
            <x-shadlar::card class="hover:shadow-lg transition-shadow h-full flex flex-col">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Tables</x-shadlar::card-title>
                    <x-shadlar::card-description>
                        Display structured data with headers, rows, and cells.
                    </x-shadlar::card-description>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <x-shadlar::table>
                        <x-shadlar::table-header>
                            <x-shadlar::table-row>
                                <x-shadlar::table-head>Name</x-shadlar::table-head>
                                <x-shadlar::table-head align="right">Value</x-shadlar::table-head>
                            </x-shadlar::table-row>
                        </x-shadlar::table-header>
                        <x-shadlar::table-body>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell>Example</x-shadlar::table-cell>
                                <x-shadlar::table-cell align="right">123</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                        </x-shadlar::table-body>
                    </x-shadlar::table>
                </x-shadlar::card-body>
                <x-shadlar::card-footer class="mt-auto">
                    <x-shadlar::button variant="ghost" size="sm" class="ml-auto">View Details →</x-shadlar::button>
                </x-shadlar::card-footer>
            </x-shadlar::card>
        </a>

        <a href="/components/dialog" class="block h-full">
            <x-shadlar::card class="hover:shadow-lg transition-shadow h-full flex flex-col">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Dialogs</x-shadlar::card-title>
                    <x-shadlar::card-description>
                        Modal windows for forms, confirmations, and more.
                    </x-shadlar::card-description>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <p class="text-sm" style="color: var(--color-muted-foreground);">
                        Dialogs include header, body, and footer sections.
                    </p>
                </x-shadlar::card-body>
                <x-shadlar::card-footer class="mt-auto">
                    <x-shadlar::button variant="ghost" size="sm" class="ml-auto">View Details →</x-shadlar::button>
                </x-shadlar::card-footer>
            </x-shadlar::card>
        </a>

        <a href="/components/accordion" class="block h-full">
            <x-shadlar::card class="hover:shadow-lg transition-shadow h-full flex flex-col">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Accordions</x-shadlar::card-title>
                    <x-shadlar::card-description>
                        Collapsible content sections for FAQs and details.
                    </x-shadlar::card-description>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <x-shadlar::accordion title="Example accordion" :defaultOpen="false">
                        <p class="text-sm">Collapsible content goes here.</p>
                    </x-shadlar::accordion>
                </x-shadlar::card-body>
                <x-shadlar::card-footer class="mt-auto">
                    <x-shadlar::button variant="ghost" size="sm" class="ml-auto">View Details →</x-shadlar::button>
                </x-shadlar::card-footer>
            </x-shadlar::card>
        </a>

        <a href="/components/badge" class="block h-full">
            <x-shadlar::card class="hover:shadow-lg transition-shadow h-full flex flex-col">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Badges</x-shadlar::card-title>
                    <x-shadlar::card-description>
                        Small labels for status, categories, and tags.
                    </x-shadlar::card-description>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <div class="flex flex-wrap gap-2">
                        <x-shadlar::badge>Default</x-shadlar::badge>
                        <x-shadlar::badge variant="secondary">Secondary</x-shadlar::badge>
                        <x-shadlar::badge variant="destructive">Destructive</x-shadlar::badge>
                        <x-shadlar::badge variant="outlined">Outlined</x-shadlar::badge>
                    </div>
                </x-shadlar::card-body>
                <x-shadlar::card-footer class="mt-auto">
                    <x-shadlar::button variant="ghost" size="sm" class="ml-auto">View Details
                        →</x-shadlar::button>
                </x-shadlar::card-footer>
            </x-shadlar::card>
        </a>

        <a href="/components/dropdown" class="block h-full">
            <x-shadlar::card class="hover:shadow-lg transition-shadow h-full flex flex-col">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Dropdowns</x-shadlar::card-title>
                    <x-shadlar::card-description>
                        Context menus and action dropdowns.
                    </x-shadlar::card-description>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <x-shadlar::dropdown>
                        <x-shadlar::dropdown-trigger>
                            <x-shadlar::button variant="outlined" size="sm">Open Menu</x-shadlar::button>
                        </x-shadlar::dropdown-trigger>
                        <x-shadlar::dropdown-content>
                            <x-shadlar::dropdown-item>Option 1</x-shadlar::dropdown-item>
                            <x-shadlar::dropdown-item>Option 2</x-shadlar::dropdown-item>
                        </x-shadlar::dropdown-content>
                    </x-shadlar::dropdown>
                </x-shadlar::card-body>
                <x-shadlar::card-footer class="mt-auto">
                    <x-shadlar::button variant="ghost" size="sm" class="ml-auto">View Details
                        →</x-shadlar::button>
                </x-shadlar::card-footer>
            </x-shadlar::card>
        </a>

        <a href="/components/tabs" class="block h-full">
            <x-shadlar::card class="hover:shadow-lg transition-shadow h-full flex flex-col">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Tabs</x-shadlar::card-title>
                    <x-shadlar::card-description>
                        Organize content into tabbed interfaces.
                    </x-shadlar::card-description>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <x-shadlar::tabs defaultValue="tab1">
                        <x-shadlar::tabs-list>
                            <x-shadlar::tabs-trigger value="tab1">Tab 1</x-shadlar::tabs-trigger>
                            <x-shadlar::tabs-trigger value="tab2">Tab 2</x-shadlar::tabs-trigger>
                        </x-shadlar::tabs-list>
                        <x-shadlar::tabs-content value="tab1">
                            <p class="text-sm">Tab content</p>
                        </x-shadlar::tabs-content>
                    </x-shadlar::tabs>
                </x-shadlar::card-body>
                <x-shadlar::card-footer class="mt-auto">
                    <x-shadlar::button variant="ghost" size="sm" class="ml-auto">View Details
                        →</x-shadlar::button>
                </x-shadlar::card-footer>
            </x-shadlar::card>
        </a>

        <x-shadlar::card class="hover:shadow-lg transition-shadow h-full flex flex-col">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Breadcrumbs</x-shadlar::card-title>
                <x-shadlar::card-description>
                    Navigation paths showing current location.
                </x-shadlar::card-description>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <x-shadlar::breadcrumb>
                    <x-shadlar::breadcrumb-list>
                        <x-shadlar::breadcrumb-item>
                            <x-shadlar::breadcrumb-link href="/">Home</x-shadlar::breadcrumb-link>
                            <x-shadlar::breadcrumb-separator />
                        </x-shadlar::breadcrumb-item>
                        <x-shadlar::breadcrumb-item>
                            <x-shadlar::breadcrumb-page>Current</x-shadlar::breadcrumb-page>
                        </x-shadlar::breadcrumb-item>
                    </x-shadlar::breadcrumb-list>
                </x-shadlar::breadcrumb>
            </x-shadlar::card-body>
            <x-shadlar::card-footer class="mt-auto">
                <x-shadlar::button asLink href="/components/breadcrumb" variant="ghost" size="sm"
                    class="ml-auto">View Details →</x-shadlar::button>
            </x-shadlar::card-footer>
        </x-shadlar::card>

        <x-shadlar::card class="hover:shadow-lg transition-shadow h-full flex flex-col">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Pagination</x-shadlar::card-title>
                <x-shadlar::card-description>
                    Navigate through pages of content.
                </x-shadlar::card-description>
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
            <x-shadlar::card-footer class="mt-auto">
                <x-shadlar::button asLink href="/components/pagination" variant="ghost" size="sm"
                    class="ml-auto">View Details →</x-shadlar::button>
            </x-shadlar::card-footer>
        </x-shadlar::card>

        <a href="/components/empty-state" class="block h-full">
            <x-shadlar::card class="hover:shadow-lg transition-shadow h-full flex flex-col">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Empty State</x-shadlar::card-title>
                    <x-shadlar::card-description>
                        Display when there's no content to show.
                    </x-shadlar::card-description>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <p class="text-sm" style="color: var(--color-muted-foreground);">
                        Includes icon, title, description, and actions.
                    </p>
                </x-shadlar::card-body>
                <x-shadlar::card-footer class="mt-auto">
                    <x-shadlar::button variant="ghost" size="sm" class="ml-auto">View Details
                        →</x-shadlar::button>
                </x-shadlar::card-footer>
            </x-shadlar::card>
        </a>

        <a href="/components/combobox" class="block h-full">
            <x-shadlar::card class="hover:shadow-lg transition-shadow h-full flex flex-col">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Combobox</x-shadlar::card-title>
                    <x-shadlar::card-description>
                        Searchable select dropdowns with filtering.
                    </x-shadlar::card-description>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <p class="text-sm" style="color: var(--color-muted-foreground);">
                        Searchable dropdown component.
                    </p>
                </x-shadlar::card-body>
                <x-shadlar::card-footer class="mt-auto">
                    <x-shadlar::button variant="ghost" size="sm" class="ml-auto">View Details
                        →</x-shadlar::button>
                </x-shadlar::card-footer>
            </x-shadlar::card>
        </a>

        <a href="/components/navigation-menu" class="block h-full">
            <x-shadlar::card class="hover:shadow-lg transition-shadow h-full flex flex-col">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Navigation Menu</x-shadlar::card-title>
                    <x-shadlar::card-description>
                        Responsive navigation bars with links.
                    </x-shadlar::card-description>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <p class="text-sm" style="color: var(--color-muted-foreground);">
                        Used in the header of this page.
                    </p>
                </x-shadlar::card-body>
                <x-shadlar::card-footer class="mt-auto">
                    <x-shadlar::button variant="ghost" size="sm" class="ml-auto">View Details
                        →</x-shadlar::button>
                </x-shadlar::card-footer>
            </x-shadlar::card>
        </a>

        <a href="/components/avatar" class="block h-full">
            <x-shadlar::card class="hover:shadow-lg transition-shadow h-full flex flex-col">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Avatar</x-shadlar::card-title>
                    <x-shadlar::card-description>
                        User profile images with fallback support.
                    </x-shadlar::card-description>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <div class="flex gap-2">
                        <x-shadlar::avatar size="md">JD</x-shadlar::avatar>
                        <x-shadlar::avatar size="md">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </x-shadlar::avatar>
                    </div>
                </x-shadlar::card-body>
                <x-shadlar::card-footer class="mt-auto">
                    <x-shadlar::button variant="ghost" size="sm" class="ml-auto">View Details
                        →</x-shadlar::button>
                </x-shadlar::card-footer>
            </x-shadlar::card>
        </a>

        <a href="/components/sidebar" class="block h-full">
            <x-shadlar::card class="hover:shadow-lg transition-shadow h-full flex flex-col">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Sidebar</x-shadlar::card-title>
                    <x-shadlar::card-description>
                        Collapsible sidebar navigation component.
                    </x-shadlar::card-description>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <p class="text-sm" style="color: var(--color-muted-foreground);">
                        See the dashboard page for a full example.
                    </p>
                </x-shadlar::card-body>
                <x-shadlar::card-footer class="mt-auto">
                    <x-shadlar::button variant="ghost" size="sm" class="ml-auto">View Details
                        →</x-shadlar::button>
                </x-shadlar::card-footer>
            </x-shadlar::card>
        </a>
    </div>

    <section class="mt-16 text-center">
        <x-shadlar::card class="max-w-2xl mx-auto">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Want to see all examples?</x-shadlar::card-title>
                <x-shadlar::card-description>
                    Visit the dashboard page to see all components in action with full code examples.
                </x-shadlar::card-description>
            </x-shadlar::card-header>
            <x-shadlar::card-footer class="flex justify-center gap-4">
                <a href="/dashboard">
                    <x-shadlar::button size="lg">View Dashboard</x-shadlar::button>
                </a>
            </x-shadlar::card-footer>
        </x-shadlar::card>
    </section>
    
</x-layouts.web-layout>