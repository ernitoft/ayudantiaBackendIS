<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{
    public function register(Request $request)
    {
        try {

            $messages = $this->makeMessage();
            $request->validate([
                'name' => 'required|string|min:3|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|string',
                'role' => 'required|string'
            ], $messages);

            $roleValidate = Role::where('name', $request->role)->first();

            if (!$roleValidate) {
                return response([
                    'message' => 'El rol no existe',
                    'data' => [],
                    'error' => true
                ], 400);
            }

            if (User::where('email', $request->email)->exists()) {
                return response([
                    'message' => 'El correo ya está registrado',
                    'data' => [],
                    'error' => true
                ], 400);
            }
            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role_id = $roleValidate->id;
            $user->save();

            return response([
                'message' => 'Usuario registrado',
                'data' => [$user],
                'error' => false
            ], 201);

        } catch (\Exception $e) {
            return response([
                'message' => 'Error al registrar el usuario',
                'data' => [],
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function getAll()
    {
        try {
            $users = User::all();
            return response([
                'message' => 'Usuarios obtenidos',
                'data' => $users,
                'error' => false
            ], 200);
        } catch (\Exception $e) {
            return response([
                'message' => 'Error al obtener los usuarios',
                'data' => [],
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function delete(Request $request){
        try{
        
            $userId = $request->id;

            $user = User::where('id', $userId)->first();
            if (!$user){
                return response([
                    'message' => 'El usuario no existe',
                    'data' => [],
                    'error' => true
                ], 400);
            }
            $user->delete();

            return response([
                'message' => 'Usuario eliminado',
                'data' => [],
                'error' => false
            ], 200);
            
        }catch (\Exception $e){
            return response([
                'message' => 'Error al eliminar el usuario',
                'data' => [],
                'error' => $e->getMessage()
            ], 500);
        }
    }


    function makeMessage(){
        $messages = [
            'name.required' => 'El nombre es requerido',
            'name.string' => 'El nombre debe ser un texto',
            'name.min' => 'El nombre debe tener al menos 3 caracteres',
            'name.max' => 'El nombre debe tener como máximo 255 caracteres',
            'email.required' => 'El correo es requerido',
            'email.regex' => 'El correo debe ser un adecuado al formato ejemplo@ejemplo.com',
            'email.unique' => 'El correo ya está registrado',
            'password.required' => 'La contraseña es requerida',
            'password.string' => 'La contraseña debe ser un texto',
            'role.required' => 'El rol es requerido',
            'role.string' => 'El rol debe ser un texto',
        ];
        return $messages;
    }
}
