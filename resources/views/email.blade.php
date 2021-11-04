<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    
    <h3>voici le mail :</h3>
    <ul>
        <li style="color:red; background-color: blue;">{{$contenuMail['name']}} </li>
        <li>{{$contenuMail['email']}} </li>
        <li>{{$contenuMail['phone']}} </li>
        <li>{{$contenuMail['message']}} </li>
    </ul>


















    <script href="{{asset('js/app.js')}}">
</body>
</html>