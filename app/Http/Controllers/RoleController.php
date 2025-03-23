<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Muestra el formulario para asignar roles a un usuario específico.
     *
     * @param  int  $userId
     * @return \Illuminate\Http\Response
     */
    public function showRoleAssignmentForm($userId)
    {
        // Encuentra al usuario por ID
        $user = User::findOrFail($userId);

        // Retorna la vista con el usuario
        return view('assign_roles', compact('user'));
    }

    /**
     * Muestra todos los usuarios con sus roles.
     *
     * @return \Illuminate\Http\Response
     */
    public function showUsersWithRoles()
    {
        $users = User::all(); // No usar with('roles') porque es un array nativo
        return view('assign_roles', compact('users'));
    }
    

    /**
     * Asigna un rol a un usuario.
     *
     * @param  Request  $request
     * @param  int  $userId
     * @return \Illuminate\Http\Response
     */
    public function assignRole(Request $request, $userId)
{
    $user = User::findOrFail($userId);

    // Verifica si el rol ya está asignado para evitar duplicados
    if (!in_array($request->role, $user->roles)) {
        $user->roles = array_merge($user->roles ?? [], [$request->role]);
        $user->save();
    }

    return redirect()->back()->with('success', 'Rol asignado correctamente.');
}


    /**
     * Elimina un rol de un usuario.
     *
     * @param  Request  $request
     * @param  int  $userId
     * @return \Illuminate\Http\Response
     */
    public function removeRole(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
    
        // Obtener el rol a eliminar desde el formulario
        $roleToRemove = $request->input('role');
    
        // Verificar si el usuario tiene roles y si el rol existe en su lista
        if (is_array($user->roles) && in_array($roleToRemove, $user->roles)) {
            // Filtrar los roles para remover el seleccionado
            $user->roles = array_values(array_diff($user->roles, [$roleToRemove]));
            $user->save();
        }
    
        return redirect()->back()->with('success', 'Rol eliminado correctamente.');
    }
}