<?php

class Validator
{
    public static function isValidEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function isStrongPassword(string $password): bool
    {
        if (strlen($password) < 8) {
            return false;
        }

        $hasUpperCase = false;
        $hasNumber = false;

        foreach (str_split($password) as $char) {
            if ($char >= 'A' && $char <= 'Z') {
                $hasUpperCase = true;
            }

            if ($char >= '0' && $char <= '9') {
                $hasNumber = true;
            }
        }

        return $hasUpperCase && $hasNumber;
    }
}
