<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserApiController extends Controller
{   

    function login(Request $request) {
        $credenciales =  $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!Auth::attempt($credenciales)) {
            return response()->json([
                'error' => 'usuario o clave no valido',
            ]);
        }
        $user = User::where('email',$request->email)->first();

        $token = $user->createToken($request->email)->plainTextToken;
        return response()->json([
            'access_token' => $token
        ]);
    }


    function logout(Request $request) {
        return response()->json([
            "logout" => $request->user()->currentAccessToken()->delete(),
        ]);
    }


    function registrer(Request $request) {
        // valido que hay todos los datos para crear el usuario
        $datos = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $datos['password'] = Hash::make($datos['password']);
        
        $datos['admin'] = false;

        // creo el usuario
        $user = User::create($datos);
        // genero el token del usuario
        $token = $user->createToken('auth_token')->plainTextToken;
        

        // falta crear el Resources de user 
        return response()->json([
            'access_token' => $token,
            'user' => $user
        ]);
    }


    function allUser() {
        return new UserCollection(User::all());
    }

    function getUser(Request $request) {
        return new UserResource(User::find($request->id));
    }

    function updateUser(Request $request) {
        $id = $request->id;
        $user = User::find($id);

        if (!$user) {
            return response()->json(["error" => "usuario no existe"]);
        }

        if ($request->password) {
            $request['password'] = Hash::make($request->password);
        }
        $user->update($request->all());
        return new UserResource($user);
    }


    function deleteUser(Request $request) {
        $id = $request->id;
        $user = User::find($id);
        $user->delete();
        return new UserResource($user);
    }

}
