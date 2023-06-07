# Processo Seletivo - Brainy

Olá, sejam bem-vindos! Neste repositório foi construído um CRUD simples usando o `Laravel` (Framework do PHP).  

## Stack utilizada

<table width="320px" align="center">
  <tbody>
    <tr valign="top">
      <td width="80px" align="center">
        <span><strong>PHP</strong></span><br>
        <img height="45" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg">
      </td>
      <td width="80px" align="center">
        <span><strong>Laravel</strong></span><br>
        <img height="45" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain-wordmark.svg">
      </td>
    </tr>
  </tbody>
</table>

## Rodando localmente
<details>
    <summary>Clique para expandir</summary>
    <br>

Clone o projeto

```bash
  git clone git@github.com:Joaogustavo789/teste-tecnico-brainy.git
```

Entre no diretório do projeto

```bash
  cd teste-tecnico-brainy
```

Instale as dependências

```bash
  composer install
```

Inicie o servidor

```bash
  php artisan serve
```
</details>

## Variáveis de Ambiente
<details>
    <summary>Clique para expandir</summary>
    <br>

Será necessário renomear o arquivo <strong>.env.example</strong> para <strong>.env</strong> e altere as informações de acordo com suas configurações.

```bash
DB_HOST=url_da_aplicação
DB_PORT=porta_da_aplicação
DB_DATABASE=nome_do_banco_de_dados
DB_USERNAME=usuário
DB_PASSWORD=senha_do_banco_de_dados
```
</details>
    
## Documentação

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
