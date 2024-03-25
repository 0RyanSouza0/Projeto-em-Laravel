<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatorioProduto extends Model
{
    protected $fillable = ['descAparelho','defeitoRelatado','dataEntrada','dataSaida','nomeCliente','telefoneContato','capa','chip','operadoras','caboUSB','cartaoMemoria','observacao','assinatura'];
}
