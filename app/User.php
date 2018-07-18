<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   

    protected $table = 'users';

    public function __construct(){
        DB::Connection();
    }

    public function createUser($name, $email, $password, $admin) {
        DB::table('users')->insert(
            ['name' => $this->name, 'email' => $this->email, 'password' => $this->password, 'admin' => $this->admin]
        );
    }
}
