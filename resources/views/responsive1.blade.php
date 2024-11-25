<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="mt-4 p-5 bg-primary text-white rounded">
      <h1>My First Bootstrap Page</h1>
    </div>
    <div class="alert alert-success">
      <p>This part is inside a .container class.</p>
    </div>
    <p>The .container class provides a responsive fixed width container.</p>
    <div class="row">
      <div class="col-lg-1">
        <p> kiri</p>
      </div>
      <div class="col-lg-10 border border-1">
        <p> tengah</p>
        <div class="row">
          <div class="col-lg-8 border border-1">
            <p> ini isinya 8</p>
          </div>
          <div class="col-lg-4 border border-1">
            <p> ini isinya 4</p>
          </div>
        </div>
        <div class="row">
          <dif class="col-lg-12">
            <a href="https://www.its.ac.id"><button class="btn btn-danger">Bahaya !</button></a>
            <button class="btn border border-1"><svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  d="M505.1 19.1c-1.2-5.5-6.7-11-12.2-12.2C460.7 0 435.5 0 410.4 0 307.2 0 245.3 55.2 199.1 128H94.8c-16.3 0-35.6 11.9-42.9 26.5L2.5 253.3A28.4 28.4 0 0 0 0 264a24 24 0 0 0 24 24H127.8l-22.5 22.5c-11.4 11.4-13 32.3 0 45.3L156.2 406.6c11.2 11.2 32.2 13.2 45.3 0l22.5-22.5V488a24 24 0 0 0 24 24 28.6 28.6 0 0 0 10.7-2.5l98.7-49.4c14.6-7.3 26.5-26.5 26.5-42.9V312.8c72.6-46.3 128-108.4 128-211.1C512.1 76.5 512.1 51.3 505.1 19.1zM384 168A40 40 0 1 1 424.1 128 40 40 0 0 1 384 168z" />
              </svg></i>Custom !</button>
          </dif>
        </div>
      </div>
      <div class="col-lg-1">
        <p> kanan</p>
      </div>
    </div>
</body>


</html>