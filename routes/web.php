<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserGroupController;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\mcv_user_login;
use App\Http\Controllers\ActivityLogController;

Route::get('/activity-logs', [ActivityLogController::class, 'index']);


// New login page
Route::view('/user_login', 'mcv_admin.login_main')->name('login_main');

// API route for login_main
Route::post('/api/login_main', [mcv_user_login::class, 'loginMainApi'])->name('login_main.api');

// Admin and user pages
Route::view('/admin', 'mcv_admin.index')->name('admin');
Route::view('/user', 'mcv_user.index')->name('user');


// API login POST
Route::post('/api/user_login', [mcv_user_login::class, 'loginApi'])->name('mcv_user.login_api');

// Login page
Route::view('/mcv_user_login', 'mcv_user.login')->name('user_login');

// Add users page
Route::view('/add_users', 'mcv_admin.add_users')->name('add_users.view');


// add-users
Route::view('/add_users', 'mcv_admin.add_users');

//add-usergroup to database
Route::post('/usergroup/store', [UserGroupController::class, 'store'])->name('usergroup.store');

//add userslist to databse
Route::post('/userlist/store', [UserListController::class, 'store'])->name('userlist.store');

//login in database
Route::post('/user_login', [mcv_user_login::class, 'login'])->name('mcv_user.login'); // Login submit

Route::view('/add_users', 'mcv_admin.add_users')->name('add_users.view'); // Redirect page

// Default homepage → user dashboard
Route::view('/', 'mcv_user.index');

// User dashboard
Route::view('/user', 'mcv_user.index');

// Admin dashboard
Route::view('/admin', 'mcv_admin.index');

//ESG dashboard
Route::view('/esg', 'mcv_admin.esg');

//activity
Route::view('/activity', 'mcv_admin.activity');

//accounts
Route::view('/accounts', 'mcv_admin.account');

//add-user
Route::view('/add-user', 'mcv_admin.add-user');

//approved
Route::view('/approved', 'mcv_admin.approved');

//compliance
Route::view('/compliance', 'mcv_admin.compliance');

//department
Route::view('/department', 'mcv_admin.department');

//edit-user
Route::view('/edit-user', 'mcv_admin.edit-user');

//pending
Route::view('/pending', 'mcv_admin.pending');

//profile
Route::view('/profile', 'mcv_admin.profile');

//report
Route::view('/report', 'mcv_admin.report');

//restore
Route::view('/restore', 'mcv_admin.restore');

//settings
Route::view('/settings', 'mcv_admin.settings');

//upcoming
Route::view('/upcoming', 'mcv_admin.upcoming');

//user
Route::view('/users', 'mcv_admin.user');

//add-self
Route::view('/add-self_', 'mcv_user.add-self');

//add-statutory
Route::view('/add-statutory_', 'mcv_user.add-statutory');

//add-user
Route::view('/add-user_', 'mcv_user.add-user');

//add-dc sustainability
Route::view('/add-dc_', 'mcv_user.add-dc');

//add-geo spatial
Route::view('/add-geo_', 'mcv_user.add-geo');

//add-dpdp act
Route::view('/add-dpdp_', 'mcv_user.add-dpdp');

//add-cyber resilience
Route::view('/add-cyber_', 'mcv_user.add-cyber');

//add-notices
Route::view('/add-notices_', 'mcv_user.add-notices');

//compliance
Route::view('/compliance_', 'mcv_user.compliance');

//dpdpa-start
Route::view('/dpdpa-start_', 'mcv_user.dpdpa-start');

//dpdpa-view
Route::view('/dpdpa-view_', 'mcv_user.dpdpa-view');

//dpdpact-start
Route::view('/dpdpact-start_', 'mcv_user.dpdpact-start');

//dpdpact-view
Route::view('/dpdpact-view_', 'mcv_user.dpdpact-view');

//edit-user
Route::view('/edit-user_', 'mcv_user.edit-user');

//manage-self
Route::view('/manage-self_', 'mcv_user.manage-self');

//manage-statutory
Route::view('/manage-statutory_', 'mcv_user.manage-statutory');

//manage-dc
Route::view('/manage-dc_', 'mcv_user.manage-dc');

//manage-geo
Route::view('/manage-geo_', 'mcv_user.manage-geo');

//manage-dpdp
Route::view('/manage-dpdp_', 'mcv_user.manage-dpdp');

//manage-cyber
Route::view('/manage-cyber_', 'mcv_user.manage-cyber');

//manage-self
Route::view('/manage-notices_', 'mcv_user.manage-notices');

//not-found
Route::view('/not-found_', 'mcv_user.not-found');

//outofoffice
Route::view('/outofoffice_', 'mcv_user.outofoffice');

//report
Route::view('/report_', 'mcv_user.report');

//settings
Route::view('/settings_', 'mcv_user.settings');

//view
Route::view('/view_', 'mcv_user.view');

//tns
Route::view('/tns_', 'mcv_user.tns');
