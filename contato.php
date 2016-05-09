<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fale Conosco</title>
         <style>
            input {
                height: 30px;
                border-style: hidden;
                
            }
            body {
                background-color: whitesmoke;
            }
            #titulo {
                background-color:#999999;
                color:white;
                text-align:center;
                padding:5px;
            }
            #rodape {
                position:absolute;
                bottom:0;
                width:98%;
                background-color:#999999;
                color:white;
                text-align:center;
                padding:5px;
            }
        </style>
    </head>
    <body>
        <form>
            <br>
            <br>
            <h1 align="center">CONTATO</h1>
            <p></p>
            <label name="nome">Nome: </label>
            <input type="text" name="nome" size="50px">
            <br>
            <br>
            <label name="email">E-mail: </label>
            <input type="text" name="email" size="50px">
            <br>
            <br>
            <label name="cidade">Cidade: </label>
            <input type="text" name="cidade" size="50px">
            <br>
            <br>
            <label name="descricao">Descreva seu projeto: </label>
            <input type="text" name="descricao" size="100px">
            <br>
            <br>
            <input type="submit" value="Enviar">
        </form>        
    </body>
</html>
