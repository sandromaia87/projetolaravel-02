<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SignatureController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'teste' => 'required|string',
        ]);
        $param = $validator->fails() ? $validator->messages() : $validator->validated()['teste'];
        $user       = auth()->user();
        
        $name       = $user->name;
        $document   = $user->client->document;
        $status     = $user->client->signatures->first()->status->name;   

        return view('test', [
            'name' => $name,
            'document' => $document,
            'status' => $status,
            'teste' => $param
        ]);
    }
}
