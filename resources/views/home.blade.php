<?php
    $title = 'ciao a tutti';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .titolo {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class="titolo">{{$title}}</h1>
    <a href="/ciao">seconda pagina</a>
</body>
</html>
