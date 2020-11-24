<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <link rel="stylesheet" href="../css/estilo.css">

    <title>Exercicio 1 - Aluno</title>
</head>
<body class="p-3 mb-2 bg-dark d-flex ">
    
  <!--class="p-3 mb-2 bg-dark"-->

    <div class="container mt-5 text-center " style="text-align: center">
    
        
        
        <form action="../controle/aluno.controle.php" method="post" >
        <fieldset>    
        <h1 class="mb-3">Preencha os dados abaixo:</h1>
            <div class="form-group " >
                    <h2><label for="nome">Nome</label></h2>
                    <input type="text" name="txtnome" id="nome" placeholder="Digite o Nome: ">
                    
            </div>
            <div class="form-group">
                    <h2><label for="ra">RA</label></h2>
                    <input type="number" name="txtra" id="ra" placeholder="Digite o RA: ">
            </div>
            <div class="form-group">
                    <h2><label for="nota1">Nota 1</label></h2>
                    <input type="number" name="txtn1" id="nota1" placeholder="Digite a Nota 1: ">
            </div>
            <div class="form-group">
                    <h2><label for="nota2">Nota 2</label></h2>
                    <input type="number" name="txtn2" id="nota2" placeholder="Digite a Nota 2: ">
            </div>
            <div class="form-group">
                    <h2><label for="disciplina">Disciplina</label></h2>
                    <select name="disciplina" id="disciplina">
                          <option>Linguagem Java</option>  
                          <option>Lógica de Programação</option>  
                          <option>Sistemas Operacionais</option>  
                    </select>
            </div>
            <div class="form-group ">
                <h2><label for="parecer">Parecer</label></h2>   
                <textarea name="parecer"  id="parecer" cols="50" rows="4" placeholder="Digite o parecer do aluno"></textarea>
            </div>
            <div class="form-group" >
                    <input type="submit" class="btn btn-success" value="Calcular Média">
                    <input type="reset" class="btn btn-warning" value="Limpar Dados">   
            </div>
        </fieldset>
        </form>
    </div>   



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>