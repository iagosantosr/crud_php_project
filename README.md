Projeto CRUD PHP com Design Pattern (MVC + Service + Repository)

Este é um projeto exemplo de um CRUD em PHP seguindo boas práticas de organização de código, com padrão MVC, Service Layer e Repository Pattern.



✅ Requisitos

PHP 7.4+ instalado
Composer instalado
MySQL ou MariaDB rodando localmente
Editor de código (VSCode recomendado)


📦 Instalação

1. clone o projeto em: 
https://github.com/iagosantosr/crud_php_project

2. Configure o banco de dados MySQL

CREATE DATABASE crud_db;

USE crud_db;



CREATE TABLE users (

 id INT AUTO_INCREMENT PRIMARY KEY,

 name VARCHAR(100),

 email VARCHAR(100)

);


3. Configure o arquivo config/config.php com seus dados de conexão


define('DB_HOST', 'localhost');
define('DB_NAME', 'crud_db');
define('DB_USER', 'root');
define('DB_PASS', '');

4. Configure o autoload com o Composer


composer dump-autoload

Certifique-se que seu composer.json contém:

{
  "autoload": {
    "psr-4": {
      "App\\": "src/"
    }
  }
}


▶️ Executando o projeto

Execute o servidor embutido do PHP:




php -S localhost:8000


Acesse no navegador:




http://localhost:8000?action=list


Você verá o JSON com a lista de usuários.



🧱 Estrutura de Pastas


crud_php_project/
├── index.php
├── config/
│   └── config.php
├── src/
│   ├── Model/
│   │   └── User.php
│   ├── Repository/
│   │   └── UserRepository.php
│   ├── Service/
│   │   └── UserService.php
│   └── Controller/
│       └── UserController.php
└── vendor/
    └── autoload.php

📜 Licença

MIT
