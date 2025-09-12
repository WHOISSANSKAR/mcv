<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserGroupController extends Controller
{
    public function store(Request $request)
    {
        // Handle file upload
        $path = null;
        if ($request->hasFile('usgrp_govt_document')) {
            $path = $request->file('usgrp_govt_document')->store('govt_documents', 'public');
        }

        DB::table('user_group')->insert([
            'usgrp_company_name' => $request->usgrp_company_name,
            'usgrp_cin' => $request->usgrp_cin,
            'usgrp_govt_document' => $path,
        ]);

        return redirect()->back()->with('success', 'User group added successfully!');
    }
}
