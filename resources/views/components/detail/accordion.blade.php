<x-layouts.web-layout title="Accordion">
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
                <x-shadlar::breadcrumb-page>Accordion</x-shadlar::breadcrumb-page>
            </x-shadlar::breadcrumb-item>
        </x-shadlar::breadcrumb-list>
    </x-shadlar::breadcrumb>

    <div class="mb-12">
        <h1 class="text-4xl font-bold mb-4" style="color: var(--color-foreground);">Accordion</h1>
        <p class="text-lg" style="color: var(--color-muted-foreground);">
            A vertically stacked set of interactive headings that each reveal a section of content.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6" style="color: var(--color-foreground);">Examples</h2>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Basic Accordion</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <div class="space-y-2">
                    <x-shadlar::accordion title="What is Shadlar?" :defaultOpen="false">
                        <p class="mb-2">Shadlar is a collection of reusable Blade components for Laravel. It provides
                            a set of beautifully designed, accessible components that you can copy, paste, and customize
                            for your projects.</p>
                        <p>Built with Tailwind CSS and designed to work seamlessly with Laravel's Blade templating
                            engine.</p>
                    </x-shadlar::accordion>

                    <x-shadlar::accordion title="How do I install it?" :defaultOpen="false">
                        <p class="mb-4">Install Shadlar via Composer:</p>
                        <div class="bg-slate-800 rounded-lg p-4 mb-4">
                            <code class="text-sm" style="color: var(--color-foreground);">
                                composer require rmirandasv/shadlar
                            </code>
                        </div>
                        <p>That's it! You're ready to start using components in your Blade templates.</p>
                    </x-shadlar::accordion>

                    <x-shadlar::accordion title="Is it customizable?" :defaultOpen="false">
                        <p class="mb-2">Yes! All components use CSS variables for theming. You can customize colors,
                            spacing, and more by overriding the default CSS variables in your stylesheet.</p>
                        <p>Components are built with Tailwind CSS, so you can also use Tailwind utility classes to
                            customize them further.</p>
                    </x-shadlar::accordion>
                </div>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Accordion with Default Open</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <div class="space-y-2">
                    <x-shadlar::accordion title="Product Information" :defaultOpen="true">
                        <p class="mb-2">Our flagship product combines cutting-edge technology with sleek design. Built
                            with premium materials, it offers unparalleled performance and reliability.</p>
                        <p>Key features include advanced processing capabilities, and an intuitive user interface
                            designed for both beginners and experts.</p>
                    </x-shadlar::accordion>

                    <x-shadlar::accordion title="Shipping Details" :defaultOpen="false">
                        <p class="mb-2">We offer fast and reliable shipping options to get your order to you as
                            quickly as possible.</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>Standard shipping: 5-7 business days</li>
                            <li>Express shipping: 2-3 business days</li>
                            <li>Overnight shipping: Next business day</li>
                        </ul>
                    </x-shadlar::accordion>

                    <x-shadlar::accordion title="Return Policy" :defaultOpen="false">
                        <p class="mb-2">We want you to be completely satisfied with your purchase. If you're not
                            happy, we'll make it right.</p>
                        <p>You can return any item within 30 days of purchase for a full refund. Items must be in
                            original condition with all packaging included.</p>
                    </x-shadlar::accordion>
                </div>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Accordion with Rich Content</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <div class="space-y-2">
                    <x-shadlar::accordion title="Features" :defaultOpen="false">
                        <div class="space-y-3">
                            <div>
                                <h4 class="font-semibold mb-1" style="color: var(--color-foreground);">Fast Performance
                                </h4>
                                <p class="text-sm" style="color: var(--color-muted-foreground);">Optimized for speed and
                                    efficiency.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1" style="color: var(--color-foreground);">Easy to Use</h4>
                                <p class="text-sm" style="color: var(--color-muted-foreground);">Intuitive interface
                                    designed for everyone.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1" style="color: var(--color-foreground);">Fully
                                    Customizable</h4>
                                <p class="text-sm" style="color: var(--color-muted-foreground);">Tailor it to your needs
                                    with CSS variables.</p>
                            </div>
                        </div>
                    </x-shadlar::accordion>

                    <x-shadlar::accordion title="Pricing" :defaultOpen="false">
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <span style="color: var(--color-foreground);">Basic Plan</span>
                                <span class="font-semibold" style="color: var(--color-foreground);">$9/month</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span style="color: var(--color-foreground);">Pro Plan</span>
                                <span class="font-semibold" style="color: var(--color-foreground);">$29/month</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span style="color: var(--color-foreground);">Enterprise</span>
                                <span class="font-semibold" style="color: var(--color-foreground);">Custom</span>
                            </div>
                        </div>
                    </x-shadlar::accordion>
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
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::accordion title="Accordion Title" :defaultOpen="false"&gt;
    &lt;p&gt;Your content goes here.&lt;/p&gt;
    &lt;p&gt;You can add multiple paragraphs, lists, or any other content.&lt;/p&gt;
&lt;/x-shadlar::accordion&gt;</code></pre>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>With Default Open</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::accordion title="Open by Default" :defaultOpen="true"&gt;
    &lt;p&gt;This accordion will be open when the page loads.&lt;/p&gt;
&lt;/x-shadlar::accordion&gt;</code></pre>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Multiple Accordions</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;div class="space-y-2"&gt;
    &lt;x-shadlar::accordion title="First Item" :defaultOpen="true"&gt;
        &lt;p&gt;First accordion content&lt;/p&gt;
    &lt;/x-shadlar::accordion&gt;
    
    &lt;x-shadlar::accordion title="Second Item" :defaultOpen="false"&gt;
        &lt;ul class="list-disc list-inside"&gt;
            &lt;li&gt;Item 1&lt;/li&gt;
            &lt;li&gt;Item 2&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/x-shadlar::accordion&gt;
    
    &lt;x-shadlar::accordion title="Third Item" :defaultOpen="false"&gt;
        &lt;p&gt;Third accordion content&lt;/p&gt;
    &lt;/x-shadlar::accordion&gt;
&lt;/div&gt;</code></pre>
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
                            <x-shadlar::table-head>Default</x-shadlar::table-head>
                            <x-shadlar::table-head>Description</x-shadlar::table-head>
                        </x-shadlar::table-row>
                    </x-shadlar::table-header>
                    <x-shadlar::table-body>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">title</x-shadlar::table-cell>
                            <x-shadlar::table-cell>string</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Title text displayed in the accordion header</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">defaultOpen</x-shadlar::table-cell>
                            <x-shadlar::table-cell>boolean</x-shadlar::table-cell>
                            <x-shadlar::table-cell>false</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Whether the accordion should be open by
                                default</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                            <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Content displayed when the accordion is
                                expanded</x-shadlar::table-cell>
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
