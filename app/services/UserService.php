<?php

namespace App\Services;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\CssSelector\Exception\InternalErrorException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;


class UserService {

    public function create($data) {
        try {
            $user = new User();
            $user->email = $data->input('email');
            $user->name = $data->input('name');
            $user->password = Hash::make($data->input('password'));
            $user->save();

        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            throw new InternalErrorException();
        }
    }

    public function autenticate($request) {
        try {
            $email = $request->input('name');
            $password = $request->input('password');

            if (Auth::attempt(['name' => $email, 'password' => $password])) {
                $request->session()->regenerate();
                return redirect()->intended('/menu');
            }

            return back()->withInput()->withErrors([
                'login' => 'Credenciales incorrectas'
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function logout($data) {
        Auth::logout();
        $data->session()->invalidate();
        $data->session()->regenerateToken();
        return redirect('/');
    }
}