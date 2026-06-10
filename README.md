# 🌬️ WINDMARKET

Marketplace de créditos de energia eólica desenvolvido em Laravel.

## 📖 Sobre o Projeto

O WindMarket é uma aplicação web desenvolvida como atividade acadêmica utilizando o framework Laravel. O sistema simula um marketplace voltado para o setor de energia eólica, permitindo a visualização de créditos energéticos e o envio de contatos através de formulários.

## ✅ Requisitos Atendidos

* Rota Fallback
* Migrations
* Formulário com proteção CSRF
* Comentários no código
* Integração com banco de dados MySQL

## 🛠 Tecnologias Utilizadas

* PHP 8.2
* Laravel 12
* MySQL
* Tailwind CSS
* Blade
* XAMPP

## 🚀 Instalação

Clone o repositório:

```bash
git clone https://github.com/Beatriz1505/WINDMARKET.git
```

Entre na pasta do projeto:

```bash
cd WINDMARKET
```

Instale as dependências:

```bash
composer install
```

Configure o arquivo `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=windmarket
DB_USERNAME=root
DB_PASSWORD=
```

Gere a chave da aplicação:

```bash
php artisan key:generate
```

Execute as migrations:

```bash
php artisan migrate
```

Inicie o servidor:

```bash
php artisan serve
```

## 📄 Views Publicadas

<img width="1365" height="677" alt="image" src="https://github.com/user-attachments/assets/31600636-00d8-4bbb-9060-fde2ae4bc5a7" />
<img width="1365" height="678" alt="image" src="https://github.com/user-attachments/assets/755ae96a-a8cf-48ea-b204-c5f77439e84e" />
<img width="1363" height="676" alt="image" src="https://github.com/user-attachments/assets/e7deb7ee-7eca-4a3a-aa2a-7361fdab327e" />
<img width="1348" height="679" alt="image" src="https://github.com/user-attachments/assets/4ad2d407-80e1-496a-a112-e4f5c0598d45" />


## 🔒 Proteção CSRF

Todos os formulários utilizam a diretiva:

```blade
@csrf
```

garantindo proteção contra requisições maliciosas.

## 🗄 Banco de Dados

O sistema utiliza migrations para criação das tabelas necessárias ao funcionamento da aplicação.

Comando utilizado:

```bash
php artisan migrate
```

## 👩‍💻 Desenvolvedora

**Beatriz Galdino Torres**

Curso: Desenvolvimento de Sistemas (DS)
