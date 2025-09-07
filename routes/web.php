<?php

use App\Http\Controllers\CpibBenihController;
use App\Http\Controllers\KapalController;
use App\Models\Kapal;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('home',['title' => 'Home Page']);
});

Route::get('/services', function () {
    return view('services', ['title' => 'Services']);
});
Route::get('/charts', function () {
    return view('charts', ['title' => 'Charts']);
});
Route::get('/kapals', function () {
    return view('kapal.kapals', ['title' => 'Report',
     'kapals' => Kapal::latest()
     ->filter(request(['search','kapal','inspektur','pemilik']))
     ->paginate(5)
     ->withQueryString()]);
});

Route::get('/reports/cpib', function () {
    return view('cpib.cpib-reports', ['title' => 'Report', 'kapals' => Kapal::latest()->filter(request(['search','pemilik','inspektur']))->paginate(5)->withQueryString()]);
});

    Route::middleware('auth','verified')->group(function(){
    Route::get('/kapals/{kapal:id}', function(Kapal $kapal){
    return view('kapal.detail', ['title' => 'Data Kapal', 'kapal' => $kapal]);
});
    Route::get('/dashboard', [KapalController::class, 'index'])->name('dashboard');
    Route::post('/dashboard', [KapalController::class, 'store']);
    Route::get('/dashboard/create',[KapalController::class,'create']);
    Route::delete('/dashboard/{kapal:id}',[KapalController::class, 'destroy']);
    Route::get('/dashboard/{kapal:id}/edit', [KapalController::class, 'edit']);
    Route::patch('/dashboard/{kapal:id}', [KapalController::class, 'update']);
    Route::get('/dashboard/{kapal:nama_kapal}',[KapalController::class,'show']);   
    });


    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::post('/upload', [ProfileController::class, 'upload']);
});

require __DIR__.'/auth.php';
