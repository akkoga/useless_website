<?php
include_once("convert.html");

$convert = $_POST["convertButton"];

if(isset($convert)){
    echo"bouton submmit cliquez / ";
    $file = $_POST["text"];
    if(!empty($file)){
        echo "nom du fichier => ".$file;
    }else{
        echo "fichier vide";
    }
}
