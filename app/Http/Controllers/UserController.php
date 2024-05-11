<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\SingInRequest;
use App\Services\UserService;
use Illuminate\Support\Facades\Log;
use Symfony\Component\CssSelector\Exception\InternalErrorException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private UserService $userService;
    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function register(RegisterRequest $request) {
        try {
            $this->userService->create($request);
            return back()->withInput()->withErrors([
                'sing-up' => 'Regístro realizado con éxito'
            ]);

        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            throw new InternalErrorException();
        }
    }

    public function singIn(SingInRequest $request) {
        try {
           return $this->userService->autenticate($request);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            throw new InternalErrorException();
        }
    }

    public function logout(Request $request) {
        return $this->userService->logout($request);
    }
}
