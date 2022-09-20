<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ShopApp</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="body">

        <form action="/products" method="POST">
            @csrf <!--cross site request forgery-->
            <label for="name">Username:</label><br/>
            <input type="text" id="username" name="username"/><br/>
            <label for="name">Password:</label><br/>
            <input type="text" id="password" name="password"/><br/><br/>
            <input type="submit" value="Order pizza"/>
        </form>

    </body>
</html>
