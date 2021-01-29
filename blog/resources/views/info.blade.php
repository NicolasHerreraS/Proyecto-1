<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
            }
            .titulo{
                font-size: 30px;
                float: center;
                position: fixed;
                top:0;
                border-radius: 25px;
                background: #8D62CF;
                padding: 10px;
                margin: 30px;
                width: 90%;
                z-index: 100;
                display: inline-block;
            }
            .separator-small{
                 margin-top:80px;
            }
        </style>
    </head>
    <body>
        <div align="center" class="titulo">Bienvenido a la información de la página</div>
        <br class="separator-small">
        <div align="center">Nicolás Herrera Sepúlveda<br>CC:1002567324</div>
    </body>
</html>