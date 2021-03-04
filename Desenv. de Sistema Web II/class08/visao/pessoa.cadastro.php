<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

      <link rel="stylesheet" href="css/estilos.css">

    <title>Aula 08</title>
</head>
<body>
    
    <h1>Cadastro de Alunos</h1>

    <h3>Preencha o formulário abaixo:</h3>

    <form name="" action="../controle/pessoa.controle.php" class="ml-3"  method="post" >

    <input type="text" name="txtnome" class="mb-4" placeholder="Digite seu nome: "> <br>
    <input type="number" name="txtidade" class="mb-4" placeholder="Digite sua idade: "> <br>
    <input type="text" name="txtrg" class="mb-4" placeholder="Digite seu RG: "> <br>
    <input type="text" name="txtpeso" class="mb-4" placeholder="Digite seu peso: "> <br>
    <input type="text" name="txtaltura" class="mb-4" placeholder="Digite sua altura: "> <br>

     
    <input type="submit" class="btn btn-success" value="CADASTRAR ALUNO">
    <input type="reset" class="btn btn-warning" value="LIMPAR DADOS">

    </form>
    
    



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>