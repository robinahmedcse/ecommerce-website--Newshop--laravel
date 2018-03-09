<?php

Route::get('/', 'WelcomeController@home')->name('frontEnd.master');
Route::get('category-details/{id}', 'WelcomeController@categoryDetails');
Route::get('product-details/{id}', 'WelcomeController@productDetails');


/***
 * Cart start
 */

Route::POST('add-to-cart','CartController@addToCart');
Route::get('show-cart','CartController@showCart');
Route::POST('update-cart','CartController@updateToCart');
Route::get('delete-cart/{id}','CartController@deleteCart');

/***
 * Cart End
 */



/***
 * Checkout start
 */


Route::get('checkout','CheckoutController@index');
Route::POST('checkout/save-customer','CheckoutController@customerRegistration');

Route::get('checkout/shipping','CheckoutController@showShippingForm');
Route::POST('checkout/save-shipping','CheckoutController@saveShipping');

Route::get('checkout/payment','CheckoutController@showPaymentForm');
Route::POST('checkout/save-order','CheckoutController@saveOrderInfo');
 
/***
 * Checkout End
 */





/***
 * Customer start
 */

Route::prefix('customer')->group(function(){
     Route::get('/login','CustomerLoginController@login');
     Route::get('/','CustomerLoginController@login');
     Route::POST('/login-check','CustomerLoginController@loginCheck');
    
     Route::get('/home','CustomerController@index');
     Route::get('/logout','CustomerController@customerLogout');
     
});

/***
 * Customer end
 */



Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');









/****
 * 
 * Admin Part
 * 
 * 
 */




  Route::get('admin/login','Auth\AdminLoginController@showLoginForm');
    Route::get('admin/', 'Auth\AdminLoginController@showLoginForm');
    Route::POST('admin/login/submit','Auth\AdminLoginController@loginCheck');
    



Route::group(['middleware'=>'AuthenticateMiddlweare'],  function(){
 
  
Route::prefix('admin')->group(function(){
    Route::get('/home', 'AdminController@index');
       
    /* category info */
    Route::get('/add-category', 'CategoryController@createCategory');
    Route::POST('/save-category', 'CategoryController@saveCategory');
    Route::get('/manage-category', 'CategoryController@manageCategory');
    Route::get('/edit-category/{id}', 'CategoryController@editCategory');
    Route::POST('/update-category', 'CategoryController@updateCategory');
    Route::get('/delete-category/{id}', 'CategoryController@deleteCategory');
    /* End category info */


    /* Sub category info */
    Route::get('/add-sub-category', 'SubCategoryController@createCategory');
    Route::POST('/save-sub-category', 'SubCategoryController@saveCategory');
    Route::get('/manage-sub-category', 'SubCategoryController@manageCategory');
    Route::get('/edit-sub-category/{id}', 'SubCategoryController@editCategory');
    Route::POST('/update-sub-category', 'SubCategoryController@updateCategory');
    Route::get('/delete-sub-category/{id}', 'SubCategoryController@deleteCategory');
    /* End sub category info */

    
    /* Manufacture info */
    Route::get('/add-manufacture', 'ManufactureController@createManufacture');
    Route::Post('/save-manufacture', 'ManufactureController@saveManufacture');
    Route::get('/manage-manufacture', 'ManufactureController@manageManufacture');
    Route::get('/edit-manufacture/{id}', 'ManufactureController@editManufacture');
    Route::Post('/update-manufacture', 'ManufactureController@updateManufacture');
    Route::get('/delete-manufacture/{id}', 'ManufactureController@deleteManufacture');
   /* End Manufacture info */

    
    
    
    /* product info */
      Route::get('/add-product', 'ProductController@createProduct');
      Route::POST('/save-product', 'ProductController@storeProduct');
      Route::get('/manage-product', 'ProductController@manageProduct');
      Route::get('/view-product/{id}', 'ProductController@viewProduct');
      Route::get('/edit-product/{id}', 'ProductController@editProduct');
      Route::POST('/update-product', 'ProductController@updateProduct');
      Route::get('/delete-product/{id}', 'ProductController@deleteProduct');
   /* End product info*/


    /* Order info */
    Route::get('/view-order', 'OrderController@viewAllOrder');
    Route::get('/single-view-order/{id}', 'OrderController@viewAllOrder');
   /* End Order info*/


   
});


  
    
});//middleware end

 Route::get('admin/logout', 'Auth\AdminLoginController@adminLogout'); 
































//Route::get('admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login.loginContent');
//Route::POST('admin/login/submit','Auth\AdminLoginController@loginCheck');
//Route::get('admin/home', 'AdminController@index')->name('admin.home.homeContent');
//
//
//
//
//Route::get('admin/logout', 'Auth\AdminLoginController@adminLogout');