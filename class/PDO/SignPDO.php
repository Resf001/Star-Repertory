<?php
namespace App\PDO;

use App\verify\VerifPost;
use App\verify\VerifyPost;

class SignPDO{

    private $data;
    private $pdo;

    public function __construct(array $data, $pdo) 
    {
        $this->data = $data;
        $this->pdo = $pdo;
    }

    public function putToPDO(): array
    {
        $verify = VerifyPost::verifySign($this->data);
        if (!$verify === []){
            return $verify;
        }
        $verify = VerifyPost::verifySignDuble($this->data['email'], $this->pdo);
        return $verify;
    }

}
