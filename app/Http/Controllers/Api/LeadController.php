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
        
    }
}
