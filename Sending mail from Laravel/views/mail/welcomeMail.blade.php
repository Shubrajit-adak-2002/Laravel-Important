<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <H1>Heloo</H1>
    <p>{{$request['name']}}</p>
    <p>{{$request['email']}}</p>
    <p>{{$request['message']}}</p>
</html>
{{-- Note: Never use 'message' name variable it'll generate error --}}
