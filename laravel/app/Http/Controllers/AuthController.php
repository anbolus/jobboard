<?php

namespace App\Http\Controllers;

use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\LoginUserRequest;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Contracts\Auth\Authenticatable;

class AuthController extends Controller
{
    use HttpResponses;

    public function login(LoginUserRequest $request) {
        $request->validated($request->only(['email', 'password']));

        if(!Auth::attempt($request->only(['email', 'password']))) {
            return $this->error('', 'Credentials do not match', 401);
        }

        $user = Users::where('email', $request->email)->first();

        return $this->success([
            'user' => $user,
            'token' => Hash::make($user->createToken('Api token of' . $user->prenom)->plainTextToken)
        ]);
    }

    public function register(StoreUserRequest $request) {

        $request->validated($request->all());
        $user = Users::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'id_companies' => $request->id_companies,
            'tel' => $request->tel,
        ]);

        return $this->success([
            'user' => $user,
            'token' => $user->createToken('Api token of ' . $user->nom . $user->prenom)->plainTextToken
        ]);
    }

    public function logout() {
        Auth::user()->currentAccessToken()->delete();

        return response(['message' => 'User logged out successfully']);
    }
}
