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

## Estrutura de Diretórios
Este projeto segue a arquitetura MVC (Model-View-Controller) e organiza os arquivos da aplicação de maneira a separar claramente a lógica da aplicação, as configurações e os recursos estáticos. Abaixo está a estrutura de diretórios do projeto:

```php
projeto-mvc-php/
├── .docker/                # Arquivos de configuração do Docker para facilitar a configuração do ambiente
├── .vscode/                # Configurações específicas do Visual Studio Code (opcional)
├── app/                    # Contém os arquivos principais da aplicação
│   ├── Controllers/        # Diretório com os controllers que gerenciam a lógica das rotas
│   ├── Middlewares/        # Diretório com middlewares para interceptação de requisições
│   ├── Models/             # Contém os modelos que representam as entidades da aplicação
│   └── Core/               # Contém classes fundamentais do sistema, como Controller.php, Core.php, Model.php
├── config/                 # Arquivos de configuração da aplicação
│   └── config.php          # Arquivo principal de configuração
├── public/                 # Diretório público acessível via URL
│   ├── assets/             # Arquivos estáticos como imagens, fontes, etc.
│   └── css                 # Arquivos CSS compilados ou personalizados
├── resources/              # Arquivos de recursos, como JS e views
│   ├── js/                 # Scripts JavaScript (como a aplicação Vue)
│   ├── views/              # Views utilizadas para renderizar as páginas HTML
├── .env.example            # Arquivo de exemplo com variáveis de ambiente (não contém dados sensíveis)
├── .env                    # Arquivo com as variáveis de ambiente utilizadas no projeto
├── docker-compose.yml      # Arquivo de configuração do Docker Compose
└── README.md               # Este arquivo de documentação do projeto
```

## Configuração do Projeto
O arquivo de configuração principal do projeto está localizado em:

`projeto-mvc-php/config/config.php`

Neste arquivo, você pode definir algumas configurações importantes, como:

Modo de Manutenção: Defina se o projeto está em manutenção ou se pode ser acessado.
Controller Padrão: Especifique qual controller será usado como padrão para o projeto.

## Roteamento Automático
O projeto implementa um sistema de roteamento automatizado, no qual as rotas são mapeadas diretamente para os controllers e seus respectivos métodos. Ele distingue claramente entre rotas web e rotas de API. Controllers localizados no diretório `app/Controllers/Api são` tratados exclusivamente como rotas de API, enquanto os controllers fora desse diretório serão responsáveis por renderizar as views correspondentes.

A rota inicial padrão do projeto exibe um SPA Vue.js, mas quando a rota não for do tipo `/api`, o sistema renderiza automaticamente as views em PHP, desde que configuradas corretamente. Esse sistema permite uma navegação flexível e facilita o gerenciamento de rotas, separando claramente as responsabilidades entre rotas de API e as rotas web tradicionais.

## Front end da Aplicação
A rota padrão da aplicação direciona para a SPA desenvolvida em Vue.js, localizada no diretório `resources/js`. Para criar novas telas, é necessário iniciar o modo de desenvolvedor utilizando o comando `npm run dev`. Durante esse processo, a URL onde a aplicação está sendo executada será exibida no console.

Após concluir o desenvolvimento da interface, execute o comando `npm run build` para gerar o build de produção. Esse comando cria uma versão otimizada da aplicação, e as alterações realizadas no front-end estarão disponíveis na URL padrão do projeto, tornando a interface acessível para os usuários finais.

### Exemplos de Rotas
A rota `http://localhost:88/api/exemplo` acessa o método padrão do `ExemploController` no diretório `App/Controllers/Api/`.

A rota `http://localhost:88/api/exemplo/show/1` acessa o método `show` do `ExemploController` no diretório `App/Controllers/Api/`, passando `1` como `parâmetro`.

A rota `http://localhost:88/principal/home` acessa o método `home` do `HomeController` no diretório `App/Controllers/Principal/`.

O padrão de roteamento segue a estrutura de namespaces do projeto. O caminho da URL após a raiz do domínio é mapeado diretamente para o namespace do controller e método. O que vier após o nome do controller é interpretado como parâmetros passados pela URL.

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