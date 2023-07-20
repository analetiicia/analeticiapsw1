
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         th, td {
  border: 1px solid white;
  border-radius: 10px;
}

        table{
        margin-left: 300px;
        }

        
    </style>

</head>
<body style = "background-color: pink;">
   <?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */
  require_once('conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM aluno');
  $retorno->execute();

?>       
    
        <table style = " background-color: rgb(227, 181, 196); border-radius: 15px; "> 
            <thead>
                <tr>
                    <th style ="  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: gray;
  color: white;" >ID</th>
                    <th style ="  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: gray;
  color: white;" >NOME</th>
                    <th style ="  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: gray;
  color: white;" >IDADE</th>
                

                <th style ="  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: gray;
  color: white;" >ENDEREÇO</th>

<th style ="  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: gray;
  color: white;" >DATA</th>
                
                <th style ="  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: gray;
  color: white;" >ESTADO</th>
                

                <th style ="  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: gray;
  color: white;" >MATRÍCULA</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr >

                            <td> <?php echo $value['id']?>  </td> 
                            <td> <?php echo $value['nome']?>  </td> 
                            <td> <?php echo $value['idade']?> </td> 
                            <td> <?php echo $value['endereco']?> </td> 
                            <td> <?php echo $value['datadenascimento']?> </td> 
                            <td> <?php echo $value['estatus']?> </td>
                            <td> <?php echo $value['matricula']?> </td>

                            <td>
                               <form method="POST" action="altaluno.php">

                                        <input name="id" type="hidden" value=" <?php echo $value['id'];?>"/>
                                        <input name="nome" type="hidden" value=" <?php echo $value['nome'];?>"/>
                                        <button name="alterar"  type="submit" style = "height: 40px; width: 100px; background-color: gray; border-radius: 10px; border-color: transparent; margin-bottom: 40px; color: white; font-size: larger;">Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action="crudaluno.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="excluir"  type="submit" style = "height: 40px; width: 100px; background-color: gray; border-radius: 10px; border-color: transparent; margin-bottom: 40px; color: white; font-size: larger;">Excluir</button>
                                </form>

                             </td> 


                       
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>
        <button class="button" style = "height: 40px; width: 100px; background-color: gray; border-radius: 10px; border-color: transparent; margin-bottom: 40px; text-decoration: none; color: white; margin-left: 650px; margin-top: 10px;"><a href="index.php">Voltar</a></button>
 
</body>
</html>

