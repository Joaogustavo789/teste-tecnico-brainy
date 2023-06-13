# Processo Seletivo - Brainy

Olá, sejam bem-vindos! Neste repositório foi construído um CRUD simples usando o `Laravel` (Framework do PHP) e a Arquitetura MVC (`Model, View, Controller`).  

## Stack utilizada

<table width="320px" align="center">
  <tbody>
    <tr valign="top">
      <td width="80px" align="center">
        <span><strong>MySQL</strong></span><br>
        <img height="50" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg" />
      </td>
      <td width="80px" align="center">
        <span><strong>PHP</strong></span><br>
        <img height="45" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg">
      </td>
      <td width="80px" align="center">
        <span><strong>Laravel</strong></span><br>
        <img height="45" src="https://laravel.com/img/logomark.min.svg">
      </td>
    </tr>
  </tbody>
</table>

## Rodando localmente
<details>
    <summary>Clique para expandir</summary>

  ### É necessário ter o PHP e o Composer instalados em sua maquina!

- Clone o projeto

```bash
  git clone git@github.com:Joaogustavo789/teste-tecnico-brainy.git
```

- Entre no diretório do projeto

```bash
  cd teste-tecnico-brainy
```

- Instale as dependências

```bash
  composer install
```

- Inicie o servidor

```bash
  php artisan serve
```
</details>

## Variáveis de Ambiente
<details>
    <summary>Clique para expandir</summary>

### É necessário ter o MySQL instalado em sua maquina!
- Será preciso renomear o arquivo <strong>.env.example</strong> para <strong>.env</strong> e alterar as informações de acordo com suas configurações.

```bash
DB_HOST=url_da_aplicação
DB_PORT=porta_da_aplicação
DB_DATABASE=nome_do_banco_de_dados
DB_USERNAME=usuário
DB_PASSWORD=senha_do_banco_de_dados
```
</details>

## Pré-Populando o Banco de Dados

<details>
    <summary>Clique para expandir</summary>
    
 ### Para pré-popular o banco de dados, é necessário executar as migrations e as seeders.
 
 - Para executar as migrations, basta rodar o seguinte comando:
 ```bash
    php artisan migrate
 ```
  
 - Para executar as seeders, basta rodar o seguinte comando:
 ```bash
    php artisan db:seed
 ```
 
- Para resetar o banco de dados, bastar rodar o seguinte comando:
```bash
   php artisan migrate:reset
```
</details>

## Uso 

Após inicializar o servidor, a aplicação estará rodando no seguinte caminho: `http://127.0.0.1:8000` ou `http://localhost:8000` e será renderizada a página `Home`. Nela se encontrará o formulário de cadastro de um novo usuário, na qual deverá ser informado nome, email, estado, cidade e um hobbie. Após inserir os dados e enviar, será redirecionado para página de Usuário Cadastrado, apresentando uma mensagem com o nome do novo usuário. Nela tem dois links, um que volta para a página Home e outra que redireciona para página de Usuários, na qual é renderizado todos os usuários criados. Cada usuário possui dois links, um de editar e outro de excluir, ao clicar no link de editar, será redirecionado para a página de edição, na qual terá um formulário com as informações salvas antes no banco de dados, assim facilitando qual informação o usuário deseja alterar. Após alterar as informações e enviar, será redirecionado para a página de Usuário Atualizado, na qual irá mostrar uma mensagem com o nome do usuário atualizado. Nela também possui dois links que volta para página Home e para página de Usuários. Já na página de Usuários, caso seja clicado no link de excluir, será redirecionado para a página de Usuário Deletado na qual irá mostrar uma mensagem confirmando a exclusão do usuário.
    
## Documentação

- [MySQL](https://www.mysql.com/)
- [PHP](https://www.php.net/)
- [Laravel](https://laravel.com/)
- [Composer](https://getcomposer.org/)

## Feedback

Se você tiver algum feedback, por favor nos deixe saber por meio de jgustavomendonca@gmail.com

<!--
## Aprendizados

O que você aprendeu construindo esse projeto? Quais desafios você enfrentou e como você superou-os?

## Documentação da API

#### Retorna todos os itens

```http
  GET /api/items
```

| Parâmetro   | Tipo       | Descrição                           |
| :---------- | :--------- | :---------------------------------- |
| `api_key` | `string` | **Obrigatório**. A chave da sua API |

#### Retorna um item

```http
  GET /api/items/${id}
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `string` | **Obrigatório**. O ID do item que você quer |

#### add(num1, num2)

Recebe dois números e retorna a sua soma.

## Funcionalidades

- Temas dark e light
- Preview em tempo real
- Modo tela cheia
- Multiplataforma

## Uso/Exemplos

```javascript
import Component from 'my-project'

function App() {
  return <Component />
}
```
-->
