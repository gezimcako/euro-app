<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryConfigurationKeysController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('category_configuration_keys/index', [CategoryConfigurationKeysController::class, 'index'])->name('category_configuration_keys.index');
Route::get('category_configuration_keys/create', [CategoryConfigurationKeysController::class, 'create'])->name('category_configuration_keys.create');
Route::get('category_configuration_keys/{id}', [CategoryConfigurationKeysController::class, 'edit'])->name('category_configuration_keys.edit');
Route::put('category_configuration_keys_update/{id}', [CategoryConfigurationKeysController::class, 'update'])->name('category_configuration_keys.update');
Route::post('category_configuration_keys', [CategoryConfigurationKeysController::class, 'store'])->name('category_configuration_keys.store');
//Route::delete('category_configuration_keys/delete',[CategoryConfigurationKeysController::class, 'delete'])->name('category_configuration_keys.store');
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
