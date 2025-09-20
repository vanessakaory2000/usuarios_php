<?php

require_once "src/docs/ManageUser.php";

$manager = new ManageUser();

// Casos de Uso

// Caso 1 — Cadastro válido
// Entrada: nome Maria Oliveira, email maria@email.com, senha Senha123.
// Resultado esperado: usuário cadastrado com sucesso.
echo $manager->register("Maria Oliveira", "maria@email.com", "Senha123");
echo "<br>";

// Caso 2 — Cadastro com e-mail inválido
// Entrada: nome Pedro, email pedro@@email, senha Senha123.
// Resultado esperado: mensagem de erro → “E-mail inválido”.
echo $manager->register("Pedro", "pedro@@email", "Senha123");
echo "<br>";

// Caso 3 — Tentativa de login com senha errada
// Entrada: email joao@email.com, senha Errada123.
// Resultado esperado: mensagem de erro → “Credenciais inválidas”.
$manager->register("João Silva", "joao@email.com", "SenhaForte1");
echo $manager->login("joao@email.com", "Errada123");
echo "<br>";

// Caso 4 — Reset de senha válido
// Entrada: id 1, nova senha NovaSenha1.
// Resultado esperado: senha alterada com sucesso.
echo $manager->resetPassword(1, "NovaSenha1");
echo "<br>";

// Caso 5 — Cadastro de usuário com e-mail duplicado
// Entrada: email já existente no array.
// Resultado esperado: mensagem de erro → “E-mail já está em uso”.
echo $manager->register("Teste", "maria@email.com", "Senha123");
echo "<br>";
