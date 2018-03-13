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
Route::get('datatable', ['uses'=>'DatatableController@clientdatatable']);
Route::get('datatable/getclients', ['as'=>'datatable.getclients','uses'=>'ClientController@getClients']);
//
Route::get('/position/show','RegisterController@showposition');
Route::get('/position/register','RegisterController@showpositionregister');
Route::post('/position/register', 'RegisterController@positionregister');
Route::get('/position/edit/{id}','UpdateController@showposeedit')->name('showpos');
Route::put('/position/edit/{id}','UpdateController@posedit')->name('editpos');
Route::delete('/position/delete/{id}','DeleteController@posdelete')->name('deletepos');
//
Route::get('/language/show','RegisterController@showlanguage');
Route::get('/language/register','RegisterController@showlanguageregister');
Route::post('/language/register', 'RegisterController@lsregister');
Route::get('/language/edit/{id}','UpdateController@showlangugeedit')->name('showlang');
Route::put('/language/edit/{id}','UpdateController@languageedit')->name('editlang');
Route::delete('/language/delete/{id}','DeleteController@languagedelete')->name('deletelang');
//
Route::get('/education/show','RegisterController@showeducation');
Route::get('/education/register','RegisterController@showeducationregister');
Route::post('/education/register', 'RegisterController@elregister');
Route::get('/education/edit/{id}','UpdateController@showeducedit')->name('showeduc');
Route::put('/education/edit/{id}','UpdateController@educedit')->name('editeduc');
Route::delete('/education/delete/{id}','DeleteController@educdelete')->name('deleteeduc');

Route::get('/casecategory/show','RegisterController@showcasecategory');
Route::get('/casecategory/register','RegisterController@showcasecategoryregister');
Route::post('/casecategory/register', 'RegisterController@ccregister');
Route::get('/casecategory/edit/{id}','UpdateController@showccedit')->name('showcc');
Route::put('/casecategory/edit/{id}','UpdateController@ccedit')->name('editcat');
Route::delete('/casecategory/delete/{id}','DeleteController@ccdelete')->name('deletecat');

Route::get('/caseinvolvement/show','RegisterController@showcaseinvolvement');
Route::get('/caseinvolvement/register','RegisterController@showcaseinvolvementregister');
Route::post('/caseinvolvement/register', 'RegisterController@ciregister');
Route::get('/caseinvolvement/edit/{id}','UpdateController@showinvoedit')->name('showci');
Route::put('/caseinvolvement/edit/{id}','UpdateController@invoedit')->name('editinvo');
Route::delete('/caseinvolvement/delete/{id}','DeleteController@invodelete')->name('deleteinvo');

Route::get('/scheduletype/show','RegisterController@showscheduletype');
Route::get('/scheduletype/register','RegisterController@showscheduletyperegister');
Route::post('/scheduletype/register','RegisterController@scheduletyperegister');
Route::get('/scheduletype/edit/{id}','UpdateController@showscheduletypeedit')->name('showscheduletype');
Route::put('/scheduletype/edit/{id}','UpdateController@scheduletypeedit')->name('editscheduletype');
Route::delete('/scheduletype/delete/{id}','DeleteController@scheduletypedelete')->name('deletescheduletype');

Route::get('/reason/show','RegisterController@showreason');
Route::get('/reason/register','RegisterController@showreasonregister');
Route::post('/reason/register','RegisterController@reasonregister');
Route::get('/reason/edit/{id}','UpdateController@showreasonedit')->name('showreason');
Route::put('/reason/edit/{id}','UpdateController@reasonedit')->name('editreason');
Route::delete('/reason/delete/{id}','DeleteController@reasondelete')->name('deletereason');

Route::get('/client/show','RegisterController@showreqtable');
Route::get('/walkin/show','LawyerSideController@showwalkintable');
Route::get('/notary/show','LawyerSideController@shownotarytable');
Route::get('/lawyerclient/show','LawyerSideController@showreqtable');
Route::get('/lawyerschedule/show','LawyerSideController@showschedule');
Route::get('/lawyershow/managecase','LawyerSideController@showmanagecase');


Route::get('/client/register','RegisterController@showclientregister');
Route::post('/client/register', 'RegisterController@clientregister');
Route::get('/casetbh/register','RegisterController@showcasetbhregister');
Route::post('/casetbh/register','RegisterController@casetbhregister');
Route::get('/adverse/register','RegisterController@showadverseregister');
Route::post('/adverse/register','RegisterController@adverseregister');

