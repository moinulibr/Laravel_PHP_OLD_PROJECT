<?php

use Illuminate\Support\Facades\Artisan;
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
    
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/clear', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get('barcode',function(){
    return view('layouts.partial.pos_invoice_print');
   // echo DNS2D::getBarcodeHTML("4445", "QRCODE");
   //@php echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG("2500", "C39+",2,53,array(1,1,1), true) . '" alt="barcode"   />'; @endphp <br><br>
  //@php echo DNS1D::getBarcodeHTML("44456", "C39",2,53); @endphp

});

Route::get('/','Frontend\FrontendController@index');

Route::get(HS_ADMIN_LOGIN_ROUTE_SET_FOR_AUTHENTICATESUSERS_SHOWLOGINFORM,'Auth\LoginController@showLoginForm')->name(HS_ADMIN_LOGIN_WEB_ROUTE_NAME);
Route::POST(HS_ADMIN_LOGIN_ROUTE_SET_FOR_AUTHENTICATESUSERS_SHOWLOGINFORM,'Auth\LoginController@login')->name(HS_ADMIN_LOGIN_WEB_ROUTE_NAME);


//Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('admin');


Route::group(['middleware' => ['auth','admin'],'namespace' => 'Backend'], function(){
    /*# Admin #*/
    Route::group(['as'=> 'admin.', 'prefix'=>'admin' , 'namespace' => 'Admin'], function(){

        /*# User #*/
        Route::group(['namespace' => 'User'], function(){
            Route::get('user', 'UserController@index')->name('user.index');
            Route::get('user/create/{merchant?}', 'UserController@create')->name('user.create');
            Route::post('user/create', 'UserController@store')->name('user.store');
            Route::get('user/view/{status}/{merchant}', 'UserController@index')->name('user.view');

            Route::get('user/change/{status}/{user}', 'UserController@changeApprovalStatus')->name('user.changeApprovalStatus');
        });
        /*# User #*/

        /*# Rack #*/
        Route::group(['namespace' => 'Rack'], function(){
            Route::resource('rack','RackController');//->name('rack.index')
            Route::get('rack/delete/{id}','RackController@delete')->name('rack.delete');
            /*
                Route::post('rack','RackController@store')->name('rack.store');
                Route::post('rack/update/{id}','RackController@update')->name('rack.update');
            */
        });

        /*# Upazila and Area #*/
        Route::group(['namespace' => 'Location'], function(){
            Route::resource('upazila', 'UpazilaController');
            //Area
            Route::resource('area', 'AreaController');
        });
        /*# Upazila #*/

        /*# Order #*/
        Route::group(['namespace' => 'Order'], function(){
            Route::resource('order', 'OrderController');
            Route::get('order/index/ajax', 'OrderController@indexAjax')->name('order.indexAjax');
            Route::get('order/print/invoice/{id}', 'OrderController@printInvoice')->name('printInvoice');
            Route::get('order/invoice/delete/{id}', 'OrderController@delete')->name('order.delete');
        });
        /*# Order #*/

        /*# Order assign #*/
        Route::group(['namespace' => 'Order'], function(){
            Route::get('parcel/{change}/status', 'OrderAssignReceiveController@index')->name('changeStatus');
            Route::get('parcel/get/default/ajax/page/view', 'OrderAssignReceiveController@getParcelDefaultAjaxViewPage')->name('getParcelDefaultAjaxViewPage');

            Route::post('parcel/get/invoice/by/invoice/id/on/ajax', 'OrderAssignReceiveController@getInvoiceByInvoiceIdOnAjax')->name('getInvoiceByInvoiceIdOnAjax');
            Route::get('parcel/get/invoice/by/invoice/id/on/ajax/remove/single', 'OrderAssignReceiveController@getInvoiceByInvoiceIdOnAjaxRemoveSingle')->name('getInvoiceByInvoiceIdOnAjaxRemoveSingle');
            Route::get('parcel/get/invoice/by/invoice/id/on/ajax/remove/all/{page_id?}', 'OrderAssignReceiveController@getInvoiceByInvoiceIdOnAjaxRemoveAll')->name('getInvoiceByInvoiceIdOnAjaxRemoveAll');

            Route::post('parcel/details/by/invoice/id/on/ajax', 'OrderAssignReceiveController@parcelDetailsByInvoiceIdOnAjax')->name('parcelDetailsByInvoiceIdOnAjax');

            Route::post('parcel/changing/status', 'OrderAssignReceiveController@changeStatusStore')->name('changeStatusStore');

            // Print for Parcel Parcel
            Route::get('assigned/parcel/manpower/list', 'OrderAssignReceiveController@parcelAssignedManpowerList')->name('parcelAssignedManpowerList');
            Route::get('assigned/parcel/manpower/print/{manpower}/{printType}/{from}/{to}', 'OrderAssignReceiveController@parcelAssignedManpowerPrintAllParcelList')->name('parcelAssignedManpowerPrintAllParcelList');
        });
        /*# Order assign #*/


        /*# Collection Delivered Parcel Amount #*/
        Route::group(['namespace' => 'FinalCollection'], function(){
            Route::get('collection/delivered/parcel/amount', 'FinalCollectionController@collectionDeliveredParcelAmount')->name('collectionDeliveredParcelAmount');
            Route::get('collection/delivered/parcel/amount/by/{user}', 'FinalCollectionController@collectionDeliveredParcelAmountByDMan')->name('collectionDeliveredParcelAmountByDMan');
            Route::post('collection/delivered/parcel/amount/by/{user}', 'FinalCollectionController@collectionDeliveredParcelAmountByDManStore')->name('collectionDeliveredParcelAmountByDManStore');
            Route::post('collection/delivered/parcel/amount/by/ajax', 'FinalCollectionController@collectionDeliveredParcelAmountByDManStoreByAjax')->name('collectionDeliveredParcelAmountByDManStoreByAjax');
        });
        /*# Collection Delivered Parcel Amount #*/

        /*# All Merchant Due bill Summary #*/
        Route::group(['namespace' => 'Payment\Merchant'], function(){
            Route::get('merchant/payment/due/bill/summary', 'MerchantPaymentController@merchantPaymentDueBillSummary')->name('merchantPaymentDueBillSummary');
            Route::get('merchant/payment/due/bill/parcel/details/{merchant}', 'MerchantPaymentController@merchantPaymentDueBillsParcelDetails')->name('merchantPaymentDueBillsParcelDetails');
            Route::post('merchant/payment/due/bill/parcel/details/{merchant}', 'MerchantPaymentController@merchantPaymentDueBillsPayStoring')->name('merchantPaymentDueBillsPayStoring');
            // payment history
            Route::get('merchant/payment/paid/invoice/active/list', 'MerchantPaymentController@activeMerchantPaymentPaidInvoice')->name('activeMerchantPaymentPaidInvoice');
            Route::get('merchant/payment/paid/invoice/summary/{merchant}', 'MerchantPaymentController@merchantPaymentPaidInvoiceSummary')->name('merchantPaymentPaidInvoiceSummary');
            Route::get('merchant/payment/paid/invoice/details/{invoice}', 'MerchantPaymentController@merchantPaymentPaidInvoiceDetails')->name('merchantPaymentPaidInvoiceDetails');
        });
        /*# All Merchant Due bill Summary #*/

    });
    /*# Admin #*/

    /*# Customer #*/
        Route::group(['namespace' => 'Customer'], function(){
            Route::resource('customer', 'CustomerController');
            //Route::post('merchant/search', 'CustomerController@customerDetailsByPhoneNo')->name('customerDetailsByPhoneNo');
        });
        /*# Customer #*/

    /*# AllAjaxRequest #*/
        Route::group(['namespace' => 'AllAjaxRequest'], function(){
            Route::post('merchant/search', 'AllAjaxRequestController@merchantSearchDetails')->name('merchantSearchDetails');

            Route::post('customer/phone/search', 'AllAjaxRequestController@customerPhoneSearch')->name('customerPhoneSearch');
            Route::post('customer/search/details/by/phone', 'AllAjaxRequestController@customerDetailsByPhone')->name('customerDetailsByPhone');

            //invoice  details show a modal by ajax order ID
            Route::post('parcel/details/show/by/invoice/id/on/ajax', 'AllAjaxRequestController@parcelDetailsShowByInvoiceIdOnAjax')->name('parcelDetailsShowByInvoiceIdOnAjax');
        });
        /*# AllAjaxRequest #*/

});
/*# Backend #*/




