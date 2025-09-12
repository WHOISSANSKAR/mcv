<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\ActivityLog;  // ✅ Include the ActivityLog model
use Carbon\Carbon;          // ✅ For date and time handling

class Mcv_User_Login extends Controller
{
    /**
     * Existing API login for mcv_users.
     */
    public function loginApi(Request $request)
    {
        // Validate request data
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $email    = $request->email;
        $password = $request->password;

        // Fetch user from mcv_users table
        $user = DB::table('mcv_users')->where('musrs_email', $email)->first();

        if ($user && Hash::check($password, $user->musrs_password)) {
            // Successful login
            return response()->json([
                'success'      => true,
                'redirect_url' => route('add_users.view'),
            ]);
        }

        // Invalid credentials
        return response()->json([
            'success'      => false,
            'redirect_url' => route('user_login'),
        ]);
    }

    /**
     * NEW API login for login_main.blade.php.
     * Logs each successful login into activity_log.
     */
    public function loginMainApi(Request $request)
    {
        // Validate request data
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $email    = $request->email;
        $password = $request->password;

        // Fetch user from user_list table
        $user = DB::table('user_list')->where('usrlst_email', $email)->first();

        if ($user && Hash::check($password, $user->usrlst_password)) {
            // ✅ Log the activity after successful login
            $now = Carbon::now();
            ActivityLog::create([
                'acty_department' => $user->usrlst_department, // Department from user_list
                'acty_email'      => $email,                   // Email from API
                'acty_date'       => $now->toDateString(),     // Auto date
                'acty_time'       => $now->toTimeString(),     // Auto time
                'acty_action'     => 'loged In',                  // Fixed action
            ]);

            // Role-based redirect
            $redirect_url = $user->usrlst_role === 'admin' ? url('/admin') : url('/user');

            return response()->json([
                'success'      => true,
                'redirect_url' => $redirect_url,
            ]);
        }

        // Invalid credentials
        return response()->json([
            'success'      => false,
            'redirect_url' => route('login_main'), // Return to same page
        ]);
    }
}
