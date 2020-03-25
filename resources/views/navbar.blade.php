<!DOCTYPE html>
<html lang="en">
<head>
  <title>Numericial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-info navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="homepage">Numericial</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <!--
    <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
     -->
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Root of Equation
      </a>
      <div class="dropdown-menu">
                        <a class="dropdown-item" href="Bisection">Bisection Method</a>
                        <a class="dropdown-item" href="FalsePosition">False-Position Method</a>
                        <a class="dropdown-item" href="OnePointIteration">One-Point Iteration</a>
                        <a class="dropdown-item" href="NewtonRarpson">Newton-Ralphson Method</a>
                        <a class="dropdown-item" href="#">Secant Method</a>
                    </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Interpolation
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Newton's divided difference</a>
        <a class="dropdown-item" href="#">Lagrange polynomials</a>
        <a class="dropdown-item" href="#">Spline Interpolation</a>
      </div>
    </li>
  </ul>
</nav>
<br>


</div>

</body>
@yield('body')
</html>
