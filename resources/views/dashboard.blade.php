<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard - Shadlar</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="min-h-screen bg-slate-900">
    <x-shadlar::sidebar-provider>
        <div class="flex h-screen">
            {{-- Sidebar --}}
            <x-shadlar::sidebar>
                <x-shadlar::sidebar-header>
                    <div class="flex items-center gap-2">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <h2 class="text-lg font-semibold" style="color: var(--sidebar-foreground);">
                            Acme Inc
                        </h2>
                    </div>
                </x-shadlar::sidebar-header>

                <x-shadlar::sidebar-content>
                    <x-shadlar::sidebar-group>
                        <nav class="space-y-1">
                            <a href="/dashboard"
                                class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm transition-colors hover:bg-accent bg-accent"
                                style="color: var(--sidebar-foreground);">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Dashboard
                            </a>
                            <a href="#"
                                class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm transition-colors hover:bg-accent"
                                style="color: var(--sidebar-foreground);">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                Users
                            </a>
                            <a href="#"
                                class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm transition-colors hover:bg-accent"
                                style="color: var(--sidebar-foreground);">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                                Analytics
                            </a>
                            <a href="#"
                                class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm transition-colors hover:bg-accent"
                                style="color: var(--sidebar-foreground);">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Settings
                            </a>
                        </nav>
                    </x-shadlar::sidebar-group>
                </x-shadlar::sidebar-content>

                <x-shadlar::sidebar-footer>
                    <div class="flex items-center gap-3">
                        <x-shadlar::avatar src="https://github.com/shadcn.png" alt="User avatar" size="md" />
                        <div class="flex-1">
                            <p class="text-sm font-medium" style="color: var(--sidebar-foreground);">John Doe</p>
                            <p class="text-xs" style="color: var(--sidebar-muted-foreground);">john@acme.com</p>
                        </div>
                    </div>
                </x-shadlar::sidebar-footer>
            </x-shadlar::sidebar>

            {{-- Main Content --}}
            <x-shadlar::sidebar-main>
                <div class="p-6 space-y-6">
                    {{-- Header with Trigger --}}
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <x-shadlar::sidebar-trigger>
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </x-shadlar::sidebar-trigger>
                            <div>
                                <h1 class="text-3xl font-bold" style="color: var(--color-foreground);">Dashboard</h1>
                                <p class="text-sm" style="color: var(--color-muted-foreground);">Welcome back, John!</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <x-shadlar::button variant="outlined" size="sm">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Export
                            </x-shadlar::button>
                            <x-shadlar::button size="sm">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                                New Project
                            </x-shadlar::button>
                        </div>
                    </div>

                    {{-- Breadcrumb --}}
                    <x-shadlar::breadcrumb>
                        <x-shadlar::breadcrumb-list>
                            <x-shadlar::breadcrumb-item>
                                <x-shadlar::breadcrumb-link href="/">Home</x-shadlar::breadcrumb-link>
                                <x-shadlar::breadcrumb-separator />
                            </x-shadlar::breadcrumb-item>
                            <x-shadlar::breadcrumb-item>
                                <x-shadlar::breadcrumb-page>Dashboard</x-shadlar::breadcrumb-page>
                            </x-shadlar::breadcrumb-item>
                        </x-shadlar::breadcrumb-list>
                    </x-shadlar::breadcrumb>

                    {{-- Alert --}}
                    <x-shadlar::alert variant="info" title="New features available"
                        description="Check out our latest updates and improvements.">
                        <x-slot:icon>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </x-slot:icon>
                    </x-shadlar::alert>

                    {{-- Stats Cards --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <x-shadlar::card>
                            <x-shadlar::card-header class="flex flex-row items-center justify-between space-y-0 pb-2">
                                <x-shadlar::card-title class="text-sm font-medium">Total Revenue</x-shadlar::card-title>
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </x-shadlar::card-header>
                            <x-shadlar::card-body>
                                <div class="text-2xl font-bold" style="color: var(--color-foreground);">$45,231.89</div>
                                <p class="text-xs" style="color: var(--color-muted-foreground);">
                                    <span class="text-green-500">+20.1%</span> from last month
                                </p>
                            </x-shadlar::card-body>
                        </x-shadlar::card>

                        <x-shadlar::card>
                            <x-shadlar::card-header class="flex flex-row items-center justify-between space-y-0 pb-2">
                                <x-shadlar::card-title class="text-sm font-medium">Subscriptions</x-shadlar::card-title>
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </x-shadlar::card-header>
                            <x-shadlar::card-body>
                                <div class="text-2xl font-bold" style="color: var(--color-foreground);">+2,350</div>
                                <p class="text-xs" style="color: var(--color-muted-foreground);">
                                    <span class="text-green-500">+180.1%</span> from last month
                                </p>
                            </x-shadlar::card-body>
                        </x-shadlar::card>

                        <x-shadlar::card>
                            <x-shadlar::card-header class="flex flex-row items-center justify-between space-y-0 pb-2">
                                <x-shadlar::card-title class="text-sm font-medium">Sales</x-shadlar::card-title>
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </x-shadlar::card-header>
                            <x-shadlar::card-body>
                                <div class="text-2xl font-bold" style="color: var(--color-foreground);">+12,234</div>
                                <p class="text-xs" style="color: var(--color-muted-foreground);">
                                    <span class="text-green-500">+19%</span> from last month
                                </p>
                            </x-shadlar::card-body>
                        </x-shadlar::card>

                        <x-shadlar::card>
                            <x-shadlar::card-header class="flex flex-row items-center justify-between space-y-0 pb-2">
                                <x-shadlar::card-title class="text-sm font-medium">Active Now</x-shadlar::card-title>
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </x-shadlar::card-header>
                            <x-shadlar::card-body>
                                <div class="text-2xl font-bold" style="color: var(--color-foreground);">+573</div>
                                <p class="text-xs" style="color: var(--color-muted-foreground);">
                                    <span class="text-green-500">+201</span> since last hour
                                </p>
                            </x-shadlar::card-body>
                        </x-shadlar::card>
                    </div>

                    {{-- Main Content Grid --}}
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        {{-- Recent Activity --}}
                        <div class="lg:col-span-2 space-y-6">
                            <x-shadlar::card>
                                <x-shadlar::card-header>
                                    <x-shadlar::card-title>Recent Activity</x-shadlar::card-title>
                                    <x-shadlar::card-description>
                                        Your recent transactions and activities
                                    </x-shadlar::card-description>
                                </x-shadlar::card-header>
                                <x-shadlar::card-body>
                                    <x-shadlar::table>
                                        <x-shadlar::table-header>
                                            <x-shadlar::table-row>
                                                <x-shadlar::table-head>User</x-shadlar::table-head>
                                                <x-shadlar::table-head>Activity</x-shadlar::table-head>
                                                <x-shadlar::table-head align="right">Status</x-shadlar::table-head>
                                            </x-shadlar::table-row>
                                        </x-shadlar::table-header>
                                        <x-shadlar::table-body>
                                            <x-shadlar::table-row>
                                                <x-shadlar::table-cell>
                                                    <div class="flex items-center gap-3">
                                                        <x-shadlar::avatar size="sm">JD</x-shadlar::avatar>
                                                        <div>
                                                            <p class="font-medium" style="color: var(--color-foreground);">John Doe</p>
                                                            <p class="text-sm" style="color: var(--color-muted-foreground);">john@example.com</p>
                                                        </div>
                                                    </div>
                                                </x-shadlar::table-cell>
                                                <x-shadlar::table-cell>Created new project</x-shadlar::table-cell>
                                                <x-shadlar::table-cell align="right">
                                                    <x-shadlar::badge variant="success">Active</x-shadlar::badge>
                                                </x-shadlar::table-cell>
                                            </x-shadlar::table-row>
                                            <x-shadlar::table-row>
                                                <x-shadlar::table-cell>
                                                    <div class="flex items-center gap-3">
                                                        <x-shadlar::avatar size="sm">MG</x-shadlar::avatar>
                                                        <div>
                                                            <p class="font-medium" style="color: var(--color-foreground);">Maria Garcia</p>
                                                            <p class="text-sm" style="color: var(--color-muted-foreground);">maria@example.com</p>
                                                        </div>
                                                    </div>
                                                </x-shadlar::table-cell>
                                                <x-shadlar::table-cell>Updated profile</x-shadlar::table-cell>
                                                <x-shadlar::table-cell align="right">
                                                    <x-shadlar::badge variant="secondary">Pending</x-shadlar::badge>
                                                </x-shadlar::table-cell>
                                            </x-shadlar::table-row>
                                            <x-shadlar::table-row>
                                                <x-shadlar::table-cell>
                                                    <div class="flex items-center gap-3">
                                                        <x-shadlar::avatar size="sm">JP</x-shadlar::avatar>
                                                        <div>
                                                            <p class="font-medium" style="color: var(--color-foreground);">Juan Pérez</p>
                                                            <p class="text-sm" style="color: var(--color-muted-foreground);">juan@example.com</p>
                                                        </div>
                                                    </div>
                                                </x-shadlar::table-cell>
                                                <x-shadlar::table-cell>Deleted item</x-shadlar::table-cell>
                                                <x-shadlar::table-cell align="right">
                                                    <x-shadlar::badge variant="destructive">Inactive</x-shadlar::badge>
                                                </x-shadlar::table-cell>
                                            </x-shadlar::table-row>
                                        </x-shadlar::table-body>
                                    </x-shadlar::table>
                                </x-shadlar::card-body>
                            </x-shadlar::card>

                            {{-- Projects Table --}}
                            <x-shadlar::card>
                                <x-shadlar::card-header>
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <x-shadlar::card-title>Projects</x-shadlar::card-title>
                                            <x-shadlar::card-description>
                                                Manage your projects and tasks
                                            </x-shadlar::card-description>
                                        </div>
                                        <x-shadlar::button size="sm">New Project</x-shadlar::button>
                                    </div>
                                </x-shadlar::card-header>
                                <x-shadlar::card-body>
                                    <x-shadlar::table>
                                        <x-shadlar::table-header>
                                            <x-shadlar::table-row>
                                                <x-shadlar::table-head>Project</x-shadlar::table-head>
                                                <x-shadlar::table-head>Team</x-shadlar::table-head>
                                                <x-shadlar::table-head align="center">Status</x-shadlar::table-head>
                                                <x-shadlar::table-head align="right">Actions</x-shadlar::table-head>
                                            </x-shadlar::table-row>
                                        </x-shadlar::table-header>
                                        <x-shadlar::table-body>
                                            <x-shadlar::table-row>
                                                <x-shadlar::table-cell class="font-medium">Website Redesign</x-shadlar::table-cell>
                                                <x-shadlar::table-cell>
                                                    <div class="flex -space-x-2">
                                                        <x-shadlar::avatar size="sm">JD</x-shadlar::avatar>
                                                        <x-shadlar::avatar size="sm">MG</x-shadlar::avatar>
                                                        <x-shadlar::avatar size="sm">JP</x-shadlar::avatar>
                                                    </div>
                                                </x-shadlar::table-cell>
                                                <x-shadlar::table-cell align="center">
                                                    <x-shadlar::badge variant="success">In Progress</x-shadlar::badge>
                                                </x-shadlar::table-cell>
                                                <x-shadlar::table-cell align="right">
                                                    <div class="flex gap-2 justify-end">
                                                        <x-shadlar::button variant="ghost" size="sm">Edit</x-shadlar::button>
                                                        <x-shadlar::button variant="ghost" size="sm">View</x-shadlar::button>
                                                    </div>
                                                </x-shadlar::table-cell>
                                            </x-shadlar::table-row>
                                            <x-shadlar::table-row>
                                                <x-shadlar::table-cell class="font-medium">Mobile App</x-shadlar::table-cell>
                                                <x-shadlar::table-cell>
                                                    <div class="flex -space-x-2">
                                                        <x-shadlar::avatar size="sm">JD</x-shadlar::avatar>
                                                        <x-shadlar::avatar size="sm">MG</x-shadlar::avatar>
                                                    </div>
                                                </x-shadlar::table-cell>
                                                <x-shadlar::table-cell align="center">
                                                    <x-shadlar::badge variant="secondary">Planning</x-shadlar::badge>
                                                </x-shadlar::table-cell>
                                                <x-shadlar::table-cell align="right">
                                                    <div class="flex gap-2 justify-end">
                                                        <x-shadlar::button variant="ghost" size="sm">Edit</x-shadlar::button>
                                                        <x-shadlar::button variant="ghost" size="sm">View</x-shadlar::button>
                                                    </div>
                                                </x-shadlar::table-cell>
                                            </x-shadlar::table-row>
                                            <x-shadlar::table-row>
                                                <x-shadlar::table-cell class="font-medium">API Integration</x-shadlar::table-cell>
                                                <x-shadlar::table-cell>
                                                    <div class="flex -space-x-2">
                                                        <x-shadlar::avatar size="sm">JP</x-shadlar::avatar>
                                                    </div>
                                                </x-shadlar::table-cell>
                                                <x-shadlar::table-cell align="center">
                                                    <x-shadlar::badge variant="outlined">Completed</x-shadlar::badge>
                                                </x-shadlar::table-cell>
                                                <x-shadlar::table-cell align="right">
                                                    <div class="flex gap-2 justify-end">
                                                        <x-shadlar::button variant="ghost" size="sm">Edit</x-shadlar::button>
                                                        <x-shadlar::button variant="ghost" size="sm">View</x-shadlar::button>
                                                    </div>
                                                </x-shadlar::table-cell>
                                            </x-shadlar::table-row>
                                        </x-shadlar::table-body>
                                    </x-shadlar::table>
                                </x-shadlar::card-body>
                            </x-shadlar::card>
                        </div>

                        {{-- Sidebar --}}
                        <div class="space-y-6">
                            {{-- Quick Actions --}}
                            <x-shadlar::card>
                                <x-shadlar::card-header>
                                    <x-shadlar::card-title>Quick Actions</x-shadlar::card-title>
                                </x-shadlar::card-header>
                                <x-shadlar::card-body class="space-y-2">
                                    <x-shadlar::button class="w-full justify-start" variant="outlined">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                        </svg>
                                        Create Project
                                    </x-shadlar::button>
                                    <x-shadlar::button class="w-full justify-start" variant="outlined">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        Invite User
                                    </x-shadlar::button>
                                    <x-shadlar::button class="w-full justify-start" variant="outlined">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        Generate Report
                                    </x-shadlar::button>
                                </x-shadlar::card-body>
                            </x-shadlar::card>

                            {{-- Notifications --}}
                            <x-shadlar::card>
                                <x-shadlar::card-header>
                                    <x-shadlar::card-title>Notifications</x-shadlar::card-title>
                                </x-shadlar::card-header>
                                <x-shadlar::card-body class="space-y-4">
                                    <div class="flex items-start gap-3">
                                        <x-shadlar::avatar size="sm">JD</x-shadlar::avatar>
                                        <div class="flex-1">
                                            <p class="text-sm font-medium" style="color: var(--color-foreground);">John commented on your project</p>
                                            <p class="text-xs" style="color: var(--color-muted-foreground);">2 minutes ago</p>
                                        </div>
                                        <x-shadlar::badge variant="primary" shape="circle">3</x-shadlar::badge>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <x-shadlar::avatar size="sm">MG</x-shadlar::avatar>
                                        <div class="flex-1">
                                            <p class="text-sm font-medium" style="color: var(--color-foreground);">Maria shared a document</p>
                                            <p class="text-xs" style="color: var(--color-muted-foreground);">1 hour ago</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <x-shadlar::avatar size="sm">JP</x-shadlar::avatar>
                                        <div class="flex-1">
                                            <p class="text-sm font-medium" style="color: var(--color-foreground);">Juan updated a task</p>
                                            <p class="text-xs" style="color: var(--color-muted-foreground);">3 hours ago</p>
                                        </div>
                                    </div>
                                </x-shadlar::card-body>
                                <x-shadlar::card-footer>
                                    <x-shadlar::button variant="ghost" class="w-full">View All</x-shadlar::button>
                                </x-shadlar::card-footer>
                            </x-shadlar::card>

                            {{-- Team Members --}}
                            <x-shadlar::card>
                                <x-shadlar::card-header>
                                    <x-shadlar::card-title>Team Members</x-shadlar::card-title>
                                </x-shadlar::card-header>
                                <x-shadlar::card-body class="space-y-3">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <x-shadlar::avatar size="sm">JD</x-shadlar::avatar>
                                            <div>
                                                <p class="text-sm font-medium" style="color: var(--color-foreground);">John Doe</p>
                                                <p class="text-xs" style="color: var(--color-muted-foreground);">Developer</p>
                                            </div>
                                        </div>
                                        <x-shadlar::badge variant="success">Active</x-shadlar::badge>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <x-shadlar::avatar size="sm">MG</x-shadlar::avatar>
                                            <div>
                                                <p class="text-sm font-medium" style="color: var(--color-foreground);">Maria Garcia</p>
                                                <p class="text-xs" style="color: var(--color-muted-foreground);">Designer</p>
                                            </div>
                                        </div>
                                        <x-shadlar::badge variant="success">Active</x-shadlar::badge>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <x-shadlar::avatar size="sm">JP</x-shadlar::avatar>
                                            <div>
                                                <p class="text-sm font-medium" style="color: var(--color-foreground);">Juan Pérez</p>
                                                <p class="text-xs" style="color: var(--color-muted-foreground);">Manager</p>
                                            </div>
                                        </div>
                                        <x-shadlar::badge variant="secondary">Away</x-shadlar::badge>
                                    </div>
                                </x-shadlar::card-body>
                            </x-shadlar::card>
                        </div>
                    </div>
                </div>
            </x-shadlar::sidebar-main>
        </div>
    </x-shadlar::sidebar-provider>
    @livewireScripts
</body>

</html>
