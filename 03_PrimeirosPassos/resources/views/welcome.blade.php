<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body style="background-color: #4a5568; color: #ffffff">
        <h1>Bem vindo (a), {{$username}}</h1>

        <h2> Dados: </h2>
        <p>Idade: {{$age}}</p>
        <p>Sobrenome: {{$lastName}}</p>
        <p>Data de nascimento: {{$birthDate}}</p>
    </body>
</html>