Route::group(['namespace' => 'LocationAllAjax'], function(){
    Route::get('get/upazila/by/district/id', 'LocationAllAjaxController@getUpazilaByDistrictId')->name('getUpazilaByDistrictId');
    Route::post('area/search', 'LocationAllAjaxController@areaSearchAutocomplete')->name('areaSearchAutocomplete');
    Route::post('area/search/pickup', 'LocationAllAjaxController@areaSearchAutocompletePickup')->name('areaSearchAutocompletePickup');
});




//All Merchant Route Url Start From Here

Route::get(HS_MERCHANT_LOGIN_ROUTE_SET_FOR_AUTHENTICATESUSERS_SHOWLOGINFORM,'Backend\Merchant\Auth\LoginController@showMerchantLoginForm')->name(HS_MERCHANT_LOGIN_WEB_ROUTE_NAME);
Route::post(HS_MERCHANT_LOGIN_ROUTE_SET_FOR_AUTHENTICATESUSERS_SHOWLOGINFORM,'Backend\Merchant\Auth\LoginController@login')->name(HS_MERCHANT_LOGIN_WEB_ROUTE_NAME);
Route:: post('merchant/logout', 'Backend\Merchant\Auth\LoginController@logout')->name('merchant.logout');
//Route::post('login-attempt','Backend\Merchant\Auth\LoginController@loginAttempt')->name('loginAttempt');
//Route:: post('admin/login', 'Auth\Admin\LoginController@login')->name('admin.login');
        

/*# Backend Merchant #*/
Route::group(['as'=> 'merchant.', 'prefix'=>'merchant' , 'namespace' => 'Backend\Merchant',
    'middleware' => ['merchant:merchant']], function(){
    

    /*# Merchant Dashboard after Login#*/
    Route::group(['as'=> 'dashboard.','prefix'=>'dashboard' , 'namespace' => 'Dashboard',
    ], function(){
        Route::get('home','HomeController@index')->name('index');
    });//Auth::guard('merchant')->user()->name
    /*# Merchant Dashboard after Login#*/ //merchant/dashboard/view  ,, route('merchant.dashboard.index') 

    /*# Merchant Order#*/
    Route::group(['as'=> 'order.','prefix'=>'order' , 'namespace' => 'Order',
    'middleware' => ['merchant:merchant']], function(){
        Route::get('create','OrderController@index')->name('k');
    });//Auth::guard('merchant')->user()->name
    /*# Merchant Order#*/  //merchant/admin/k/e
 


/*# Backend Merchant #*/
});
/*# Backend Merchant #*/



/*
Route::group(['as'=> 'admin.', 'prefix'=>'admin' , 'namespace' => 'Admin',
'middleware' => ['auth']], function(){
});
class="{{ request()->is('admin/drm_products*') ? 'active' : '' }}"
*/
