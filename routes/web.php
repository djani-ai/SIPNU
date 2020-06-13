<?php
use App\Exports\PendataanExport;
use Maatwebsite\Excel\Facades\Excel;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/export_excel', 'SiswaController@export_excel');
Route::post('/siswa/import_excel', 'SiswaController@import_excel');

// Route::get('/kader', 'KaderController@index');
// Route::get('/kader/export_excel', 'KaderController@export_excel');
// Route::post('/kader/import_excel', 'KaderController@import_excel');



// Front End Route 
// cb()->routeController("/kader","AdminPendataanController");


// Back end route
cb()->routeGroupBackend(function() {

    cb()->routeGet("/pendataan-import", "AdminUsersController@getIndex");
//     cb()->routePost("/pendataan/import_excel", "AdminPendataanController@import_excel");
},'App\Http\Controllers');


