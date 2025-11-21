<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/components', function () {
    return view('components');
})->name('components');

Route::get('/components/{component}', function ($component) {
    $validComponents = [
        'button', 'buttons',
        'alert', 'alerts',
        'card', 'cards',
        'form', 'forms',
        'table', 'tables',
        'dialog', 'dialogs',
        'accordion', 'accordions',
        'badge', 'badges',
        'dropdown', 'dropdowns',
        'tabs',
        'breadcrumb', 'breadcrumbs',
        'pagination',
        'empty-state', 'empty-state',
        'combobox',
        'navigation-menu', 'navigation',
        'avatar', 'avatars',
        'sidebar'
    ];

    if (!in_array(strtolower($component), $validComponents)) {
        abort(404);
    }

    $componentName = strtolower($component);
    $viewName = sprintf('components.detail.%s', $componentName);
    
    if (view()->exists($viewName)) {
        return view($viewName, ['component' => $componentName]);
    }

    return view('components.detail.default', ['component' => $componentName]);
})->name('components.detail');
