<!DOCTYPE html>
<html lang="en"><head>
  <title>Samorl-Property Admin | @yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin.all.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin.styles.css') }}">
  
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/site.webmanifest') }}">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <script type="text/javascript"  src="{{ asset('js/jquery.js') }}"></script>
  <script type="text/javascript"  src="{{ asset('plugins/tinymce/jquery.tinymce.min.js') }}"></script>
  <script type="text/javascript"  src="{{ asset('plugins/tinymce/tinymce.min.js') }}"></script>
  <style>
  .login{
    background: url('{{ asset('images/login-new.jpeg') }}')
  }
  </style>  
</head>

<body class="h-screen font-sans @yield('login_class', '') bg-cover">
  @yield('contents')

  <script type="text/javascript" src="{{ asset('js/admin.main.js') }}"></script>
</body>
</html>