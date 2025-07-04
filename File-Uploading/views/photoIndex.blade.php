<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    @foreach ($photos as $photo)
        <img src="{{asset('storage/'.$photo->photo)}}" alt="" height="100px" width="100px">
    @endforeach
</body>
</html>
