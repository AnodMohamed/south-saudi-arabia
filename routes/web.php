<?php

use App\Http\Livewire\AddCityComponent;
use App\Http\Livewire\AddImageComponent;
use App\Http\Livewire\AddImageMessageComponent;
use App\Http\Livewire\AddMessageComponent;
use App\Http\Livewire\AddSubcitMessageComponent;
use App\Http\Livewire\AddSubCityComponent;
use App\Http\Livewire\CityDetailsComponent;
use App\Http\Livewire\DeleteCityMessageComponent;
use App\Http\Livewire\DeleteImageMessageComponent;
use App\Http\Livewire\DeleteSubCityMessageComponent;
use App\Http\Livewire\EditCityComponent;
use App\Http\Livewire\EditMessageComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ViewSubCityComponent;
use App\Http\Livewire\VrComponent;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeComponent::class)->name('home');
Route::get('/city{city_id:id}', CityDetailsComponent::class)->name('home.city');
Route::get('/subcity{subcity_id:id}', ViewSubCityComponent::class)->name('subcity');
Route::get('/vr{image:name}', VrComponent::class)->name('vr');


// Only admin can see these pages
Route::middleware(['auth:sanctum','verified','auth'])->group(function(){

     Route::get('/city/add', AddCityComponent::class)->name('city.add');
     Route::get('/city/edit{city_id:id}', EditCityComponent::class)->name('city.edit');
     Route::get('/subcity/add{city_id:id}', AddSubCityComponent::class)->name('subcity.add');
     Route::get('/subcity/image/add{subcity_id:id}', AddImageComponent::class)->name('subcity.image.add');

     //messages
     Route::get('/city/add/messages', AddMessageComponent::class)->name('city.add.messages');
     Route::get('/city/edit/messages', EditMessageComponent::class)->name('city.edit.messages');
     Route::get('/city/add/image/messages', AddImageMessageComponent::class)->name('city.add.image.messages');
     Route::get('/city/delete/image/messages', DeleteImageMessageComponent::class)->name('city.delete.image.messages');
     Route::get('/city/delete/messages', DeleteCityMessageComponent::class)->name('city.delete.messages');
     Route::get('/subcity/add/messages', AddSubcitMessageComponent::class)->name('subcity.add.messages');
     Route::get('/subcity/delete/messages', DeleteSubCityMessageComponent::class)->name('subcity.delete.messages');


});

