<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CatalogueController;

Route::prefix('admin')
    ->as('admin.')
    ->group(function() {

       Route::get('/', function(){
        return view('admin.index');
       }); 
       Route::prefix('catalogues')
       ->as('catalogues.')
       ->group(function () {
            Route::get('index',[ CatalogueController::class, 'index'])->name('index');
            Route::get('create',[ CatalogueController::class, 'create'])->name('create');
            Route::post('store',[ CatalogueController::class, 'store'])->name('store');
            Route::get('{id}/show',[ CatalogueController::class,'show'])->name('show');
            Route::get('{id}/edit',[ CatalogueController::class,'edit'])->name('edit');
            Route::put('{id}/update',[ CatalogueController::class,'update'])->name('update');
            Route::get('{id}/destroy',[ CatalogueController::class,'destroy'])->name('destroy');
       });
    });