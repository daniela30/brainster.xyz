<?php

/**
 * Created by PhpStorm.
 * User: daniela
 * Date: 16.8.18
 * Time: 13:18
 */
class Validation
{

    public function emailValidation($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;

    }

    public function textareaValidation($description)
    {
        if (strlen($description) <= 200 && strlen($description) != 0) {
            return true;
        }
        return false;


    }

    public function urlValidation($url)
    {
        if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url)) {
            return true;
        }
        return false;
    }

    public function titleValidation($title)
    {
        if (strlen($title) <= 15 && strlen($title) != 0) {
            return true;
        }
        return false;
    }

    public function subtitleValidation($title)
    {
        if (strlen($title) <= 60 && strlen($title) != 0) {
            return true;
        }
        return false;
    }


}