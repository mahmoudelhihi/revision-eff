<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @error('email')
        <p>{{ $message }} </p>
    @enderror

    <form action="{{ route('register') }}" method="post">
        @csrf
        Name:  <input type="text" name="name">
        Email: <input type="email" name="email">
        Password: <input type="text" name="password">
        <button>Submit</button>
    </form>
</body>
</html>