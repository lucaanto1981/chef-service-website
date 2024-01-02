<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function sendContactMail()
    {
        //Parameters validation
        $attributes = request()->validate([
            'name' => ['string', 'required', 'max:50'],
            'surname' => ['string', 'required', 'max:50'],
            'email' => ['email', 'required']
        ]);

        return view('contacts')->with('result', 'KO');
    }
}
