<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/**
 * WEB ROUTES OF WEBSITE
 */

Route::get('/', 'Site\HomeController@index')->name('home');
Route::get('/privacy-polices', 'PrivacyPoliceController@index')->name('get.privacy.polices');
Route::get('/sobre', 'Site\AboutController@index')->name('about');
Route::get('/central-de-vendas', 'Site\SalesCenterController@index')->name('sales-center');
Route::get('/cities/get', 'CitiesController@getCities');
//Route::get('/linkstorage', function () {
//    Artisan::call('storage:link');
//});

Route::get('/blog', 'Site\BlogController@index')->name('site.blog.index');

Route::get('/blog/post/{post}', 'Site\PostController@index')->name('site.post.index');


Route::post('/join-contact', 'ContactController@joinContact');
Route::get('/mensagem-enviada', function (){
    return view('site.error-404.success');
})->name('success.contact');

Route::get('/politica-de-privacidade', function (){
    return view('site.privacy-polices.index');
})->name('politica.privacidade');
Route::get('/politica-de-cookie', function (){
    return view('site.privacy-cookie.index');
})->name('politica.cookie');

Route::get('/buscar', function () {
    return view('site.search-result.index');
})->name('buscar.view');

Route::get('/resultado-busca', 'Site\BuscaController@search')->name('search.enterprise');

Route::get('/contato', function () {
    return view('site.contact.contact', ['contact' => App\Models\Contact::first()]);
});

Route::get('/empreendimentos/{city?}', 'Site\EnterpriseController@index')->name('empreeendimento.index');
Route::get('/empreendimento/{id}', 'Site\EnterpriseController@enterprise')->name('enterprise.unico');


/**
 * WEB ROUTES OF ADM PANEL
 */

Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return redirect('admin/home');
    });

    Route::get('/login', 'UserController@index')->name('login');
    Route::post('/login', 'UserController@login');

    Route::get('/recover-password', 'UserController@recoverPassword');
    Route::put('/recover-password', 'UserController@actionRecoverPassword');

    Route::get('/request-access', 'UserController@requestAccess');
    Route::put('/request-access', 'UserController@ActionRequestAccess');

    Route::post('/change-password', 'UserController@changePassword');
    Route::get('/logout', 'UserController@logout');


    Route::middleware('auth')->group(function () {

        Route::get('/home', 'HomeController@edit')->name('home');
        Route::put('/home/update', 'HomeController@update');

        Route::get('/about', 'AboutController@edit');
        Route::put('/about/update', 'AboutController@update');

        Route::get('/referrals', 'ReferralsController@edit');
        Route::put('/referrals/update', 'ReferralsController@update');

        Route::resource('/sales-center', 'SalesCenterController');

        Route::resource('/achievements', 'AchievementsController');

        Route::resource('/differentials', 'DifferentialsController');

        Route::resource('/users', 'UsersController');

        Route::post('/enterprises/{enterprise}/featured-banner', 'EnterprisesController@storeOrder')->name('enterprises.store.order');
        Route::get('/enterprises/featured-banners', 'EnterprisesController@listBannerOrder')->name('enterprises.list.banner.order');
        Route::post('/enterprises/featured-banners/{enterprise}/remove', 'EnterprisesController@removeOrder')->name('enterprises.remove-order');
        Route::resource('/enterprises', 'EnterprisesController');
        Route::resource('/enterprises/{enterpriseId}/apartments', 'ApartmentsController');
        Route::resource('/enterprises/{enterpriseId}/images', 'ImagesController');
        Route::resource('/enterprises/{enterpriseId}/status', 'StatusController');
        Route::put('/status/update', 'StatusController@update');
        Route::resource('/enterprises/{enterpriseId}/lands', 'LandsController');


        Route::delete('/benefits/{id}', 'BenefitsController@destroy');
        Route::post('/benefits', 'BenefitsController@store');
        Route::resource('/cities', 'CitiesController');

        Route::get('/contact', 'ContactController@edit');
        Route::post('/contact/update', 'ContactController@update');

        Route::get('/politica-privacidade', 'PrivacyPoliceController@create')->name('privacy.polices');
        Route::put('/politica-privacidade/editar', 'PrivacyPoliceController@edit')->name('privacy.polices.store');

        Route::get('/blog', 'BlogController@edit')->name('blogs.edit');
        Route::put('/blog/{blog}', 'BlogController@update')->name('blogs.update');

        Route::get('/tags', 'TagController@index')->name('tags.index');
        Route::post('/tags', 'TagController@store')->name('tags.store');
        Route::get('/tags/{tag}/edit', 'TagController@edit')->name('tags.edit');
        Route::put('/tags/{tag}', 'TagController@update')->name('tags.update');
        Route::delete('/tags/{tag}', 'TagController@destroy')->name('tags.destroy');


        Route::get('/posts', 'PostController@index')->name('posts.index');
        Route::post('/posts', 'PostController@store')->name('posts.store');
        Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');
        Route::put('/posts/{post}', 'PostController@update')->name('posts.update');
        Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.destroy');
        Route::post( '/ckeditor/upload' , "PostController@ckeditorUpload" )->name( 'posts.ckeditor.upload' );

        Route::get('/banners', 'BannerController@index')->name('banners.index');
        Route::post('/banners', 'BannerController@store')->name('banners.store');
        Route::get('/banners/{banner}/edit', 'BannerController@edit')->name('banners.edit');
        Route::put('/banners/{banner}', 'BannerController@update')->name('banners.update');
        Route::delete('/banners/{banner}', 'BannerController@destroy')->name('banners.destroy');

    });

});


/**
 * Rest Routes
 */

Route::get('/contact/get', 'ContactController@get');
Route::get('/referral/get', 'ReferralsController@get');


Route::fallback(function () {
    return view('site.error-404.index');
});
