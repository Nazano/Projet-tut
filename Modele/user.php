<?php
class User
{
<<<<<<< HEAD
  var $nom;
  var $prenom;
  var $username;
  var $mail;
  var $check_mail;
  var $tel;
  var $pwd;
  var $check_pwd;
  var $co;
  function __construct()
  {
    if(func_num_args() == 9) {
      $list_arg = func_get_args();
      $this->nom = $list_arg[0];
      $this->prenom = $list_arg[1];
      $this->username = $list_arg[2];
      $this->mail = $list_arg[3];
      $this->check_mail = $list_arg[4];
      $this->tel = $list_arg[5];
      $this->pwd = $list_arg[6];
      $this->check_pwd = $list_arg[7];
      $this->co = $list_arg[8];
    }
    else if(func_num_args() == 3) {
      $list_arg = func_get_args();
      $this->username = $list_arg[0];
      $this->pwd = $list_arg[1];
      $this->check_pwd = $this->pwd = $list_arg[1];
      $this->co = $list_arg[2];
      $this->nom = mysqli_fetch_array(mysqli_query($this->co,"SELECT nom FROM Parent WHERE id = '$this->username'"));
      $this->prenom = mysqli_fetch_array(mysqli_query($this->co,"SELECT prenom FROM Parent WHERE id = '$this->username'"));
      $this->mail = mysqli_fetch_array(mysqli_query($this->co,"SELECT mail FROM Parent WHERE id = '$this->username'"));
      $this->check_mail = mysqli_fetch_array(mysqli_query($this->co,"SELECT mail FROM Parent WHERE id = '$this->username'"));
      $this->tel = mysqli_fetch_array(mysqli_query($this->co,"SELECT telephone FROM Parent WHERE id = '$this->username'"));
    }
  }
=======
  private $nom;
  private $prenom;
  private $username;
  private $mail;
  private $check_mail;
  private $tel;
  private $pwd;
  private $check_pwd;

  function __construct($nom, $prenom, $username, $mail, $check_mail, $tel, $pwd, $check_pwd)
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->username = $username;
    $this->mail = $mail;
    $this->check_mail = $check_mail;
    $this->tel = $tel;
    $this->pwd = $pwd;
    $this->check_pwd = $check_pwd;
  }

  

    //GETTERS

    /**
     * Get the value of Nom
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get the value of Prenom
     *
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Get the value of Username
     *
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Get the value of Mail
     *
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Get the value of Check Mail
     *
     * @return mixed
     */
    public function getCheckMail()
    {
        return $this->check_mail;
    }

    /**
     * Get the value of Tel
     *
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Get the value of Pwd
     *
     * @return mixed
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Get the value of Check Pwd
     *
     * @return mixed
     */
    public function getCheckPwd()
    {
        return $this->check_pwd;
    }

>>>>>>> f585ac9b12e15ad07155e478ae49c10931e4496e
}
?>
