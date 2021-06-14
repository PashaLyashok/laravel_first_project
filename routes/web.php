<?php
//Main pages controllers
use App\Http\Controllers\Pages\ContactPageController;
use App\Http\Controllers\Pages\PricingPageController;
use App\Http\Controllers\Pages\ExtensionPageController;
use App\Http\Controllers\Pages\ServicePageController;
use App\Http\Controllers\Pages\HomePageController;
//Plugins controllers
use App\Http\Controllers\ExtController;
use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\OrderController;
//System controllers
use Illuminate\Support\Facades\Route;
//Admin-panel Edit Pages Controllers
use App\Http\Controllers\Admin\EditHomeController;
use App\Http\Controllers\Admin\EditServicesController;
use App\Http\Controllers\Admin\EditExtensionController;
use App\Http\Controllers\Admin\EditPricingController;
use App\Http\Controllers\Admin\EditContactsController;
//Admin-panel Edit Products Controllers
use App\Http\Controllers\Admin\EditMainProductController;
use App\Http\Controllers\Admin\SecondProductController;

//SHOW ORDERS
use App\Http\Controllers\Admin\OrdersShowController;
//SHOW USER
use App\Http\Controllers\Admin\UsersShowController;
//Services
use App\Http\Controllers\Admin\ServicesController;
//Extensions
use App\Http\Controllers\Admin\ExtensionsController;
//Tools
use App\Http\Controllers\Admin\ToolsController;
//Accordion
use App\Http\Controllers\Admin\AccordionController;

//Auth & login
Auth::routes();
Route::get('/success', [App\Http\Controllers\SuccessAuthController::class, 'index'])->name('success');

//Main Home page
//Route::get('/', 'App\Http\Controllers\HomePageController@index');
Route::resource('home', HomePageController::class);

Route::get('/', function(){
    return redirect()->action([App\Http\Controllers\Pages\HomePageController::class, 'index']);
});

/*Route::get('home', function(){
    return redirect->to('/', '301');
});*/

//Main Services page
Route::resource('service', ServicePageController::class);

//Страницы услуг
Route::get('/services/{alias}', 'App\Http\Controllers\ServiceController@getService');

//Main Extesion page
Route::resource('extension', ExtensionPageController::class);
//Страница дополнений
Route::get('/extensions/{alias}', 'App\Http\Controllers\ExtensionController@getExtension');

//Main Pricing page
Route::resource('pricing', PricingPageController::class);

//Main Contacts page
Route::resource('contacts', ContactPageController::class);

//FeedBack
Route::resource('feedback', FeedBackController::class);
Route::get('feed-success', 'App\Http\Controllers\FeedBackController@success');

//Страница заказа
Route::resource('order', OrderController::class);
Route::get('order-success', 'App\Http\Controllers\OrderController@success');

//Admin Panel
Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    //Main page of admin panel
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');
    //Edit pages
    Route::resource('edit-home-page', EditHomeController::class);
    Route::resource('edit-services-page', EditServicesController::class);
    Route::resource('edit-extensions-page', EditExtensionController::class);
    Route::resource('edit-pricing-page', EditPricingController::class);
    Route::Resource('edit-contacts-page', EditContactsController::class);
    //Show statistics
    Route::resource('show-orders', OrdersShowController::class);
    Route::resource('show-feedback', FeedBackController::class);
    Route::resource('show-users', UsersShowController::class);
    //Edit products
    Route::resource('main-products', EditMainProductController::class);
    Route::resource('second-products', SecondProductController::class);
    //Services
    Route::resource('services', ServicesController::class);
    //Extensions
    Route::resource('extensions', ExtensionsController::class);
    //Tools
    Route::resource('tools', ToolsController::class);
    //Accordion
    Route::resource('accordion', AccordionController::class);
});