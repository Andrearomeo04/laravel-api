<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

use App\Models\Lead;
use App\Mail\NewContact;

class LeadController extends Controller
{
    public function store(StoreProjectRequest $request)
    {
        $form_data = $request->all();

        $validator = Validator::make($form_data, [
            'name' => ['required', 'max:50'],
            'surname' => ['required', 'max:100'],
            'email' => ['required', 'max:150'],
            'phone' => ['required', 'max:20'],
            'content' => ['required'],
        ],
        $errors = [
            'name.required' => 'Inserisci il nome',
            'name.max' => 'il nome non può avere piu di :max caratteri',
            'surname.required' => 'Inserisci il cognome',
            'surname.max' => 'il cognome non può avere piu di :max caratteri',
            'email.required' => 'Inserisci la tua email',
            'email.max' => 'l\'email non può avere piu di :max caratteri',
            'phone.required' => 'Inserisci un numero di telefono',
            'phone.max' => 'il numero di telefono non può avere piu di :max numeri',
            'content.required' => 'Inserisci un contenuto',
        ]);

    if($validator->fails()){
        return response()->json([
            'success' => false,
            'errors' => $validator->errors()
        ]);
    }
        
        $new_lead = new Lead();
        $new_lead->fill($form_data);

        $new_lead->save();

        Mail::to('info@boolfolio.it')->send(new NewContact($new_lead));

        return response()->json([
            'success' => true
        ]);
    }
}
