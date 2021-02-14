<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/">Laravel</a> | <a href="/about">about</a> | <a href="contact">contact</a>
    สวัสดี,@if(Auth()->check()) {{Auth()->User()->name}} <a href="/Auth/logout">ออกจากระบบ</a> @else บุคคลทั่วไป @endif
    @yield("content")
    <hr>
    &copy; 2021 Adisorn Nampia
</body>
</html>
