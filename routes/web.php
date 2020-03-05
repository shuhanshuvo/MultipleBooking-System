<?php

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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/custom-login', 'CustomLoginController@custom_login')->name('custom.login');
Route::post('/custom-reg', 'CustomLoginController@custom_reg')->name('custom.reg');


Route::prefix('admin')->group(function (){
            Route::get('/login', 'Auth\AdminLoginController@showLoginform')->name('admin.login');
            Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
        
            Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
        });


Route::group(['middleware' => ['auth:admin']], function() {
            Route::prefix('admin')->group(function() {

            Route::get('/', 'AdminController@index')->name('admin.dashbord');

            Route::get('admin-profile', 'AdminController@ShowProfile')->name('admin.profile');
            Route::post('admin-profile-update', 'AdminController@admin_profile_update')->name('admin.update.profile');

//Change Password
            
            Route::get('/change-password', 'AdminController@change_password')->name('admin.change.pass');
            Route::post('/change-password-save', 'AdminController@change_password_save')->name('admin.pass.update');

//General Settings

            Route::get('/general-settings', 'GeneralSettingController@g_settings')->name('admin.general.settings');
            Route::post('/general-settings', 'GeneralSettingController@store_g_settings')->name('admin.store.general.settings'); 

//Email Settings

            Route::get('/Email-settings', 'SendEmailController@email_settings')->name('admin.Email.settings');
            Route::post('/Send-Email', 'SendEmailController@send_email')->name('admin.send.email'); 


///All Transaction

            Route::get('all-transaction', 'AdminController@all_tran')->name('admin.all.tran');



//Add Amenities.....

            // Route::get('/add-package', 'ManagementController@add_package')->name('admin.create.package');
            Route::post('/store-ameniti', 'AmenitieController@store_amenitie')->name('admin.store.ameniti'); 
            Route::get('/all-ameniti', 'AmenitieController@all_ameniti')->name('admin.all.ameniti');
            // Route::post('/package-delete', 'ManagementController@package_delete')->name('admin.package.delete');
            // Route::get('/edit-ameniti/{id}', 'AmenitieController@edit_emeniti')->name('admin.edit.ameniti');
            Route::post('/update-ameniti', 'AmenitieController@update_ameniti')->name('admin.update.ameniti');

//Add Package

            Route::get('/add-package', 'ManagementController@add_package')->name('admin.create.package');
            Route::post('/store-package', 'ManagementController@store_package')->name('admin.store.package'); 
            Route::get('/all-package', 'ManagementController@all_package')->name('admin.all.package');
            Route::post('/package-delete', 'ManagementController@package_delete')->name('admin.package.delete');
            Route::get('/edit-package/{id}', 'ManagementController@edit_package')->name('admin.edit.package');
            Route::post('/update-package', 'ManagementController@update_package')->name('admin.update.package');

             //booking

            Route::get('/all-package-booking', 'ManagementController@all_book_package')->name('admin.all.package.booking');

             // Approve/ Disapprove
    
            Route::get('/package-approve/{id}', 'ManagementController@package_approve')->name('package.approve');
            Route::get('/package-reject/{id}', 'ManagementController@package_reject')->name('package.reject');

            //Approve/Reject booking
            
            Route::get('approve-booking-package', 'ManagementController@all_approve_package')->name('admin.all.approve.package');
            Route::get('reject-booking-package', 'ManagementController@all_reject_package')->name('admin.all.reject.package');


//Hotel Management

            Route::get('/add-hotel', 'HotelController@add_hotel')->name('admin.create.hotel');
            Route::post('/store-hotel', 'HotelController@store_hotel')->name('admin.store.hotel'); 
            Route::get('/all-hotel', 'HotelController@all_hotel')->name('admin.all.hotel');
            Route::get('/edit-hotel/{id}', 'HotelController@edit_hotel')->name('admin.edit.hotel');
            Route::post('/update-hotel', 'HotelController@update_hotel')->name('admin.update.hotel');

//Add Room

            Route::get('/add-room/{id}', 'HotelController@add_room')->name('admin.create.room');
            Route::post('/store-room', 'HotelController@store_room')->name('admin.store.room'); 
            Route::get('/all-room/{id}', 'HotelController@all_room')->name('admin.all.room');
            Route::get('/edit-room/{id}', 'HotelController@edit_room')->name('admin.edit.room');
            Route::post('/update-room', 'HotelController@update_room')->name('admin.update.room');

            //booking

            Route::get('/all-room-booking', 'HotelController@all_book_room')->name('admin.all.room.booking');

             // Approve/ Disapprove
    
            Route::get('/room-approve/{id}', 'HotelController@room_approve')->name('room.approve');
            Route::get('/room-reject/{id}', 'HotelController@room_reject')->name('room.reject');

            //Approve/Reject booking
            
            Route::get('approve-booking-room', 'HotelController@all_approve_room')->name('admin.all.approve.room');
            Route::get('reject-booking-room', 'HotelController@all_reject_room')->name('admin.all.reject.room');




//Lounge Management

            Route::get('/add-lounge', 'LoungeController@add_lounge')->name('admin.create.lounge');
            Route::post('/store-lounge', 'LoungeController@store_lounge')->name('admin.store.lounge'); 
            Route::get('/all-lounge', 'LoungeController@all_lounge')->name('admin.all.lounge');
            Route::get('/edit-lounge/{id}', 'LoungeController@edit_lounge')->name('admin.edit.lounge');
            Route::post('/update-lounge', 'LoungeController@update_lounge')->name('admin.update.lounge');
            Route::post('/lounge-delete', 'LoungeController@lounge_delete')->name('admin.lounge.delete');


             //booking

            Route::get('/all-lounge-booking', 'LoungeController@all_book_lounge')->name('admin.all.lounge.booking');

             // Approve/ Disapprove
    
            Route::get('/lounge-approve/{id}', 'LoungeController@lounge_approve')->name('lounge.approve');
            Route::get('/lounge-reject/{id}', 'LoungeController@lounge_reject')->name('lounge.reject');

            //Approve/Reject booking
            
            Route::get('approve-booking-lounge', 'LoungeController@all_approve_lounge')->name('admin.all.approve.lounge');
            Route::get('reject-booking-lounge', 'LoungeController@all_reject_lounge')->name('admin.all.reject.lounge');


//Pickup Cars Management

            Route::get('/add-pickup', 'PickupController@add_pickup')->name('admin.create.pickup');
            Route::post('/store-pickup', 'PickupController@store_pickup')->name('admin.store.pickup'); 
            Route::get('/all-pickup', 'PickupController@all_pickup')->name('admin.all.pickup');
            Route::get('/edit-pickup/{id}', 'PickupController@edit_pickup')->name('admin.edit.pickup');
            Route::post('/update-pickup', 'PickupController@update_pickup')->name('admin.update.pickup');
            Route::post('/pickup-delete', 'PickupController@pickup_delete')->name('admin.pickup.delete');

//Rent Cars Management

            Route::get('/add-rentCar', 'RentCarController@add_rentCar')->name('admin.create.rentCar');
            Route::post('/store-rentCar', 'RentCarController@store_rentCar')->name('admin.store.rentCar'); 
            Route::get('/all-rentCar', 'RentCarController@all_rentCar')->name('admin.all.rentCar');
            Route::get('/edit-rentCar/{id}', 'RentCarController@edit_rentCar')->name('admin.edit.rentCar');
            Route::post('/update-rentCar', 'RentCarController@update_rentCar')->name('admin.update.rentCar');
            Route::post('/rentCar-delete', 'RentCarController@rentCar_delete')->name('admin.rentCar.delete');


             //booking

            Route::get('/all-rentCar-booking', 'RentCarController@all_book_rentCar')->name('admin.all.rentCar.booking');

             // Approve/ Disapprove
    
            Route::get('/rentCar-approve/{id}', 'RentCarController@rentCar_approve')->name('rentCar.approve');
            Route::get('/rentCar-reject/{id}', 'RentCarController@rentCar_reject')->name('rentCar.reject');

            //Approve/Reject booking
            
            Route::get('approve-booking-rentCar', 'RentCarController@all_approve_rentCar')->name('admin.all.approve.rentCar');
            Route::get('reject-booking-rentCar', 'RentCarController@all_reject_rentCar')->name('admin.all.reject.rentCar');


//User Management


            Route::get('/all-user', 'ManagementController@all_user')->name('admin.all.user');
            Route::post('/user-delete', 'ManagementController@user_delete')->name('admin.user.delete');
            Route::get('/all-verified-user', 'ManagementController@all_verified_user')->name('admin.all.verified.user');

            Route::get('/edit-user/{id}', 'ManagementController@edit_user')->name('admin.edit.user');
            // Route::post('/update-user', 'ManagementController@update_user')->name('admin.update.user');

    
 
            
                });
            });

