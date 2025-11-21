<x-layouts.web-layout title="Form">
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
                    <x-shadlar::breadcrumb-page>Form</x-shadlar::breadcrumb-page>
                </x-shadlar::breadcrumb-item>
            </x-shadlar::breadcrumb-list>
        </x-shadlar::breadcrumb>

        <div class="mb-12">
            <h1 class="text-4xl font-bold mb-4" style="color: var(--color-foreground);">Form</h1>
            <p class="text-lg" style="color: var(--color-muted-foreground);">
                Form components for building accessible and user-friendly forms with labels, controls, errors, and helper text.
            </p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6" style="color: var(--color-foreground);">Examples</h2>
            
            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Basic Form Field</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <x-shadlar::form-field>
                        <x-shadlar::form-label for="name">Name</x-shadlar::form-label>
                        <x-shadlar::form-control>
                            <x-shadlar::input type="text" id="name" name="name" placeholder="Enter your name" />
                        </x-shadlar::form-control>
                    </x-shadlar::form-field>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Form Field with Required Label</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <x-shadlar::form-field>
                        <x-shadlar::form-label for="email" required>Email</x-shadlar::form-label>
                        <x-shadlar::form-control>
                            <x-shadlar::input type="email" id="email" name="email" placeholder="your@email.com" />
                        </x-shadlar::form-control>
                    </x-shadlar::form-field>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Form Field with Helper Text</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <x-shadlar::form-field>
                        <x-shadlar::form-label for="username">Username</x-shadlar::form-label>
                        <x-shadlar::form-control>
                            <x-shadlar::input type="text" id="username" name="username" placeholder="username" />
                        </x-shadlar::form-control>
                        <x-shadlar::form-helper>This will be your public username</x-shadlar::form-helper>
                    </x-shadlar::form-field>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Form Field with Errors</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <x-shadlar::form-field>
                        <x-shadlar::form-label for="password" required>Password</x-shadlar::form-label>
                        <x-shadlar::form-control>
                            <x-shadlar::input type="password" id="password" name="password" placeholder="Enter password" :error="true" />
                        </x-shadlar::form-control>
                        <x-shadlar::form-errors :errors="['Password must be at least 8 characters']" />
                    </x-shadlar::form-field>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>Complete Form Example</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <form class="space-y-4">
                        <x-shadlar::form-field>
                            <x-shadlar::form-label for="fullname" required>Full Name</x-shadlar::form-label>
                            <x-shadlar::form-control>
                                <x-shadlar::input type="text" id="fullname" name="fullname" placeholder="John Doe" />
                            </x-shadlar::form-control>
                            <x-shadlar::form-helper>Enter your full legal name</x-shadlar::form-helper>
                        </x-shadlar::form-field>

                        <x-shadlar::form-field>
                            <x-shadlar::form-label for="bio">Biography</x-shadlar::form-label>
                            <x-shadlar::form-control>
                                <x-shadlar::textarea id="bio" name="bio" rows="3" placeholder="Tell us about yourself..."></x-shadlar::textarea>
                            </x-shadlar::form-control>
                            <x-shadlar::form-helper>Maximum 500 characters</x-shadlar::form-helper>
                        </x-shadlar::form-field>

                        <x-shadlar::form-field>
                            <x-shadlar::form-label for="country" required>Country</x-shadlar::form-label>
                            <x-shadlar::form-control>
                                <x-shadlar::select id="country" name="country">
                                    <option value="">Select a country</option>
                                    <option value="us">United States</option>
                                    <option value="mx">Mexico</option>
                                    <option value="es">Spain</option>
                                </x-shadlar::select>
                            </x-shadlar::form-control>
                        </x-shadlar::form-field>

                        <div class="flex gap-4">
                            <x-shadlar::button type="submit">Submit</x-shadlar::button>
                            <x-shadlar::button type="button" variant="outlined">Cancel</x-shadlar::button>
                        </div>
                    </form>
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
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::form-field&gt;
    &lt;x-shadlar::form-label for="name"&gt;Name&lt;/x-shadlar::form-label&gt;
    &lt;x-shadlar::form-control&gt;
        &lt;x-shadlar::input type="text" id="name" name="name" placeholder="Enter name" /&gt;
    &lt;/x-shadlar::form-control&gt;
&lt;/x-shadlar::form-field&gt;</code></pre>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>With Required Label and Helper</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::form-field&gt;
    &lt;x-shadlar::form-label for="email" required&gt;Email&lt;/x-shadlar::form-label&gt;
    &lt;x-shadlar::form-control&gt;
        &lt;x-shadlar::input type="email" id="email" name="email" /&gt;
    &lt;/x-shadlar::form-control&gt;
    &lt;x-shadlar::form-helper&gt;We'll never share your email&lt;/x-shadlar::form-helper&gt;
&lt;/x-shadlar::form-field&gt;</code></pre>
                </x-shadlar::card-body>
            </x-shadlar::card>

            <x-shadlar::card class="mb-6">
                <x-shadlar::card-header>
                    <x-shadlar::card-title>With Error Messages</x-shadlar::card-title>
                </x-shadlar::card-header>
                <x-shadlar::card-body>
                    <pre class="bg-slate-800 rounded-lg p-4 overflow-x-auto"><code>&lt;x-shadlar::form-field&gt;
    &lt;x-shadlar::form-label for="password" required&gt;Password&lt;/x-shadlar::form-label&gt;
    &lt;x-shadlar::form-control&gt;
        &lt;x-shadlar::input type="password" id="password" name="password" :error="true" /&gt;
    &lt;/x-shadlar::form-control&gt;
    &lt;x-shadlar::form-errors :errors="['Password is required']" /&gt;
&lt;/x-shadlar::form-field&gt;</code></pre>
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
                                <x-shadlar::table-cell class="font-medium">form-field</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>-</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Container for a form field (label, control, errors, helper)</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">form-label</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">for</x-shadlar::table-cell>
                                <x-shadlar::table-cell>string</x-shadlar::table-cell>
                                <x-shadlar::table-cell>ID of the associated form control</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">form-label</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">required</x-shadlar::table-cell>
                                <x-shadlar::table-cell>boolean</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Whether the field is required (shows asterisk)</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">form-label</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Label text</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">form-control</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Form input or control component</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">form-errors</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">errors</x-shadlar::table-cell>
                                <x-shadlar::table-cell>array</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Array of error messages to display</x-shadlar::table-cell>
                            </x-shadlar::table-row>
                            <x-shadlar::table-row>
                                <x-shadlar::table-cell class="font-medium">form-helper</x-shadlar::table-cell>
                                <x-shadlar::table-cell class="font-medium">content (slot)</x-shadlar::table-cell>
                                <x-shadlar::table-cell>slot</x-shadlar::table-cell>
                                <x-shadlar::table-cell>Helper text displayed below the input</x-shadlar::table-cell>
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

