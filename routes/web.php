<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;

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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

Route::get('home', [AttendanceController::class, 'view_attendance'])->name('home')->middleware('auth');

Route::prefix('employee')->group(function () {
    Route::get('/view', [EmployeeController::class, 'view_employee'])->name('view_employee')->middleware('auth');

	Route::get('/add', [EmployeeController::class, 'add_employee'])->name('add_employee')->middleware('auth');

	Route::get('/search', [EmployeeController::class, 'search_employee'])->name('search_employee')->middleware('auth');


	Route::post('/store', [EmployeeController::class, 'store_employee'])->name('store_employee')->middleware('auth');

	Route::get('/edit/{id}', [EmployeeController::class, 'edit_employee'])->name('edit_employee')->middleware('auth');
	Route::post('/update', [EmployeeController::class, 'update_employee'])->name('update_employee')->middleware('auth');

	Route::get('/delete/{id}', [EmployeeController::class, 'delete_employee'])->name('delete_employee')->middleware('auth');

});


Route::prefix('attendance')->group(function () {
   Route::post('/store', [AttendanceController::class, 'store_attendance'])->name('store_attendance')->middleware('auth');
});


?>

