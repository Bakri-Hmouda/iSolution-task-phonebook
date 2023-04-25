<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="/new">
        @csrf
        <label for="firstName">
            <input type="text" name="firstName" placeholder="First name">
        </label>

        <label for="lastName">
            <input type="text" name="lastName" placeholder="Last name">
        </label>

        <label for="email">
            <input type="email" name="email" placeholder="email">
        </label>

        <label for="phoneNumber">
            <input type="text" name="phoneNumber" placeholder="Phone Number">
        </label>

        <button type="submit">Save</button>
    </form>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</body>

</html>