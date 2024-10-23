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
        ],);
        
        $new_lead = new Lead();
        $new_lead->fill($form_data);

        $new_lead->save();
    }
}
