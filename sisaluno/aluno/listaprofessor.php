
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         th, td {
  border: 2px solid #DCDCDC;
  border-radius: 10px;
}

        table{
        margin-left: 500px;
        }

        
    </style>

</head>
<body style = "background-color: #DCDCDC; padding: 0; height: 100vh; width: 100%; font-family: 'Arial Black', Gadget, sans-serif; color:#DCDCDC; ">

<header style = "background-color: #7B8F82; height: 100px; margin: 0; display: flex; justify-content: center; align-items: center;  font-size: larger; width: 100%;  padding: 0; margin-bottom: 50px;">
    <h1>LISTA DE PROFESSORES</h1> 
    </header>

   <?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */
  require_once('conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM professor');
  $retorno->execute();

?>       
    
        <table style = " background-color: #7B8F82; border-radius: 15px; "> 
            <thead>
                <tr>
                    <th style ="  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: gray;
  color:#DCDCDC;" >ID</th>
                    <th style ="  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: gray;
  color:#DCDCDC;" >NOME</th>
                    <th style ="  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: gray;
  color:#DCDCDC;" >IDADE</th>
                

                <th style ="  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: gray;
  color:#DCDCDC;" >CPF</th>

<th style ="  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: gray;
  color:#DCDCDC;" >DATA</th>
                
        
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr >

                            <td> <?php echo $value['id']?>  </td> 
                            <td> <?php echo $value['nome']?>  </td> 
                            <td> <?php echo $value['idade']?> </td> 
                            <td> <?php echo $value['cpf']?> </td> 
                            <td> <?php echo $value['datanascimento']?> </td> 

                            <td>
                               <form method="POST" action="altprofessor.php">

                                        <input name="id" type="hidden" value=" <?php echo $value['id'];?>"/>
                                        <input name="nome" type="hidden" value=" <?php echo $value['nome'];?>"/>
                                        <button name="alterar"  type="submit" style = "height: 40px; width: 100px; background-color: gray; border-radius: 10px; border-color: transparent; margin-bottom: 40px; color:#DCDCDC; font-size: larger;">Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action="crudprofessor.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="excluir"  type="submit" style = "height: 40px; width: 100px; background-color: gray; border-radius: 10px; border-color: transparent; margin-bottom: 40px; color:#DCDCDC; font-size: larger;">Excluir</button>
                                </form>

                             </td> 


                       
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>
        <div style = "display: flex; align-items: center; justify-content: center; margin-top: 10px;">
        <button class="button" style = "height: 40px; width: 100px; background-color: #7B8F82; border-radius: 10px; border-color: transparent; margin-bottom: 40px; text-decoration: none; color: white; display: flex; align-items: center; justify-content: center; margin-top: 10px;"><a href="index.php">Voltar</a></button>
        <button class="button" style = "height: 40px; width: 100px; background-color: #7B8F82; border-radius: 10px; border-color: transparent; margin-bottom: 40px; text-decoration: none; color: white; display: flex; align-items: center; justify-content: center; margin-top: 10px; margin-left: 5px;"><a href="cadprofessor.php">Cadastrar</a></button>
        </div>
</body>
</html>