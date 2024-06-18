<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        $email = 'aziz@gm.com';
        $password = 'password';

        $user = User::where('email', $email)->first();

        if (!$user || !Hash::check($password, $user->password)) {
            return response('Login invalid', 503);
        }

        return response()->json([
            'token' => $user->createToken('Aziz')->plainTextToken
        ]);
    }
}
