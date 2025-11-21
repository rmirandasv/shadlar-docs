<x-layouts.web-layout title="Dialog">
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
                <x-shadlar::breadcrumb-page>Dialog</x-shadlar::breadcrumb-page>
            </x-shadlar::breadcrumb-item>
        </x-shadlar::breadcrumb-list>
    </x-shadlar::breadcrumb>

    <div class="mb-12">
        <h1 class="text-4xl font-bold mb-4" style="color: var(--color-foreground);">Dialog</h1>
        <p class="text-lg" style="color: var(--color-muted-foreground);">
            A modal dialog component that overlays the main content to display important information or collect user
            input.
        </p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6" style="color: var(--color-foreground);">Examples</h2>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Basic Dialog</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <div x-data="{ openDialog: false }">
                    <x-shadlar::dialog model="openDialog">
                        <x-slot:trigger>
                            <x-shadlar::button variant="outlined" @click="openDialog = true">Open
                                Dialog</x-shadlar::button>
                        </x-slot:trigger>
                        <x-shadlar::dialog-header>
                            <x-shadlar::dialog-title>Basic Dialog</x-shadlar::dialog-title>
                            <x-shadlar::dialog-description>
                                This is a basic dialog example with title and description.
                            </x-shadlar::dialog-description>
                            <x-slot:close>
                                <button @click="openDialog = false"
                                    class="rounded-sm opacity-70 ring-offset-background transition-opacity hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2"
                                    style="color: var(--color-dialog-foreground);">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </x-slot:close>
                        </x-shadlar::dialog-header>
                        <x-shadlar::dialog-body>
                            <p style="color: var(--color-dialog-foreground);">
                                This is the dialog body content. You can add any content here.
                            </p>
                        </x-shadlar::dialog-body>
                        <x-shadlar::dialog-footer>
                            <x-shadlar::button variant="outlined" @click="openDialog = false">Close</x-shadlar::button>
                        </x-shadlar::dialog-footer>
                    </x-shadlar::dialog>
                </div>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Dialog with Form</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <div x-data="{ editDialog: false }">
                    <x-shadlar::dialog model="editDialog">
                        <x-slot:trigger>
                            <x-shadlar::button variant="outlined" @click="editDialog = true">Edit
                                Profile</x-shadlar::button>
                        </x-slot:trigger>
                        <x-shadlar::dialog-header>
                            <x-shadlar::dialog-title>Edit profile</x-shadlar::dialog-title>
                            <x-shadlar::dialog-description>
                                Make changes to your profile here. Click save when you're done.
                            </x-shadlar::dialog-description>
                            <x-slot:close>
                                <button @click="editDialog = false"
                                    class="rounded-sm opacity-70 ring-offset-background transition-opacity hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2"
                                    style="color: var(--color-dialog-foreground);">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </x-slot:close>
                        </x-shadlar::dialog-header>
                        <x-shadlar::dialog-body>
                            <div class="space-y-4">
                                <div>
                                    <label class="text-sm font-medium"
                                        style="color: var(--color-dialog-foreground);">Name</label>
                                    <input type="text" class="w-full rounded border px-3 py-2 mt-1"
                                        style="background-color: var(--color-muted); border-color: var(--color-dialog-border); color: var(--color-dialog-foreground);"
                                        value="Pedro Duarte">
                                </div>
                                <div>
                                    <label class="text-sm font-medium"
                                        style="color: var(--color-dialog-foreground);">Username</label>
                                    <input type="text" class="w-full rounded border px-3 py-2 mt-1"
                                        style="background-color: var(--color-muted); border-color: var(--color-dialog-border); color: var(--color-dialog-foreground);"
                                        value="@peduarte">
                                </div>
                            </div>
                        </x-shadlar::dialog-body>
                        <x-shadlar::dialog-footer>
                            <x-shadlar::button variant="outlined" @click="editDialog = false">Cancel</x-shadlar::button>
                            <x-shadlar::button @click="editDialog = false">Save changes</x-shadlar::button>
                        </x-shadlar::dialog-footer>
                    </x-shadlar::dialog>
                </div>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Confirmation Dialog</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <div x-data="{ confirmDialog: false }">
                    <x-shadlar::dialog model="confirmDialog">
                        <x-slot:trigger>
                            <x-shadlar::button variant="destructive" @click="confirmDialog = true">Delete
                                Item</x-shadlar::button>
                        </x-slot:trigger>
                        <x-shadlar::dialog-header>
                            <x-shadlar::dialog-title>Are you sure?</x-shadlar::dialog-title>
                            <x-shadlar::dialog-description>
                                This action cannot be undone. This will permanently delete the item.
                            </x-shadlar::dialog-description>
                            <x-slot:close>
                                <button @click="confirmDialog = false"
                                    class="rounded-sm opacity-70 ring-offset-background transition-opacity hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2"
                                    style="color: var(--color-dialog-foreground);">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </x-slot:close>
                        </x-shadlar::dialog-header>
                        <x-shadlar::dialog-body>
                            <p style="color: var(--color-dialog-foreground);">
                                This will permanently delete the selected item from your account.
                            </p>
                        </x-shadlar::dialog-body>
                        <x-shadlar::dialog-footer>
                            <x-shadlar::button variant="outlined"
                                @click="confirmDialog = false">Cancel</x-shadlar::button>
                            <x-shadlar::button variant="destructive"
                                @click="confirmDialog = false">Delete</x-shadlar::button>
                        </x-shadlar::dialog-footer>
                    </x-shadlar::dialog>
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
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;div x-data="{ openDialog: false }"&gt;
    &lt;x-shadlar::dialog model="openDialog"&gt;
        &lt;x-slot:trigger&gt;
            &lt;x-shadlar::button @click="openDialog = true"&gt;Open Dialog&lt;/x-shadlar::button&gt;
        &lt;/x-slot:trigger&gt;
        &lt;x-shadlar::dialog-header&gt;
            &lt;x-shadlar::dialog-title&gt;Dialog Title&lt;/x-shadlar::dialog-title&gt;
            &lt;x-shadlar::dialog-description&gt;
                Dialog description goes here.
            &lt;/x-shadlar::dialog-description&gt;
            &lt;x-slot:close&gt;
                &lt;button @click="openDialog = false"&gt;...&lt;/button&gt;
            &lt;/x-slot:close&gt;
        &lt;/x-shadlar::dialog-header&gt;
        &lt;x-shadlar::dialog-body&gt;
            &lt;p&gt;Dialog content&lt;/p&gt;
        &lt;/x-shadlar::dialog-body&gt;
        &lt;x-shadlar::dialog-footer&gt;
            &lt;x-shadlar::button @click="openDialog = false"&gt;Close&lt;/x-shadlar::button&gt;
        &lt;/x-shadlar::dialog-footer&gt;
    &lt;/x-shadlar::dialog&gt;
