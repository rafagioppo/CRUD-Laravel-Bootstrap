# CRUD Laravel + Bootstrap

Este é um projeto de CRUD básico desenvolvido com Laravel e Bootstrap.

---

## 🚀 Como rodar o projeto

Siga os passos abaixo para configurar e executar o projeto localmente.

---

### 1. Clone o repositório

```bash
git clone https://github.com/rafagioppo/CRUD-Laravel-Bootstrap.git
cd CRUD-Laravel-Bootstrap
```

---

### 2. Instale as dependências

```bash
composer install
```

---

### 3. Copie o arquivo `.env.example` para `.env`

```bash
cp .env.example .env
```

---

### 4. Configure o arquivo `.env`

Abra o arquivo `.env` e edite as configurações de banco de dados:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=plss_project
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

---

### 5. Gere a chave da aplicação

```bash
php artisan key:generate
```

---

### 6. Execute as migrações

```bash
php artisan migrate
```

---

### 7. Inicie o servidor local

```bash
php artisan serve
```

---

### 8. Acesse no navegador

Abra o navegador e acesse:

```
http://localhost:8000
```

---

✅ Pronto! O projeto estará rodando localmente.
