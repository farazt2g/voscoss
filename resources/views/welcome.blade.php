<!DOCTYPE html>
<html lang="en">
<head>
  <title>Image Uploder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-warning" >

<div class="container mt-3 col-md-6 border border-danger border-2 rounded" >
  <h2>User Show Details </h2>
  <form method="post"  enctype="multipart/form-data">
    @csrf

    <div class="mb-3 mt-3">
      <label for="email">First Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="fname">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Last Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="lname">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

        <div class="mb-3">
      <label for="pwd">Gender:</label>
      <select class="form-control">
        <option value="">Please Select</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="pwd">Image </label>
      <input type="file" class="form-control" id="pwd" placeholder="Enter password" name="profile">
    </div>
   <div class="mb-3 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </form>
</div>

</body>
</html>
