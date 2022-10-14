<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="{BASE_URL}">
        <link rel="stylesheet" href="css/style.css">
        <title>Personajes Marvel</title>
    </head>
    <body>
    <header>
    <h1>Diversidad en Marvel Comics</h1>

    <ul>
       <li><a href="inicio">Inicio</a></li><li><a href="proposito">Proposito de este trabajo</a></li>
            {if !isset($smarty.session.USER_ID)}
               <li>
                 <a aria-current="page" href="login">Login</a>
               </li>
             {else} 
               <li>
                 <a aria-current="page" href="logout">Logout ({$smarty.session.USER_EMAIL})</a>
               </li>
               <br>
             <li><a href="universos">Lista de Universos</a></li>
             {/if}
             <br>
             <li><a href="tabla">Mostrar Todos los Universos</a></li>
    </ul>
       