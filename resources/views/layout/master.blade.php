<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title","เว็บไซต์ของฉัน")</title>
</head>
<body>
    <header><a href="/index"> index</a> |<a href="/create"> create</a> |<a href="/login">Login</a> </header>
    <hr>
    <div>
       @yield("content")
    </div>
    <hr>
    <p>Credit by Plamko</p>
</body>
</html>
