<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Models\Lead;

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
        ]
    
    );
        
        $new_lead = new Lead();
        $new_lead->fill($form_data);

        $new_lead->save();
    }
}
