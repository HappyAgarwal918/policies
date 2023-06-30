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

Route::get('reload-captcha', 'frontendController@reloadCaptcha')->name('refreshCaptcha');

Route::get('/','frontendController@index')->name('home');
Route::get('/create','frontendController@create')->name('create');
Route::get('/pricing','frontendController@pricing')->name('pricing');
Route::get('/testimonials','frontendController@testimonials')->name('testimonials');
Route::get('/settings','frontendController@settings')->name('settings');
Route::get('/about','frontendController@about')->name('about');
Route::get('/contact','frontendController@contact')->name('contact_us');
Route::post('/contact/submit','frontendController@contactsave')->name('contact');

Route::get('/faq','frontendController@faq')->name('faq');
Route::get('/terms-and-privacy','frontendController@termsandprivacy')->name('termsandprivacy');
Route::get('/cookie-consent-banner','frontendController@cookieconsentbanner')->name('cookieconsentbanner');
Route::get('/blog','frontendController@blog')->name('blog');
Route::get('/blogs','frontendController@blogs')->name('blogs');

Route::get('/lifetime-deal','policyController@lifetimedeal')->name('lifetimedeal');
Route::post('/lifetime-deal/save','policyController@lifetimedealsave')->name('lifetimedealsave');

/* ------------- Custom Clause ------------- */

Route::get('/custom-clause','policyController@customclause')->name('customclause');
Route::post('/custom-clause-home','policyController@customclausesave')->name('customclausesave');

Route::get('/custom-clause-home','policyController@clausehome')->name('clausehome');
Route::get('/custom-clause-home/{id}', 'policyController@customclausedestroy')->name('customclausedestroy');

Route::get('/bundle','policyController@bundlebill')->name('bundlebill');
Route::post('/bundle-billing','policyController@bundlebilling1')->name('bundlebilling1');

Route::get('/invoice', 'policyController@invoice');


/* ------------- Login & Logout ------------- */

Route::get('/home', 'policyController@my_policies')->name('my_policies');

Route::post('/signup','registerations@index');

Auth::routes(['verify' => true]);

Route::get('change/password', 'Auth\changepasswordController@index')->name('change_password');
Route::post('change/password/save', 'Auth\changepasswordController@store')->name('change_password_save');

/* ------------- Blog Policy Generator ------------- */

Route::get('/acceptable-use-policy-generator','policygeneratorController@acceptablegenerator')->name('acceptablegenerator');
Route::get('/cookie-consent-banner-generator','policygeneratorController@cookieconsent')->name('cookieconsentgenerator');
Route::get('/cookie-policy-generator','policygeneratorController@cookiegenerator')->name('cookiegenerator');
Route::get('/disclaimer-generator','policygeneratorController@disclaimergenerator')->name('disclaimergenerator');
Route::get('/dmca-policy-generator','policygeneratorController@dmcagenerator')->name('dmcagenerator');
Route::get('/privacy-policy-generator','policygeneratorController@privacygenerator')->name('privacygenerator');
Route::get('/refund-policy-generator','policygeneratorController@refundgenerator')->name('refundgenerator');
Route::get('/terms-and-conditions-generator','policygeneratorController@termsgenerator')->name('termsgenerator');

/* ------------- Basic Policies ------------- */

Route::get('/acceptable-use-basic-policy','policiesController@acceptableBasic')->name('acceptableBasic');
Route::get('/cookie-basic-policy','policiesController@cookieBasic')->name('cookieBasic');
Route::get('/disclaimer-basic-policy','policiesController@disclaimerBasic')->name('disclaimerBasic');
Route::get('/dmca-basic-policy','policiesController@dmcaBasic')->name('dmcaBasic');
Route::get('/privacy-basic-policy','policiesController@privacyBasic')->name('privacyBasic');
Route::get('/refund-basic-policy','policiesController@refundBasic')->name('refundBasic');
Route::get('/terms-and-conditions-basic-policy','policiesController@termsBasic')->name('termsBasic');

/* ------------- Premium Policies ------------- */

Route::get('/acceptable-use-premium-policy','policiesController@acceptablePremium')->name('acceptablePremium');
Route::get('/cookie-premium-policy','policiesController@cookiePremium')->name('cookiePremium');
Route::get('/disclaimer-premium-policy','policiesController@disclaimerPremium')->name('disclaimerPremium');
Route::get('/dmca-premium-policy','policiesController@dmcaPremium')->name('dmcaPremium');
Route::get('/privacy-premium-policy','policiesController@privacyPremium')->name('privacyPremium');
Route::get('/refund-premium-policy','policiesController@refundPremium')->name('refundPremium');
Route::get('/terms-and-conditions-premium-policy','policiesController@termsPremium')->name('termsPremium');
Route::get('/legal-document-premium-policy','policiesController@legalPremium')->name('legalPremium');

/* ------------- Policies ------------- */

Route::get('/acceptable-use-policy','UserController@acceptable');
Route::post('/acceptable-use-policy','UserController@acceptableindex');
Route::get('/acceptable-use-policy-review','UserController@acceptablepolicyget');
Route::post('/acceptable-use-policy-review','UserController@acceptablepolicynew');


