<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function assignRole(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
        $role = $request->input('role');

        $roles = $user->getAttribute('roles') ?? [];
        if (!in_array($role, $roles)) {
            $roles[] = $role;
            $user->setAttribute('roles', $roles);
            $user->save();
        }

        return redirect()->back()->with('success', 'Rol asignado correctamente.');
    }

    public function removeRole(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $role = $request->input('role');

        $roles = $user->getAttribute('roles') ?? [];
        if (($key = array_search($role, $roles)) !== false) {
            unset($roles[$key]);
            $roles = array_values($roles);
            $user->setAttribute('roles', $roles);
            $user->save();
        }

        return redirect()->back()->with('success', 'Rol removido correctamente.');
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Usuario eliminado correctamente.');
    }
}
