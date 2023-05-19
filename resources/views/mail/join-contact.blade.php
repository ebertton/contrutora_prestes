<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Novo contato pelo site </h1>
    <strong> Nome: </strong> {{$request['name']}}
    <strong> Email: </strong> {{$request['email']}}
    <strong> Telefone: </strong> {{$request['phone']}}
    <h3> Mensagem: </h3> <br/> {{$request['message']}}
</body>
</html>
