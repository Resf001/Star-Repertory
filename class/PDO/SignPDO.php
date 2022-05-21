<?php
namespace App\PDO;

use App\verify\VerifPost;
use App\verify\VerifyPost;
use DateTime;
use PDOException;

class SignPDO{

    private $data;
    private $pdo;

    public function __construct(array $data, $pdo) 
    {
        $this->data = $data;
        $this->pdo = $pdo;
    }

    public function verifyData(): array
    {
        $verify = VerifyPost::verifySign($this->data);
        if ($verify){
            return $verify;
        }
        $verify = VerifyPost::verifySignDuble($this->data['email'], $this->pdo);
        return $verify;
    }

    public function putPDO()
    {
        $datetime = new DateTime();
        $query = $this->pdo->prepare("INSERT INTO user VALUES (NULL, :name, :firstname, :email, :sex, :password, :birthday, :signday, 1)");
        $execute = $query->execute($paramas = [
            "name" => $this->data['name'],
            "firstname" => $this->data['firstname'],
            "email" => $this->data['email'],
            "sex" => $this->data['sex'],
            "password" => password_hash($this->data['password'], PASSWORD_DEFAULT, ['cost' => 12]),
            "birthday" => $this->data['birthday'],
            "signday" => $datetime->format("Y-m-d H:i:s")
        ]);
        if (!$execute){
            throw new PDOException("Error while sending the information, please try again.");
        }
    }
}
