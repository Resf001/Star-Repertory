<?php 
namespace App\PDO;

class LogPDO{

    public static function logIn(int $id, int $status)
    {
        $_SESSION['user'] = [
            'id' => $id,
            'status' => $status
        ];
        
    }

}