<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="{{url('assets/imagens/logo.png')}}" >
    <title>Denuncia Aqui</title>

    <link rel="stylesheet" href="{{url('./assets/css/template.css')}}">
</head>
<body>
    <nav>
        <div class="logo">
        <img class="imagem" src="{{('assets/logo.png')}}" alt="" />
        
        </div>
        <ul>
            <li>
                <a href="/RegistroRelatorios"> Galeria </a>
            </li>
            <li>
            <a href="/contato"> Contato </a>
            </li>
        </ul>
    </nav>

            @yield('contente')

            <footer class="rodape" id="contato">

    <div class="rodape-div">
<div class="align-coluna">
        <div class="rodape-div-1">
            <div class="rodape-div-1-coluna">
                <!-- elemento -->
                <span><b>Denuncia Aqui</b></span>
                <p>Empresa de viagens para lugares exóticos e perigosos. Sempre trazendo adrenalina para <br>nossos clientes.</p>
            </div>
        </div>

        <div class="rodape-div-2">
            <div class="rodape-div-2-coluna">
                <!-- elemento -->
                <span><b>Contatos</b></span>
                <p>reparostech@gmail.com</p>
                <p><a>Nos mande sugestões</a></p>
            </div>
        </div>
</div>
<div class="align-coluna">
        <div class="rodape-div-3">
            <div class="rodape-div-3-coluna">
                <!-- elemento -->
                <span><b>Links</b></span>
                <p><a href="index">Home</a></p>
                <p><a href="galeria">Galeria</a></p>

            </div>
        </div>

        <div class="rodape-div-4">
            <div class="rodape-div-4-coluna">
                <!-- elemento -->
                <span><b>Outros</b></span>
                <p>Políticas de Privacidade</p>
            </div>
        </div>

    </div>
    <span class="marca"><p>ReparosTech</p></span>
    </div>
    <p class="rodape-direitos">Copyright © 2023 – Empresa – Todos os Direitos Reservados. <br> Make By Ryan</p>
</footer>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
