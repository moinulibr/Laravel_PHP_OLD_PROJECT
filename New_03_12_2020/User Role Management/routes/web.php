<?php

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


Route::get('clear', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('storage:link');
    return 'DONE'; //Return anything
});







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





    #,'routeCheck'
    Route::group(['middleware' => ['auth','routePermission']], function ()
    {
        /*
        |---------------------------
        |User Role Management
        |--------------------------
        */
        Route::group(['as'=> 'admin.', 'prefix'=>'admin' , 'namespace' => 'BackendUserRole\Admin\UserRoleManagement'],function(){
            Route::resource('user-role', 'RoleController');
            Route::get('user-role-delete/{id}','RoleController@delete')->name('user-role.delete');
        });

        /*
        |---------------------------
        |User Role Module  Management
        |--------------------------
        */
        Route::group(['as'=> 'admin.', 'prefix'=>'admin' , 'namespace' => 'BackendUserRole\Admin\UserRoleManagement'],function(){
            Route::resource('user-role-module', 'UserRoleModuleController');
            Route::get('module-delete/{id}','UserRoleModuleController@delete')->name('user-role-module.delete');
        });


        /*
        |---------------------------
        |User Role Module Action Management
        |--------------------------
        */
        Route::group(['as'=> 'admin.', 'prefix'=>'admin' , 'namespace' => 'BackendUserRole\Admin\UserRoleManagement'],function(){
            Route::resource('user-role-module-action', 'UserRoleModuleActionController');
            Route::get('module-action-delete/{id}','UserRoleModuleActionController@delete')->name('user-role-module-action.delete');
        });


        /*
        |---------------------------
        |User Role Module Action Permition Management
        |--------------------------
        */
        Route::group(['as'=> 'admin.', 'prefix'=>'admin' , 'namespace' => 'BackendUserRole\Admin\UserRoleManagement'],function(){
            Route::resource('role-module-action-permition', 'UserRoleModuleActionPermitionController');
            Route::get('module-action-permition-delete/{id}','UserRoleModuleActionPermitionController@delete')->name('role-module-action-permition.delete');
        });

        /*
        |---------------------------
        |User Role Menu Title Management
        |--------------------------
        */
        Route::group(['as'=> 'admin.', 'prefix'=>'admin' , 'namespace' => 'BackendUserRole\Admin\UserRoleManagement'],function(){
            Route::resource('role-menu-title', 'UserRoleMenuTitleController');
            Route::get('user-role-menu-title-delete/{id}','UserRoleMenuTitleController@delete')->name('role-menu-title.delete');
        });

        /*
        |---------------------------
        |User Role Menu Title Permition Management
        |--------------------------
        */
        Route::group(['as'=> 'admin.', 'prefix'=>'admin' , 'namespace' => 'BackendUserRole\Admin\UserRoleManagement'],function(){
            Route::resource('role-menu-title-permition', 'UserRoleMenuTitlePermitionController');
            Route::get('user-role-menu-title-permition-delete/{id}','UserRoleMenuTitlePermitionController@delete')->name('role-menu-title-permition.delete');
        });



        /*
        |---------------------------
        |User Role Menu Action  Management
        |--------------------------
        */
        Route::group(['as'=> 'admin.', 'prefix'=>'admin' , 'namespace' => 'BackendUserRole\Admin\UserRoleManagement'],function(){
            Route::resource('user-role-menu-action', 'UserRoleMenuActionController');
            Route::get('user-role-menu-action-delete/{id}','UserRoleMenuActionController@delete')->name('user-role-menu-action.delete');
        });


        /*
        |---------------------------
        |User Role Menu Action Permition Management
        |--------------------------
        */
        Route::group(['as'=> 'admin.', 'prefix'=>'admin' , 'namespace' => 'BackendUserRole\Admin\UserRoleManagement'],function(){
            Route::resource('role-menu-action-permition', 'UserRoleMenuActionPermitionController');
            Route::get('user-role-menu-action-permition-delete/{id}','UserRoleMenuActionPermitionController@delete')->name('role-menu-action-permition.delete');
        });
 
    });///routePermission Middleware














