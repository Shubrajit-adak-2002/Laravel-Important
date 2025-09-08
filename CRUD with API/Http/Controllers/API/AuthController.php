<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use function Laravel\Prompts\error;

class AuthController extends Controller
{
    public function register(Request $req)
    {
        $validateUser = Validator::make(
            $req->all(),
            [
                'name'=>'required',
                'email'=>'required|email|unique:users,email',
                'password'=>'required'
            ]
        );

        if ($validateUser->fails()) {
            return response()->json([
                'status'=>false,
                'message'=>'Requirements are not matching',
                'error'=>$validateUser->errors()->all()
            ],401);
        }

        User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>$req->password
        ]);

         return response()->json([
                'status'=>true,
                'message'=>'User Created',
            ],200);
    }

    public function login(Request $req)
    {
        $validateUser = Validator::make(
            $req->all(),
            [
                'email'=>'required|email',
                'password'=>'required'
            ]
        );

         if ($validateUser->fails()) {
            return response()->json([
                'status'=>false,
                'message'=>'Login Failed!',
                'error'=>$validateUser->errors()->all()
            ],401);
        }

        if (Auth::attempt(['email'=>$req->email,'password'=>$req->password])) {
            $authUser = Auth::user();
            return response()->json([
                'status'=>true,
                'message'=>'Login Successfull!',
                'token'=>$authUser->createToken('Crazy')->plainTextToken,
                'token_type'=>'bearer'
            ],200);
        }else{
            return response()->json([
                'status'=>false,
                'message'=>'Credentials are not valid'
            ],404);
        }
    }

    public function logout(Request $req)
    {
        $user = $req->user();
        $user->tokens()->delete();

        return response()->json([
            'status'=>true,
            'message'=>'Logged Out Successfully',
        ],200);
    }
}
