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
            <td>{{ $user->Job }}</td>
            <td>{{ $user->Position }}</td>
            <td>{{ $user->Conditions }}</td>
            <td></td>
        </tr>
    @endforeach
</table>
</body>
</html>
