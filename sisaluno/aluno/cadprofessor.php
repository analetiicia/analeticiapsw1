<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body style="background-color: #DCDCDC; padding: 0; height: 100vh; width: 100%; font-family: 'Arial Black', Gadget, sans-serif; color:#DCDCDC; display: flex; justify-content: center; align-items:center; flex-direction: column">
  

<div style = "background-color: #7B8F82; height: 100px; margin: 0; display: flex; justify-content: center; align-items: center;  font-size: larger; width: 100%;  padding: 0; margin: 0;">
  <h1>CADASTRO DE PROFESSOR</h1> 
</div>
 
  <h2 style = "color: #7B8F82;">REALIZE SEU CADASTRO</h2>

  <form method="GET" action="crudprofessor.php" style="height: 600px; width: 800px; background-color: #7B8F82; border-radius: 15px;  margin-top: 5px; padding-top: 5px; display: flex; justify-content: center; align-items:center; flex-direction: column">
   
 
    <label for="">Nome:</label> <br>
     <input type="text" name="nome" placeholder="Digite seu nome" style= "width: 300px; height: 30px; border-radius: 10px; border-color: transparent;" required> <br>
     <label for="">CPF</label><br>
     <input type="text" name="cpf" placeholder="Digite seu cpf:" style= "width: 300px; height: 30px; border-radius: 10px; border-color: transparent;" required> <br>
     <label for="">Idade</label><br>
     <input type="text" name="idade" placeholder="Digite sua idade:" style= "width: 300px; height: 30px; border-radius: 10px; border-color: transparent;" required> <br>
     <label for="">Data de Nascimento</label> <br>
     <input type="date" name="datanascimento"  style= "width: 300px; height: 30px; border-radius: 10px; border-color: transparent;" required> <br>
    
     <div>
     <input type="submit" name="cadastrar" value="Cadastrar" style = "height: 40px; width: 100px; background-color: #DCDCDC; border-radius: 10px; border-color: transparent; padding: 5px;"><a href="cadprofessor.php" style = "text-decoration: none; color: white; font-size: larger; font-family: 'Arial Black', Gadget, sans-serif; ">
     <button class="button" style = "height: 40px; width: 100px; background-color: #DCDCDC ; border-radius: 10px; border-color: transparent;  text-decoration: none; color: white; font-family: 'Arial Black', Gadget, sans-serif; "><a href="index.php">Voltar</a></button>
     </div>

     </form>

    

</body>
</html>