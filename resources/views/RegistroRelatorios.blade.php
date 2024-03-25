@extends('templates.template')
@section('contente')
<link rel="stylesheet" href="{{url('./assets/css/RegistroRelatorios.css')}}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,300&display=swap" rel="stylesheet">
<div class="align">
<div class='box'>
  <div class='borda'>
      <div class='titulo'>
         <h1> Relatos de Defeito</h1>
      </div>
      <br>
   <table class="tabela">
   <thead class="tituloTabela">
   <tr>
      <th class='categoria'>Descrição do Aparelho</th>
      <th class='categoria'>Defeito</th>
      <th class='categoria'>Data Entrada</th>
      <th class='categoria'>Data Saída</th>
      <th class='categoria'>Nome Cliente</th>
      <th class='categoria'>Contato</th>
      <th class='categoria'>capa</th>
      <th class='categoria'>chip</th>
      <th class='categoria'>operadoras</th>
      <th class='categoria'>caboUsb</th>
      <th class='categoria'>Memoria</th>
      <th class='categoria'>observação</th>
      <th class='categoria'>Assinatura</th>
   </tr>
   </thead>
   <tbody>

   <!--laço de repetição para percorrer a variavel $registros da controller -->
   <!--as $registro vem do compact da Controller -->
   @foreach ($registros as $registro)

   <!-- exibe os dados vindos do banco na tabela  -->
   <tr>

   <td class='valor'>{{$registro ->descAparelho}} </td>
   <td class='valor'>{{$registro ->defeitoRelatado}} </td>
   <td class='valor'>{{$registro ->dataEntrada}} </td>
   <td class='valor'>{{$registro ->dataSaida}} </td>
   <td class='valor'>{{$registro ->nomeCliente}} </td>
   <td class='valor'>{{$registro ->telefoneContato}} </td>
   <td class='valor'>{{$registro ->capa}} </td>
   <td class='valor'>{{$registro ->chip}} </td>
   <td class='valor'>{{$registro ->operadoras}} </td>
   <td class='valor'>{{$registro ->caboUSB}} </td>
   <td class='valor'>{{$registro ->cartaoMemoria}} </td>
   <td class='valor'>{{$registro ->observacao}} </td>
   <td class='valor'>{{$registro ->assinatura}} </td>

   </tr>
   <!-- fim do laço que percorre as informaçoes -->
   @endforeach

   </tbody>

   </table>

  </div>
</div>
</div>


@endsection
