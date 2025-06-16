<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form action="submit" method="POST">
    @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Name</label>
      <input type="text" name="name" class="form-control" id="validationDefault01" placeholder="Your name" >
      <span class="text-danger">@error('name') {{$message}}  @enderror</span>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Email</label>
      <input type="text" name="email" class="form-control" id="validationDefault02" placeholder="Your Email">
      <span class="text-danger">@error('email') {{$message}}  @enderror</span>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input type="text" name="username" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2">
        <span class="text-danger">@error('username') {{$message}}  @enderror</span>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">City</label>
      <input type="text" name="city" class="form-control" id="validationDefault03" placeholder="City">
        <span class="text-danger">@error('city') {{$message}}  @enderror</span>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">State</label>
      <input type="text" name="state" class="form-control" id="validationDefault04" placeholder="State">
        <span class="text-danger">@error('state') {{$message}}  @enderror</span>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Zip</label>
      <input type="text" name="zip" class="form-control" id="validationDefault05" placeholder="Zip">
        <span class="text-danger">@error('zip') {{$message}}  @enderror</span>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
</body>
</html>
