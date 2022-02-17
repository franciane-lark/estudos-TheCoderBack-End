//Recebendo dados de formulário com o PHP
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Formulario de contato</h1>
  <form action="enviar.php" method="post">
    Nome:
    <input type="text" name="nome" id="meunome">
    <br><br>

    E-mail:
    <input type="email" name="email" id="meuemail">
    <br><br>

    Sexo:
    <input type="radio" name="" id="sexoM" value="M"> Masculino
    <input type="radio" name="" id="sexoF" value="F"> Feminino
    <br><br>
    <input type="submit" value="ENVIAR DADOS">
  </form>
</body>
</html>