<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\MailingController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SortController;
use App\Http\Controllers\VacancyController;
use App\Models\Article;
use App\Models\Document;
use App\Models\Employee;
use App\Models\Link;
use App\Models\Report;
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

Route::get('/', [ClientSiteController::class, 'index'])->name('index');
Route::get('/help', [ClientSiteController::class, 'help'])->name('help');
Route::get('/deals', [ClientSiteController::class, 'deals'])->name('deals');
Route::get('/articles', [ClientSiteController::class, 'articles'])->name('articles');
Route::get('/organisations', [ClientSiteController::class, 'organisations'])->name('organisations');
Route::get('/about', [ClientSiteController::class, 'about'])->name('about');
Route::get('/vacancy', [ClientSiteController::class, 'vacancy'])->name('vacancy');
Route::get('/smi', [ClientSiteController::class, 'smi'])->name('smi');
Route::get('/patients', [ClientSiteController::class, 'patients'])->name('patients');
Route::get('/articles/{slug}', [ClientSiteController::class, 'article'])->name('article');
Route::post('/emails/store', [MailingController::class, 'store' ])->name('emails.store');

Route::prefix('manage')->middleware(['role:MANAGER,ADMIN', 'verified'])->group(function() {
    Route::get('/', function () {
        return view('manage.index');
    })->name('manage.index');
    Route::get('/emails/export/', [MailingController::class, 'export' ])->name('manage.emails.export');
    Route::resource('/articles', ArticleController::class, ['as' => 'manage']);
    Route::get('/patient-infos', [ArticleController::class, 'patientInfosIndex'])->name('manage.patient-infos');
    Route::resource('/documents', DocumentController::class, ['as' => 'manage']);
    Route::get('/reports', [DocumentController::class, 'reports'])->name('manage.reports');
    Route::resource('/employees', EmployeeController::class, ['as' => 'manage']);
    Route::resource('/vacancies', VacancyController::class, ['as' => 'manage']);
    Route::resource('/links', LinkController::class, ['as' => 'manage']);
    Route::post('ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.image-upload');
    Route::get('/meta', [MetaController::class, 'index'])->name('manage.meta.all');
    Route::patch('/meta', [MetaController::class, 'updateOrCreate'])->name('manage.meta.update');
    Route::resource('/banners', BannerController::class, ['as' => 'manage']);
    Route::post('/{type}/update-order', [SortController::class, 'updateOrder'])->name('manage.order');
});

require __DIR__.'/auth.php';
