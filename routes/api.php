<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotoController;

route::get('/', function(){return response()->json(['Sucesso'=>true]);});
route::get('/motos',[MotoController::class,'index']);
route::get('/motos/{id}',[MotoController::class,'show']);
route::post('/motosCadastrar',[MotoController::class,'store']);
route::delete('/motosDelete/{id}',[MotoController::class,'destroy']);
route::put('/motosUpdate/{id}',[MotoController::class,'update']);