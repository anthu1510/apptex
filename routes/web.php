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
Route::get('/', 'ClientController@Home');
Route::get('about', 'ClientController@About');
Route::get('how-it-work', 'ClientController@HowItWorks');
Route::get('pricing', 'ClientController@Pricing');
Route::get('selecturpack', 'ClientController@SelectYourPack');
Route::get('contact', 'ClientController@Contact');
Route::get('samples', 'ClientController@Samples');
Route::get('reachus', 'ClientController@ReachUs');
Route::get('clientlogin', 'ClientController@Login');
Route::post('clientlogincheck', 'SupplierController@Login');
Route::get('clientlogout', 'SupplierController@ClientLogOut');
Route::get('sendhtmlemail','MailController@html_email');
Route::post('sendmail', 'ClientController@SendMail');
Route::post('savecontact', 'ClientController@saveContact');
Route::get('termsandcondition', 'ClientController@TermsOfUse');
Route::get('refundpolicy', 'ClientController@RefundPolicy');
Route::get('privacy', 'ClientController@PrivacyStatement');


// Client Auth Route
Route::middleware(['client.auth'])->group(function () {
    Route::get('countrylist', 'ClientController@index');
    Route::get('catagory/{id}', 'ClientController@listCatagory');
    Route::get('listbuyer/{cid}/{catid}', 'ClientController@listBuyer');
    Route::get('buyerserverside/{cid}/{catid}', 'BuyerController@BuyerServerSideFilter');
    Route::post('buyerview', 'BuyerController@viewBuyer');
});

//Route::get('countrylist', 'ClientController@index')->middleware('clientauth');



//Route::get('signup', 'ClientController@Signup');
Route::get('signup/{pack}', 'ClientController@Signup');
Route::post('signupsave', 'ClientController@SignupSave');
//Route::post('paymentsuccess', 'ClientController@PaymentSuccess');
Route::post('paymentsuccess', 'ClientController@PaymentSuccess');
Route::get('test', 'ClientController@Test');

// route for to show payment form using get method


// route for make payment request using post method
Route::post('dopayment', 'RazorpayController@dopayment')->name('dopayment');

//Route::get('catagory/{id}', 'ClientController@listCatagory');
//Route::get('listbuyer/{cid}/{catid}', 'ClientController@listBuyer');

Route::get('buyerserverside/{cid}/{catid}', 'BuyerController@BuyerServerSideFilter');
Route::post('buyerview', 'BuyerController@viewBuyer');



Route::get('admin', 'UserController@index');
Route::post('login', 'UserController@login');
Route::get('logout', 'UserController@logout');
Route::get('forgotpassword', 'UserController@forgotPassword');
Route::post('forgotcheck', 'UserController@forgotcheck');
Route::post('resetcodecheck', 'UserController@resetCodeCheck');
Route::get('forgotverify', 'UserController@forgotVerify');
Route::get('forgotverifycheck', 'UserController@forgotVerifycheck');
Route::post('newpassupdate', 'UserController@ResetPasswordUpdate');



// Authendicated Route
    Route::group(['middleware' => ['guest']], function () {
    Route::get('dashboard', 'DashboardController@index');

    Route::prefix('dashboard')->group(function () {
        //Tiles
        Route::post('gettiles', 'TilesController@GetTiles');
        Route::post('usersrecords', 'TilesController@UserWiseQuote');

        //Profile
        Route::get('profile', 'DashboardController@EditProfile');
        Route::post('profileupdate', 'DashboardController@Update');
        Route::get('passwordchange', 'DashboardController@passwordchange');
        Route::post('passwordupdate', 'DashboardController@updatepassword');

        //Users
        Route::get('users', 'UserController@Users');
        Route::post('users/store', 'UserController@Store');
        Route::post('users/useredit', 'UserController@UserEdit');
        Route::post('users/update', 'UserController@Update');
        Route::post('users/delete', 'UserController@UserDelete');
        Route::get('userserverside', 'UserController@UsersServerSide');

        Route::get('buyer/create', 'BuyerController@Create');
        Route::post('buyer/save2', 'BuyerController@save2');
        Route::get('buyer/list', 'BuyerController@list');
        Route::get('buyer/contactlist', 'BuyerController@listContact');
        Route::get('buyer/supplierlist', 'BuyerController@listSupplier');
        Route::get('buyerserverside', 'BuyerController@NodeServerSide');
        Route::get('contactserverside', 'BuyerController@ContactServerSide');
        Route::get('supplierserverside', 'BuyerController@SupplierServerSide');
        Route::post('buyer/buyeredit', 'BuyerController@NodeEdit');
        Route::post('buyer/contactdetail', 'BuyerController@ContactDetail');
        Route::post('buyer/deletecontact', 'BuyerController@DeleteContact');
        Route::post('buyer/supplierdetail', 'BuyerController@SupplierDetail');
        Route::post('buyer/deletesupplier', 'BuyerController@DeleteSupplier');
        Route::post('buyer/bonusdate', 'BuyerController@BonusDate');
        Route::post('buyer/updatesave', 'BuyerController@UpdateSave');
        Route::post('buyer/validityextent', 'BuyerController@ValidityExtent');





        Route::get('comission/comissionlist', 'NodeController@comissionlist');
        Route::get('comission/comission/{id}', 'NodeController@comission');
        Route::get('comissionserverside/{id}', 'NodeController@ComissionServerSide');
        Route::get('comission/couponcomissionlist', 'NodeController@couponcomissionlist');
        Route::get('couponcomissionserverside', 'NodeController@CouponComissionServerSide');
        //payout
        Route::get('payout', 'PayoutController@Payout');
        Route::get('payout/datebetween', 'PayoutController@DateBetween');
        Route::post('payout/datebetweenview', 'PayoutController@DateBetweenView');
        Route::get('payout/payoutgenerate', 'PayoutController@PayoutGenerate');
        Route::post('payout/makepayout', 'PayoutController@MakePayout');
        Route::post('payout/payoutgenerateview', 'PayoutController@PayoutGenerateView');
        Route::get('payout/payoutlist', 'PayoutController@PayoutList');
        Route::post('payout/payoutedit', 'PayoutController@payoutEdit');
        Route::post('payout/updatesave', 'PayoutController@updateSave');

        Route::get('payoutserverside', 'PayoutController@PayoutServerSide');
        Route::get('payouteligbleserverside', 'PayoutController@PayoutEligibleServerSide');
        Route::get('payoutgenerateserverside', 'PayoutController@PayoutGenerateServerSide');
        Route::get('payoutlistserverside', 'PayoutController@PayoutListServerSide');

        //Tree
        Route::get('tree/tree/{id}', 'TreeController@index');
        Route::get('tree/autotree/{id}', 'TreeController@AutoTree');
        Route::get('tree/goldtree/{id}', 'TreeController@GoldTree');
        Route::get('tree/silvertree/{id}', 'TreeController@SilverTree');
        Route::get('tree/list', 'NodeController@treelist');
        Route::get('nodetreeserverside', 'NodeController@NodeTreeServerSide');
        Route::get('settreevalues', 'NodeController@setTreeValues');  // for master setup..
        Route::get('testinsert', 'NodeController@testInsert');  // for master setup..





    });
});


