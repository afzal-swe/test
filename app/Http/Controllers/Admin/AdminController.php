<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function Index()
    {
        return view('admin.login');
    } // end method

    public function Login(Request $request)
    {
        // dd($request->all());
        $check = $request->all();
        if (Auth::guard('admin')->attempt(['email' =>  $check['email'], 'password' =>  $check['password']])) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back();
        }
    } // end method

    public function Dashboard()
    {
        return view('admin.admin_master');
    } // end method
}
