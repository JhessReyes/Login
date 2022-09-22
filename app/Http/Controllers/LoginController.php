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
        $request->session()->forget('message-error', 0);
        try {
            $res = DB::select(
                'select * from dbo.fn_validate (?, ?)',
                array(
                    $request->email,
                    $request->password
                )
            );
            if ($res[0]->name != null) {
                $request->session()->now('message', $res[0]->message);
                return view('welcome', ['user' => $res]);
            } else {
                if ($request->session()->has('message-error') && $request->session()->get('message-error') != '') {
                    $request->session()->forget('message-error');
                } else {
                    $request->session()->put('message-error', $res[0]->message);
                }
                /*  $request->session()->now('message-error', $res[0]->message); */
                return view('login');
            }
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
