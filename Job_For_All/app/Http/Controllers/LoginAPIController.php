<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Str;
use App\Models\Token;
use DateTime;

class LoginAPIController extends Controller
{
    //
    public function login(Request $req){
        $admin = Admin::where('Username',$req->username)->where('password',md5($req->password))->first();
        if($admin){
            $api_token = Str::random(64);
            $token = new Token();
            $token->userid = $admin->Admin_id;
            $token->token = $api_token;
            $token->username = $admin->Username;
            $token->created_at = new DateTime();
            $token->save();
            return $token;
        }
        return "Username Or Password Dosen't Match";
    }
    public function logout(Request $req){
        $token = Token::where('id',$req->id)->first();
        $token->expired_at = new DateTime();
        $token->save();
        return $token;
    }
}
