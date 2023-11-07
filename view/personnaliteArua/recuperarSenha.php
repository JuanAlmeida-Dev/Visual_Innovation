<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Recuperar Senha</title>
</head>
<body>

    <h4 class="text-center display-6">Recuperar Senha</h4>

    <form action="transferirSenha.php" method="POST">

        
        <label for="">Insira o e-mail cadastrado</label>
        <input type="email" name="emailRecuperar">
       <p> <input type="submit" value="Enviar dados para o e-mail"> </p>

    </form>


</body>
</html>