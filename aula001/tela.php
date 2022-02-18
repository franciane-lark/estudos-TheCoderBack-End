<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Dados de Funcionário</h2>
    <form action="gerarsalario.php" method="">
        Nome:
        <input type="text" name="nome">
        <br><br>
        Cargo:
        <select name="cargo">
            <option value=""></option>
            <option value="Programador">Programador</option>
            <option value="DBA">DBA</option>
            <option value="Vendedor">Vendedor</option>
            <option value="Secretária">Secretária</option>
        </select>

        <div id="fieldcomissao" style="display:none">
        
        </style>>
            Comissão:
            <input type="text" name="comissao" id="comissao">
            <br><br>
        </div>

        <br><br>
        Vale transporte:
        <input type="radio" name="v" value="1">SIM 
        <input type="radio" name="v" value="0">NÃO
        <br><br> 
        Vale refeição:
        <input type="radio" name="v" value="1">SIM 
        <input type="radio" name="v" value="0">NÃO
        <br><br> 
        <input type="submit" value="Gerar salário">
    </form>
<script>
    document.getElementById("cargo").addEvenListener('change'), (event) => {
        let valor = event.target.value
        console.log(valor)
        if(valor == "Vendedor"){
            document.getElementById("fieldcomissao").style.display = "block"
        }else{
            document.getElementById("comissao").value = 0
            document.getElementById("fieldcomissao").style.display = "none"
        }
    }
</script>
</body>
</html>