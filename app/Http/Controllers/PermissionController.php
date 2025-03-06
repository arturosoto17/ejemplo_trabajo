<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index() { /* Listar permisos */ }

    public function create() { /* Crear permiso */ }

    public function store(Request $request) { /* Almacenar permiso */ }

    public function edit(Permission $permission) { /* Editar permiso */ }

    public function update(Request $request, Permission $permission) { /* Actualizar permiso */ }

    public function destroy(Permission $permission) { /* Eliminar permiso */ }
}
