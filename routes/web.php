<?php

use App\Http\Controllers\MailController;
use App\Models\Email_subject;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $email_subjects = Email_subject::all();
    return view('dashboard',compact('email_subjects'));
})->middleware(['auth'])->name('dashboard');

Route::post('/send-contact-us-mail', [MailController::class,'contactus'])->name('mail.drare');

Route::post('/send-contact-us-mailbis', [MailController::class,'contactusbis'])->name('mail.drarebis');

require __DIR__.'/auth.php';
