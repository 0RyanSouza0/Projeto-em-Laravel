<?php

namespace App\Http\Controllers;


//importar Model que contem os dados do banco //
use App\Models\RegistroRelatorio;
use Illuminate\Http\Request;
use App\Models\RelatorioProduto;

class RegistroController extends Controller
{
    

    //criar metodo para listar dados //
    public function index(){

        //criar variavel que vai receber a model que tem os campos da tabela//
        $registros=RelatorioProduto::get();

     //retornar os dados na view listar //
     //comando compact e um nome para ele//
        return view('RegistroRelatorios', compact('registros'));
    }


}
