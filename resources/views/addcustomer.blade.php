<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <div style="color: red">
            @foreach($errors->all() as $error)
                {{$error}}<br>
            @endforeach
        </div>
        @csrf
        <h2>Add new customer</h2>
        <input type="text" name="name" placeholder="Customer name"><br>
        <input type="text" name="email" placeholder="Customer email"><br>
        <input type="number" name="age" placeholder="Customer age" value="13"><br>
        <br>
        <input type="submit" value="Save">
    </form>
</body>
</html>