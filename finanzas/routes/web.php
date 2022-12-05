<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntradasController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login/post', [LoginController::class, 'post'])->name('login-post');

// Route::post('/login', function () {
//     $correo = request('correo');
//     $pass = request('pass');

//     // $datos = new stdClass();

//     // $datos->correo = $correo;
//     // $datos->pass = md5($pass);

//     $user = \DB::table('usuarios')->where([
//         ['email', '=', $correo],
//         ['password', '=', $pass],
//     ])->get();
//     $count = $user->count();

//     if($count > 0){
//         return 'Entro!';
//     }else{
//         return 'Fallo!';
//     }


// });

Route::get('/entradas', [EntradasController::class, 'index'])->name('entradas');

Route::post('/entradas', [EntradasController::class, 'store'])->name('entradas');

Route::get('/entradas/{$id}', [EntradasController::class, 'show'])->name('entradas-edit');

Route::patch('/entradas/{$id}', [EntradasController::class, 'update'])->name('entradas-update');

Route::delete('/entradas/{$id}', [EntradasController::class, 'destroy'])->name('entradas-destroy');



