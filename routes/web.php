<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\productController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\sliderController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\overviewController;
use App\Http\Controllers\messageToClientController;


//======= admin =======
// index
Route::get('/admin/dashboard', [homeController::class, 'dashboard'])->name('dashboard');

// ================ slider ==================
Route::get('/admin/slider', [sliderController::class, 'slider'])->name('sliderAdmin');
// insert about
Route::post('/admin/insert_slider', [sliderController::class, 'insert_slider'])->name('insert_slider');// delete slider 
Route::get('/sliderDelete/{id}', [sliderController::class, 'sliderDelete'])->name('sliderDelete');

// ============= about us ===================
Route::get('/admin/about', [aboutController::class, 'about'])->name('aboutAdmin');
// insert about
Route::post('/admin/insert_about', [aboutController::class, 'insert_about'])->name('insert_about');
// delete about 
Route::get('/aboutDelete/{id}', [aboutController::class, 'aboutDelete'])->name('aboutDelete');
// edit about
Route::get('/aboutEdit', [aboutController::class, 'aboutEdit'])->name('aboutEdit');


// ================= gallery ======================
Route::get('/admin/gallery', [galleryController::class, 'gallery'])->name('galleryAdmin');
// post insert image
Route::post('/admin/insert_image', [galleryController::class, 'insert_image'])->name('insert_image');
// deleteImage
Route::get('/deleteImage/{id}', [galleryController::class, 'deleteImage'])->name('deleteImage');


// ================== product =====================
Route::get('/admin/product', [productController::class, 'product'])->name('productAdmin');
// insert product
Route::post('/admin/insert_product', [productController::class, 'insert_product'])->name('insert_product');
// productDelete
Route::get('/productDelete/{id}', [productController::class, 'productDelete'])->name('productDelete');


// =============== service =================
Route::get('/admin/service' , [serviceController::class, 'service'])->name('serviceAdmin');
// insert_service
Route::post('admin/insert_service' , [serviceController::class, 'insert_service'])->name('insert_service');
// delete service
Route::get('/serviceDelete/{id}', [serviceController::class, 'serviceDelete'])->name('productDelete');
// serviceEdit
Route::get('/admin/serviceEdit/{id}', [serviceController::class, 'serviceEdit'])->name('serviceEdit');
    // return view('admin.serviceEdit');



// ============= client ===============
Route::get('/admin/client' , [clientController::class, 'client'])->name('clientAdmin');
// post insert_client
Route::post('/admin/insert_client', [clientController::class, 'insert_client'])->name('insert_client');
// deleteClient
Route::get('/deleteClient/{id}', [clientController::class, 'deleteClient'])->name('deleteClient');


// ================= overview ================
Route::get('/admin/overview', [overviewController::class, 'overview'])->name('overviewAdmin');
// insert overview
Route::post('/admin/insert_overview', [overviewController::class, 'insert_overview'])->name('insert_overview');
// overviewDelete
Route::get('/overviewDelete/{id}', [overviewController::class, 'overviewDelete'])->name('overviewDelete');


// ============ messageToClient =====================
Route::get('/admin/message-to-client', [messageToClientController::class, 'messageToClient'])->name('messageToClient'); 
// insert_message
Route::post('/admin/insert_message', [messageToClientController::class, 'insert_message'])->name('insert_message');
// messageDelete
Route::get('/messageDelete/{id}', [messageToClientController::class, 'messageDelete'])->name('messageDelete');
// message_edit
// Route::get('/admin/message_edit/{id}', [messageToClientController::class, 'message_edit'])->name('message_edit');
// Route::get('/admin/service-edit', function(){
//     return view('admin.serviceEdit');
// })->name('serviceEdit');




// Messages From Clients
Route::get('/admin/message-from-client', function(){
    return view('admin.MessagesFromClients');
})->name('MessagesFromClients');



// serviceEdit
Route::get('/admin/service-edit', function(){
    return view('admin.serviceEdit');
})->name('serviceEdit');

// productEdit
Route::get('/admin/product-edit', function(){
    return view('admin.productEdit');
})->name('productEdit');



// overviewEdit
Route::get('/admin/machine-overview-edit', function(){
    return view('admin.overviewEdit');
})->name('overviewEdit');





// ======== frontend =========
Route::get('/', function(){
    return view('index');
})->name('/');
Route::get('/about', function(){
    return view('about');
})->name('about');
Route::get('/overview', function(){
    return view('overview');
})->name('overview');