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
Route::get('/', 'Dreamcode\Goe\App\Http\Controllers\Index@execute')->middleware('web');

Route::group(['namespace' => 'Dreamcode\\Goe\\App\Http\\Controllers\Test', 'prefix' => 'test', 'middleware' => ['web']], function(){
	Route::get('/', 'Index@execute');
    Route::post('/store', 'Store@execute');
});

Route::group(['namespace' => 'Dreamcode\\Goe\\App\Http\\Controllers\\Stores', 'prefix' => 'stores', 'middleware' => ['web']], function(){
    Route::get('/', 'Index@execute');
    Route::get('/new', 'Add@execute');
    Route::get('/edit/{id}', 'Edit@execute');
    Route::post('/save', 'Save@execute');
    Route::get('/delete/{id}', 'Delete@execute');
});








// Authentication Routes...
Route::get('login', 'Dreamcode\Goe\App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login')->middleware('web');
Route::post('login', 'Dreamcode\Goe\App\Http\Controllers\Auth\LoginController@login')->middleware('web');
Route::post('logout', 'Dreamcode\Goe\App\Http\Controllers\Auth\LoginController@logout')->name('logout')->middleware('web');

// Registration Routes...
Route::get('register', 'Dreamcode\Goe\App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register')->middleware('web');
Route::post('register', 'Dreamcode\Goe\App\Http\Controllers\Auth\RegisterController@register')->middleware('web');

// Password Reset Routes...
Route::get('password/reset', 'Dreamcode\Goe\App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request')->middleware('web');
Route::post('password/email', 'Dreamcode\Goe\App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email')->middleware('web');
Route::get('password/reset/{token}', 'Dreamcode\Goe\App\Http\Controllers\Auth\ResetPasswordController@showResetForm')->name('password.reset')->middleware('web');
Route::post('password/reset', 'Dreamcode\Goe\App\Http\Controllers\Auth\ResetPasswordController@reset')->middleware('web');



Route::get('bundle', function() {
    return view('pages.bundle');
})->middleware('auth');

Route::get('/example', 'Example\ExampleParsleyController@indexAction');
Route::get('/example/grid', 'Example\Grid@execute');
Route::get('/example/form', 'Example\Form@execute');

Route::get('/settings/general', 'Settings\General@execute');
//\App\Http\Controllers\Settings\Advanced::routes();
Route::get('/settings/advanced', 'Settings\Advanced@execute');





Route::get('customer', 'CustomersController@indexAction');
Route::get('customer/new', 'CustomersController@newAction');
Route::get('customer/edit/{id}', 'CustomersController@editAction');
Route::post('customer/save', 'CustomersController@saveAction');
Route::get('customer/delete/{id}', 'CustomersController@deleteAction');


Route::get('customer/leave', 'CustomersController@leaveAction');
Route::get('customer/wait_for_test', 'CustomersController@waitForTestAction');
Route::get('customer/learning', 'CustomersController@learningAction');
Route::get('customer/trial', 'CustomersController@trialAction');


Route::get('consult', 'ConsultController@indexAction');
Route::get('consult/wait', 'ConsultController@waitAction');
//Route::get('consult/new', 'ConsultController@newAction');
Route::get('consult/edit/{id}', 'ConsultController@editAction');
Route::post('consult/save', 'ConsultController@saveAction');
//Route::get('consult/delete/{id}', 'ConsultController@deleteAction');


Route::get('parent', 'ParentsController@indexAction');
Route::get('parent/new', 'ParentsController@newAction');
Route::get('parent/edit/{id}', 'ParentsController@editAction');
Route::post('parent/save', 'ParentsController@saveAction');
Route::get('parent/delete/{id}', 'ParentsController@deleteAction');

Route::get('teacher', 'TeacherController@indexAction');
Route::get('teacher/new', 'TeacherController@newAction');
Route::get('teacher/edit/{id}', 'TeacherController@editAction');
Route::post('teacher/save', 'TeacherController@saveAction');
Route::get('teacher/delete/{id}', 'TeacherController@deleteAction');

Route::get('document', 'DocumentController@indexAction');
Route::get('document/new', 'DocumentController@newAction');
Route::get('document/edit/{id}', 'DocumentController@editAction');
Route::post('document/save', 'DocumentController@saveAction');
Route::get('document/delete/{id}', 'DocumentController@deleteAction');

Route::get('lesson', 'LessonController@indexAction');
Route::get('lesson/new', 'LessonController@newAction');
Route::get('lesson/edit/{id}', 'LessonController@editAction');
Route::post('lesson/save', 'LessonController@saveAction');
Route::get('lesson/delete/{id}', 'LessonController@deleteAction');

Route::get('content_test/speaking', 'ContentTest\SpeakingController@indexAction');
Route::get('content_test/speaking/new', 'ContentTest\SpeakingController@newAction');
Route::get('content_test/speaking/edit/{id}', 'ContentTest\SpeakingController@editAction');
Route::post('content_test/speaking/save', 'ContentTest\SpeakingController@saveAction');
Route::get('content_test/speaking/delete/{id}', 'ContentTest\SpeakingController@deleteAction');

Route::get('content_test/writing', 'ContentTest\WritingController@indexAction');
Route::get('content_test/writing/new', 'ContentTest\WritingController@newAction');
Route::get('content_test/writing/edit/{id}', 'ContentTest\WritingController@editAction');
Route::post('content_test/writing/save', 'ContentTest\WritingController@saveAction');
Route::get('content_test/writing/delete/{id}', 'ContentTest\WritingController@deleteAction');

Route::get('learning_process', 'LearningProcessController@indexAction');
Route::get('learning_process/new', 'LearningProcessController@newAction');
Route::get('learning_process/edit/{id}', 'LearningProcessController@editAction');
Route::post('learning_process/save', 'LearningProcessController@saveAction');
Route::get('learning_process/delete/{id}', 'LearningProcessController@deleteAction');

Route::get('extra_help', 'ExtraHelpController@indexAction');
Route::get('extra_help/new', 'ExtraHelpController@newAction');
Route::get('extra_help/edit/{id}', 'ExtraHelpController@editAction');
Route::post('extra_help/save', 'ExtraHelpController@saveAction');
Route::get('extra_help/delete/{id}', 'ExtraHelpController@deleteAction');

Route::get('inventory', 'InventoryController@indexAction');
Route::get('inventory/new', 'InventoryController@newAction');
Route::get('inventory/edit/{id}', 'InventoryController@editAction');
Route::post('inventory/save', 'InventoryController@saveAction');
Route::get('inventory/delete/{id}', 'InventoryController@deleteAction');


Route::get('classes', 'ClassesController@indexAction');
Route::get('classes/new', 'ClassesController@newAction');
Route::get('classes/edit/{id}', 'ClassesController@editAction');
Route::post('classes/save', 'ClassesController@saveAction');
Route::get('classes/delete/{id}', 'ClassesController@deleteAction');


Route::get('customer/result', 'Customer\ResultController@indexAction');
Route::get('customer/result/new', 'Customer\ResultController@newAction');
Route::get('customer/result/edit/{id}', 'Customer\ResultController@editAction');
Route::post('customer/result/save', 'Customer\ResultController@saveAction');
Route::get('customer/result/delete/{id}', 'Customer\ResultController@deleteAction');
