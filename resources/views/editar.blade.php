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
        <select name="" id="">
          <option value="">Estado 1</option>
          <option value="">Estado 2</option>
        </select>
      </label>
      <label for="">
        Cidade:
        <select name="" id="">
          <option value="">Cidade 1</option>
          <option value="">Cidade 2</option>
        </select>
      </label>
      <label for="">
        Hobbie:
        <select name="" id="">
          <option value="">Hobbie 1</option>
          <option value="">Hobbie 2</option>
        </select>
      </label>
    </form>
  </main>
</body>
</html>