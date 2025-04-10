<?php

namespace App\Http\Controllers\api\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login;
use App\Http\Requests\Register;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Register $request)
    {
        try {
            $user = new User();
            $user->fill($request->all());
            $user->save();

            return response()->json([
                'success' => true,
                'data' => $user,
                'message' => 'Đăng kí tài khoản thành công!'
            ], 201);
        }catch (\Exception $e){
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function login(Login $request)
    {
        try {
            $dataLogin = $request->all();
            $token = Auth::attempt($dataLogin);

            if (!$token) {
                return response()->json([
                    'success' => false,
                    'message' => 'Thông tin tài khoản hoặc mật khẩu không chính xác!'
                ], 401);
            }

            return response()->json([
                'success' => true,
                'message' => 'Đăng nhập thành công!',
                'token' => $token,
                'token_type' => 'bearer',
                'expires_in' => Auth::factory()->getTTL() * 60
            ]);
        }catch (\Exception $e){
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function logout()
    {
        try {
            Auth::logout();
            return response()->json([
                'message' => 'Đăng xuất thành công!'
            ]);
        }catch (\Exception $e){
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function refresh()
    {
        try {
            $token = Auth::refresh();

            return response()->json([
                'success' => true,
                'message' => 'Refresh token thành công!',
                'token' => $token,
                'token_type' => 'bearer',
                'expires_in' => Auth::factory()->getTTL() * 60
            ]);
        }catch (\Exception $e){
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
