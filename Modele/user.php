<?php
class User
{
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

}
?>
