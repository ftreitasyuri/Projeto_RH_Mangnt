<?php

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/email', function () {
    // return view('welcome');
    Mail::raw('Mensagem de teste do RH MANGNT', function(Message $message){
        $message->to('teste@teste.com')
        ->subject('Bem vindo ao RH MANGNT')
        ->from('rh@mangnt.com');
    });

    echo "Email enviado com sucesso!";
});
