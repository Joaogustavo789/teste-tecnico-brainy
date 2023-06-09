<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function postUsuario() {
        return view('home');
    }

    public function getUsuarios() {
        $usuarios = Usuario::all();
        return view('usuario', [
            'usuarios' => $usuarios,
            // 'nome' => $usuarios->nome,
        ]);
    }

    public function putUsuario($id) {
        $usuario = Usuario::findOrFail($id);
        return view('editar', [
            'usuario' => $usuario,
        ]);
    }

    public function deleteUsuario($id) {
        $usuario = Usuario::findOrFail($id);
        return view('excluir', [
            'usuario' => $usuario,
        ]);
    }
}
