<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterStudent;
use App\Models\School;
use App\Models\User;
class LoginController extends Controller
{
    public function register(RegisterStudent $request, $id) {
        $name = $request->name;
        $email    = $request->email;
        $password = $request->password;
        $user     = User::create(['name' => $name, 'email' => $email, 'password' => Hash::make($password), 'user_type'=>'student']);
        $school = School::find($id);
        
    }
}
