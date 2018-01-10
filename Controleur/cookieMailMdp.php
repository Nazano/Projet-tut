<?php
    setCookie("checkMdpMail",1,time()+3600);  
    #echo $_COOKIE["checkMdpMail"];  
    header('Location: ../Vue/formulaire_inscription.php');
?>