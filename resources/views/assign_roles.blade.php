@extends('layouts.simple')

@section('content')
<div class="container">
    <h1>Administrador de Usuarios y Roles</h1>

    <!-- Leyenda del administrador en sesión -->
    @auth
        @if(Auth::user()->hasRole('admin'))
            <p class="text-right text-muted">Administrador en sesión: {{ Auth::user()->name }}</p>
        @endif
    @endauth

    <!-- Mostrar los usuarios registrados con sus roles -->
    <h3>Usuarios:</h3>

    <table class="table">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Asignar Rol</th>
                <th>Eliminar Usuario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if (!empty($user->roles) && is_array($user->roles))
                            <ul>
                                @foreach ($user->roles as $role)
                                    <li>
                                        {{ ucfirst($role) }}
                                        
                                        <!-- Formulario para remover rol -->
                                        <form method="POST" action="{{ route('remove.role', ['id' => $user->id]) }}" style="display:inline;">
                                            @csrf
                                            <input type="hidden" name="role" value="{{ $role }}">
                                            <button type="submit" class="btn btn-danger btn-sm">X</button>
                                        </form>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No roles assigned</p>
                        @endif
                    </td>
                    <td>
                        <!-- Formulario para asignar rol -->
                        <form method="POST" action="{{ route('assign.role', ['userId' => $user->id]) }}">
                            @csrf
                            <div class="form-group">
                                <select name="role" id="role_{{ $user->id }}" class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="editor">Editor</option>
                                    <option value="viewer">Viewer</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Asignar</button>
                        </form>
                    </td>
                    <td>
                        <!-- Formulario para eliminar usuario -->
                        <form method="POST" action="{{ route('delete.user', ['id' => $user->id]) }}" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este usuario?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
