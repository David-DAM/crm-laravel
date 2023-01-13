<?php
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login',function(Request $request){

    $login=$request->login;
    $password=$request->password;

    if(!Auth::attempt([$login,$password])){
        return response()->json([
            'message' => 'Acceso denegado'
        ])->setStatusCode('401');
    }

    return response()->json([
        'message' => 'Acceso concedido'
    ]);

});

Route::get('/token',function(){
    //Hay que sacar el id de usuario aqui
    $jwt=JWT::encode(['id'=>Auth::user()->id], env('JWT_SECERT'), 'HS256');
    return response()->json([
        'token' => $jwt,
        'message' => 'Aqui tienes tu token'
    ]);
});

Route::get('/users',function(Request $request){

    $jwt = substr($request->header('Authorization', 'token <token>'),6);

    try {

        JWT::decode($jwt, new Key(env('JWT_SECERT'),'HS256'));
        return response()->json(User::all());

    } catch (\Throwable $th) {
        return response()->json([
            'message' => 'JWT is invalid or expired'
        ])->setStatusCode(401);
    }
    
});
