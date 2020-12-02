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
    return view('welcome');
});


Route::get('/edit', function () {
    return view('useradmin/edit');
});

Route::get('submit','UserController@edituser');

// Route::view('/uform', 'user');
// Route::post('submit','KuisionerController@insert');


// get databse kuisioners
Route::get('blog', function(){
    return view('datahome/kuisioner');
});
Route::post('/post_rcppemba', 'KuisionerController@post_rcppemba')->name('post_rcppemba');


Route::get('/data', 'UserController@kuisione');

Route::get('users/{users}/user','UserController@userdatakuisioner');
Route::delete('user/{users}','UserController@destroy');

/////validator
// Route::get('form', 'FormController@create')->name('form.create');
// Route::get('/download', function(){
//     $file = public_path()."/indra.pdf";
//     $headers = array(
//         'Content-Type: application/pdf',
//     ); 
//     return Response::download($file, "Input Group.pdf", $headers);
// });

Route::get('downloadFile', 'KuisionerController@downloadFile');


// Route::get('/kuisionertingkatI', 'KuisionerController@create')->name('kuisionertingkatI');
// Route::post('/kuisionertingkatsI', 'KuisionerController@insert')->name('kuisionertingkatsI');

// Route::post('submit','KuisionerController@insert');

Route::get('/user/kuisioner', 'KuisionerController@store');

Route::view('vie', 'user');


Auth::routes();

