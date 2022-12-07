<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdvertisementsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InformationsController;


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);



Route::controller(CompaniesController::class)->group(function () {

    Route::get("/companies",[CompaniesController::class, "index"]);
    Route::post("/companies/create", "create");
    Route::get("/companies/{id}", "show");
    Route::put("/companies/{id}/edit", "edit");

    Route::post("/companies", "store");
    Route::put("companies/{id}", "update");
    Route::delete("companies/{id}", "destroy");

});

Route::controller(UsersController::class)->group(function () {

    Route::get("/users",[UsersController::class, "index"]);
    Route::post("/users/create", "create");
    Route::get("/users/{id}", "show");
    Route::put("/users/{id}/edit", "edit");

    Route::post("/users", "store");
    Route::put("users/{id}", "update");
    Route::delete("users/{id}", "destroy");

});

Route::controller(AdvertisementsController::class)->group(function () {

    Route::get("/advertisements",[AdvertisementsController::class, "index"]);
    Route::post("/advertisements/create", "create");
    Route::get("/advertisements/{id}", "show");
    Route::put("/advertisements/{id}/edit", "edit");

    Route::post("/advertisements", "store");
    Route::put("advertisements/{id}", "update");
    Route::delete("advertisements/{id}", "destroy");

});

Route::controller(InformationsController::class)->group(function () {

    Route::get("/informations",[InformationsController::class, "index"]);
    Route::post("/informations/create", "create");
    Route::get("/informations/{id}", "show");
    Route::put("/informations/{id}/edit", "edit");

    Route::post("/informations", "store");
    Route::put("informations/{id}", "update");
    Route::delete("informations/{id}", "destroy");
    
    
});

//protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

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

