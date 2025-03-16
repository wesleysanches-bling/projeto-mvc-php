# Projeto MVC PHP com Docker

Este projeto utiliza o padrão de arquitetura MVC (Model-View-Controller) em PHP, e é configurado para rodar dentro de um contêiner Docker.

## Requisitos

Antes de rodar o projeto, é necessário ter o Docker e o Docker Compose instalados na sua máquina.

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Instruções de Execução

### 1. Preparando o ambiente

- Faça uma cópia do arquivo `.env.example` e renomeie para `.env`:

  `cp .env.example .env`

### 2. Iniciar o Projeto
Abra o terminal e execute o comando a seguir para iniciar o contêiner Docker e o build do projeto:


`docker-compose up`

Acompanhe o processo de build até que tudo seja finalizado. O Docker irá configurar os containers necessários e instalar as dependências do projeto.

### 3. Acessando o Projeto
Após o build ser concluído com sucesso, você poderá acessar o projeto através da seguinte URL:

`http://localhost:88`

## Configuração do Projeto
O arquivo de configuração principal do projeto está localizado em:

`projeto-mvc-php/config/config.php`

Neste arquivo, você pode definir algumas configurações importantes, como:

Modo de Manutenção: Defina se o projeto está em manutenção ou se pode ser acessado.
Controller Padrão: Especifique qual controller será usado como padrão para o projeto.

## Roteamento Automático
O projeto possui um sistema de roteamento automatizado, onde as rotas são mapeadas diretamente para os controllers e seus métodos.

### Exemplos de Rotas
A rota `http://localhost:88/api/exemplo` acessa o método padrão do `ExemploController` no diretório `App/Controllers/Api/`.

A rota `http://localhost:88/api/exemplo/show/1` acessa o método `show` do `ExemploController` no diretório `App/Controllers/Api/`, passando `1` como `parâmetro`.

A rota `http://localhost:88/principal/home` acessa o método `home` do `HomeController` no diretório `App/Controllers/Principal/`.

O padrão de roteamento segue a estrutura de namespaces do projeto. O caminho da URL após a raiz do domínio é mapeado diretamente para o namespace do controller e método. O que vier após o nome do controller é interpretado como parâmetros passados pela URL.

### Como Criar uma Nova Rota
Para adicionar uma nova rota, basta criar um novo controller e definir o método que será chamado para essa rota.

Exemplo:
#### Criar o Controller

Suponha que você queira adicionar uma nova rota para `UserController` no namespace `App/Controllers/Api/`.

Crie o arquivo `UserController.php` em `App/Controllers/Api/`.
Defina o método que será chamado para essa rota:
```php
<?php

namespace App\Controllers\Api;

class UserController
{
    public function index()
    {
        // Lógica para o método index
        echo "Método index do UserController";
    }

    public function show($id)
    {
        // Lógica para o método show
        echo "Mostrando usuário com ID: " . $id;
    }
}
```

### Definir a Rota

O sistema de rotas já reconhece automaticamente as URLs e associa os caminhos aos controllers e métodos. Para acessar o método index de `UserController`, você usaria a URL:

`http://localhost:88/api/user`
Para acessar o método show, você usaria:

`http://localhost:88/api/user/show/1`
Isso automaticamente mapeará a URL para o método correto no controller, passando o 1 como parâmetro.

Qualquer dúvida, estou à disposição! :)