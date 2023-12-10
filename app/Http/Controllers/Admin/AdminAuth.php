<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\AuthModel;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class AdminAuth extends Controller
{
    public function admin_login(Request $req){
        //$credentials = $req->only('user_email', 'user_pass');
        $user = AuthModel::where('email', $req->user_email)->where('status', '1')->get();
        if($user->count()>0){
            $dbpass = Crypt::decrypt($user[0]->password);
            if($dbpass==$req->user_pass){
                $admin_data=[
                    'fname' => $user[0]->fname,
                    'lname' => $user[0]->lname,
                    'email' => $user[0]->email,
                    'phone' => $user[0]->phone,
                ];
                Session::put('admin_login', $admin_data);
                echo "<script>window.location.href = '/admin/';</script>";
            }else{
                return '<label class="error">You entere wrong password!</label>';
            }
        }else{
            return '<label class="error">Invalid user details!</label>';
        }
    }
}
