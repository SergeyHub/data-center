<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\SearchController;

include 'web_documents.php';
include 'web_redirect.php';
include 'web_news.php';
include 'web_services.php';
include 'web_events.php';
include 'web_knowledge-base.php';
include 'web_forms.php';
include 'web_sitemap.php';

Route::get('/lang/ru', function () {
    session(['locale' => 'ru']);
    app()->setLocale('ru');
    return redirect()->back();
})->name('locale.ru');

Route::get('/lang/en', function () {
    app()->setLocale('en');
    session(['locale' => 'en']);

    return redirect()->back();
})->name('locale.en');

Route::get('/', function () {return view('welcome');});

Route::post('/review', [FormController::class, 'feedback'])->name('feedback.create');
Route::post('form/submit', 'FormController@submit')->name('form.submit');
Route::post('/form/tell-us', 'FormController@tellUs')->name('form.tellUs');
Route::post('form/subscribe', 'FormController@subscribe')->name('form.subscribe');
Route::post('/form/submit-calc', 'FormController@submitCalc')->name('form.submitCalc');
Route::post('/form/resume', 'ApplicationController@store')->name('form.application');
Route::post('/form/vacancy', 'ApplicationController@store_simple')->name('form.applicationSimple');
Route::post('/form/internship', 'InternshipApplicationController@store')->name('form.internship');
Route::post('/form/research', 'ResearchRequestController@store')->name('form.research');
Route::post('corporate-feedbacks', 'CorporateFeedbackController@store');
Route::post('/event/register', 'FormController@eventRegister')->name('event.register');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::post('/service_ajax', 'ServiceController@service_choice');
Route::get('/career', 'PageController@hr');

Route::get('/issa', 'PageController@issa');
Route::post('/sendmailto', 'PageController@sendmailto');



Route::get('/documents', 'PageController@doc')->where('url', '[A-Za-z0-9\/-]+');
Route::get('{url?}', 'PageController@show')->where('url', '[A-Za-z0-9\/-]+');


//Route::get('/issa', function () {return view('mail.saasform');});
