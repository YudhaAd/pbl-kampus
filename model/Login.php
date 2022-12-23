<?php 

class Login extends Koneksi
{

    private $db;

    public function __construct()
    {
        $this->db = $this->conn();
    }

    public function login(){
        $us = mysqli_escape_string($this->db,$_POST['email']);
        $pass = mysqli_escape_string($this->db,$_POST['password']);

        $sql = "SELECT * FROM users WHERE email='$us'";
        $pgs = mysqli_fetch_assoc($this->db->query($sql));

        // jika ada data pada database
        if(!empty($pgs)){
            $_SESSION['login'] = true;
            $_SESSION['email'] = $pgs['email'];
            header('Location: index.php');
        }else{
            return 'error';
        }
    }   
}

?>