Route::group(['middleware'=>['preventbackbutton','auth']], function(){
    
    //home user
    Route::get('/kuisioner', function () {
        return view('datahome/kuisioner');
    });
    
     // kuisioner
    Route::get('/kuisionertingkatI', function () {
        return view('datahome/tingkat/kuisionertingkatI');
    });
    
    //tingkat 1
    Route::get('/kuisioner/{tingkat}', function () {
        return view('datahome/tingkat/kuisionertingkatI');
    });
    
    //post dokumen
    Route::get('/kuisioner-dokumen/{tingkat}/{id}', 'KuisionerController@create')->name('userroles');
    Route::post('/kuisisoner', 'KuisionerController@insert')->name('kuisioner');
 
    

    //Rancangan Pembangunan
    Route::get('/rancangan-pembangunan', function () {
        return view('datahome/rancangan-pembangunan');
    });

    Route::get('/rancangan-pembangunan/{tingkat}', function () {
        return view('datahome/tingkat/rancangan-pembangunan');
    });
    Route::get('/rancangan-pembangunan-dokumen/{tingkat}/{id}', 'RancanganPembangunanController@create')->name('userroles');
    Route::post('/rancangan-pembangunan', 'RancanganPembangunanController@insert')->name('rancangan-pembangunan');

    //Penjaminan Mutu
    Route::get('/penjaminan-mutu', function () {
        return view('datahome/penjaminan-mutu');
    });

    Route::get('/penjaminan-mutu/{tingkat}', function () {
        return view('datahome/tingkat/penjaminan-mutu');
    });

    Route::get('/penjaminan-mutu-dokumen/{tingkat}/{id}', 'PenjaminanMutuController@create')->name('penjaminan-mutu');
    Route::post('/penjaminan-mutu', 'PenjaminanMutuController@insert')->name('penjaminan-mutu');
    
    //Standar Operasional
    Route::get('/standar-operasional', function () {
        return view('datahome/standar-operasional');
    });

    Route::get('/standar-operasional/{tingkat}', function () {
        return view('datahome/tingkat/standar-operasional');
    });

    Route::get('/standar-operasional-dokumen/{tingkat}/{id}', 'StandarOperasionalController@create')->name('standar-operasional');
    Route::post('/standar-operasional', 'StandarOperasionalController@insert')->name('standar-operasional');

    //Pendidikan dan Pelatihan
    Route::get('/pendidikan-pelatihan', function () {
        return view('datahome/pendidikan-pelatihan');
    });

    Route::get('/pendidikan-pelatihan/{tingkat}', function () {
        return view('datahome/tingkat/pendidikan-pelatihan');
    });

    Route::get('/pendidikan-pelatihan-dokumen/{tingkat}/{id}', 'PendidikanPelatihanController@create')->name('pendidikan-pelatihan');
    Route::post('/pendidikan-pelatihan', 'PendidikanPelatihanController@insert')->name('pendidikan-pelatihan');

    //Analisis Kebijakan
    Route::get('/analisis-kebijakan', function () {
        return view('datahome/analisis-kebijakan');
    });

    Route::get('/analisis-kebijakan/{tingkat}', function () {
        return view('datahome/tingkat/analisis-kebijakan');
    });

    Route::get('/analisis-kebijakan-dokumen/{tingkat}/{id}', 'AnalisisKebijakanController@create')->name('analisis-kebijakan');
    Route::post('/analisis-kebijakan', 'AnalisisKebijakanController@insert')->name('analisis-kebijakan');

    //Manajemen Sumber
    Route::get('/manajemen-sumber', function () {
        return view('datahome/manajemen-sumber');
    });

    Route::get('/manajemen-sumber/{tingkat}', function () {
        return view('datahome/tingkat/manajemen-sumber');
    });

    Route::get('/manajemen-sumber-dokumen/{tingkat}/{id}', 'ManajemenSumberController@create')->name('manajemen-sumber');
    Route::post('/manajemen-sumber', 'ManajemenSumberController@insert')->name('manajemen-sumber');

    //Manajemen Resiko
    Route::get('/manajemen-resiko', function () {
        return view('datahome/manajemen-resiko');
    });

    Route::get('/manajemen-resiko/{tingkat}', function () {
        return view('datahome/tingkat/manajemen-resiko');
    });

    Route::get('/manajemen-resiko-dokumen/{tingkat}/{id}', 'ManajemenResikoController@create')->name('manajemen-resiko');
    Route::post('/manajemen-resiko', 'ManajemenResikoController@insert')->name('manajemen-resiko');

    //Pengukuran Kinerja
    Route::get('/pengukuran-kinerja', function () {
        return view('datahome/pengukuran-kinerja');
    });

    Route::get('/pengukuran-kinerja/{tingkat}', function () {
        return view('datahome/tingkat/pengukuran-kinerja');
    });

    Route::get('/pengukuran-kinerja-dokumen/{tingkat}/{id}', 'PengukuranKinerjaController@create')->name('pengukuran-kinerja');
    Route::post('/pengukuran-kinerja', 'PengukuranKinerjaController@insert')->name('pengukuran-kinerja');


    Route::get('/dashboard/{id}', 'UserController@destroy')->name('dashboard.destroy');
    Route::get('/dashboard.show/{id}', 'UserController@show')->name('dashboard.show');

    //SHOW DATA ADMIN

    //kuisioner
    Route::get('/dokumen.show/kuisioner/{id}', 'DokumenController@kuisioner');
    Route::get('/show-data/kuisioner/{id}/{dokumen}', 'ShowDataController@kuisioner');

    //rancangan pembangunan
    Route::get('/dokumen.show/rancangan_pembangunan/{id}', 'DokumenController@rancangan_pembangunan');
    Route::get('/show-data/rancangan_pembangunan/{id}/{dokumen}', 'ShowDataController@rancangan_pembangunan');

    //Pemjaminan mutu
    Route::get('/dokumen.show/penjaminan_mutu/{id}', 'DokumenController@penjaminan_mutu');
    Route::get('/show-data/penjaminan_mutu/{id}/{dokumen}', 'ShowDataController@penjaminan_mutu');

    //Standar Operasional
    Route::get('/dokumen.show/standar_operasional/{id}', 'DokumenController@standar_operasional');
    Route::get('/show-data/standar_operasional/{id}/{dokumen}', 'ShowDataController@standar_operasional');

    //Pendidikan Pelatihan
    Route::get('/dokumen.show/pendidikan_pelatihan/{id}', 'DokumenController@pendidikan_pelatihan');
    Route::get('/show-data/pendidikan_pelatihan/{id}/{dokumen}', 'ShowDataController@pendidikan_pelatihan');

    //Analisis Kebijakan
    Route::get('/dokumen.show/analisis_kebijakan/{id}', 'DokumenController@analisis_kebijakan');
    Route::get('/show-data/analisis_kebijakan/{id}/{dokumen}', 'ShowDataController@analisis_kebijakan');

    //Manajemen Sumber
     Route::get('/dokumen.show/manajemen_sumber/{id}', 'DokumenController@manajemen_sumber');
     Route::get('/show-data/manajemen_sumber/{id}/{dokumen}', 'ShowDataController@manajemen_sumber');

    //Manajemen Resiko
    Route::get('/dokumen.show/manajemen_resiko/{id}', 'DokumenController@manajemen_resiko');
    Route::get('/show-data/manajemen_resiko/{id}/{dokumen}', 'ShowDataController@manajemen_resiko');

    //pengukuran Kinerja
    Route::get('/dokumen.show/pengukuran_kinerja/{id}', 'DokumenController@pengukuran_kinerja');
    Route::get('/show-data/pengukuran_kinerja/{id}/{dokumen}', 'ShowDataController@pengukuran_kinerja');
 
    //Registrasi
    Route::get('regis', function(){
        return view('auth/register');
    });

    Route::get('/home', 'HomeController@index')->name('home');
    // Route::middleware('role:admin')->get('/dashboard', 'HomeController@index')->name('dashboard');
    
    Route::middleware('role:admin')->get('/dashboard', 'UserController@kuisione'
    )->name('dashboard');
    
    });
