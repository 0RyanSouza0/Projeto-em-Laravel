<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Professor;
use App\Models\RelatorioProduto;


use App\Http\Controllers\RegistroController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quemsomos', function () {
    return view('quemsomos');
});


Route::get('/contato', function () {
    return view('contato');
});



Route::post('/cadastrar-professor',function(Request $request) {

    Professor::create([
        'nome'=> $request -> nome,
        'salario'=> $request -> salario,
        'idade'=> $request -> idade
    ]);

    echo "Professor cadastrado com sucesso!";

});
Route::post('/RegistroRelatorios', function(Request $request){
    RelatorioProduto::create([
        'descAparelho'=> $request -> descAparelho,
        'defeitoRelatado'=> $request -> defeitoRelatado,
        'dataEntrada'=> $request -> dataEntrada,
        'dataSaida'=> $request -> dataSaida,
        'nomeCliente'=> $request -> nomeCliente,
        'telefoneContato'=> $request -> telefoneContato,
        'capa'=> $request -> capa,
        'chip'=> $request -> chip,
        'operadoras'=> $request -> operadoras,
        'caboUSB'=> $request -> caboUSB,
        'cartaoMemoria'=> $request -> cartaoMemoria,
        'observacao'=> $request -> observacao,
        'assinatura'=> $request -> assinatura
    ]);

});
Route::get('/RegistroRelatorios',[RegistroController::class, 'index']);