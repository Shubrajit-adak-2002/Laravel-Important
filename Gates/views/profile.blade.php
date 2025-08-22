<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile Card</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow-sm" style="max-width: 350px; margin: auto; border-radius: 15px;">
    <div class="card-body text-center">
      <img src="https://via.placeholder.com/100" class="rounded-circle mb-3" alt="Profile Picture">
      <h4 class="card-title mb-1">Name: {{$user->name}}</h4>
      <p class="text-muted mb-2">Email: {{$user->email}}</p>
      <p class="fw-bold">Age: {{$user->age}}</p>
      <button class="btn btn-primary btn-sm">Edit Profile</button>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
