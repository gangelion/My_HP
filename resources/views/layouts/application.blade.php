<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link href="/css/top.css" rel="stylesheet" type="text/css">
  <title>@yield('title')</title>
</head>
<body>
  <script src="{{ asset('/js/app.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  @yield('content')
</body>
</html>