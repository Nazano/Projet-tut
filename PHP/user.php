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
}
?>
