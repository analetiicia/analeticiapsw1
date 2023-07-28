<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altaluno</title>
</head>
<body style = "background-color: #DCDCDC; padding: 0; height: 100vh; width: 100%; font-family: 'Arial Black', Gadget, sans-serif; color:#DCDCDC; display: flex; justify-content: center; align-items:center; flex-direction: column; margin: 0">

<div style = "background-color: #7B8F82; height: 100px; margin: 0; display: flex; justify-content: center; align-items: center;  font-size: larger; width: 100%;  padding: 0; margin: 0">
  <h2 style=""> EDITAR CADASTRO DE ALUNO</h2> 
</div>


<?php
    require_once('conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM aluno where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nome = $array_retorno['nome'];
   $idade = $array_retorno['idade'];
   $endereco = $array_retorno['endereco'];
   $datadenascimento = $array_retorno['datadenascimento'];
   $matricula = $array_retorno['matricula'];


?>

  <form method="POST" action="crudaluno.php" style="height: 600px; width: 800px; background-color: #7B8F82; border-radius: 15px;  margin-top: 20px; padding-top: 5px; display: flex; justify-content: center; align-items:center; flex-direction: column">
        <label for="">Nome:</label> <br>
        <input type="text" name="nome" id="" value=<?php echo $nome?> style= "width: 300px; height: 30px; border-radius: 10px; border-color: transparent; margin-bottom: 20px; >
                                                
        <label for="">Idade:</label> <br>
        <input type="text" name="idade" id="" value=<?php echo $idade ?> style= "width: 300px; height: 30px; border-radius: 10px; border-color: transparent; margin-bottom: 20px;>

        <label for="">Endereço:</label> <br>
        <input type="text" name="endereco" id="" value=<?php echo $endereco?> style= "width: 300px; height: 30px; border-radius: 10px; border-color: transparent; margin-bottom: 20px;>

        <label for="">Date de Nascimento:</label> <br>
        <input type="text" name="datadenascimento" id="" value=<?php echo $datadenascimento?> style= "width: 300px; height: 30px; border-radius: 10px; border-color: transparent; margin-bottom: 20px;>
      
        <label for="">Matricula:</label> <br>
        <input type="text" name="matricula" id="" value=<?php echo $matricula?> style= "width: 300px; height: 30px; border-radius: 10px; border-color: transparent; margin-bottom: 20px;">

        <input type="hidden" name="id" id="" value=<?php echo $id ?> >
        
        <input type="submit" name="update" value="Alterar" style = "height: 40px; width: 100px; background-color: gray; border-radius: 10px; border-color: transparent; margin-bottom: 40px; color: white; font-size: larger;"
        >
  </form>
</body>
</html>