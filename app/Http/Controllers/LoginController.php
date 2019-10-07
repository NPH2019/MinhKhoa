<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getlogin()
    {
        return view('Admin.login');
    }
    public function postlogin(Request $request)
    {
        $this->validate($request,
            [
                'email'=>'required',
                'password'=>'required|min:3|max:20'
            ],
            [
                'email.required'=>'Bạn chưa nhập email ',
                'password.required'=>'Bạn chưa nhập mật khẩu ',
                'password.min'=>'Mật khẩu không được nhỏ hơn 3 ký tự',
                'password.max'=>'Mật khẩu không được lớn hơn 20 ký tự',
            ]);
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password]))
        {
            return redirect('admin');
        }else{
            return redirect()->back()->with('succeed',' Tên email hoặc mật khẩu không đúng');
        }
    }
    /*
     * login
     */
}
