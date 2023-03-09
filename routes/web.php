<?php

use App\Enums\SignatureStatus;
use App\Http\Controllers\ProfileController;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/test', function() {

    $plan = Plan::create([
        'name' => 'Last Plan',
        'short_description' => 'a Terrible plan',
        'price' => 2990
    ]);

    $client = Auth::use()->client()->create([
        'document' => '05929981779',
        'birthdate' => '1992-07-28'
    ]);

    $client->signatures()->create([
        'plan_id' => $plan->id,
        'status' => SignatureStatus::ACTIVED
    ]);

    return 'hey';

});
