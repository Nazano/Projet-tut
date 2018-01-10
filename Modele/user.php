<?php
    require_once("bd.php");
    class User
    {
    var $id;
    var $nom;
    var $prenom;
    var $username;
    var $mail;
    var $tel;
    var $pwd;
    var $rank;
    public function __construct() {
        $cpt = func_num_args();
        $args = func_get_args();
        switch ($cpt) {
            case 7 : 
                $this->co = $args[0];
                $this->nom = $args[1];
                $this->prenom = $args[2];
                $this->username = $args[3];
                $this->pwd = $args[4];
                $this->mail = $args[5];
                $this->tel = $args[6];
                $result= mysqli_query($this->co,"call creer_Compte_Parent( '$this->nom', '$this->prenom', '$this->mail', '$this->tel', 1, '$this->username', '$this->pwd' )") or die ("mdr le call marche pas");
                $result2 = mysqli_query($this->co,"SELECT * FROM parent WHERE id = '$this->username' AND psswd = '$this->pwd'") or die("Erreur lors de la requete de recherche du membre");
                while ($row = mysqli_fetch_assoc($result2)) {
                    $this->id = $row["id"];
                    $this->rank = $row["rank"];
                    $this->mail = $row["mail"];
                }
                $this->connexion();
                break;      
            case 3 :
                //cradouk, il faudrait utiliser des valeurs intermédiaires avant la requete, et initialiser l'objet membre une fois qu'on est sûr qu'il y a déjà qqun avec cet id+mdp c:
                $this->co = $args[0];
                $this->pseudo = $args[1];
                $this->psswd = $args[2];

                $result = mysqli_query($this->co,"SELECT * FROM parent WHERE id = '$this->username' AND psswd = '$this->pwd'") or die("Erreur lors de la requete de recherche du membre");
                while ($row = mysqli_fetch_assoc($result)) {
                    $this->id = $row["id"];
                    $this->rank = $row["rank"];
                    $this->mail = $row["mail"];
                }
                $this->connexion();
                break;
            
            default:
                echo "Usage membre constructor : constructor co ,pseudo,psswd & mail or : constructor co,pseudo,psswd";
                break;
        }
    }
    public function connexion() {
        session_start();
        $_SESSION['user']=$this;
        setcookie("ID",$this->id,time()+86400);
    }

    public function modif_mdp($mdp) {
        $result = mysqli_querry($this->co,"UPDATE membres set mdpasse=$mdp where id='$this->id'; ") or die("Erreur lors du changement de mdp");
        $this->psswd = $mdp;
    }
    public function getID() {
        return $this->ID;
    }
    public function getNom() {
        return $this->Nom;
    }
    public function getPrenom() {
        return $this->Prenom;
    }
    public function getRank() {
        return $this->rank;
    }
    }
?>
