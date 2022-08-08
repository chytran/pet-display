<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Customer</title>
</head>
<body>
    <form method="post" action="{{url('updatecustomer')}}">
        <div style="color: red">
            @foreach($errors->all() as $error)
                {{$error}}<br>
            @endforeach
        </div>
        @csrf
        @if($data)
            <h2>Edit customer</h2>
            <input type="text" name="name" placeholder="Customer name" value="{{$data->name}}"><br>
            <input type="email" name="email" placeholder="Customer email" value="{{$data->email}}"><br>
            <input type="number" name="age" placeholder="Customer age" value="{{$data->age}}"><br>
            <input type="hidden" name="id" value="{{$data->id}}">
            <br>
            <input type="submit" value="Save">
        @else
            <h3>Sorry, customer could not be found</h3>
        @endif
    </form>
</body>
</html>