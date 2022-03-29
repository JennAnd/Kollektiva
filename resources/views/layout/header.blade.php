<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTHYRNING</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@300&family=Antic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
</head>

<body>
<header>
    <nav class="navigation">
        <div class="max-w-wrapper">

          <div class="hamburger-card" hidden>
            <div class="mobile-bg">
              <img src="/src/images/Frame.png" alt="" />
              <div class="logo-large">

              </div>
            </div>
            <div class="mobile-info-container">
              <button class="close-button">

               {{-- image to close knapp --}}
              </button>
              <ul class="mobile-ul">
                <li class="nav-link"><a href="#">Hem</a></li>
                <li class="nav-link"><a href="#">Om oss</a></li>
                <li class="nav-link"><a href="#">Kontakt</a></li>
              </ul>
            </div>
          </div>
          <div class="menu">
            <button aria-expanded="false" aria-controls="menu">
              <span class="hamburger-1"></span>
              <span class="hamburger-2"></span>
              <span class="hamburger-3"></span>
            </button>
          </div>
        </div>
      </nav>
    </header>
