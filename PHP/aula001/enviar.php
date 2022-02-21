//
<?php
//buscando um valor da URL (Via Get)
$nome = $_GET["nome"];
$email = $_GET["email"];
$sexo = $_GET["sexo"];

echo "<h2>Dados enviados com sucesso</h2>";
echo "Nome: " .$nome;
echo "<br>Email: " .$email;
echo "<br>Sexo: " .$sexo;
?>
<br><br>
<a href="formulario.php">Voltar</a>