Route::get('/client2/register','RegisterController@showclientregister2');
Route::post('/client2/register', 'RegisterController@clientregister2');
Route::get('/casetbh2/register','RegisterController@showcasetbhregister2');
Route::post('/casetbh2/register','RegisterController@casetbhregister2');
Route::get('/adverse2/register','RegisterController@showadverseregister2');
Route::post('/adverse2/register','RegisterController@adverseregister2');

Route::get('/schedule/show','RegisterController@schedule');
Route::get('/schedule/register','RegisterController@showschedule');
Route::post('/schedule/register','RegisterController@scheduleregister');
Route::get('/schedule/edit/{id}','UpdateController@showscheduleedit')->name('showsched');
Route::put('/schedule/edit/{id}','UpdateController@schededit')->name('schededit');
Route::delete('/schedule/delete/{id}','DeleteController@scheddelete')->name('deletesched');

Route::get('/natureofrequest/show','RegisterController@shownat');
Route::get('/natureofrequest/register','RegisterController@shownatregister');
Route::post('/natureofrequest/register','RegisterController@natregister');
Route::get('/natureofrequest/edit/{id}','UpdateController@shownatedit')->name('shownat');
Route::put('/natureofrequest/edit/{id}','UpdateController@natedit')->name('natedit');
Route::delete('/natureofrequest/delete/{id}','DeleteController@natdelete')->name('deletenat');

Route::get('/employee/show','RegisterController@showemp');
Route::get('/employee/register','RegisterController@showempregister');
Route::post('/employee/register','RegisterController@empregister');
Route::get('/employee/edit/{id}','UpdateController@showempedit')->name('showemp');
Route::put('/employee/edit/{id}','UpdateController@empedit')->name('empedit');
Route::delete('/employee/delete/{id}','DeleteController@empdelete')->name('deleteemp');

Route::get('/casetype/show','RegisterController@showcasetype');
Route::get('/casetype/register','RegisterController@showcasetyperegister');
Route::post('/casetype/register','RegisterController@casetyperegister');
Route::get('/casetype/edit/{id}','UpdateController@showcasetypeedit')->name('showcasetype');
Route::put('/casetype/edit/{id}','UpdateController@casetypeedit')->name('casetypeedit');
Route::delete('/casetype/delete/{id}','DeleteController@casetypedelete')->name('deletecasetype');

Route::get('/courttype/show','RegisterController@showcourttype');
Route::get('/courttype/register','RegisterController@showcourttyperegister');
Route::post('/courttype/register', 'RegisterController@courttyperegister');
Route::get('/courttype/edit{id}','UpdateController@showctedit')->name('showct');
Route::put('/courttype/edit/{id}','UpdateController@ctedit')->name('editct');
Route::delete('/courttype/delete/{id}','DeleteController@ctdelete')->name('delct');

Route::get('/lawsuit/show','RegisterController@showcase');
Route::get('/lawsuit/register','RegisterController@showcaseregister');
Route::post('/lawsuit/register', 'RegisterController@caseregister');
Route::get('/lawsuit/edit{id}','UpdateController@showcaseedit')->name('showcs');
Route::put('/lawsuit/edit/{id}','UpdateController@caseedit')->name('editcs');
Route::delete('/lawsuit/delete/{id}','DeleteController@casedelete')->name('delcs');

Route::get('/citizenship/show','RegisterController@showcitizenship');
Route::get('/citizenship/register','RegisterController@showcitizenshipregister');
Route::post('/citizenship/register', 'RegisterController@citizenshipregister');
Route::get('/citizenship/edit{id}','UpdateController@showcitizenedit')->name('showcitizen');
Route::put('/citizenship/edit/{id}','UpdateController@citizenedit')->name('editcitizen');
Route::delete('/citizenship/delete/{id}','DeleteController@citizendelete')->name('delcitizen');

Route::get('/religion/show','RegisterController@showrel');
Route::get('/religion/register','RegisterController@showrelregister');
Route::post('/religion/register', 'RegisterController@relregister');
Route::get('/religion/edit{id}','UpdateController@showreledit')->name('showrel');
Route::put('/religion/edit/{id}','UpdateController@reledit')->name('editrel');
Route::delete('/religion/delete/{id}','DeleteController@reldelete')->name('delrel');

Route::get('/courttype/show','RegisterController@showcourttype');
Route::get('/courttype/register','RegisterController@showcourttyperegister');
Route::post('/courttype/register', 'RegisterController@courttyperegister');
Route::get('/courttype/edit{id}','UpdateController@showctedit')->name('showct');
Route::put('/courttype/edit/{id}','UpdateController@ctedit')->name('editct');
Route::delete('/courttype/delete/{id}','DeleteController@ctdelete')->name('delct');