&lt;/div&gt;</code></pre>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>With Form Inputs</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::dialog-body&gt;
    &lt;div class="space-y-4"&gt;
        &lt;div&gt;
            &lt;label class="text-sm font-medium"&gt;Name&lt;/label&gt;
            &lt;input type="text" class="w-full rounded border px-3 py-2 mt-1"
                style="background-color: var(--color-muted); 
                       border-color: var(--color-dialog-border); 
                       color: var(--color-dialog-foreground);"&gt;
        &lt;/div&gt;
        &lt;div&gt;
            &lt;label class="text-sm font-medium"&gt;Email&lt;/label&gt;
            &lt;input type="email" class="w-full rounded border px-3 py-2 mt-1"
                style="background-color: var(--color-muted); 
                       border-color: var(--color-dialog-border); 
                       color: var(--color-dialog-foreground);"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/x-shadlar::dialog-body&gt;</code></pre>
            </x-shadlar::card-body>
        </x-shadlar::card>

        <x-shadlar::card class="mb-6">
            <x-shadlar::card-header>
                <x-shadlar::card-title>Minimal Dialog</x-shadlar::card-title>
            </x-shadlar::card-header>
            <x-shadlar::card-body>
                <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::dialog model="openDialog"&gt;
    &lt;x-slot:trigger&gt;
        &lt;x-shadlar::button @click="openDialog = true"&gt;Open&lt;/x-shadlar::button&gt;
    &lt;/x-slot:trigger&gt;
    &lt;x-shadlar::dialog-header&gt;
        &lt;x-shadlar::dialog-title&gt;Simple Dialog&lt;/x-shadlar::dialog-title&gt;
        &lt;x-slot:close&gt;
            &lt;button @click="openDialog = false"&gt;...&lt;/button&gt;
        &lt;/x-slot:close&gt;
    &lt;/x-shadlar::dialog-header&gt;
    &lt;x-shadlar::dialog-body&gt;
        &lt;p&gt;Content without description or footer&lt;/p&gt;
    &lt;/x-shadlar::dialog-body&gt;
&lt;/x-shadlar::dialog&gt;</code></pre>
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
                            <x-shadlar::table-cell class="font-medium">dialog</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">model</x-shadlar::table-cell>
                            <x-shadlar::table-cell>string</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Alpine.js model name for dialog state (e.g.,
                                "openDialog")</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">dialog</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">trigger (slot)</x-shadlar::table-cell>
                            <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Button or element that opens the dialog</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">dialog-header</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Container for dialog title, description, and close
                                button</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">dialog-title</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Dialog title text</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">dialog-description</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Optional dialog description text</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">dialog-header</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">close (slot)</x-shadlar::table-cell>
                            <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Optional close button slot</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">dialog-body</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Main content area of the dialog</x-shadlar::table-cell>
                        </x-shadlar::table-row>
                        <x-shadlar::table-row>
                            <x-shadlar::table-cell class="font-medium">dialog-footer</x-shadlar::table-cell>
                            <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>-</x-shadlar::table-cell>
                            <x-shadlar::table-cell>Optional footer area for action buttons</x-shadlar::table-cell>
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
