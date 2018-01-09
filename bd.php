
<?php
    class bd {
        private $co;
        private $host;
        private $user;
        private $bdd;
        private $psswd;

        public function __construct($bdd)
        {
            /* Connexion à une base ODBC avec l'invocation de pilote */
            
            $this->host = "localhost";
            $this->user = "root";
            $this->psswd = "";
            $this->bdd = $bdd;
        }

        public function connexion () {
            $this->co = mysqli_connect($this->host, $this->user, $this->psswd, $this->bdd);
            return $this->co;
        }

        public function deconnexion() {
            mysqli_close($this->co);
        }
    }
?>
    