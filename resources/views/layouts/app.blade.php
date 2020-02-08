<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" href="fontawesome/css/fontawesome.min.css"/>

<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<title>Company Profile</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="http://127.0.0.1:8000/home"><strong>WEB DEVELOPER</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/tb_home">HOME</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link ml-3" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">OUR SERVICE</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">PORTOFOLIO</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT US</a>
                </ul>
            </div>
        </div>
    </nav>
   @yield('content')
</html>
