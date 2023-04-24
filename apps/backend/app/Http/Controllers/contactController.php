<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactController extends Controller
{

    /**
     * get all contacts
     * 
     */
    public function index()
    {
        $contacts = contact::all();
        return response()->json($contacts);
    }
}
