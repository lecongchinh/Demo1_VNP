<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{

    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function getCreate() {
        return view('user/create');
    }

    public function postCreate(Request $request) {
        $this->user->name = $request->name;
        $this->user->password = Hash::make($request->password);
        $this->user->email = $request->email;
        $this->user->admin = $request->admin;

        $this->user->createUser($request->name, $request->email, $request->password, $request->admin);

        return redirect('user/login');
    }
}
