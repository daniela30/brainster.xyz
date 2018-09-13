<?php
/**
 * Created by PhpStorm.
 * User: daniela
 * Date: 11.8.18
 * Time: 14:56
 */
include_once '../Database/Connection.php';

class Admin
{

    private $password, $email;

    public function __construct($password, $email)
    {

        $this->email = $email;
        $this->password = $password;
    }

    public function saveAs()
    {
        $db = Connection::getConnection();
        $sql = 'INSERT INTO adminlogin(email,password) VALUES (:email,:password)';
        $stm = $db->prepare($sql);
        $parametars = ['password' => $this->password, 'email' => $this->email,

        ];
        $stm->execute($parametars);
        header('Location:http://localhost/brainster.xyz/index.php');

    }

    public function logIn()
    {
        $db = Connection::getConnection();
        $sql = 'SELECT * FROM adminlogin WHERE email LIKE  :email AND password LIKE :password';
        $stm = $db->prepare($sql);
        $parametars = ['email' => $this->email, 'password' => $this->password

        ];
        $stm->execute($parametars);
        $array = $stm->fetchAll();
        if (count($array) != 0) {
            return true;

        } else {
            return false;
        }
    }
}