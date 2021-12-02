<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\CityController;
use App\Http\Controllers\Dashboard\NeighborhoodController;


//cities
Route::get('city/all',[CityController::class,'index'])->name('city.list');
Route::get('city/create',[CityController::class,'create'])->name('city.create');
Route::get('city/{id}/destroy',[CityController::class,'destroy'])->name('city.destroy');
Route::get('city/{id}/edit',[CityController::class,'edit'])->name('city.edit');
Route::post('city/{id}/update',[CityController::class,'update'])->name('city.update');
Route::get('city/{id}/show',[CityController::class,'show'])->name('city.show');
Route::post('city/store',[CityController::class,'store'])->name('city.store');
//....................................................................

//neighborhood
Route::get('neighborhood/all',[NeighborhoodController::class,'index'])->name('neighborhood.list');
Route::get('neighborhood/create',[NeighborhoodController::class,'create'])->name('neighborhood.create');
Route::get('neighborhood/{id}/destroy',[NeighborhoodController::class,'destroy'])->name('neighborhood.destroy');
Route::get('neighborhood/{id}/edit',[NeighborhoodController::class,'edit'])->name('neighborhood.edit');
Route::post('neighborhood/{id}/update',[NeighborhoodController::class,'update'])->name('neighborhood.update');
Route::get('neighborhood/{id}/show',[NeighborhoodController::class,'show'])->name('neighborhood.show');
Route::post('neighborhood/store',[NeighborhoodController::class,'store'])->name('neighborhood.store');
//....................................................................
