<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Departement</h3>
    <ul>
    @foreach ($departs as $d)
        <li>{{ $d->titre }} {{ $d->responsable }} </li>
        <form action="{{ route('depart_delete', $d->id) }}" method="post">
            <button>delete</button>
        </form>
        <a href="{{ route('depart_update', $d->id) }}">Update</a>
    @endforeach
    </ul>
</body>
</html>