Route::get('/casestatus/show','RegisterController@showcasestatus');
Route::get('/casestatus/register','RegisterController@showcasestatusregister');
Route::post('/casestatus/register', 'RegisterController@casestatusregister');
Route::get('/casestatus/edit{id}','UpdateController@showcasestatusedit')->name('showcs');
Route::put('/casestatus/edit/{id}','UpdateController@casestatusedit')->name('editcs');
Route::delete('/casestatus/delete/{id}','DeleteController@casestatusdelete')->name('delcs');

Route::get('/court/show','RegisterController@showcourt');
Route::get('/court/register','RegisterController@showcourtregister');
Route::post('/court/register', 'RegisterController@courtregister');
Route::get('/court/edit/{id}','UpdateController@showcouedit')->name('showcou');
Route::put('/court/edit/{id}','UpdateController@couedit')->name('editcou');
Route::delete('/court/delete/{id}','DeleteController@coudelete')->name('delcou');

Route::get('/branch/show','RegisterController@showbranch');
Route::get('/branch/register','RegisterController@showbranchregister');
Route::post('/branch/register', 'RegisterController@branchregister');
Route::get('/branch/edit/{id}','UpdateController@showbranchedit')->name('showbra');
Route::put('/branch/edit/{id}','UpdateController@branchedit')->name('editbra');
Route::delete('/branch/delete/{id}','DeleteController@branchdelete')->name('delbra');

Route::get('/reqstat/show','RegisterController@showreqstat');
Route::get('/reqstat/register','RegisterController@showreqstatregister');
Route::post('/reqstat/register', 'RegisterController@reqstatregister');
Route::get('/reqstat/edit/{id}','UpdateController@showreqstatedit')->name('showreqstat');
Route::put('/reqstat/edit/{id}','UpdateController@reqstatedit')->name('editreqstat');
Route::delete('/reqstat/delete/{id}','DeleteController@reqstatdelete')->name('delreqstat');

Route::get('/decision/show','RegisterController@showdecision');
Route::get('/decision/register','RegisterController@showdecisionregister');
Route::post('/decision/register', 'RegisterController@decisionregister');
Route::get('/decision/edit/{id}','UpdateController@showreqstatedit')->name('showdecision');
Route::put('/decision/edit/{id}','UpdateController@decisionedit')->name('editdecision');
Route::delete('/decision/delete/{id}','DeleteController@decisiondelete')->name('deldecision');

Route::get('request/approve/{id}','RequestController@approve')->name('request.approve');
Route::get('request/view/{id}','RequestController@view')->name('request.view');
Route::get('request/deny/{id}','RequestController@deny')->name('request.deny');
Route::get('request/print/{id}','RequestController@print')->name('request.print');

Route::get('request/showlawyers','RequestController@showlawyers');
Route::put('request/lawyers/{id}','RequestController@availablelawyer')->name('requestlawyer');

Route::get('/approve/show','RequestController@approvedtbl');

Route::get('/approve/sheet','RequestController@approvesheet');

Route::get('/managecase','ManageCaseController@showmanagecase');
Route::get('/edit/case/{id}','ManageCaseController@editcase')->name('showeditcase');
Route::put('/updatecase/{id}','ManageCaseController@updatecase')->name('updatecase');
Route::delete('/delete/case/{id}','ManageCaseController@deletecase')->name('deletecase');

Route::get('/lawyerside/show','LawyerSideController@home');

Route::get('/lawyer/show','RegisterController@showlawyer');
Route::get('/transfer/show/{id}','ManageCaseController@showcasetransfer')->name('showcasetransfer');
Route::put('/case/transfer/{id}','ManageCaseController@casetransfer')->name('casetransfer');

Route::get('/casehistory/show','CasehistoryController@showcasehistory');
Route::get('/casehistory/view/{id}','CasehistoryController@view')->name('casehistory.view');

Route::get('/show/yearendreport','ReportController@yearendreport');
Route::get('/print/yearend','ReportController@reportprint');

Route::get('/show/inquestform','InquestController@showinquestform');
Route::get('/show/inquesttable','InquestController@showinquesttable');

//Route::resource('clients', 'ClientController');
Route::resource('interviewees', 'IntervieweeController');
Route::resource('religions', 'ReligionController');
Route::resource('citizenships', 'CitizenshipController');


Route::get('/home', function () {
    return view('home');
});


Route::get('/notaryupload', function () {
    return view('notaryupload');
});

Route::post('upload', 'UploadController@upload');


Route::get('/Distribution', function () {
    return view('casedistribution');
});



Route::get('/lawyers', function () {
    return view('lawyers');
});

Route::get('casess', function () {
    return view('casedistribution');
});