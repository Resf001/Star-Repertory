<?php
namespace App\verify;

class StrongPassWord {

    public static function passWordVerify(string $password) : bool
    {
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
        return !$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8;
    }

}