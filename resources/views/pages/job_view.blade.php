<!DOCTPE html>
<html>
<head>
    <title>Jobs</title>
</head>
<body>
<table border = "1">
    <tr>
        <td>Id</td>
        <td>Job</td>
        <td>Position</td>
        <td>Conditions</td>
        <td>Apply</td>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->city_name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
