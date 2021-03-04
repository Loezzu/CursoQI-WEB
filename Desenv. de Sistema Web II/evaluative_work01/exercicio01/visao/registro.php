<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <link rel="stylesheet" href="../css/estilo.css">

    <title>Funcionario</title>
</head>
<body class="p-3 mb-2 bg-dark d-flex ">
    
    
    <div class="container mt-5 text-center " style="text-align: center">
    
        
        
        <form action="../controle/funcionario.controle.php" method="post" >
        <fieldset>    
        <h1 class="mb-3">Preencha os dados abaixo:</h1>
            <div class="form-group " >
                    <h2><label for="salario">Salário Fixo</label></h2>
                    <input type="text" name="txtsalario" id="salario" style="width: 220px" placeholder="Digite o salario fixo" >
                    
            </div>
            <div class="form-group">
                    <h2><label for="vendas">Valor de Vendas</label></h2>
                    <input type="text" name="txtvendas" id="vendas" style="width: 220px" placeholder="Digite o valor das vendas">
            </div>
            <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Finalizar">
                    <input type="reset" class="btn btn-warning" value="Limpar Dados">   
            </div>
        </fieldset>
        </form>
    </div>   




</body>
</html>