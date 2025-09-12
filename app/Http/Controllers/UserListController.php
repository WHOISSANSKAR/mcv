<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserListController extends Controller
{
    public function store(Request $request)
    {
        DB::table('user_list')->insert([
            
           
            'usrlst_name' => $request->usrlst_name,
            'usrlst_email' => $request->usrlst_email,
            'usrlst_contact' => $request->usrlst_contact,
            'usrlst_role' => $request->role,
            'usrlst_department' => $request->department,
            'usrlst_password' => bcrypt($request->password), // secure password
            'usrlst_business_unit' => $request->business_unit,
        ]);

        return redirect()->back()->with('success', 'User list entry added successfully!');
    }
}
