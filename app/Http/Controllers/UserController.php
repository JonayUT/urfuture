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

        if (!in_array($role, $user->roles)) {
            $user->roles = array_merge($user->roles, [$role]);
            $user->save();
        }

        return redirect()->back()->with('success', 'Rol asignado correctamente.');
    }

    public function removeRole(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $role = $request->input('role');

        if (($key = array_search($role, $user->roles)) !== false) {
            unset($user->roles[$key]);
            $user->roles = array_values($user->roles);
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
