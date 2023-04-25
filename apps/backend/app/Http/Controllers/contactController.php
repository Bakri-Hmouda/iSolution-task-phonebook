<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use Symfony\Contracts\Service\Attribute\Required;

class contactController extends Controller
{


    /**
     * show all contacts view
     * ------------------------------------------------
     */
    public function get()
    {
        $contacts = contact::all();
        return view('contacts', ["contacts" => $contacts]);
    }

    /**
     * return new contact form view
     * ------------------------------------------------
     */
    public function create()
    {
        return view('newContact');
    }

    /**
     * create a contact
     * ------------------------------------------------
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'firstName' => ['required', 'max:255'],
                'lastName' => ['max:255'],
                'email' => ['email:rfc,dns'],
                'phoneNumber' => ['required', 'numeric']
            ]
        );



        $newContact = contact::create($request->input());

        return redirect('/');
    }
}
