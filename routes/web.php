<?php

use App\Models\User;
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

// Rota para ver todos os dados do usuário
Route::get('/admin', function(){
    $admin = User::with('detail', 'department')->find(1);
    // dd($admin->toArray());
    return view('admin', ['admin' => $admin]);
});