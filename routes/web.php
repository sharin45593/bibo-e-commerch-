<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SslCommerzPaymentController;
use Illuminate\Support\Facades\Auth;
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
// frontend route start
Route::get('/', [FontendController :: class, 'index'])->name('index');
Route::get('shop/', [FontendController :: class, 'shop'])->name('shop');
Route::get('about/', [FontendController :: class, 'about'])->name('about');
Route::get('faq/', [FontendController :: class, 'faq'])->name('faq');
Route::get('blog/', [FontendController :: class, 'blog'])->name('blog');
Route::get('product/details/{slug}', [FontendController :: class, 'productdetails'])->name('product.details');
Route::get('category/details/{slug}', [FontendController :: class, 'categorydetails'])->name('category.details');
Route::get('product/details/{slug}', [FontendController :: class, 'productdetails'])->name('product.details');
Route::post('get/size', [FontendController::class,'getsize'])->name('get.size');
Route::post('get/stock', [FontendController::class,'getstock'])->name('get.stock');
Route::post('add/to/cart', [FontendController::class,'addtocart'])->name('add.to.cart');
Route::post('get/city', [FontendController::class,'getcity'])->name('get.city');
Route::post('check/coupon', [FontendController::class,'checkcoupon'])->name('check.coupon');
Route::post('checkout/redirect', [FontendController::class,'checkoutredirect'])->name('checkout.redirect');

//add to cart
Route::get('cart', [CartController::class,'cart'])->name('cart');
Route::get('remove/cart/{cart}', [CartController::class,'removecart'])->name('remove.cart');
Route::get('clear/cart', [CartController::class,'clearcart'])->name('clear.cart');
Route::post('update/cart', [CartController::class,'updatecart'])->name('update.cart');

//start checkout
Route::get('checkout', [CheckoutController::class,'checkout'])->name('checkout');
Route::post('checkout/post', [CheckoutController::class,'checkoutpost'])->name('checkout.post');
//end checkout

//Login customer
Route::get('customer', [CustomerController::class, 'customer'])->name('customer');
Route::get('customer/login', [CustomerController::class, 'customerlogin'])->name('customer.login');
Route::post('customer/register', [CustomerController::class, 'customerregister'])->name('customer.register');
Route::get('customer/dashboard', [CustomerController::class, 'customerdashboard'])->name('customer.dashboard');
Route::get('reload-captcha', [CustomerController::class, 'reloadcaptcha'])->name('reload.captcha');


//end Login customer

// todo
// Route::get('about-me', [FontendController :: class, 'about_me'])->name('about');
// Route:: get('contact-us', [FontendController :: class, 'contact_us'])->name('contact');
// Route::get('media', [FontendController:: class ,'media'])->name('media');
// //data insert routing
// Route::post('media/insert', [FontendController::class,'media_insert'])->name('media-insert');
//data delete routing
// Route::get('channel/delete/{channel_id}', [FontendController::class , 'channel_delete'])->name('channel-delete');
// Route::get('channel/edit/{channel_id}', [FontendController::class, 'channel_edit'])->name('channel-edit');
// Route::post('media/update/{channel_id}', [FontendController::class, 'media_update'])->name('media-update');
// Route::get('media/channel/restore/{channel_id}', [FontendController::class, 'channel_restore'])->name('channel-restore');
// Route::get('media/channel/delete/forever/{channel_id}', [FontendController::class, 'channel_delete_forever'])->name('channel-delete-forever');
// Route::get('media/channel/delete/all/forever', [FontendController::class, 'channel_delete_all_forever'])->name('channel-delete-all-forever');
// frondend route end


// Auth  route start
Auth::routes();
// Auth  route end

// Home  route start
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::post('/change/name', [HomeController::class, 'changename'])->name('change.name');

// Home  route end
//shipping satart
Route::get('/shipping', [HomeController::class, 'shipping'])->name('shipping');
Route::post('/add/shipping', [HomeController::class, 'addshipping'])->name('add.shipping');
Route::get('/shipping/delete/{shipping_id}', [HomeController::class , 'shippingdelete'])->name('shipping.delete');

// shipping end
//blog satart
Route::get('/backblog', [HomeController::class, 'backblog'])->name('back.blog');
Route::post('/add/blog', [HomeController::class, 'blogstore'])->name('blog.store');
Route::get('/blog/delete/{id}', [HomeController::class, 'blogdelete'])->name('blog.delete');

Route::get('blog/single/{blog}',[FontendController::class,'blogsingle'])->name('blog.single');

//blog end
//upcomming product
Route::get('/upcoming/product', [HomeController::class, 'upcomingproduct'])->name('upcoming.product');
Route::post('/add/Upcomming/product', [HomeController::class, 'upcommingproductstore'])->name('upcommingproduct.store');
Route::get('/upcomming/products/delete/{id}', [HomeController::class, 'upcomming_productsdelete'])->name('upcomming_products.delete');
Route::get('/upcomming/products/single/{upcomingproduct}',[FontendController::class,'upcommingproductssingle'])->name('upcomming.products.single');
//end upcomming product

//order
Route::get('order/index', [HomeController::class, 'orderindex'])->name('order.index');
Route::get('order/charge/delivery/status/{order_id}/{delivery_status}', [HomeController::class, 'orderchargedeliverystatus'])->name('order.charge.delivery.status');

//end order

//order invoice
Route::get('order/invoice/{order_id}', [FontendController::class, 'orderinvoice'])->name('order.invoice');
Route::get('order/invoice/download/{order_id}', [FontendController::class, 'orderinvoicedownload'])->name('order.invoice.download');
//order endinvoice

//coupon satart
Route::resource('coupon', CouponController::class);
//coupon end
//category route start
Route::resource('category', CategoryController::class);
//category route end
//hard delete
Route::delete('category/hard/delete/{category}', [CategoryController::class, 'harddelete'])->name('category.harddelete');
//sub category start
Route::resource('subcategory', SubcategoryController::class);
//sub category end
//product start
Route::resource('product', ProductController::class);
Route::post('/get/subcategory', [ ProductController::class, 'getsubcategory'])->name('get.subcategory');
Route::get('/color', [ ProductController::class, 'color'])->name('product.color');
Route::post('/product/color/store', [ ProductController::class, 'colorstore'])->name('product.color.store');
Route::get('/color/delete/{id}', [ProductController::class, 'colordelete'])->name('color.delete');
Route::get('/size', [ ProductController::class, 'size'])->name('product.size');
Route::post('/product/size/store', [ ProductController::class, 'sizestore'])->name('product.size.store');
Route::get('/size/delete/{id}', [ProductController::class, 'sizedelete'])->name('size.delete');
Route::get('/product/add/inventory/{product_id}', [ ProductController::class, 'addinventory'])->name('product.add.inventory');
Route::post('/product/add/inventory/{product_id}', [ ProductController::class, 'addinventorypost'])->name('product.add.inventory.post');
Route::get('/product/add/gallery/{product_id}', [ ProductController::class, 'addgallery'])->name('product.add.gallery');
Route::post('/product/add/gallery/{product_id}', [ ProductController::class, 'addgallerypost'])->name('product.add.gallery.post');
// product endroduct.size.store');
// product end

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::get('/pay', [SslCommerzPaymentController::class, 'index'])->name('pay');
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


