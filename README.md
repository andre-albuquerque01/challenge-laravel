# Desafio

## Requisitos do Sistema

Para operar o sistema, são necessários os seguintes requisitos mínimos na sua máquina: PHP, Composer e Docker. O PHP e o Composer são essenciais para executar o Laravel, que contém a API principal do sistema. O Docker é utilizado para virtualizar o ambiente no qual a API é executada.

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

As variáveis de ambiente do banco de dados devem estar da seguinte forma:

```bash
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
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

Após inicializar o servidor, realize a migração do banco de dados:

```bash
sudo ./vendor/bin/sail artisan migrate
```

Para acessar o Swagger:

```bash
http://localhost/api/documentation
```

### Passo 3: Funcionamento do Sistema

O sistema é uma API RESTful desenvolvida com Laravel. Ele fornece um conjunto de rotas para gerenciar usuários e produtos com as seguintes operações:

As URLs da API começam com `http://localhost/api/v1/`

Rotas RESTful para Usuário

```bash
POST /login: Autentica o usuário.
```

```bash
POST /logout: Remove a autenticação do usuário.
```

```bash
POST /users: Cria um novo usuário.
```

```bash
GET /users: Retorna os detalhes de um usuário específico.
```

```bash
PUT /users: Atualiza um usuário existente.
```

Rotas RESTful para Produtos

```bash
GET /products: Retorna uma lista de todos os produtos.
```

```bash
POST /products: Cria um novo produto.
```

```bash
GET /products/{id}: Retorna os detalhes de um produto específico identificado pelo {id}.
```

```bash
PUT /products/{id}: Atualiza um produto existente identificado pelo {id}.
```

```bash
DELETE /products/{id}: Remove um produto existente identificado pelo {id}.
```
