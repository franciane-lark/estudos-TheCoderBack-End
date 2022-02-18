<?php

$nome = isset($_POST["nome"])?$_POST["nome"]:"";
$cargo = isset($_POST["cargo"])?$_POST["cargo"]:"";
$comissao = isset($_POST["comissao"])?$_POST["comissao"]:0;
$vt = isset($_POST["vt"])?$_POST["vt"]:0;
$vr = isset($_POST["vr"])?$_POST["vr"]:0;

$salarioBase = 0;

if($cargo == "Programador"){
    $salarioBase = 3000;
}else if($cargo == "DBA"){
    $salarioBase = 4500;
}else if($cargo == "Vendedor"){
    $salarioBase = 800;
}else if($cargo == "Secretária"){
    $salarioBase = 1500
}

$descontoVT = 0;
$descontoVR = 0;

if($vt == 1){
    $descontoVT = $salarioBase * 0.02;
}

if($vt == 1){
    $descontoVR = $salarioBase * 0.03;
}

echo "<h1>Calculo do salário do funcionário";
echo "Nome: " .$nome;
echo "<br>Cargo: " .$cargo;
echo "<br>Desconto do VT" .$descontoVT;
echo "<br>Desconto do VT" .$descontoVR;
echo "<br>Salário Líquido: " .($salarioBase + $comissao - $descontoVR - $descontoVT);