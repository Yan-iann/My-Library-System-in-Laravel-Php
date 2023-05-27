
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Menu Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Library System</h2>
<div>
  <form method="get" action="AddLibrarianPage">
      <button type="submit" class="btn btn-default">Add Librarian</button>
  </form>
</div>
<div>
  <form method="get" action="addBookPage">
      <button type="submit" class="btn btn-default">Add Book Book</button>
  </form>
</div>
<div>
  <form method="get" action="welcome.blade.php">
      <button type="submit" class="btn btn-default">Edit Book</button>
  </form>
</div>
<div>
   <form method="get" action="welcome.blade.php">
      <button type="submit" class="btn btn-default">View Books</button>
  </form>
</div>
<div>
   <form method="get" action="welcome.blade.php">
      <button type="submit" class="btn btn-default">Delete Book</button>
  </form>
</div>
</div>

</body>
</html>