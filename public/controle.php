<?php
$mensagem = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // $mensagem = "Olá";
        /*
        if($_POST['periodo'] == 'm') {
                $mensagem = 'Bom dia ';
        }   else if($_POST['periodo'] == 't') {
                $mensagem = 'Boa Tarde ';  
        }   else { 
                $mensagem = 'Boa noite ';
        }
        */

        switch($_POST['periodo']) {

        }
        $mensagem .= $_POST['nome'];

} else { 
    $mensagem = "Digite seu nome";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Estruturas de Controle</title>
    <head>
    <body> 
        <form action="controle.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" />
    </head>