<?php
class User
{
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
}
?>
