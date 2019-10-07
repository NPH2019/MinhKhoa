<?php

Route::get('/', 'PageController@getIndex');

Route::get('index',[
	'as'=>'index',
	'uses'=>'PageController@getindex'
]);
Route::get('Product_type/{type}',[
	'as'=>'Product_type',
	'uses'=>'PageController@getProduct_type'
]);
Route::get('Product',[
    'as'=>'Product',
    'uses'=>'PageController@getProduct'
]);
Route::get('Product_details/{type}',[
	'as'=>'Product_details',
	'uses'=>'PageController@getProduct_details'
]);
Route::get('Contact',[
	'as'=>'Contact',
	'uses'=>'PageController@getContact'
]);
Route::post('Contact',[
	'as'=>'Contact',
	'uses'=>'PageController@postContact'
]);
Route::get('About',[
	'as'=>'About',
	'uses'=>'PageController@getAbout'
]);
Route::get('Service',[
	'as'=>'Service',
	'uses'=>'PageController@getService'
]);
Route::get('Service_details/{type}',[
	'as'=>'Service_details',
	'uses'=>'PageController@getService_details'
]);
Route::get('Recruitment',[
	'as'=>'Recruitment',
	'uses'=>'PageController@getRecruitment'
]);

/*
 * Route manager
 */
Route::get('login',['as'=>'login', 'uses'=>'LoginController@getlogin']);
Route::post('login',['as'=>'login', 'uses'=>'LoginController@postlogin']);
Route::get('logout', [ 'as' => 'logout', 'uses' => 'LogoutController@getLogout']);
//Route::get('register', [ 'as' => 'register', 'uses' => 'PageController@getregister']);
//Route::post('register', [ 'as' => 'register', 'uses' => 'PageController@postregister']);
Route::get('Recoverpw', [ 'as' => 'Recoverpw', 'uses' => 'RecoverpwController@getRecoverpw']);

Route::group(['namespace'=>'Frontend'],function() {

    Route::get('User',[
        'as'=>'User',
        'uses'=>'AdminController@getUser'
    ]);
    Route::get('Edit_user/{id}',[
        'as'=>'Edit_user',
        'uses'=>'AdminController@getEdit_user'
    ]);
    Route::post('Edit_user/{id}',[
        'as'=>'Edit_user',
        'uses'=>'AdminController@postEdit_user'
    ]);
    Route::get('Resetpw/{id}',[
        'as'=>'Resetpw',
        'uses'=>'AdminController@getResetpw'
    ]);
    Route::post('Resetpw/{id}',[
        'as'=>'Resetpw',
        'uses'=>'AdminController@postResetpw'
    ]);
    Route::get('admin',[
        'as'=>'admin',
        'uses'=>'AdminController@getadmin'
    ]);
    Route::post('admin',[
        'as'=>'admin',
        'uses'=>'AdminController@postadmin'
    ]);
    Route::get('about', [
        'as' => 'about',
        'uses' => 'AdminController@getabout'
    ]);
    Route::get('UpdataAbout/{id}', [
        'as' => 'UpdataAbout',
        'uses' => 'AdminController@getUpdataAbout']);
    Route::post('UpdataAbout/{id}', [
        'as' => 'UpdataAbout',
        'uses' => 'AdminController@postUpdataAbout'
    ]);

    Route::get('index_about', [
        'as' => 'index_about',
        'uses' => 'AdminController@getindex_about'
    ]);
    Route::get('edit_index_about/{id}', [
        'as' => 'edit_index_about',
        'uses' => 'AdminController@getedit_index_about'
    ]);
    Route::post('edit_index_about/{id}', [
        'as' => 'edit_index_about',
        'uses' => 'AdminController@postedit_index_about'
    ]);


    Route::get('product',[
        'as'=>'product',
        'uses'=>'AdminController@getproduct'
    ]);
    Route::group(['prefix'=>'/product'],function(){
        Route::get('add_product',[
            'as'=>'add_product',
            'uses'=>'AdminController@getadd_product'
        ]);
        Route::post('add_product',[
            'as'=>'add_product',
            'uses'=>'AdminController@postadd_product'
        ]);
        Route::get('add_product/add_type',[
            'as'=>'add_type',
            'uses'=>'AdminController@getadd_type'
        ]);
        Route::post('add_product/add_type',[
            'as'=>'add_type',
            'uses'=>'AdminController@postadd_type'
        ]);
        Route::get('Edit/{id}',[
            'as'=>'Edit',
            'uses'=>'AdminController@getEdit'
        ]);
        Route::post('Edit/{id}',[
            'as'=>'Edit',
            'uses'=>'AdminController@postEdit'
        ]);
        Route::get('Delete/{id}',[
            'as'=>'Delete',
            'uses'=>'AdminController@getDelete'
        ]);
        Route::get('DeleteType/{id}',[
            'as'=>'DeleteType',
            'uses'=>'AdminController@getDeleteType'
        ]);
        Route::get('DeletecCus/{id}',[
            'as'=>'DeletecCus',
            'uses'=>'AdminController@getDeletecCus'
        ]);
    });

    Route::get('customer',[
        'as'=>'customer',
        'uses'=>'AdminController@getcustomer'
    ]);
    Route::get('View/{id}',[
        'as'=>'View',
        'uses'=>'AdminController@getView'
    ]);
    Route::get('service',[
        'as'=>'service',
        'uses'=>'AdminController@getservice'
    ]);
    Route::group(['prefix'=>'/service'],function() {

        Route::get('add_service', [
            'as' => 'add_service',
            'uses' => 'AdminController@getadd_service'
        ]);
        Route::post('add_service', [
            'as' => 'add_service',
            'uses' => 'AdminController@postadd_service'
        ]);
        Route::get('Edit_service/{id}',[
            'as'=>'Edit_service',
            'uses'=>'AdminController@getEdit_service'
        ]);
        Route::post('Edit_service/{id}',[
            'as'=>'Edit_service',
            'uses'=>'AdminController@postEdit_service'
        ]);
        Route::get('Delete_service/{id}',[
            'as'=>'Delete_service',
            'uses'=>'AdminController@getDelete_service'
        ]);

    });
    Route::get('manager',[
        'as'=>'manager',
        'uses'=>'AdminController@getmanager'
    ]);
    Route::get('banner',[
        'as'=>'banner',
        'uses'=>'AdminController@getbanner'
    ]);
    Route::get('add_banner',[
        'as'=>'add_banner',
        'uses'=>'AdminController@getadd_banner'
    ]);
    Route::post('add_banner',[
        'as'=>'add_banner',
        'uses'=>'AdminController@postadd_banner'
    ]);
    Route::get('DeleteBanner/{id}',[
        'as'=>'DeleteBanner',
        'uses'=>'AdminController@getDeleteBanner'
    ]);
    Route::get('statistics',[
        'as'=>'statistics',
        'uses'=>'AdminController@getstatistics'
    ]);

});



