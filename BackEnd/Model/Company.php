<?php
/**
 * Created by PhpStorm.
 * User: daniela
 * Date: 10.8.18
 * Time: 11:12
 */
include_once '../Database/Connection.php';


class Company
{
    private $name, $telnumber, $email;

    public function __construct($name, $telnumber, $email)
    {
        $this->name = $name;
        $this->email = $email;
        $this->telnumber = $telnumber;
    }

    public function saveAs()
    {
        $db = Connection::getConnection();
        $sql = 'INSERT INTO companylogin(companyName,email,telNumber) VALUES (:name,:email,:telnumber)';
        $stm = $db->prepare($sql);
        $parametars = ['name' => $this->name, 'email' => $this->email, 'telnumber' => $this->telnumber];
        $stm->execute($parametars);
        header('Location:http://localhost/brainster.xyz/index.php');
    }
}