<?php
use App\Resto;
use App\Paket;
use App\Custom;
use Illuminate\Support\Facades\Input;
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

Route::get('/','HomeController@index');
Route::get('maukemanacoy','maukemanacontroller@index');


//ADMIN
Route::resource('dashboardAdmin','DashboardAdminController');
Route::resource('dashboardAdmin', 'DashboardAdminController', ['parameters' => [
    'id' => 'id_resto'
]]);
Route::resource('paketAdmin','PaketAdminController');
Route::resource('customAdmin','CustomAdminController');
Route::resource('customAdmin', 'CustomAdminController', ['parameters' => [
    'id' => 'id_resto'
]]);
//LOGIN REGISTER LOGOUT

Route::get('register', 'RegisterController@getRegister' );
Route::post('postRegister','RegisterController@postRegister');
Route::get('login', [ 'as' => 'login', 'uses' => 'LoginIndexController@getLogin'] );// kalo belom login mau akses halaman2 lain ke redirect otomatis kemari
Route::get('loginform', [ 'as' => 'login', 'uses' => 'LoginIndexController2@getLogin'] );//beres register redirect kemari
Route::post('postLogin','LoginController@postLogin');
Route::get('logout','LoginController@postLogout');
Route::get('pageAksesKhusus', function () {
    return view('pageAksesKhusus');
});
		
//USER
// Route::get('/','UserController@index');
Route::resource('user','UserController');
Route::resource('home','IndexController');// cuma buat redirect kalo udah login
Route::resource('resto','WarungController');// warung controller
Route::resource('resto', 'WarungController', ['parameters' => [
    'id' => 'id_resto'
]]);
Route::resource('slip','SlipController');
Route::resource('howtoorder','HowToOrderController');
Route::resource('contact','ContactController');
// Route::get('transaksi_id', function () {
//     return view('transaksi_id');
// });

Route::resource('save','SaveController');
Route::resource('save', 'SaveController', ['parameters' => [
    'id' => 'user_id'
]]);
Route::resource('saveDetails', 'SaveDetailsController', ['parameters' => [
    'id' => 'id_save'
]]);

Route::get('/delete/{id}', 'SaveDeleteController@destroy' );
Route::resource('EditProfil', 'EditProfilController', ['parameters' => [
    'id' => 'id'
]]);


Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $pakets = Paket::all();
    $resto = Resto::where('nama_resto','LIKE','%'.$q.'%')->orWhere('alamat_resto','LIKE','%'.$q.'%')->get();
    dd($resto);
    if(count($resto) > 0)
        return view('welcomeSearch',['pakets' => $pakets])->withDetails($resto)->withQuery ( $q );
    else
        Session::flash('flash_notification', ["level"=>"danger", "message"=>"No Resto Found. Try to search again !!"]); 
        return view ('welcomeSearch',['pakets' => $pakets]);
});

Route::any('/searchAdmin',function(){
    $q = Input::get ( 'q' );
    $pakets = Paket::all();
    $restos = Resto::all();
    $customs = Custom::all();
    $i1=0;
    $i2=0;
    $resto = Resto::where('nama_resto','LIKE','%'.$q.'%')->orWhere('alamat_resto','LIKE','%'.$q.'%')->get();
    if(count($resto) > 0)
        return view('dashboardAdminSearch',['pakets' => $pakets,'customs' => $customs,'i1'=>$i1,'i2'=>$i2,'restos'=>$restos])->withDetails($resto)->withQuery ( $q );
    else
        Session::flash('flash_notification', ["level"=>"danger", "message"=>"No Resto Found. Try to search again !!"]); 
        return view ('dashboardAdminSearch',['pakets' => $pakets,'customs' => $customs,'i1'=>$i1,'i2'=>$i2,'restos'=>$restos]);
});

Route::get('reset', function () {
    return view('resetpassword');
});
Route::post('resetpw','PasswordController@sendEmail');

Route::resource('EditPassword', 'EditPasswordController', ['parameters' => [
    'id' => 'id'
]]);