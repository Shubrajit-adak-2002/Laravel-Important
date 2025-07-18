<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="alert alert-success" role="alert">
            {{-- Here we are sending dynamic slot heading --}}
            @isset($title)
            {{-- if you want to set default css class or want to add extra css classes use this syntax --}}
                <h4 {{$title->attributes->class(['alert-heading'])}}>{{ $title }}</h4>
            @endisset
            <hr>
            {{-- Here we are setting a defualt message or text if the slot is empty --}}
            @if (trim($slot) === '')
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis, ipsum dicta? Perferendis iusto
                    quae fugit libero magni officiis eaque animi accusamus voluptates alias nostrum corporis eum
                    laudantium, laborum at perspiciatis!</p>
            @else
            {{-- Here we are using $slot variable instead of $message because if u want to use html tags in your text then u have to use this --}}
                {{ $slot }}
            @endif
        </div>
    </div>
</body>

</html>
