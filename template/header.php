<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style type="text/css">
    .brand {
      background: #cbb09c !important;
    }

    .brand-text {
      color: #cbb09c !important;
    }

    form {
      max-width: 460px;
      margin: 20px auto;
      padding: 20px;
    }

    form label {
      color: grey !important;
    }

    input:focus {
      border-bottom: 3px solid #cbb09c !important;
    }

    .pizza {
      width: 100px;
      margin: 40px auto -30px;
      display: block;
      position: relative;
      top: -30px;
    }
  </style>
  <title>Ninja Pizza</title>
</head>

<body class="grey lighten-4">
  <header>
    <nav class="white z-depth-0">
      <div class="container">
        <a href="index.php" class="brand-logo brand-text">Ninja Pizza</a>
        <ul id="nav-mobile" class="right hide-on-small-and-down">
          <li>
            <a href="add.php" class="btn brand z-depth-0">Add a Pizza</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>