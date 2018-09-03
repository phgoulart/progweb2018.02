<?php
    $nome = "Pedro";
    function getNome(){
        global $nome;
        echo $nome;
    }
    getNome();
    //echo $nome;
?>    