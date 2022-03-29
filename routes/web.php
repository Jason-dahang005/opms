<?php

use Illuminate\Support\Facades\Route;

// CUSTOMER LIVEWIRE
use App\Http\Livewire\Customer\Home;
use App\Http\Livewire\Customer\Shop;
use App\Http\Livewire\Customer\AboutUs;
use App\Http\Livewire\Customer\ContactUs;
use App\Http\Livewire\Customer\ProductDetail;

// ADMIN LIVEWIRE
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\DeliveryComponent;
use App\Http\Livewire\Admin\OrderComponent;
use App\Http\Livewire\Admin\PetCategoryComponent;
use App\Http\Livewire\Admin\PetComponent;
use App\Http\Livewire\Admin\ProductCategoryComponent;
use App\Http\Livewire\Admin\ProductComponent;
use App\Http\Livewire\Admin\ReservationComponent;
use App\Http\Livewire\Admin\UserComponent;
use App\Http\Livewire\Admin\GoldfishCategoryComponent;
use App\Http\Livewire\Admin\GoldfishComponent;
use App\Http\Livewire\Admin\SalesComponent;
use App\Http\Livewire\Admin\InventoryComponent;

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

Route::get('/', Home::class)->name('customer.home');
Route::get('/customer/about-us', AboutUS::class)->name('customer.about-us');
Route::get('/customer/shop', Shop::class)->name('customer.shop');
Route::get('/customer/contact-us', Shop::class)->name('customer.contact-us');
Route::get('/customer/product-detail/{slug}', ProductDetail::class)->name('customer.product-detail');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



// ROUTES FOR CUSTOMERS
Route::middleware(['auth:sanctum', 'verified'])->group(function(){

});

// ROUTES FOR ADMIN
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');
    Route::get('/admin/delivery-component', DeliveryComponent::class)->name('admin.delivery-component');
    Route::get('/admin/order-component', OrderComponent::class)->name('admin.order-component');
    Route::get('/admin/pet-component', PetComponent::class)->name('admin.pet-component');
    Route::get('/admin/pet-category-component', PetCategoryComponent::class)->name('admin.pet-category-component');
    Route::get('/admin/product-category-component', ProductCategoryComponent::class)->name('admin.product-category-component');
    Route::get('/admin/product-component', ProductComponent::class)->name('admin.product-component');
    Route::get('/admin/user-component', UserComponent::class)->name('admin.user-component');
    Route::get('/admin/goldfish-category-component', GoldfishCategoryComponent::class)->name('admin.goldfish-category-component');
    Route::get('/admin/goldfish-component', GoldfishComponent::class)->name('admin.goldfish-component');
    Route::get('/admin/sales-component', SalesComponent::class)->name('admin.sales-component');
    Route::get('/admin/inventory-component', InventoryComponent::class)->name('admin.inventory-component');

});