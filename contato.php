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
                align-items: center;
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
        <div id="titulo">
            <h2>CONTATO</h2>
        </div>
        <form>
            <br>
            <br>
            
            <p></p>
            <label name="nome">Nome: </label>
            <input type="text" name="nome" size="50px" >
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

            <label name="assunto">Assunto: </label>
            <input type="text" name="assunto" size="50px">
            <br>
            <br>
            <label name="descricao">Descrição: </label>
            <input type="text" name="descricao" size="50px">
            <br>
            <br>
            <input type="submit" value="Enviar">
            <div id="rodape">
                <h3> 2016 ©6Legends </h3>
            </div>
        </form>        
    </body>
</html>
