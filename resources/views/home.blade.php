<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
          
          
          
        </style>
    </head>
    <body>

        <header>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/faq">FAQ</a></li>
                    <li><a href="/about">ABOUT US</a></li>
                </ul>
            </nav>
        </header>
        
        <h1>Hello World</h1>
        <h2>{{ $frase }}</h2>

    </body>
</html>
