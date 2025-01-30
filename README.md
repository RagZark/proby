O setup do projeto foi baseado no repositório (https://github.com/especializati/setup-docker-laravel)

O projeto laravel foi baseado em (https://github.com/laravel/laravel.git)

# Setup Docker Para Projetos Laravel (8, 9, 10 ou 11)

Necessário ter o Docker o Node instalados;

Links:


# Setup do Projeto Laravel com Docker

Este repositório contém instruções para configurar um ambiente de desenvolvimento Dockerizado para um projeto Laravel, incluindo Dockerfile, docker-compose.yml e configurações necessárias.

Clonar Repositório
Clone o repositório principal e os arquivos do Laravel:

```sh
git clone https://github.com/especializati/setup-docker-laravel/tree/laravel-11-with-php-8.3
git clone https://github.com/laravel/laravel.git app-laravel
```

Configurar o Projeto
Copie os arquivos Docker e o diretório docker/ para o diretório do projeto Laravel:

```sh
cp -rf setup-docker-laravel/* app-laravel/
cd app-laravel/
```

Configurar Variáveis de Ambiente
Crie o arquivo .env baseado no exemplo fornecido:

```sh
cp .env.example .env
```

Iniciar Containers Docker
Inicie os containers Docker para o projeto:
```sh
docker compose up -d
```
Acessar o Container
Para acessar o container da aplicação Laravel:

```sh
docker compose exec app bash
```

Instalar Dependências
Dentro do container, instale as dependências do projeto Laravel:

```sh
composer install
```

Gerar Chave do Laravel
Ainda dentro do container, gere a chave do projeto Laravel:

```sh
php artisan key:generate
```

Executar Migrations
Para rodar as migrations dentro do Laravel:

```sh
php artisan migrate
```

Instalar Laravel Breeze (Autenticação)
Dentro do container, instale o Laravel Breeze para autenticação:

```sh
composer require laravel/breeze --dev
```

Configuração Adicional (Blade, Alpine, Dark Mode, Pest)
Fora do container Docker (requer Node.js), execute o seguinte:

```sh
npm install
npm run dev ou npm run build
php artisan test
```

Acessar o Projeto
Após configurar tudo, o projeto estará disponível em:

## http://localhost:8000




# Projeto de Cadastro e Gerenciamento de Projetos

## Funcionalidades

### Cadastro e Login
- **Cadastro de Usuário**: O usuário pode se registrar no sistema.
- **Login de Usuário**: O usuário pode fazer login para acessar seu painel.
- **Logout de Usuário**: O usuário pode sair da sua conta.

### Projetos
- **Criação de Projetos**: Usuários podem criar novos projetos.
- **Listagem de Projetos**: Exibe uma lista de projetos cadastrados.
- **Edição de Projetos**: Usuários podem editar os detalhes de um projeto.
- **Exclusão de Projetos**: Usuários podem excluir um projeto.

## Arquitetura
- **Modelo**: Laravel utiliza o padrão MVC (Model-View-Controller).
  - **Model**: `User` para usuários e `Project` para projetos.
  - **Controller**: `UserController` para login e registro, `ProjectController` para gerenciamento de projetos.
  - **Views**: Arquivos Blade para formularios e exibição de dados.

## Rotas
- `POST /register` - Cadastro de usuário.
- `POST /login` - Login de usuário.
- `GET /projects` - Listagem de projetos.
- `POST /projects/create` - Criação de projeto.
- `PUT /projects/{project}/edit` - Edição de projeto.
- `DELETE /projects/{project}` - Exclusão de projeto.

## Dependências
- Laravel 8.x ou superior.

# Aplicações e escolhas feitas

# Justificativa Técnica  

O projeto utiliza Laravel por sua estrutura organizada e recursos integrados. Como ainda não há muita familiaridade com o framework, foram adotadas abordagens mais diretas e fáceis de compreender.  

O padrão MVC foi seguido para separar Model (dados), Controller (lógica) e View (interface), facilitando a manutenção. As soluções implementadas priorizam a clareza e a simplicidade, garantindo um código intuitivo e de fácil adaptação.  

O sistema de login se deu a partir do Laravel Breeze e Node, que deixa tudo simples para chegar e usar.

A criação de usuários fakes com Factories também foi algo bem interessante de se criar, tendo em vista o modelo pronto que o laravel produz.

Apesar das dificuldades foi um projeto que gerou bastante empenho e desenvolvimento pessoal.
