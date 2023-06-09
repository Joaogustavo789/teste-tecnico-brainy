<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use App\Models\Estado;
use App\Models\Hobbie;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function postUsuario(Request $request) {
        $estados = Estado::all();
        // $estadoId = $request->input('estado');
        // echo $estadoId;
        // $cidades = Cidade::where('id_estado', $estadoId)->get();
        // echo $cidades;
        $cidades = Cidade::all();
        $hobbies = Hobbie::all();
        return view('home', [
            'estados' => $estados,
            'cidades' => $cidades,
            'hobbies' => $hobbies,
        ]);
    }

    public function createUsuario(Request $request) {
        Usuario::create([
            'nome' => $request->nome_usuario,
            'email' => $request->email_usuario,
            'id_cidade' => $request->cidades,
        ]);

        // Hobbie::create([

        // ]);
        echo 'Usuário casdastrado com sucesso!'; 
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
        $estados = Estado::all();
        $cidades = Cidade::all();
        $hobbies = Hobbie::all();
        return view('editar', [
            'usuario' => $usuario,
            'estados' => $estados,
            'cidades' => $cidades,
            'hobbies' => $hobbies,
        ]);
    }

    public function deleteUsuario($id) {
        $usuario = Usuario::findOrFail($id);
        return view('excluir', [
            'usuario' => $usuario,
        ]);
    }
}
