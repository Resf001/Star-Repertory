<?php
namespace App\verify;

class VerifyPost {
    
    /**
     * verifySign
     *
     * @param  array $data
     * @return array
     */
    public static function verifySign(array $data): array 
    {
        $errors = [];
        if (strlen($data['name']) < 3 || strlen($data['name'] > 100)){
            $errors['name'] = "More or less char in your name";
        }
        if (strlen($data['firstname']) < 3 || strlen($data['firstname'] > 100)){
            $errors['firstname'] = "More or less char in your firstname";
        }
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "E-mail invalid";
        }
        if (StrongPassWord::passWordVerify($data['password'])){
            $errors['password'] = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
        }
        return $errors;
    }

    public static function verifySignDuble(string $email, object $pdo): array
    {
        $errors = [];
        $query = $pdo->prepare("SELECT email FROM user WHERE email = :email");
        $query->execute(["email" => $email]);
        if ($query->fetch()){
            $errors['email'] = "email already use";
            return $errors; 
        }
        return $errors;
    }
}