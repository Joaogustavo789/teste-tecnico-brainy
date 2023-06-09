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
    <form action="">
      <label for="">
        Nome:
        <input type="text" name="nome" value="{{ $usuario->nome }}">
      </label>
      <label for="">
        Email:
        <input type="text" name="nome" value="{{ $usuario->email }}">
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
        <select name="" id="">
          @foreach ($hobbies as $hobbie)
            <option>{{ $hobbie->hobbie }}</option>
          @endforeach
        </select>
      </label>
    </form>
  </main>
</body>
</html>