<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(){
        return view('admin-side.login');
    }
    public function loginValidate(Request $request)
    {
        $userInfo = DB::table('users')->where('name', $request->username)->first();;
        // dd($userInfo);
        if(!$userInfo){
            return redirect()->back()->with('error', "Unrecognized username: $request->email");
        }
        else{
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedInUser', $userInfo->id);
                return redirect('dashboard');
                // ->route('');
            }else{
                return redirect()->back()->with('error', 'Invalid Password');
            }
        }
    }

    public function logout()
    {
        if(session()->has('LoggedInUser')){
            session()->pull('LoggedInUser');
            return redirect('auth/login');
        }
    }
}
