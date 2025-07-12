<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Controllers\Tenant\ProfileController;
/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {

    /* -------------------------------------------------
     |  Tenant landing page (public)
     | ------------------------------------------------*/
    Route::get('/', function () {
        return view('tenant.welcome', [
            'tenant' => tenant(),   // current Tenant model
        ]);
    })->name('tenant.home');

    /* -------------------------------------------------
     |  Auth & password routes (guest + auth)
     | ------------------------------------------------*/
    require __DIR__ . '/tenant-auth.php';   // << routes now use names like tenant.login, tenant.logout

    /* -------------------------------------------------
     |  Tenant dashboard (requires login)
     | ------------------------------------------------*/
    Route::middleware(['auth'])->group(function () {

        Route::get('/dashboard', function () {
            return view('tenant.dashboard');
        })->name('tenant.dashboard');

        /* ---------- profile CRUD -------------------- */
        Route::get('/profile',   [ProfileController::class, 'edit'])->name('tenant.profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('tenant.profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('tenant.profile.destroy');
    });
});
