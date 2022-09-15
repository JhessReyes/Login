<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
        try {
            $res = DB::select(
                'select * from dbo.fn_validate (?, ?)',
                array(
                    $request->email,
                    $request->password
                )
            );
            if ($res[0]->name != null)
                return view('welcome', ['user' => $res]);
            else return view('login')->with(['message' => 'a']);
        } catch (\Throwable $th) {
            return view('login');
        }
    }

    public function signup()
    {
        return view('signup');
    }

    public function register(Request $request)
    {
        try {
            DB::select(
                'exec pc_insert_user ?,?,?',
                array(
                    $request->name,
                    $request->email,
                    $request->password
                )
            );
            return view('login');
        } catch (\Throwable $e) {
            return view('login');
        }
    }
}
