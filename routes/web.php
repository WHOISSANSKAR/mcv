<?php
use Illuminate\Support\Facades\Route;

// Default homepage → user dashboard
Route::view('/', 'mcv_user.index');

// User dashboard
Route::view('/user', 'mcv_user.index');

// Admin dashboard
Route::view('/admin', 'mcv_admin.index');

//ESG dashboard
Route::view('/esg', 'mcv_admin.esg');

//account
Route::view('/accounts', 'mcv_admin.account');

//activity
Route::view('/activity', 'mcv_admin.activity');

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

//feature
Route::view('/feature', 'mcv_admin.feature');

//pending
Route::view('/pending', 'mcv_admin.pending');

//profile
Route::view('/profile', 'mcv_admin.profile');

//purchase
Route::view('/purchase', 'mcv_admin.purchase');

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

//add-audit
Route::view('/add-audit_', 'mcv_user.add-audit');

//add-self
Route::view('/add-self_', 'mcv_user.add-self');

//add-statutory
Route::view('/add-statutory_', 'mcv_user.add-statutory');

//add-user
Route::view('/add-user_', 'mcv_user.add-user');

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

//manage-audit
Route::view('/manage-audit_', 'mcv_user.manage-audit');

//manage-self
Route::view('/manage-self_', 'mcv_user.manage-self');

//manage-statutory
Route::view('/manage-statutory_', 'mcv_user.manage-statutory');

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
