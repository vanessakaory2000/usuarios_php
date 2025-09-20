# 📘 Sistema de Usuários e Autenticação (PHP)

Projeto desenvolvido para a disciplina **Design Patterns & Clean Code**.  
Aplicação simples de **cadastro, login e reset de senha** em **PHP puro**, seguindo **PSR-12**, **KISS** e **DRY**.  

---

## 👥 Dupla

- **Estevão Alves dos Santos — RA: 1990000**  
- **Vanessa Kaori Kurauchi — RA: 2002344**

---

## 🚀 Como executar

1. Baixe ou clone o repositório no diretório do XAMPP:  
C:\xampp\htdocs\usuarios_php

2. Inicie o Apache pelo **XAMPP Control Panel**.

3. Acesse no navegador:  
👉 [http://localhost/usuarios_php](http://localhost/usuarios_php)


---

## ⚙️ Funcionalidades

- ✅ Cadastro de usuário com validações:
  - E-mail válido
  - Senha forte (mín. 8 caracteres, 1 número, 1 letra maiúscula)
  - Bloqueio de e-mails duplicados
- ✅ Senha protegida com `password_hash`
- ✅ Login de usuário com `password_verify`
- ✅ Reset de senha com regras aplicadas novamente
- ✅ Saídas amigáveis no cadastro (`Usuário Maria foi criado com sucesso!`)

---

## 🧪 Casos de Uso

### Caso 1 — Cadastro válido
**Entrada:**  
Nome: Maria Oliveira, Email: `maria@email.com`, Senha: `Senha123`  
**Saída esperada:**  
`Usuário Maria Oliveira foi criado com sucesso!`

---

### Caso 2 — Cadastro com e-mail inválido
**Entrada:**  
Nome: Pedro, Email: `pedro@@email`, Senha: `Senha123`  
**Saída esperada:**  
`E-mail inválido`

---

### Caso 3 — Tentativa de login com senha errada
**Entrada:**  
Email: `joao@email.com`, Senha: `Errada123`  
**Saída esperada:**  
`Credenciais inválidas`

---

### Caso 4 — Reset de senha válido
**Entrada:**  
ID: 1, Nova senha: `NovaSenha1`  
**Saída esperada:**  
`Senha alterada com sucesso`

---

### Caso 5 — Cadastro de usuário com e-mail duplicado
**Entrada:**  
Email já existente no sistema  
**Saída esperada:**  
`E-mail já está em uso`

---

## ⚠️ Limitações

- Não há persistência de dados (somente arrays em memória).  
- Não há interface de formulário (as chamadas são simuladas via código PHP).  
- Não utiliza frameworks externos, apenas **PHP puro** rodando no XAMPP.   