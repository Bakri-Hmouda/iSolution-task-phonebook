@extends("layouts.layout")
@section("content")

<a href="/" class="btn btn-secondary mb-4" role="button">GO BACK</a>
<h1>Create a new contact</h1>
<form method="POST" action="/new">
    @csrf

    <div class="input-group mb-3">
        <input class="form-control" type="text" name="firstName" placeholder="First name">
    </div>

    <div class="input-group mb-3">
        <input class="form-control" type="text" name="lastName" placeholder="Last name">
    </div>

    <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>

    <div class="input-group mb-3">
        <input class="form-control" type="text" name="phoneNumber" placeholder="Phone Number">
    </div>

    <button type="submit" class="btn btn-primary">SAVE</button>
</form>


@if ($errors->any())
<div class="mt-3 alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif