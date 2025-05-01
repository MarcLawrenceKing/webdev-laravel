<!DOCTYPE html>
<html lang="en">
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body class="container">
  <h2>Home</h2>
  <h2>{{ $name }}</h2>

  <div class="row">
    <div class="col-lg-6 col-md-4 col-sm-3">
      <button type="button" class="btn btn-primary btn-block"> SUbmit</button>
    </div>

    <div class="col-lg-6 col-md-4 col-sm-3 bg-primary">
      <h2>Col 2</h2>
    </div>

    <div class="col-lg-6 col-md-4 col-sm-3 bg-success">
      <h2>Col 3</h2>
    </div>

    <div class="col-lg-6 col-md-4 col-sm-3 bg-danger">
      <h2>Col 4</h2>
      <i class="bi bi-0-circle"> </i>
    </div>
  </div>

  <div class="row pt-4">
    <div class="col-lg-6 col-md-4 col-sm-3 bg-success">
      <h2>Col 5</h2>
    </div>

    <div class="col-lg-6 col-md-4 col-sm-3 bg-primary">
      <h2>Col 6</h2>
    </div>

    <div class="col-lg-6 col-md-4 col-sm-3 bg-danger">
      <h2>Col 7</h2>

      <div class="row">
        <div class="col-lg-6 col-md-4 col-sm-3 bg-light">
          hello 1
        </div>

        <div class="col-lg-6 col-md-4 col-sm-3 bg-success">
          hello 2
        </div>
      </div>
    </div>
  </div>
</body>

</html>