<x-layouts.web-layout title="Home">
    <section class="text-center mb-24">
        <div class="mb-6">
            <x-shadlar::badge variant="primary" class="text-sm">Laravel Blade Components</x-shadlar::badge>
        </div>
        <h1 class="text-5xl font-bold mb-6" style="color: var(--color-foreground);">
            Build beautiful interfaces with Shadlar
        </h1>
        <p class="text-xl mb-8 max-w-2xl mx-auto" style="color: var(--color-muted-foreground);">
            A collection of reusable Blade components for Laravel. Copy, paste, and customize to build your next project
            faster.
        </p>
        <div class="flex gap-4 justify-center">
            <a href="/components">
                <x-shadlar::button size="lg">View Components</x-shadlar::button>
            </a>
            <x-shadlar::button variant="outlined" size="lg">Documentation</x-shadlar::button>
        </div>
    </section>

    <section class="mb-24">
        <div class="grid md:grid-cols-3 gap-6">
            <x-shadlar::card>
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Copy & Paste</x-shadlar::card-title>
                    <x-shadlar::card-description>
                        All components are ready to use. Just copy the code and paste it into your project.
                    </x-shadlar::card-description>
                </x-shadlar::card-header>
            </x-shadlar::card>

            <x-shadlar::card>
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Fully Customizable</x-shadlar::card-title>
                    <x-shadlar::card-description>
                        Built with Tailwind CSS. Easy to customize and extend to match your design system.
                    </x-shadlar::card-description>
                </x-shadlar::card-header>
            </x-shadlar::card>

            <x-shadlar::card>
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Accessible</x-shadlar::card-title>
                    <x-shadlar::card-description>
                        Components follow accessibility best practices and work with screen readers.
                    </x-shadlar::card-description>
                </x-shadlar::card-header>
            </x-shadlar::card>
        </div>
    </section>

    <section class="mb-24">
        <h2 class="text-3xl font-bold mb-8 text-center" style="color: var(--color-foreground);">
            What's included
        </h2>
        <div class="max-w-4xl mx-auto">
            <x-shadlar::card>
                <x-shadlar::card-body>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="flex items-center gap-3">
                            <x-shadlar::badge variant="secondary">Buttons</x-shadlar::badge>
                            <span style="color: var(--color-foreground);">Multiple variants and sizes</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <x-shadlar::badge variant="secondary">Forms</x-shadlar::badge>
                            <span style="color: var(--color-foreground);">Inputs, selects, checkboxes</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <x-shadlar::badge variant="secondary">Cards</x-shadlar::badge>
                            <span style="color: var(--color-foreground);">Flexible content containers</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <x-shadlar::badge variant="secondary">Dialogs</x-shadlar::badge>
                            <span style="color: var(--color-foreground);">Modal windows and overlays</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <x-shadlar::badge variant="secondary">Tables</x-shadlar::badge>
                            <span style="color: var(--color-foreground);">Data display and organization</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <x-shadlar::badge variant="secondary">Navigation</x-shadlar::badge>
                            <span style="color: var(--color-foreground);">Menus and breadcrumbs</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <x-shadlar::badge variant="secondary">Alerts</x-shadlar::badge>
                            <span style="color: var(--color-foreground);">Notifications and messages</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <x-shadlar::badge variant="secondary">And more</x-shadlar::badge>
                            <span style="color: var(--color-foreground);">Tabs, dropdowns, avatars</span>
                        </div>
                    </div>
                </x-shadlar::card-body>
            </x-shadlar::card>
        </div>
    </section>

    <section class="mb-24">
        <h2 class="text-3xl font-bold mb-8 text-center" style="color: var(--color-foreground);">
            Quick start
        </h2>
        <div class="max-w-3xl mx-auto">
            <x-shadlar::card>
                <x-shadlar::card-body>
                    <x-shadlar::accordion title="Installation" :defaultOpen="true">
                        <p class="mb-4">Install Shadlar via Composer:</p>
                        <div class="bg-slate-800 rounded-lg p-4 mb-4">
                            <code class="text-sm" style="color: var(--color-foreground);">
                                composer require rmirandasv/shadlar
                            </code>
                        </div>
                        <p>That's it! You're ready to start using components in your Blade templates.</p>
                    </x-shadlar::accordion>

                    <x-shadlar::accordion title="Using Components" :defaultOpen="false">
                        <p class="mb-4">Use components in your Blade templates:</p>
                        <div class="bg-slate-800 rounded-lg p-4 mb-4">
                            <code class="text-sm" style="color: var(--color-foreground);">
                                &lt;x-shadlar::button&gt;Click me&lt;/x-shadlar::button&gt;
                            </code>
                        </div>
                        <p>Check out the Components page to see all available components and their usage examples.</p>
                    </x-shadlar::accordion>

                    <x-shadlar::accordion title="Customization" :defaultOpen="false">
                        <p class="mb-4">All components use CSS variables for theming. You can customize colors,
                            spacing, and more by overriding the default CSS variables in your stylesheet.</p>
                        <p>Components are built with Tailwind CSS, so you can also use Tailwind utility classes to
                            customize them further.</p>
                    </x-shadlar::accordion>
                </x-shadlar::card-body>
            </x-shadlar::card>
        </div>
    </section>

    <section class="text-center">
        <x-shadlar::card class="max-w-2xl mx-auto">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Ready to get started?</x-shadlar::card-title>
                <x-shadlar::card-description>
                    Browse all available components and see them in action.
                </x-shadlar::card-description>
            </x-shadlar::card-header>
            <x-shadlar::card-footer class="flex justify-center gap-4">
                <a href="/components">
                    <x-shadlar::button size="lg">View All Components</x-shadlar::button>
                </a>
            </x-shadlar::card-footer>
        </x-shadlar::card>
    </section>
</x-layouts.web-layout>
