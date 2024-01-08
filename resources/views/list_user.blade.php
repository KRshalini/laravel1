<html>
    <h2>List</h2>
    <style>
        table th,td{
            border:1px solid black;
            border-collapse:collapse;
        }
    </style>
    <table>
        <thead>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>password</th>
            <th>gender</th>
            <th>skills</th>
            <th>location</th>
            <th>native</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->firstname}}</td>
            <td>{{$user->lastname}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->gender}}</td>
            <td>{{$user->skills}}</td>
            <td>{{$user->location}}</td>
            <td>{{$user->native}}</td>
            <td><a href="edit/{{$user->id}}">Edit</a></td>
            <td><a href="delete/{{$user->id}}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</html>                                                                                                                                     