//User.......

Route::group(['middleware' => ['auth']], function() {
        Route::group(['prefix' => 'home'], function (){
            Route::get('/', 'HomeController@index')->name('home');
           
            Route::get('user-dashboard', 'UserController@user_dashboard')->name('user.dashboard');

///User Prifile edit update
            Route::get('user-profile', 'UserController@ShowProfile')->name('user.profile');
            Route::post('user-profile-update', 'UserController@user_profile_update')->name('user.update.profile');

//Change Password
            
            Route::get('/change-password', 'UserController@change_password')->name('user.change.pass');
            Route::post('/change-password-save', 'UserController@change_password_save')->name('user.pass.update');


//Package Show..................

            Route::get('show-packages','UserController@show_packages')->name('show.package');
            Route::get('package-detailes/{id}','UserController@packages_details')->name('package.details');
            Route::get('/all-package', 'UserController@all_package')->name('user.all.package');

//Hotel and Room Show...........

             Route::get('/all-hotel', 'UserController@all_hotel')->name('user.all.hotel');
             Route::get('/all-room/{id}', 'UserController@all_room')->name('user.all.room');
             Route::get('hotel-detailes/{id}','UserController@hotel_details')->name('hotel.details');
             Route::get('room-detailes/{id}','UserController@room_details')->name('room.details');

//Lounge Show...........

            Route::get('/all-lounge', 'UserController@all_lounge')->name('user.all.lounge');
            Route::get('lounge-details/{id}','UserController@lounge_details')->name('lounge.details');


//Pickup Show...........

            Route::get('/all-pickup', 'UserController@all_pickup')->name('user.all.pickup');
            Route::get('pickup-details/{id}','UserController@pickup_details')->name('pickup.details');

//Rent Car Show...........

            Route::get('/all-rentCar', 'UserController@all_rentCar')->name('user.all.rentCar');
            Route::get('rentCar-details/{id}','UserController@rentCar_details')->name('rentCar.details');


//Payment method...........

            //package

            Route::get('package-checkout/{id}','PaymentController@package_checkout')->name('package.checkout');
            Route::post('package-checkout','PaymentController@store_checkout')->name('store.package.checkout');

           //Room

            Route::get('room-checkout/{id}','PaymentController@room_checkout')->name('room.checkout');
            Route::post('room-checkout','PaymentController@store_room_checkout')->name('store.room.checkout');

             //Lounge

            Route::get('lounge-checkout/{id}','PaymentController@lounge_checkout')->name('lounge.checkout');
            Route::post('lounge-checkout','PaymentController@store_lounge_checkout')->name('store.lounge.checkout');

             //Lounge

            Route::get('rentCar-checkout/{id}','PaymentController@rentCar_checkout')->name('rentCar.checkout');
            Route::post('rentCar-checkout','PaymentController@store_rentCar_checkout')->name('store.rentCar.checkout');


                
            });
        });
