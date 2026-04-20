<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\HelpCenterController;

// Livewire imports
use App\Livewire\Home;
use App\Livewire\Account\Index as AccountIndex;
use App\Livewire\ActivityLogs;
use App\Livewire\Tickets\Index as TicketsIndex;
use App\Livewire\Tickets\Create as TicketsCreate;
use App\Livewire\Tickets\Show as TicketsShow;
use App\Livewire\ApiTokens\Index as ApiTokensIndex;
use App\Livewire\News\Index as NewsIndex;
use App\Livewire\News\Show as NewsShow;
use App\Livewire\Referral\Index as ReferralIndex;
use App\Livewire\Notifications\Index as NotificationsIndex;

// Home
Route::get('/', Home::class)->name('home');

// Sitemap
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');


// Referral Link
Route::get('/ref/{code}', [ReferralController::class, 'redirect'])->name('referral.redirect');

// Language Switcher
Route::get('/language/{locale}', function (string $locale) {
    \App\Services\LanguageService::setLanguage($locale);
    return redirect()->back();
})->name('language.switch');

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticate'])->name('login.post');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register', [AuthController::class, 'store'])->name('register.post');

    Route::get('login/google', [AuthController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('auth/google/callback', [AuthController::class, 'handleGoogleCallback']);

    // Two-Factor Challenge (shown after successful credential verification)
    Route::get('two-factor-challenge', [AuthController::class, 'twoFactorChallenge'])->name('two-factor.challenge');
    Route::post('two-factor-challenge', [AuthController::class, 'verifyTwoFactor'])->name('two-factor.verify');

    // Forgot Password
    Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('password.request');
    Route::post('forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');
    Route::get('reset-password/{token}', [AuthController::class, 'resetPassword'])->name('password.reset');
    Route::post('reset-password', [AuthController::class, 'updatePassword'])->name('password.update');
});

Route::post('logout', [AuthController::class, 'destroy'])->name('logout')->middleware('auth');

// Email verification routes
Route::middleware('auth')->group(function () {
    Route::get('email/verify', [AuthController::class, 'verificationNotice'])
        ->name('verification.notice');
    
    Route::get('email/verify/{id}/{hash}', [AuthController::class, 'verifyEmail'])
        ->middleware('signed')
        ->name('verification.verify');
    
    Route::post('email/verification-notification', [AuthController::class, 'resendVerification'])
        ->middleware('throttle:6,1')
        ->name('verification.send');
});

// Email change verification (signed URL)
Route::get('email-change/verify/{token}', [AuthController::class, 'verifyEmailChange'])
    ->name('email-change.verify')
    ->middleware('signed');



// Public Pages (Terms, Privacy, etc.)
Route::get('/page/{page}', [PageController::class, 'show'])->name('page.show');

// API Documentation
Route::get('/docs/api/{section?}', [\App\Http\Controllers\Docs\ApiDocumentationController::class, 'index'])->name('docs.api');

// Help Center
Route::get('/help', [HelpCenterController::class, 'index'])->name('help.index');
Route::get('/help/{category:slug}', [HelpCenterController::class, 'category'])->name('help.category');
Route::get('/help/{category:slug}/{article:slug}', [HelpCenterController::class, 'article'])->name('help.article');
Route::post('/help/article/{article:id}/feedback', [HelpCenterController::class, 'feedback'])->name('help.feedback');

// User App Routes
Route::middleware('auth')->group(function () {
    // Account Settings
    Route::get('/account', AccountIndex::class)->name('account');

    // Activity Logs
    Route::get('/activity-logs', ActivityLogs::class)->name('activity-logs');

    // Support Tickets
    Route::get('/tickets', TicketsIndex::class)->name('tickets.index');
    Route::get('/tickets/create', TicketsCreate::class)->name('tickets.create');
    Route::get('/tickets/{ticket}', TicketsShow::class)->name('tickets.show');

    // API Tokens
    Route::get('/api-tokens', ApiTokensIndex::class)->name('api-tokens.index');

    // News & Announcements
    Route::get('/news', NewsIndex::class)->name('news.index');
    Route::get('/news/{news}', NewsShow::class)->name('news.show');

    // Referral System (Tracking Only)
    Route::get('/referral', ReferralIndex::class)->name('referral.index');

    // Notifications
    Route::get('/notifications', NotificationsIndex::class)->name('notifications.index');
});

