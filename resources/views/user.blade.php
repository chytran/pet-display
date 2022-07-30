{{-- 
<table>
    <tr><th>User name</th><th>Email</th><th>Date</th></tr>
    @foreach($data as $row) 
    
        <tr><th>{{$row->username}}</th><th>{{$row->email}}</th><th>{{$row->date}}</th></tr>

    @endforeach
</table> --}}

<form method="post">
    @csrf
    Please select an image to post: <br><br>
    <input type="file" name="file"><br>
    <input type="submit" value="Post">
</form>