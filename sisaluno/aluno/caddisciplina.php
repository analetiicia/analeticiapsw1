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
  <h1>CADASTRO DE DISCIPLINA</h1> 
</div>
 
  <h2 style = "color: #7B8F82;">CADASTRE UMA DISCIPLINA</h2>

  <form method="GET" action="cruddisciplina.php" style="height: 700px; width: 800px; background-color: #7B8F82; border-radius: 15px;  margin-top: 5px; padding-top: 5px; display: flex; justify-content: center; align-items:center; flex-direction: column">
   
 
    <label for="">Nome:</label> <br>
     <input type="text" name="nomedisciplina" placeholder="Digite o nome" style= "width: 300px; height: 30px; border-radius: 10px; border-color: transparent;" required> <br>
     <label for="">Carga Horaria:</label><br>
     <input type="text" name="ch" placeholder="Digite a carga horaria:" style= "width: 300px; height: 30px; border-radius: 10px; border-color: transparent;" required> <br>
     <label for="">Semestre:</label><br>
     <input type="text" name="semestre" placeholder="Digite sua idade:" style= "width: 300px; height: 30px; border-radius: 10px; border-color: transparent;" required> <br>
     <label for="">Professor Responsavel:</label> <br>
     <input type="text" name="idprofessor" placeholder="Digite o ID:" style= "width: 300px; height: 30px; border-radius: 10px; border-color: transparent;" required> <br>
     <div>
     <input type="submit" name="cadastrar" value="Cadastrar" style = "height: 40px; width: 100px; background-color: #DCDCDC; border-radius: 10px; border-color: transparent; padding: 5px;"><a href="caddisciplina.php" style = "text-decoration: none; color: white; font-size: larger; font-family: 'Arial Black', Gadget, sans-serif; ">
     <button class="button" style = "height: 40px; width: 100px; background-color: #DCDCDC ; border-radius: 10px; border-color: transparent;  text-decoration: none; color: white; font-family: 'Arial Black', Gadget, sans-serif;"><a href="index.php">Voltar</a></button>
     </div>

     </form>

    

</body>
</html>