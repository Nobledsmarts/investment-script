<?php

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

Route::get('/daily-interest-delete', [App\Http\Controllers\ProfitCronJobController::class, 'deleteCronJobs']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faqs']);
Route::get('/plans', [App\Http\Controllers\HomeController::class, 'plans']);
Route::get('/news', [App\Http\Controllers\HomeController::class, 'news']);
Route::get('/support', [App\Http\Controllers\HomeController::class, 'support']);
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutUs']);
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactUs']);
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacyPolicy']);
Route::get('/meet-our-traders', [App\Http\Controllers\HomeController::class, 'meetOurTraders']);
Route::get('/how-it-works', [App\Http\Controllers\HomeController::class, 'howItWorks']);
Route::get('/terms', [App\Http\Controllers\HomeController::class, 'terms']);
Route::match(['get', 'post'], '/forgot-pass', [App\Http\Controllers\HomeController::class, 'forgotPass']);
Route::match(['get', 'post'], '/change-pass', [App\Http\Controllers\HomeController::class, 'changePass']);
Route::match(['get', 'post'], '/verify-token', [App\Http\Controllers\HomeController::class, 'verifyToken']);

Route::match(['get', 'post'], '/login', [App\Http\Controllers\LoginController::class, 'index']);
Route::match(['get', 'post'], '/register', [App\Http\Controllers\RegistrationController::class, 'index']);

Route::prefix('user')->group(function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'dashboard']);
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile']);
    Route::match(['get', 'post'],'/wallets', [App\Http\Controllers\UserWalletController::class, 'index']);
    Route::get('/deposit', [App\Http\Controllers\HomeController::class, 'deposit']);
    
    Route::get('/deposits', [App\Http\Controllers\HomeController::class, 'deposits']);
    Route::match(['get', 'post'], '/deposits/active', [App\Http\Controllers\HomeController::class, 'activeDeposits']);
    Route::match(['get', 'post'], '/deposits/inactive', [App\Http\Controllers\HomeController::class, 'inactiveDeposits']);
    Route::match(['get', 'post'], '/reinvest', [App\Http\Controllers\DepositController::class, 'reinvest']);
    Route::get('/reinvestments', [App\Http\Controllers\HomeController::class, 'reinvestments']);
    Route::match(['get', 'post'], '/withdrawal', [App\Http\Controllers\WithdrawalController::class, 'index']);
    Route::get('/withdrawals', [App\Http\Controllers\HomeController::class, 'withdrawals']);
    Route::get('/transactions', [App\Http\Controllers\HomeController::class, 'transactions']);
    Route::get('/security', [App\Http\Controllers\HomeController::class, 'security']);
    
    Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);
    Route::get('/referrals', [App\Http\Controllers\HomeController::class, 'referrals']);
    
    Route::match(['get', 'post'], '/manage/quick-withdrawal', [App\Http\Controllers\HomeController::class, 'quickWithdrawal']);
    Route::match(['get', 'post'], '/manage/referral-bonus', [App\Http\Controllers\HomeController::class, 'referralBonus']);
    Route::match(['get', 'post'], '/manage/current-invested', [App\Http\Controllers\HomeController::class, 'currentInvested']);
    Route::match(['get', 'post'], '/manage/wallet-balance', [App\Http\Controllers\HomeController::class, 'walletBalance']);
    Route::get('/account/verification', [App\Http\Controllers\RegistrationController::class, 'verifyUserAccount']);
});
Route::prefix('admin')->middleware(['login', 'admin'])->group(function(){
    Route::match(['get', 'post'], '/', [App\Http\Controllers\AdminController::class, 'index']);
     Route::match(['get', 'post'], '/members/suspended', [App\Http\Controllers\AdminController::class, 'suspendedMembers']);
      Route::match(['get', 'post'], '/members/moderators', [App\Http\Controllers\AdminController::class, 'moderators']);
    Route::match(['get', 'post'], '/members/admins', [App\Http\Controllers\AdminController::class, 'admins']);
    Route::match(['get', 'post'], '/members', [App\Http\Controllers\AdminController::class, 'members']);
   
   
    
    
    Route::match(['get', 'post'], '/plans/parent', [App\Http\Controllers\ParentInvestmentPlanController::class, 'index']);
    Route::match(['get', 'post'], '/plans/child', [App\Http\Controllers\ChildInvestmentPlanController::class, 'index']);
    
    Route::match(['get', 'post'], '/wallets', [App\Http\Controllers\MainWalletController::class, 'index']);
    
    Route::match(['get', 'post'], '/deposits/pending', [App\Http\Controllers\DepositController::class, 'pendingDeposits']);
    Route::match(['get', 'post'], '/deposits/approved', [App\Http\Controllers\DepositController::class, 'approvedDeposits']);
    Route::match(['get', 'post'], '/deposits/denied', [App\Http\Controllers\DepositController::class, 'deniedDeposits']);
    
    Route::match(['get', 'post'], '/withdrawals/pending', [App\Http\Controllers\WithdrawalController::class, 'pendingWithdrawals']);
    Route::match(['get', 'post'], '/withdrawals/approved', [App\Http\Controllers\WithdrawalController::class, 'approvedWithdrawals']);
    Route::match(['get', 'post'], '/withdrawals/denied', [App\Http\Controllers\WithdrawalController::class, 'deniedWithdrawals']);
    
    Route::match(['get', 'post'], '/fund/confirm-credit', [App\Http\Controllers\AdminController::class, 'confirmCredit']);
    Route::match(['get', 'post'], '/fund/confirm-debit', [App\Http\Controllers\AdminController::class, 'confirmDebit']);
    Route::match(['get', 'post'], '/fund/ci/confirm-credit', [App\Http\Controllers\AdminController::class, 'confirmCiCredit']);
    Route::match(['get', 'post'], '/fund/ci/confirm-debit', [App\Http\Controllers\AdminController::class, 'confirmCiDebit']);
    
    Route::match(['get', 'post'], '/quick-withdrawal', [App\Http\Controllers\AdminController::class, 'quickWithdrawal']);
    
     Route::match(['get', 'post'], '/manage/deposit-interest', [App\Http\Controllers\AdminController::class, 'depositInterest']);
    Route::match(['get', 'post'], '/manage/referral-bonus', [App\Http\Controllers\AdminController::class, 'referralBonus']);
    Route::match(['get', 'post'], '/manage/current-invested', [App\Http\Controllers\AdminController::class, 'currentInvested']);
    Route::match(['get', 'post'], '/manage/wallet-balance', [App\Http\Controllers\AdminController::class, 'walletBalance']);
    Route::match(['get', 'post'], '/manage/total-withdrawn', [App\Http\Controllers\AdminController::class, 'totalWithdrawn']);
    
    Route::match(['get', 'post'], '/files', [App\Http\Controllers\AdminController::class, 'files']);
    Route::match(['get', 'post'], '/reviews', [App\Http\Controllers\ReviewsController::class, 'index']);
    
    Route::match(['get', 'post'],'/pages/faqs', [App\Http\Controllers\FaqController::class, 'index']);
    
    Route::match(['get', 'post'], '/pages/terms', [App\Http\Controllers\SiteSettingsController::class, 'termsAndConditions']);
    Route::match(['get', 'post'], '/pages/about', [App\Http\Controllers\SiteSettingsController::class, 'aboutUs']);
    Route::match(['get', 'post'], '/pages/privacy-policy', [App\Http\Controllers\SiteSettingsController::class, 'privacyAndPolicy']);
    Route::match(['get', 'post'], '/pages/meet-our-traders', [App\Http\Controllers\SiteSettingsController::class, 'meetOurTraders']);
    
    Route::match(['get', 'post'], '/pages/how-it-works', [App\Http\Controllers\SiteSettingsController::class, 'howItWorks']);
    Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout']);
});
