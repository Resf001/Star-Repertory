<?php 
namespace App\PDO;

class LogPDO{

    public static function logIn(int $id, int $status, string $name)
    {
        $_SESSION['user'] = [
            'id' => $id,
            'status' => $status,
            'name' => $name
        ];
        
    }

}