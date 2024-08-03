# Desafio

## Requisitos do Sistema

Para operar o sistema, são necessários os seguintes requisitos mínimos na sua máquina: PHP, Composer e Docker. O PHP e o Composer são essenciais para executar o Laravel, que contém a API principal do sistema. O Docker é utilizado para virtualizar o ambiente no qual a API é executada. Estes componentes garantem a funcionalidade e o desempenho ideais do nosso sistema de forma integrada e eficiente.

## Arquitetura do Sistema

O sistema utiliza as seguintes linguagens:

- PHP

Banco de dados:

- MySQL

Frameworks:

- Laravel

Arquitetura da API:

- MVC
- RESTful

Além disso, faz uso de:

- Docker

## Como Iniciar o Sistema

### Passo 1: Download dos Arquivos

Clone o repositório:

```bash
git clone https://github.com/andre-albuquerque01/challenge-laravel
```

### Passo 2: Configuração do Back-end

Entre na pasta back-end:

```bash
cd /challenge-laravel
```

Inicialize os pacotes do Laravel:

```php
composer install
```

Crie um arquivo `.env` na raiz do seu projeto e configure as variáveis de ambiente conforme necessário.
Execute `php artisan config:cache` para aplicar as configurações do arquivo `.env`.

Para gerar uma chave de aplicação do Laravel, execute:

```php
php artisan key:generate
```

Para gerar uma chave secreta para o JWT, execute:

```php
php artisan jwt:secret
```

No arquivo .env, defina a URL base do Swagger:

```php
L5_SWAGGER_CONST_HOST=http://project.test/api/v1
```

Inicie o servidor da API:

```bash
./vendor/bin/sail up
```

No Linux:

```bash
sudo ./vendor/bin/sail up
```

Para desativar o servidor da API:

```bash
./vendor/bin/sail down
```

No Linux:

```bash
sudo ./vendor/bin/sail down
```

### Passo 3: Funcionamento do Sistema

O sistema é um API RESTful desenvolvida com Laravel. Ele fornece um conjunto de rotas para gerenciar o usuário e os produtos com as seguintes operações:

Rotas RESTful para Produtos

```bash
POST /api/v1/login: Autenticar o usuário.
```

```bash
POST /api/v1/logout: Remove a autenticação o usuário.
```

```bash
POST /api/v1/users: Cria um novo usuário.
```

```bash
GET /api/v1/users: Retorna os detalhes de um usuário específico.
```

```bash
PUT /api/v1/users: Atualiza um usuário existente.
```

```bash
GET /api/v1/products: Retorna uma lista de todos os produtos.
```

```bash
POST /api/v1/products: Cria um novo produto.
```

```bash
GET /api/v1/products/{id}: Retorna os detalhes de um produto específico identificado pelo {id}.
```

```bash
PUT /api/v1/products/{id}: Atualiza um produto existente identificado pelo {id}.
```

```bash
DELETE /api/v1/products/{id}: Remove um produto existente identificado pelo {id}.
```
