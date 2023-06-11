<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar Usuário</title>
</head>
<body>
  <main>
    <header>
      <h1>Atualizar usuário</h1>
      <a href="{{ route('usuarios') }}">listar</a>
    </header>
    <form action="{{ route('usuarioAtualizado', ['id' => $usuario->id]) }}" method="post">
      @csrf
      @method("PUT")
      <label for="">
        Nome:
        <input type="text" name="nome_usuario" value="{{ $usuario->nome }}">
      </label>
      <label for="">
        Email:
        <input type="text" name="email_usuario" value="{{ $usuario->email }}">
      </label>
      <label for="">
        Estado:
        <select name="estado" id="id-estado">
          @foreach ($estados as $estado)
            <option value="{{ $estado->id }}">{{ $estado->estado }}</option>
          @endforeach
        </select>
      </label>
      <label for="">
        Cidade:
        <select name="cidades" id="cidade">
          @foreach ($cidades as $cidade)
            <option value="{{ $cidade->id }}">{{ $cidade->cidade }}</option>
          @endforeach
        </select>
      </label>
      <label for="">
        Hobbie:
        <select name="hobbies" id="">
          @foreach ($hobbies as $hobbie)
            <option>{{ $hobbie->hobbie }}</option>
          @endforeach
        </select>
      </label>
      <button type="submit">Atualizar usuário</button>
    </form>
  </main>
</body>
</html>