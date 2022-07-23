<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Stylesheet --}}
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <title>Signup</title>
</head>
<body>
    <form method="POST">
        @csrf
        <input class="textbox" type="text" name="email" placeholder="Email">
        <input class="textbox" type="text" name="password" placeholder="Password">

        <input class="btn" type="submit" value="Signup">
    </form>
</body>
</html>