<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<br><br><br>
<div class="text-center">
  @include('inc.topnavBook')
</div>

<br><br>

<div>
  @yield('bookadding')
</div>

<div>
  @yield('bookList')
</div>

<div>
  @yield('bookDetails')
</div>

<div>
  @yield('editBook')
</div>
  
</body>
</html>