Route::get('cookie-policy','UserController@cookie');
Route::post('cookie-policy','UserController@cookieindex');
Route::get('cookie-policy-review','UserController@cookiepolicyget');
Route::post('cookie-policy-review','UserController@cookiepolicynew');

Route::get('/disclaimer','UserController@disclaimer');
Route::post('/disclaimer','UserController@disclaimerindex');
Route::get('/disclaimer-review','UserController@disclaimerpolicyget');
Route::post('/disclaimer-review','UserController@disclaimerpolicynew');

Route::get('/dmca-policy','UserController@dmca');
Route::post('/dmca-policy','UserController@dmcaindex');
Route::get('/dmca-policy-review','UserController@dmcapolicyget');
Route::post('/dmca-policy-review','UserController@dmcapolicynew');

Route::get('/privacy-policy','UserController@privacy');
Route::post('/privacy-policy','UserController@privacyindex');
Route::get('/privacy-policy-review','UserController@privacypolicyget');
Route::post('/privacy-policy-review','UserController@privacypolicynew');

Route::get('/refund-policy','UserController@refund');
Route::post('/refund-policy','UserController@refundindex');
Route::get('/refund-policy-review','UserController@refundpolicyget');
Route::post('/refund-policy-review','UserController@refundpolicynew');

Route::get('/terms-and-conditions','UserController@terms');
Route::post('/terms-and-conditions','UserController@termsindex');
Route::get('/terms-and-conditions-review','UserController@termspolicyget');
Route::post('/terms-and-conditions-review','UserController@termspolicynew');

Route::get('/billing','UserController@payment');
Route::post('/billing','UserController@paymentsave');
Route::post('/payment','PaymentController@billingsave');
Route::post('/charge', 'PaymentController@charge');
Route::post('/complete','UserController@completesave');

Route::get('/delete/policy/{id}', 'policyController@policydestroy')->name('policydestroy');


/* ------------- Admin Dashboard ------------- */
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', 'admin\Dashboard@index')->name('dashboard');
    Route::post('logo/upload', 'admin\Dashboard@store')->name('logo_upload');
    Route::get('edit/address/{id}', 'admin\Dashboard@edit')->name('edit_address');
    Route::post('address/edited', 'admin\Dashboard@editaddress')->name('address_edited');
});

/* ------------- Admin Users ------------- */
Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'admin\UseradminController@index')->name('admin_user');
    Route::get('delete/{id}','admin\UseradminController@destroy')->name('delete_user');
    Route::get('edit/policies/{email}','admin\UseradminController@edit')->name('user_policies');
    Route::get('edit/{email}','admin\UseradminController@edituser')->name('edit_admin_user');
    Route::post('/edited','admin\UseradminController@change')->name('edited_admin_user');
    Route::get('restore/{id}','admin\UseradminController@restore')->name('restore_user');
    Route::get('register','admin\UseradminController@addnew')->name('register_user');
    Route::post('registered','admin\UseradminController@addUser')->name('registered_user');
    Route::post('/adminedited','admin\UseradminController@editadmin')->name('edited_admin_usertype');
    Route::get('activate/{email}','admin\UseradminController@activate')->name('activate_user');
});

/* ------------- Admin Blog ------------- */
Route::group(['prefix' => 'blog'], function () {
    Route::get('/', 'admin\BlogController@index')->name('admin_blog');
    Route::post('ckeditor/upload', 'admin\BlogController@upload')->name('ckeditor.upload');
    Route::post('store', 'admin\BlogController@store')->name('store_blog');
    Route::get('all', 'admin\BlogController@all')->name('all_blogs');
    Route::get('delete/{id}', 'admin\BlogController@destroy')->name('delete_blog');
    Route::get('restore/{id}', 'admin\BlogController@restore')->name('restore_blog');
});

/* ------------- Admin Price ------------- */
Route::group(['prefix' => 'price'], function () {
    Route::get('/', 'admin\PriceController@index')->name('admin_price');
    Route::get('edit/{id}','admin\PriceController@edit')->name('edit_policy_price');
    Route::post('edited','admin\PriceController@editPrice')->name('edited_policy_price');
});

/* ------------- Admin stripe ------------- */
Route::get('payment', 'admin\StripeController@index')->name('admin_payment');
Route::group(['prefix' => 'stripe'], function () {
    Route::get('/', 'admin\StripeController@stripe')->name('admin_stripe');
    Route::get('edit/{id}','admin\StripeController@edit')->name('edit_stripe');
    Route::post('/edited','admin\StripeController@editPrice')->name('edited_stripe');
});

/* ------------- Admin Legal ------------- */
Route::group(['prefix' => 'legal'], function () {
    Route::get('/', 'admin\LegalController@index')->name('admin_legal');
    Route::get('/edit/{id}','admin\LegalController@edit')->name('edit_legal');
    Route::patch('/edited','admin\LegalController@update')->name('legal_edited');
});

/* ------------- Admin Policy Generate ------------- */
Route::group(['prefix' => 'add'], function () {
    Route::get('/', 'admin\policyController@index')->name('admin.new_policy');
    Route::get('/policy', 'admin\policyController@addpolicy')->name('admin.addpolicy');
    Route::post('/policy/save','admin\policyController@policysave')->name('admin.policysave');
});