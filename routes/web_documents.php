<?php

Route::get('/upload/Privacy_policy.pdf', function () {
    return response();
})->name('privacy_ru');


Route::get('/upload/iblock/609/Privacy_policy.pdf', function () {
    $file = File::get(public_path('/upload/iblock/609/Privacy_policy.pdf'));
    $response = Response::make($file, 200);
    $response->header('Content-type', 'application/pdf');
    return $response;
})->name('privacy_en');



