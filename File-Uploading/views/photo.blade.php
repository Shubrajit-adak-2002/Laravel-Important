<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo</title>
</head>
<body>
    <form action="{{route('photo.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="photo" id="">
        <input type="submit" value="Submit">
    </form>
    @if(Session('status')) {{session('status')}} @endif
</body>
</html>