<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ReportController;
use App\Models\Article;
use App\Models\Employee;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientSiteController;


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

//Route::get('/', function () {
//    return view('client.welcome');
//});

Route::get('/', [ClientSiteController::class, 'index'])->name('index');
Route::get('/help', [ClientSiteController::class, 'help'])->name('help');
Route::get('/deals', [ClientSiteController::class, 'deals'])->name('deals');
Route::get('/articles', [ClientSiteController::class, 'articles'])->name('articles');
Route::get('/organisations', [ClientSiteController::class, 'organisations'])->name('organisations');
Route::get('/about', [ClientSiteController::class, 'about'])->name('about');
Route::get('/vacancy', [ClientSiteController::class, 'vacancy'])->name('vacancy');
Route::get('/smi', [ClientSiteController::class, 'smi'])->name('smi');

Route::prefix('manage')->middleware(['role:MANAGER, ADMIN', 'verified'])->group(function() {
    Route::get('/', function () {
        return view('manage.index');
    })->name('manage.index');


    Route::get('/articles', function () {
        return view('manage.entity')->with([
            'entity_title' => 'Новости',
            'entity_desc' => 'Список новостей',
            'entity_model_collection' => Article::all(),
            'type' => 'articles',
            'entity_create_title' => 'Создание новости'
        ]);
    })->name('manage.articles');
    Route::get('/articles/edit', function () {
        return view('manage.edit')->with([
            'entity_title' => 'Редактирование новости',
            'entity_desc' => 'Редактирование новости',
            'type' => 'articles',
            'entity_model_inputs' => Article::$inputsByEntity
        ]);
    })->name('manage.articles.edit');
    Route::get('/articles/create', function () {
        return view('manage.create')->with([
            'entity_title' => 'Создание новости',
            'entity_desc' => 'Создание новости',
            'type' => 'articles',
            'entity_model_inputs' => Article::$inputsByEntity
        ]);
    })->name('manage.articles.create');


    Route::get('/reports', function () {
        return view('manage.entity')->with([
            'entity_title' => 'Отчеты',
            'entity_desc' => 'Список отчетов',
            'entity_model_collection' => Report::all(),
            'type' => 'reports',
            'entity_create_title' => 'Создание нового отчета'
        ]);
    })->name('manage.reports');
    Route::get('/reports/edit', function () {
        return view('manage.edit')->with([
            'entity_title' => 'Редактирование отчета',
            'entity_desc' => 'Редактирование отчета',
            'type' => 'reports',
            'entity_model_inputs' => Report::$inputsByEntity
        ]);
    })->name('manage.reports.edit');
    Route::get('/reports/create', function () {
        return view('manage.create')->with([
            'entity_title' => 'Создание отчета',
            'entity_desc' => 'Создание отчета',
            'type' => 'reports',
            'entity_model_inputs' => Report::$inputsByEntity
        ]);
    })->name('manage.reports.create');


    Route::get('/employees', function () {
        return view('manage.entity')->with([
            'entity_title' => 'Сотрудники',
            'entity_desc' => 'Список сотрудников',
            'entity_model_collection' => Employee::all(),
            'type' => 'employees',
            'entity_create_title' => 'Добавление нового сотрудника'
        ]);
    })->name('manage.employees');
    Route::get('/employees/edit', function () {
        return view('manage.edit')->with([
            'entity_title' => 'Редактирование данных сотрудника',
            'entity_desc' => 'Редактирование данных сотрудника',
            'type' => 'employees',
            'entity_model_inputs' => Employee::$inputsByEntity
        ]);
    })->name('manage.employees.edit');
    Route::get('/employees/create', function () {
        return view('manage.create')->with([
            'entity_title' => 'Создание нового сотрудника',
            'entity_desc' => 'Создание нового сотрудника',
            'type' => 'employees',
            'entity_model_inputs' => Employee::$inputsByEntity
        ]);
    })->name('manage.employees.create');

    Route::post('/employees/store', [EmployeeController::class, 'store'])->name('manage.employees.store');
    Route::post('/reports/store', [ReportController::class, 'store'])->name('manage.reports.store');
    Route::post('/articles/store', [ArticleController::class, 'store'])->name('manage.articles.store');
    Route::post('ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.image-upload');

});

//Auth::routes(['verify' => true]);

require __DIR__.'/auth.php';
