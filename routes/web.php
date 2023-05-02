<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CotillonController;



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

Route::get( '/', HomeController::class );

/* Route::get('cotillon', [CotillonController::class,'index']);

//cursos/create

Route::get('cotillon/create',[CotillonController::class,'create']);

Route::get('cotillon/{cotillon}',[CotillonController::class,'show']); */

/* Route::get('cotillon/{cotillo}/{categoria}',function( $cotillo , $categoria )
{
  return"Bienbenido al Cotillon $cotillo, de la categoria $categoria";
}); */

/* Route::get('cotillon/{cotillo}/{categoria?}',function( $cotillo , $categoria = null )
{
    if($categoria)
    {
        return"Bienbenido al Cotillon $cotillo, de la categoria $categoria";
    }

    else
    {
        return "Bienvenido al: $cotillo";
    }
 
}); */ 

Route::controller(CotillonController::class)->group(function()
{
    Route::get('cotillon','index');

    //cursos/create
    
    Route::get('cotillon/create','create');
    
    Route::get('cotillon/{cotillon}','show');
});