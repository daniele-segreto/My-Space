<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>CIAO ADMIN, hai ricevuto un messaggio da un utente</h1>
    <p>utente:</p>
    <p>{{$contact['name']}} ( {{$contact['email']}} )</p>
    <p>messaggio dell'utente:</p>
    <p>{{$contact['message']}}</p>
</body>

</html>