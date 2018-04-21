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
    return redirect()->route('login.index');
});
Route::get('/login', 'loginController@index')->name('login.index');
Route::post('/login', 'loginController@verify')->name('login.verify');
Route::get('/logout','logoutcontroller@index')->name('logout.index');
Route::get('/register','registercontroller@index')->name('register.index');
Route::post('/register','registercontroller@store')->name('register.store');
Route::group(['middleware' => ['sess']], function(){
Route::group(['middleware' => ['admin']], function(){
Route::get('/admin/showallvoter','admincontroller@showallvoter')->name('admin.showallvoter');
Route::get('/admin/showallparticipant','admincontroller@showallparticipant')->name('admin.showallparticipant');
Route::get('/admin/showalladmin','admincontroller@showalladmin')->name('admin.showalladmin');
Route::get('/admin/showallvoter/details{id}','admincontroller@showdetails')->name('admin.showvoterdetails');
Route::get('/admin/addasadmin{id}','admincontroller@addasadmin')->name('admin.addadmin');
Route::get('/admin/addasvoter{id}','admincontroller@addasvoter')->name('admin.addasvoter');
Route::get('/admin/removecandidate{id}','admincontroller@removefromcandidate')->name('admin.removefromcandidate');
Route::get('/admin/deletevoter{id}','admincontroller@deletevoter')->name('admin.deletevoter');
Route::get('/admin/voterpanel','admincontroller@showallvote')->name('admin.voterpanel');
Route::get('/admin/voterpanel/showallapproval','admincontroller@showallapproval')->name('admin.showallapproval');
Route::get('/admin/voterpanel/startvote{id}','admincontroller@startvote')->name('admin.startvote');
Route::get('/admin/voterpanel/endvote{id}','admincontroller@endvote')->name('admin.endvote');
Route::get('/admin/voterpanel/createvoter','admincontroller@createvoteui')->name('admin.createvoteui');
Route::post('/admin/voterpanel/createvoter','admincontroller@createvotestore')->name('admin.createvotestore');
Route::get('/admin/acceptapprove{NID}/{voteid}','admincontroller@acceptapproval')->name('admin.acceptapproval');
Route::get('/admin/rejectapprove{NID}/{voteid}','admincontroller@rejectapproval')->name('admin.rejectapproval');

});
Route::group(['middleware' => ['voter']], function(){
Route::get('/voter/createparticipant{id}','votercontroller@store')->name('voter.store');
});
Route::get('/home','loginController@home')->name('login.home');
Route::get('/person/update{id}','candidatecontroller@edit')->name('candidate.edit');
Route::post('/person/update{id}','candidatecontroller@update')->name('candidate.update');
Route::get('/candidate/voterpanel','candidatecontroller@showallvote')->name('candidate.voterpanel');
Route::get('/voter/voterpanel','votercontroller@showallvote')->name('voter.voterpanel');
Route::get('/showcandidate{id}','admincontroller@showallcandidate')->name('admin.showallcandidate');
Route::get('/result{id}','admincontroller@generateresult')->name('admin.generateresult');
Route::get('/votenow{id}','admincontroller@votenowcreate')->name('votenowcreate');
Route::post('/votenow{id}','admincontroller@votenowstore')->name('votenowstore');

});
