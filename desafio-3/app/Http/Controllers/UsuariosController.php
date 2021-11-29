<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UsuariosController extends Controller
{
    public function index() {
        $usuarios = User::get();
        return view('index', ['usuarios' => $usuarios]);
    }
    public function novo() {
        return view('usuarioForm');
    }
    // Criar
    public function add(Request $request) {
        $usuario = new User;
        $usuario = $usuario->create($request->all());
        return Redirect::to('/');
    }
    public function edit($id) {
        $usuario = User::findOrFail($id);
        return view('usuarioForm', ['usuario' => $usuario]);
    }
    // Atualizar
    public function update($id, Request $request) {
        $usuario = User::findOrFail($id);
        $usuario->update($request->all());
        return Redirect::to('/');
    }
    // Deletar
    public function delete($id) {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return Redirect::to('/');
    }
}
