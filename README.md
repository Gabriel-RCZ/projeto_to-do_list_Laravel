# To-Do List - Laravel 12

Este projeto é uma aplicação de gerenciamento de tarefas (To-Do List) desenvolvida em **Laravel 12**.  
Permite aos usuários cadastrados criar, listar, editar, excluir e filtrar suas próprias tarefas.

---

## 🎯 Funcionalidades

- Cadastro e autenticação de usuários
- CRUD completo de tarefas:
  - Criar tarefa
  - Listar tarefas
  - Editar tarefa
  - Excluir tarefa
- Filtro por status (Todas, Pendentes, Concluídas)
- Paginação de tarefas
- Responsividade com Bootstrap 5
- Validações de formulário
- Proteção de rotas (somente tarefas do usuário logado)
- Controle de sessão e mensagens de sucesso

---

## 🛠 Tecnologias Utilizadas

- [Laravel 12](https://laravel.com/)
- [Bootstrap 5](https://getbootstrap.com/)
- [PHP 8.3](https://www.php.net/)
- [MySQL](https://www.mysql.com/) ou [SQLite](https://www.sqlite.org/)
- [Laravel Breeze](https://laravel.com/docs/12.x/starter-kits#laravel-breeze) (autenticação)

---

## 🚀 Como Rodar o Projeto

### Pré-requisitos:

- PHP >= 8.1
- Composer
- Node.js e NPM
- MySQL ou SQLite
- Git

### Passos:

1. Clone este repositório:

```bash
git clone https://github.com/Gabriel-RCZ/projeto_to-do_list_Laravel.git
```

2. Acesse a pasta do projeto:

```bash
cd to-do-list
```

3.Instale as dependências PHP:

```bash
composer install
```

4.Instale as dependências JavaScript:

```bash
npm install
npm run dev
```

5.Copie o arquivo .env.example para .env:

```bash
cp .env.example .env
```

```bash
6.Gere a chave da aplicação:
php artisan key:generate
```

7.Configure seu banco de dados no arquivo .env:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=seu_banco_de_dados
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

8.Rode as migrations para criar as tabelas:

```bash
php artisan migrate
```

9.Inicie o servidor de desenvolvimento:

```bash
php artisan serve
```

10.Acesse no navegador

http://localhost:8000



