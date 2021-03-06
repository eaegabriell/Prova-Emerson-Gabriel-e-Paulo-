<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <form action="cad.php" method="POST">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Insira o nome do convidado" required/>
                <br/>
                <label>Acompanhante</label>
                <input type="number" class="form-control" name="acompanhante" placeholder="Insira o número de acompanhantes" required/>
                <br/>
                <label>Itens a ser levado</label>
                <input type="text" class="form-control" name="itens" placeholder="Insira o que ele ira levar" required/>
                <br/>
                <button type="submit" class="btn btn-outline-dark">Confirmar Convidados</button>
            </div>
        </form>
    </body>
</html>