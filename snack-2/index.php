<?php
$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];
if(strlen($name)>3 && strpos($email, ".") !== false && strpos($email, "@") !== false && is_numeric($age)){
    echo "Accesso riuscito";
}else{
    echo "Accesso negato";
}