<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
        $variavel = "Homepage do sistema de gestão para grupos de investimentos";
        return view('Welcome',[
            'title' => $variavel
        ]);
    }

    public function cadastrar()
    {
        echo "Tela de Cadastro";
    
    
    
    }
    /** 
     * method to user login view
     */
    public function fazerLogin()
    {
        return view('user.login');
        
    }
}


