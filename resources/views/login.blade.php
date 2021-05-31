<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">HomeDecor</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/">Home</a>
              </li>  
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Decor
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="/decor">Vases</a></li>
                  <li><a class="dropdown-item" href="/decor">Clocks</a></li>
                  <li><a class="dropdown-item" href="/decor">Lamps</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Kitchen Decor
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="/kitchen">Dinner plates</a></li>
                  <li><a class="dropdown-item" href="/kitchen">Bowls</a></li>
                  <li><a class="dropdown-item" href="/kitchen">Tray,kettlers</a></li>
                </ul>
              </li>         
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Wall Decor
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="/walldecor">Mirrors</a></li>
                  <li><a class="dropdown-item" href="/walldecor">Wall art</a></li>
                  <li><a class="dropdown-item" href="/walldecor">Oil painting</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <br><br>
    <br>
        <h1><b><center>LOGIN</center></b></h1>
        <br>
        
        <div class="container">
            <div class="row">
                <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    
                    <table class="table">
                        <tr>
                            <td>Username</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button class="btn btn-success">Submit</button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>