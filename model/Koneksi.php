<?php

class Koneksi
{
    private $hs = 'localhost';
    private $us = 'root';
    private $pw = '';
    private $db = 'pbl';

    public function conn()
    {
        $return = mysqli_connect($this->hs,$this->us,$this->pw,$this->db);
        if (mysqli_connect_error()) {
            echo mysqli_connect_error();
        }
        return $return;
    }
}