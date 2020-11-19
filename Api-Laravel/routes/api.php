<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/usuario', function (Request $request) {
    return $request->user();
});

Route::get('/teste', function(){
    return "Olá Mundo de Teste";
});


Route::post('/cadastro', function (Request $request) {
    $data = $request->all();

    
    $validator = Validator::make($data, [
        //'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:5'],
    ]);

    if($validator->fails()){
        return $validator->errors();
    }


    $user = User::create([
        //'name' => $data['name'],
        'email' => $data['email'],
        'password' => bcrypt($data['password']),
    ]);

    $user->token = $user->CreateToken($user->email)->accessToken;

    return $user;
});
