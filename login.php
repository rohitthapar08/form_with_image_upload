<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel ="stylesheet" type="text/css" href="form.css">
</head>
<body>
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <div class="col-lg-6">
    <form action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
    Name: <input type="text" name="username" required><br><br>
    <div class="avatar"><label>Select your first Image: </label><input type="file" name="avatar[]" multiple accept="images/*" required /></div><br>
    <button type="submit" class="btn btn-primary">Signin</button>
    </form>
  </div>  
  </div>
</div>
</body>
</html>