<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Session;
class LoginController extends Controller
{
    public function getLogin() {
        return view('user/login');
    }

    public function postLogin(Request $request) {
        $name = $request->name;
        $password = $request->password;
        // $name = $request->name;
    
        if (Auth::attempt(['username' => $name, 'password' => $password])) {

            // Authentication passed...
            // if(Auth::user()->admin == 1){
            $name = Auth::user()->name;
            Session::set('username', $name);
            Session::save();
            return redirect('index')->with('message', 'Chúc mừng bạn đã đăng nhập thành công');
            // }else {
            //     return redirect('user/login')->with('message', 'Ban phai nhap vao admin');
            // }
        }else{
            return redirect('user/login')->with('message', 'User hoặc Password không đúng, mời bạn nhập lại');
        }

    }

    public function getLogout() {
        Auth::logout();
        return redirect('user/login');
    }
}
