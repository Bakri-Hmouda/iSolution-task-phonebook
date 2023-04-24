<h1>contacts</h1>
<p>welcome to phonebook</p>


<ul>
    @foreach ($contacts->all() as $contact)
    <li>{{ $contact->firstName }}</li>
    @endforeach
</ul>