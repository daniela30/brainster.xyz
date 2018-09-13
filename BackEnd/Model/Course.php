<?php
/**
 * Created by PhpStorm.
 * User: daniela
 * Date: 11.8.18
 * Time: 15:53
 */
include_once '/var/www/html/brainster.xyz/BackEnd/Database/Connection.php';

class Course
{
    private $image, $title, $subtitle, $description, $destination;

    public function __construct($image = null, $title = null, $subtitle = null, $description = null, $destination = null)
    {
        $this->image = $image;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->description = $description;
        $this->destination = $destination;
    }

    public function saveAs()
    {
        $db = Connection::getConnection();
        $sql = 'INSERT INTO courses(image,title,subtitle,description,destination) VALUES (:image,:title,:subtitle,:description,:destination)';
        $stm = $db->prepare($sql);
        $parametars = ['image' => $this->image, 'title' => $this->title, 'subtitle' => $this->subtitle, 'description' => $this->description, 'destination' => $this->destination];
        $stm->execute($parametars);
        header('Location:http://localhost/brainster.xyz/frontend/insertcards/showallcards.php?message=LogIn');
    }

    public function getAll()
    {
        $db = Connection::getConnection();
        try {


            $sql = 'SELECT * FROM courses ';
            $stm = $db->prepare($sql);
            $stm->execute();


            return $stm->fetchAll();
        } catch (PDOException $exception) {
            echo $exception;
            die();
        }
    }

    public function delete($id)
    {
        $db = Connection::getConnection();
        $sql = 'DELETE FROM courses WHERE id LIKE :id';
        $stm = $db->prepare($sql);
        $parametars = ['id' => $id];
        $stm->execute($parametars);
        header('Location:http://localhost/brainster.xyz/frontend/insertcards/showallcards.php?message=LogIn');
    }

    public function select($id)
    {
        $db = Connection::getConnection();
        $sql = 'SELECT * FROM courses WHERE id LIKE :id';
        $stm = $db->prepare($sql);
        $parametars = ['id' => $id];
        $stm->execute($parametars);
        return $stm->fetchAll();
    }

    public function update($id, $image, $title, $subtitle, $description, $destination)
    {

        $db = Connection::getConnection();
        try {
            $sql = "UPDATE courses  SET image = :image , title = :title, subtitle = :subtitle, description = :description,  destination = :destination WHERE  id =  :id";
            $stm = $db->prepare($sql);
            $parametars = ['image' => $image, 'title' => $title, 'subtitle' => $subtitle, 'description' => $description, 'id' => $id, 'destination' => $destination];

            $stm->execute($parametars);
            header('Location:http://localhost/brainster.xyz/frontend/insertcards/showallcards.php?message=LogIn');


        } catch (PDOException $exception) {
            echo $exception;
            die();
        }
    }

}