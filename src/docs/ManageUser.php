<?php

require_once "User.php";
require_once "Validator.php";

class ManageUser
{
    private array $users = [];
    private int $nextId = 1;

    public function register(string $name, string $email, string $password): string
    {
        if (!Validator::isValidEmail($email)) {
            return "E-mail inválido";
        }

        if (!$this->isEmailAvailable($email)) {
            return "E-mail já está em uso";
        }

        if (!Validator::isStrongPassword($password)) {
            return "A senha deve ter pelo menos 8 caracteres, 1 número e 1 letra maiúscula";
        }

        $user = new User($this->nextId++, $name, $email, $password);
        $this->users[] = $user;

        return "Usuário {$user->getName()} foi criado com sucesso!";
    }

    public function login(string $email, string $password): string
    {
        foreach ($this->users as $user) {
            if ($user->getEmail() === $email && $user->verifyPassword($password)) {
                return "Login realizado com sucesso";
            }
        }
        return "Credenciais inválidas";
    }

    public function resetPassword(int $id, string $newPassword): string
    {
        if (!Validator::isStrongPassword($newPassword)) {
            return "Nova senha não atende aos requisitos";
        }

        foreach ($this->users as $user) {
            if ($user->getId() === $id) {
                $user->updatePassword($newPassword);
                return "Senha alterada com sucesso";
            }
        }
        return "Usuário não encontrado";
    }

    public function listUsers(): array
    {
        return $this->users;
    }

    private function isEmailAvailable(string $email): bool
    {
        foreach ($this->users as $user) {
            if ($user->getEmail() === $email) {
                return false;
            }
        }
        return true;
    }
}
