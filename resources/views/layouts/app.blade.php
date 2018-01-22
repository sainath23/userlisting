<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flatly.theme.min.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <style>
      html {
        position: relative;
        min-height: 100%;
      }
      .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        line-height: 60px;
        background-color: #f5f5f5;
        text-align:center;
      }
    </style>
    <title>@yield('title')</title>
</head>
<body>
<!-- Navbar start -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">User Listing</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="@yield('contact-active')"><a href="{{ url('/contact') }}">Contact Us</a></li>
        <li class="@yield('response-active')"><a href="{{ url('/responses/list') }}">Responses</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar end -->
    <div class="container">
        <div class="row">
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>
    <!--<div class="footer"><p>&copy;2018 | All rights reserved. Developed by <strong><a href="http://www.sainathparkar.com">Sainath Parkar</a><strong>.</p></div>-->
    <footer class="footer">
      <div class="container">
        <p>&copy;2018 | All rights reserved | Developed by <strong><a href="http://www.sainathparkar.com" target="_blank">Sainath Parkar</a><strong>.</p>
      </div>
    </footer>
</body>
</html>
