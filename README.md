# Projeto Laravel - Teste Horizonte Logística

Este é um projeto Laravel básico para o Teste Horizonte Logística.

## Pré-requisitos

Antes de começar, certifique-se de ter o ambiente de desenvolvimento configurado com:

- [PHP](https://www.php.net/) (versão 7.4 ou superior)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) e [npm](https://www.npmjs.com/) (para gerenciar dependências front-end)
- [MySQL](https://www.mysql.com/) ou outro banco de dados suportado pelo Laravel

## Instalação

1. **Clone o repositório:**

    ```bash
    git clone https://github.com/iVinie/teste-horizonte-logistica
    ```

2. **Instale as dependências do Composer:**

    ```bash
    cd teste_horizonte_log
    composer install
    ```

3. **Copie o arquivo de configuração `.env`:**

    ```bash
    cp .env.example .env
    ```

    Edite o arquivo `.env` com as configurações do seu ambiente, como a conexão do banco de dados.

4. **Gere a chave de aplicativo do Laravel:**

    ```bash
    php artisan key:generate
    ```

5. **Execute as migrações do banco de dados:**

    ```bash
    php artisan migrate
    ou php artisan migrate:refresh
    ```

6. **Inicie o servidor de desenvolvimento:**

    ```bash
    php artisan serve
    ```

    O aplicativo estará disponível em [http://localhost:8000](http://localhost:8000).

## Uso

- Acesse a página inicial [http://localhost:8000](http://localhost:8000) para ver a listagem da frota, caso já tenha feito o upload do arquivo que está na pasta public/assets
- Acesse [http://localhost:8000/upload](http://localhost:8000/upload) para fazer o upload de um arquivo CSV com dados da frota.
- Existem as opções de edição, criar e exclusão, em caso de upar o arquivo csv novamente, ele apaga todos os dados e upar um novo

