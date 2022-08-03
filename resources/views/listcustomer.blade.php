<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Customers:</h2>
    <a href="{{url('addcustomer')}}">
        <button type="button">Add new Customer</button>

        <table>
            <thead>
                <tr><th>Name</th><th>Email</th><th>Age</th><th>Date</th></tr>
            </thead>

            <tbody>
                @foreach($data as $row)
                    <tr><th>{{$row['name']}}</th><th>{{$row['email']}}</th><th>{{$row['age']}}</th><th>{{$row['date']}}</th></tr>
                @endforeach
            </tbody>
        </table>
    </a>
</body>
</html>