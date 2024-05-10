<?php

use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegistrationUserController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\QuestionsListController;
use App\Http\Controllers\QuestionViewController;
use App\Http\Controllers\ResetPasswordController;

Route::redirect('/', '/welcomepage');
Route::get('/welcomepage', [MainController::class, 'main'])
    ->name('welcomepage');

Route::get('questionslist/{category_name}', [QuestionsListController::class, 'getlist'])
    ->name('questionslist');

Route::get('questionslist/{category_name}/{id}', [QuestionViewController::class, 'getquestion'])
    ->name('questionslist.question');

Route::middleware('guest')->group(function () {
    Route::get('/forgotpassword', [ForgotPasswordController::class, 'ForgotPasswordView'])
        ->name('forgotpassword');

    Route::post('/forgotpassword', [ForgotPasswordController::class, 'ForgotPassword'])
        ->name('forgotpassword.email');

    Route::get('/resetpassword', [ResetPasswordController::class, 'ResetView'])
        ->name('password.reset');

    Route::post('/resetpassword', [ResetPasswordController::class, 'Reset'])
        ->name('password.update');

    Route::get('/registration', [RegistrationUserController::class, 'RegistrationView'])
        ->name('registration');

    Route::post('/registration', [RegistrationUserController::class, 'Registration'])
        ->name('registration');

    Route::get('/login', [LoginUserController::class, 'LoginView'])
        ->name('login');

    Route::post('/login', [LoginUserController::class, 'Login'])
        ->name('login');
});

Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'dashboard')
        ->name('dashboard');

    Route::get('/logout', [LoginUserController::class, 'Logout'])
        ->name('logout');
});