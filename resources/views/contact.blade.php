

@extends('layouts.master')
@section('containt')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
</head>
<body>

<div class="container">
  <h2>Contact Us</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="name">name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
        <label for="phone no">phone No</label>
        <input type="number" class="form-control" id="number" placeholder="Enter number" name="number">
      </div>
      <div class="form-group">
        <label for="message">message</label>
        <input type="message" class="form-control" id="message" placeholder="Enter message" name="message">
      </div>
      <br>
      <div class="text-center">
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
      <br>
    </form>
</div>

</body>
</html>

@endsection
