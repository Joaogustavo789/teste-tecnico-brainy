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
    <form action="{{ route('novoUsuario') }}" method="post">
      @csrf
      <label for="">
        Nome:
        <input type="text" name="nome_usuario">
      </label>
      <label for="">
        Email:
        <input type="text" name="email_usuario">
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
        <select name="" id="">
          @foreach ($hobbies as $hobbie)
            <option>{{ $hobbie->hobbie }}</option>
          @endforeach
        </select>
      </label>
      <button type="submit">Enviar cadastro</button>
    </form>
  </main>
  <script>
    let estados = @json($estados);
    let cidades = @json($cidades);
    // console.log(estados);
    // console.log(cidades);

    function selecionaEstado() {
      // console.log('Entrou na função selecionaEstado');
      let selectEstado = document.getElementById('id-estado').value;
      // console.log(typeof selectEstado);
      let selectCidade = document.getElementById('id-cidade');
      selectCidade.innerHTML = '';
      // let teste = Number(selectEstado);
      // console.log(typeof teste);
      let filtraCidades = cidades.filter((cidade) => {
        // console.log(cidade.id_estado);
        // console.log(typeof cidade.id_estado);
        // console.log(typeof selectEstado);
        return cidade.id_estado === Number(selectEstado);
      });
      // console.log(filtraCidades);

      filtraCidades.forEach((cidade) => {
        let option = document.createElement('option');
        option.value = cidade.id;
        option.textContent = cidade.cidade;
        selectCidade.appendChild(option);
      });
    }

    selecionaEstado();
  </script>
</body>
</html>