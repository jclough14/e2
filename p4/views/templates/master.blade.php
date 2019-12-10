<!doctype html>
<html lang='en'>

<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
        integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel='shortcut icon' href='/favicon.ico'>

    <link href='/css/app.css' rel='stylesheet'>

    @yield('head')

</head>

<body>

    <header>
        <a href='/'><img id='logo' src='/images/rock-paper-scissors.jpg' alt='Rock Paper Scissors Logo'></a>
        <h1>Rock Paper Scissors!</h1>
    </header>

    <main>
        @yield('content')
    </main>

    @yield('body')

</body>

</html>