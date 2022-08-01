{{-- 
<table>
    <tr><th>User name</th><th>Email</th><th>Date</th></tr>
    @foreach($data as $row) 
    
        <tr><th>{{$row->username}}</th><th>{{$row->email}}</th><th>{{$row->date}}</th></tr>

    @endforeach
</table> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
    <table>
              
        <tr><th>ID</th><th>Name</th><th>Email</th><th>Date</th></tr>
        @foreach($data as $row)   
            <tr><th>{{$row->id}}</th><td>{{$row->username}}</td><th>{{$row->email}}</th><th>{{$row->date}}</th></tr>
        @endforeach
    </table>    
    
</body>
</html>