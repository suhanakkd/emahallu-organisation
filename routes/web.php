<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {


    return redirect('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('index','App\Http\Controllers\FrondendController@index');
Route::get('app','App\Http\Controllers\FrondendController@app');
Route::get('sidebar','App\Http\Controllers\FrondendController@sidebar');
Route::get('welcome','App\Http\Controllers\FrondendController@welcome');
Route::get('forms','App\Http\Controllers\FrondendController@forms');

//house registratiom
Route::get('house/create','App\Http\Controllers\HouseController@create');
Route::get('house/view','App\Http\Controllers\HouseController@view');
Route::post('store/house','App\Http\Controllers\HouseController@store');
Route::get('house/edit/{id}','App\Http\Controllers\HouseController@edit');
Route::post('house/update','App\Http\Controllers\HouseController@updatedetails');
Route::get('house/delete/{id}','App\Http\Controllers\HouseController@delete');
Route::get('add/house/{id}','App\Http\Controllers\HouseController@houseadd');
Route::post('extrastore/house','App\Http\Controllers\HouseController@houseupdate');

//member registration
Route::get('member/create','App\Http\Controllers\MemberController@create');
Route::get('member/view','App\Http\Controllers\MemberController@view');
Route::post('member/store','App\Http\Controllers\MemberController@store');



// nikkah registration start
Route::get('nikkah/create','App\Http\Controllers\NikkahController@create');
Route::post('nikkahsave', 'App\Http\Controllers\NikkahController@nikkahstore');
Route::get('get_member','App\Http\Controllers\NikkahController@get_member');
Route::get('nikkah/view','App\Http\Controllers\NikkahController@view');
Route::get('get_groom','App\Http\Controllers\NikkahController@get_groom');
Route::get('get_groom_details','App\Http\Controllers\NikkahController@groom_details');
Route::get('get_bride','App\Http\Controllers\NikkahController@get_bride');
Route::get('get_bride_details','App\Http\Controllers\NikkahController@bride_details');
Route::get('autocomplete','App\Http\Controllers\NikkahController@autocomplete')->name('autocomplete');

// death registration
Route::get('death/create','App\Http\Controllers\DeathController@create');
Route::post('deathsave', 'App\Http\Controllers\DeathController@deathstore');
Route::get('death/view','App\Http\Controllers\DeathController@index');


//Birth registration
Route::get('birth/create','App\Http\Controllers\BirthController@create');
Route::get('birth/view','App\Http\Controllers\BirthController@index');
Route::post('birthsave', 'App\Http\Controllers\BirthController@birthstore');


// mahallu release registration
Route::get('release/create','App\Http\Controllers\ReleaseController@create');
Route::get('release/view','App\Http\Controllers\ReleaseController@index');
Route::post('releasesave', 'App\Http\Controllers\ReleaseController@releasesave');
Route::get('get_release','App\Http\Controllers\ReleaseController@get_release');


// pravasi registration
Route::get('pravasi/create','App\Http\Controllers\PravasiController@create');
Route::get('pravasi/view','App\Http\Controllers\PravasiController@view');
Route::post('pravasisave', 'App\Http\Controllers\PravasiController@pravasisave');
Route::get('pravasi/active/{id}','App\Http\Controllers\PravasiController@active');
Route::get('pravasi/deactive/{id}','App\Http\Controllers\PravasiController@deactive');

// messages
Route::get('custome-massage', 'App\Http\Controllers\MessageController@custome_massage');
Route::post('custome-massage-post', 'App\Http\Controllers\MessageController@custome_massage_post');

// Blood Group
Route::get('blood/create', 'App\Http\Controllers\BloodController@bloodcreate');

// committee-period
Route::get('period','App\Http\Controllers\CommitteeController@period');
Route::post('period/save', 'App\Http\Controllers\CommitteeController@periodstore');
Route::get('period_index','App\Http\Controllers\CommitteeController@period_index');
Route::get('period/edit/{id}','App\Http\Controllers\CommitteeController@period_edit');
Route::post('period/update','App\Http\Controllers\CommitteeController@period_update');
Route::get('period/delete/{id}','App\Http\Controllers\CommitteeController@period_destroy');

// committee-creation
Route::get('creation','App\Http\Controllers\CommitteeController@creation');
Route::post('creation/save', 'App\Http\Controllers\CommitteeController@creationstore');
Route::get('creation_index','App\Http\Controllers\CommitteeController@creation_index');
Route::get('creation/edit/{id}','App\Http\Controllers\CommitteeController@creation_edit');
Route::post('creation/update','App\Http\Controllers\CommitteeController@creation_update');
Route::get('creation/delete/{id}','App\Http\Controllers\CommitteeController@creation_destroy');

// committee-members
Route::get('members','App\Http\Controllers\CommitteeController@members');
Route::post('members/save', 'App\Http\Controllers\CommitteeController@memberstore');
Route::get('members_index','App\Http\Controllers\CommitteeController@members_index');
Route::get('members/edit/{id}','App\Http\Controllers\CommitteeController@members_edit');
Route::post('members/update','App\Http\Controllers\CommitteeController@members_update');
Route::get('members/delete/{id}','App\Http\Controllers\CommitteeController@members_destroy');
Route::get('get_member','App\Http\Controllers\CommitteeController@getmember');

// committee-meeting
Route::get('meeting','App\Http\Controllers\CommitteeController@meeting');
Route::post('meeting/save', 'App\Http\Controllers\CommitteeController@meetingstore');
Route::get('meeting_index','App\Http\Controllers\CommitteeController@meeting_index');
Route::get('meeting/edit/{id}','App\Http\Controllers\CommitteeController@meeting_edit');
Route::post('meeting/update','App\Http\Controllers\CommitteeController@meeting_update');
Route::get('meeting/delete/{id}','App\Http\Controllers\CommitteeController@meeting_destroy');
Route::get('meeting/occured/{id}','App\Http\Controllers\CommitteeController@occured');
Route::get('meeting/not_occured/{id}','App\Http\Controllers\CommitteeController@not_occured');
Route::get('meeting/report/{id}','App\Http\Controllers\CommitteeController@report');

// committee-event/activity
Route::get('event','App\Http\Controllers\CommitteeController@event');
Route::post('event/save', 'App\Http\Controllers\CommitteeController@eventstore');
Route::get('event_index','App\Http\Controllers\CommitteeController@event_index');
Route::get('event/edit/{id}','App\Http\Controllers\CommitteeController@event_edit');
Route::post('event/update','App\Http\Controllers\CommitteeController@event_update');
Route::get('event/delete/{id}','App\Http\Controllers\CommitteeController@event_destroy');

// meeting-report
Route::get('meetingreport','App\Http\Controllers\CommitteeController@meetingreport');
Route::post('meetingreport/save', 'App\Http\Controllers\CommitteeController@meetingreportstore');
Route::get('meetingreport_index','App\Http\Controllers\CommitteeController@meetingreport_index');
Route::get('meetingreport/edit/{id}','App\Http\Controllers\CommitteeController@meetingreport_edit');
Route::post('meetingreport/update','App\Http\Controllers\CommitteeController@meetingreport_update');
Route::get('meetingreport/delete/{id}','App\Http\Controllers\CommitteeController@meetingreport_destroy');

// monthly-payment
Route::get('monthlypayment','App\Http\Controllers\MonthlypaymentController@payment');
Route::post('payment/save', 'App\Http\Controllers\MonthlypaymentController@paymentstore');
Route::get('payment_index','App\Http\Controllers\MonthlypaymentController@payment_index');
Route::get('get_members','App\Http\Controllers\MonthlypaymentController@getmembers');


// accountledger

Route::get('payment','App\Http\Controllers\AccountController@payment');
Route::post('store/payment','App\Http\Controllers\AccountController@paymentstore');
Route::get('reciept','App\Http\Controllers\AccountController@reciept');
Route::get('recieptview','App\Http\Controllers\AccountController@recieptview');
Route::post('store/reciept','App\Http\Controllers\AccountController@recieptstore');
Route::get('addledger','App\Http\Controllers\AccountController@addledger');
Route::post('store/ledger', 'App\Http\Controllers\AccountController@ledgerstore');
Route::get('ledgerview','App\Http\Controllers\AccountController@ledgerview');
Route::get('paymentview','App\Http\Controllers\AccountController@paymentview');
