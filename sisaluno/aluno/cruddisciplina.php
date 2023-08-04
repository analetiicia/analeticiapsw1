<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            background-color: #7B8F82;
            height: 100px;
            width: 300px;
            border-radius: 15px;
            margin-top: 100px;
            padding: 10px;
        }
    </style>
</head>
<body style="background-color: #DCDCDC; padding: 0; height: 100vh; width: 100%; font-family: 'Arial Black', Gadget, sans-serif; color:#DCDCDC; display: flex; justify-content: center; align-items:center; flex-direction: column; margin: 0">

    <header style = "background-color: #7B8F82; height: 100px; margin: 0; display: flex; justify-content: center; align-items: center;  font-size: larger; width: 100%;  padding: 0;">
    <h2 style="">CADASTRO DE DISCIPLINA</h2> 
    </header>
<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('conexao.php');



##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
      
        $nomedisciplina = $_GET["nomedisciplina"];
        $ch = $_GET["ch"];
        $semestre = $_GET["semestre"];
        $idprofessor = $_GET["idprofessor"];

        ##codigo SQL
        $sql = "INSERT INTO disciplina(nomedisciplina,ch,semestre, idprofessor) 
                VALUES('$nomedisciplina','$ch','$semestre', '$idprofessor')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo "<div>";
                echo " <strong>OK!</strong> A disciplina
                $nomedisciplina foi cadastrado com sucesso!!!"; 
                echo "</div>";
            }
        }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nomedisciplina = $_POST["nomedisciplina"];
    $ch = $_POST["ch"];
    $semestre = $_POST["semestre"];
    $idprofessor = $_POST['idprofessor'];
   
      ##codigo sql
    $sql = "UPDATE  disciplina SET nomedisciplina= :nomedisciplina, ch= :ch, semestre= :semestre, idprofessor= :idprofessor WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nomedisciplina',$nomedisciplina, PDO::PARAM_STR);
    $stmt->bindParam(':ch',$ch, PDO::PARAM_STR);
    $stmt->bindParam(':semestre',$semestre, PDO::PARAM_STR);
    $stmt->bindParam(':idprofessor',$idprofessor, PDO::PARAM_INT);

    $stmt->execute();
 


    if($stmt->execute())
        {
            echo "<div>";
            echo " <strong>OK!</strong> a disciplina
            $nomedisciplina foi alterada com sucesso."; 
            echo "</div>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `disciplina` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo "<div>"; 
            echo " <strong>OK!</strong> a disciplina
            $id foi excluida com sucesso."; 
            echo "</div>";

        }

}

        
?>


<button class="button" style = "height: 40px; width: 100px; background-color: #7B8F82 ; border-radius: 10px; border-color: transparent;  text-decoration: none; color: white; font-family: 'Arial Black', Gadget, sans-serif; margin-top: 50px; "><a href="index.php">Página Inicial</a></button>
<button class="button" style = "height: 40px; width: 100px; background-color: #7B8F82 ; border-radius: 10px; border-color: transparent;  text-decoration: none; color: white; font-family: 'Arial Black', Gadget, sans-serif; margin-top: 50px; "><a href="listadisciplina.php">Lista de Disciplinas</a></button>


</body>
</html>


