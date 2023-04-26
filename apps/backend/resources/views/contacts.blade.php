@extends("layouts.layout")

@section("content")

<h1>Welcome to phonebook</h1>
<a href="/new" class="btn btn-primary" role="button">
    new contact
</a>
<h4 class="mt-4">contacts</h4>


<div class="container">
    @if(empty($contacts->all()))
    <div class="d-flex justify-content-center">

        <p class="h4 text-danger">no contact saved yet</p>
    </div>
    @else
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Number</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts->all() as $contact)
            <tr>
                <th scope="row">{{$contact->id}}</th>
                <td>{{$contact->firstName}}</td>
                <td>{{$contact->lastName}}</td>
                <td>{{$contact->phoneNumber}}</td>
                <td>{{$contact->email}}</td>

            </tr>

            @endforeach
        </tbody>
    </table>
    @endif
</div>