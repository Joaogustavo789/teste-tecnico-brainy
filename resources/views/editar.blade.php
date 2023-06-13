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
      <h1>Formulário de edição</h1>
      <a href="{{ route('usuarios') }}">listar</a>
    </header>
    <form action="{{ route('usuarioAtualizado', $usuario->id) }}" method="post">
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
        <select name="estado" id="id-estado" onchange="selecionaEstado()">
          @foreach ($estados as $estado)
            <option value="{{ $estado->id }}">{{ $estado->estado }}</option>
          @endforeach
        </select>
      </label>
      <label for="">
        Cidade:
        <select name="cidades" id="id-cidade">

        </select>
      </label>
      <label for="">
        Hobbie:
        <select name="hobbies" id="id-hobbie">
          @foreach ($hobbies as $hobbie)
            <option value="{{ $hobbie->id }}">{{ $hobbie->hobbie }}</option>
          @endforeach
        </select>
      </label>
      <button type="submit">Atualizar usuário</button>
    </form>
  </main>
  <script>
    let estados = @json($estados);
    let cidades = @json($cidades);
    let usuario = @json($usuario);

    function renderizaCidadeHobbie() {
      let hobbieSelect = document.getElementById('id-hobbie');
      hobbieSelect.value = usuario.id_hobbie;
      
      let cidadeFiltrada = cidades.filter((cidade) => {
        return cidade.id === usuario.id_cidade;
      });
      // console.log(cidade[0]);

      let estadoSelect = document.getElementById('id-estado');
      estadoSelect.value = cidadeFiltrada[0].id_estado;

      let cidadeSelect = document.getElementById('id-cidade');
      cidadeSelect.innerHTML = '';

      let cidadesFiltro = cidades.filter((cidade) => {
        return cidade.id_estado === Number(estadoSelect.value);
      });

      cidadesFiltro.forEach((cidade) => {
        let option = document.createElement('option');
        option.value = cidade.id;
        option.textContent = cidade.cidade;
        cidadeSelect.appendChild(option);
      });

      cidadeSelect.value = usuario.id_cidade;
    }

    function selecionaEstado() {
      let selectEstado = document.getElementById('id-estado').value;
      let selectCidade = document.getElementById('id-cidade');
      selectCidade.innerHTML = '';

      let filtraCidades = cidades.filter((cidade) => {
        return cidade.id_estado === Number(selectEstado);
      });

      filtraCidades.forEach((cidade) => {
        let option = document.createElement('option');
        option.value = cidade.id;
        option.textContent = cidade.cidade;
        selectCidade.appendChild(option);
      });
    }

    renderizaCidadeHobbie();
  </script>
</body>
</html>