<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('quienes-somos');
    }

    public function contactPost(Request $request){
        $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'comment' => 'required',
                'check-tc' => 'required'
        ],[
            'email.required' => 'El Correo es Obligatorio',
            'check-tc.required' => 'Debes aceptar los Terminos y Condiciones.',
            'name.required' => 'El Nombre es Obligatorio.'
        ]);

        try {
            
            Mail::send('email', [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'comment' => $request->get('comment') ],
                function ($message) {
                    $message->from( env('MAIL_FROM_ADDRESS') );
                    $message->to( env('MAIL_TO_DEFAULT_ADDRESS'), env('MAIL_TO_DEFAULT_NAME'))
                    ->subject('Contacto desde Formulario de Orgcas');
            });

            return back()->with('success', 'Gracias por contactarnos, nos pondremos en contacto contigo pronto!!');
        } catch (Exception $e) {
            return back()->with('success', 'Algo salio mal en el envio del mail');
            
        }

    }

}
