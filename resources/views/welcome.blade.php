<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Coffe Machine</title>
    <style>
        body {
            background-image: url("https://i.mlcdn.com.br/portaldalu/fotosconteudo/11869.jpg");
            background-color: #cccccc;
            background-size: 100%;
        }

        .content {
            margin-left: 30px;
        }

        h1 {
            color: rgb(12, 7, 7);
        }

        strong {
            font-size: 20px;
        }

        .jumbotron {
            width: 45%
        }

    </style>
</head>

<body>
    <div class="content">
        <br>
        <br>
        <div class="jumbotron">
            <h1 class="display-5">E aí? Bora tomar um café?</h1>
            <p class="lead">selecione a opção de café abaixo.</p>
            <hr class="my-2">
            <form action="/" method="POST">
                @csrf
                @method('POST')
                <div class="row">
                    <select class="form-control form-control-lg" name="selTipo" required>
                        <option value="">Selecione seu café</option>
                        <option value="1">Capuccino - R$ 3,50</option>
                        <option value="2">Mocha - R$ 4,00</option>
                        <option value="3">Café com leite - R$ 3,00</option>
                    </select>
                </div>
                <hr class="my-2">
                <p class="lead">selecione as moedas que irá fazer o pagamento.</p>
                <div class="row">
                    <table class="table table-responsive">
                        <thead>
                            <th>Moeda</th>
                            <th>Quantidade</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>1 centavo</strong></td>
                                <td><input class="form-control" type="number" name="umcent" value="0"></td>
                            </tr>
                            <tr>
                                <td><strong>5 centavos</strong></td>
                                <td><input class="form-control" type="number" name="cincocent" value="0"></td>
                            </tr>
                            <tr>
                                <td><strong>10 centavos</strong></td>
                                <td><input class="form-control" type="number" name="dezcent" value="0"></td>
                            </tr>
                            <tr>
                                <td><strong>25 centavos</strong></td>
                                <td><input class="form-control" type="number" name="vintecincocent" value="0"></td>
                            </tr>
                            <tr>
                                <td><strong>50 centavos</strong></td>
                                <td><input class="form-control" type="number" name="cinquentacent" value="0"></td>
                            </tr>
                            <tr>
                                <td><strong>1 real</strong></td>
                                <td><input class="form-control" type="number" name="umreal" value="0"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-success btn-block btn-lg">Preparar</button>
                </div>
            </form>
        </div>
        <h1></h1>

    </div>
</body>
</html>
@if (session('mensagem')){
    <script>alert("{{session()->get('mensagem')}}")</script>"
}
@endif
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
</script>
