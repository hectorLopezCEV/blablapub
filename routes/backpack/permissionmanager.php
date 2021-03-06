<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => [
        'web',
        config('backpack.base.middleware_key',
            'admin')
    ],
    'namespace' => 'App\Http\Controllers\Admin',
], function () {
    Route::crud('role', 'RoleCrudController');
    Route::crud('permission', 'PermissionCrudController');
    Route::crud('user', 'UserCrudController');
});
