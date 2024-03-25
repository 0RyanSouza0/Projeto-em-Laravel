@extends('templates.template')
@section('contente')
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{url('./assets/css/contato.css')}}">
<div class="align">
<div class="box">
    <form action="/RegistroRelatorios" method="post">
        @csrf
        <div class="borda">
            <legend><b>Registro:</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="descAparelho" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Descrição do aparelho:</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="text" name="defeitoRelatado" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Defeito Relatado:</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="text" name="dataEntrada" class="inputUser-Date" required>
                <label for="idade" class="labelInput">Data de Entrada:</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="text" name="dataSaida" class="inputUser-Date" required>
                <label for="idade" class="labelInput">Previsão de Saída:</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="text" name="nomeCliente" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome do Cliente:</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="text" name="telefoneContato"  id="phone_with_ddd" class="inputUser" required>
                <label for="nome" class="labelInput">Telefone para contato:</label>
            </div>
            <br><br>
            <p><b>Capa:</b></p>
            <select class="estado" name="capa" value="capa">
                <option>Sim</option>
                <option>Não</option>
            </select>
            <br>
            <br>
            <!--
                <div class="inputBox">
                    <input type="number" name="chip" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Chip:</label>
                </div>
-->
            <p><b>Chip:</b></p>
            <select class="estado" name="chip" value="chip">
                <option>1</option>
                <option>2</option>
                <option>+2</option>
            </select>
            <br><br>
            <div class="inputBox">
                <input type="text" name="operadoras" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Operadoras:</label>
            </div>
            <br><br>
            <p><b>Cabo USB:</b></p>
            <select class="estado" name="caboUSB" value="caboUSB">
                <option>Sim</option>
                <option>Não</option>
            </select>
            <br>
            <br>
            <div class="inputBox">
                <input type="number" name="cartaoMemoria" id="telefone" class="inputUser" required>
                <label for="idade" class="labelInput">Cartão de memória:</label>
            </div>
            <br><br>
            <p><b>Observaçôes:</b></p>
            <div type="text" name="observacao" value="observacao">
                <textarea class="input-box-mensage-box" type="text" name="observacao" value="observacao" placeholder="Digite sua Mensagem"></textarea>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="assinatura" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Assinatura do Cliente:</label>
            </div>
            <br>
            <input type="submit" class="submit" name="submit" id="submit">
        </div>
    </form>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

    <script>
        $('#phone_with_ddd').mask('(00) 00000-0000');
        $('.inputUser-Date').mask('00/00/0000');
    </script>
<!--
    <h1>Ordem de Serviço</h1>
    <form action="/registro-relatorio" method="POST">

    @csrf


    <label>Descrição do Aparelho: </label>
    <input type="text" name="descAparelho">
    <br>
    <br>

    <label>Defeito relatado: </label>
    <input type="text" name="defeitoRelatado">
    <br>
    <br>

    <label>Data de Entrada: </label>
    <input type="date" name="dataEntrada">
    <br>
    <br>

    <label>Previsão de Saída: </label>
    <input type="date" name="dataSaida">
    <br>
    <br>

    <label>Nome do Cliente: </label>
    <input type="text" name="nomeCliente">
    <br>
    <br>

    <label>Telefone para Contato: </label>
    <input type="text" name="telefoneContato">
    <br>
    <br>

    <label>Capa: </label>
    <input type="text" name="capa">
    <br>
    <br>

    <label>Chip: </label>
    <input type="text" name="chip">
    <br>
    <br>

    <label>Operadoras: </label>
    <input type="text" name="operadoras">
    <br>
    <br>

    <label>Cabo USB: </label>
    <input type="text" name="caboUSB">
    <br>
    <br>

    <label>Cartão de Memória: </label>
    <input type="text" name="cartaoMemoria">
    GB
    <br>
    <br>

    <label>Obs: </label>
    <input type="text" name="observacao">
    <br>
    <br>

    <label>Assinatura do Cliente: </label>
    <input type="text" name="assinatura">
    <br>
    <br>

    <button type="submit">Registrar</button>
    </form>

    </div>
-->
@endsection
