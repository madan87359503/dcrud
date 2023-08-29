<?php

Route::get('/', [Madan\Dcrud\WebsiteController::class, 'index']);
Route::get('/signup', [Madan\Dcrud\WebsiteController::class, 'signup']);
Route::group(['middleware' => 'web'], function () {

Route::get('/app/dcrud', function () {
    return view('dcrud::welcome');
})->name('dcrud');

Route::post('/app/dcrud', [Madan\Dcrud\MainController::class, 'envconfig'])->name('dcrudpost');
});
Route::group(['middleware' => ['web', 'auth']], function(){
Route::get('app/{p}/{m}', [Madan\Dcrud\MainController::class, 'index']);
Route::post('upload-file/{va}/{na}', [Madan\Dcrud\FileUploadController::class, 'fileUpload'])->name('fileupload');
 Route::resource('api/{p}/{m}', 'Madan\Dcrud\ApiController',['parameters'=>['{m}'=>'id']]);
});
Route::get('allcomponents', [Madan\Dcrud\MainController::class, 'allcomponents'])->name('allcomponents');