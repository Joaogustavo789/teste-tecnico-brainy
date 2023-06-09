<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
</head>
<body>
  <main>
    <header>
      <a href="{{ route('home') }}">adicionar</a>
      <a href="{{ route('usuarios') }}">listar</a>
    </header>
    <form action="" method="post">
      <label for="">
        Nome:
        <input type="text" name="nome">
      </label>
      <label for="">
        Email:
        <input type="text" name="nome">
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