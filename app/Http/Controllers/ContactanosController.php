<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ValidarFormularioRequest;

class ContactanosController extends Controller
{
    public function index(){
        return view(('contactanos.index'));
    }

    public function store(ValidarFormularioRequest $request){

        $correo =new ContactanosMailable($request->all());

        Mail::to('jorge.tm.ink@gmail.com')->send($correo);

        return "Mensaje enviado";
    }
}
