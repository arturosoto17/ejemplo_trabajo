<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index() { /* Listar roles */ }

    public function create() { /* Crear rol */ }

    public function store(Request $request) { /* Almacenar rol */ }

    public function edit(Role $role) { /* Editar rol */ }

    public function update(Request $request, Role $role) { /* Actualizar rol */ }

    public function destroy(Role $role) { /* Eliminar rol */ }
}
