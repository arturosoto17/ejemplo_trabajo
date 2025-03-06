<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() { /* Listar usuarios */ }

    public function create() { /* Mostrar formulario de creación */ }

    public function store(Request $request) { /* Crear usuario */ }

    public function edit(User $user) { /* Editar usuario */ }

    public function update(Request $request, User $user) { /* Actualizar usuario */ }

    public function destroy(User $user) { /* Eliminar usuario */ }
}
