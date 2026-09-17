<?php
    
    $nome=$_POST['nome'];
    $user=$_POST['user'];
    $senha=$_POST['senha'];
    $cargo=$_POST['cargo'];

    echo $nome,'<br>';
    echo $user,'<br>';
    echo $senha,'<br>';
    echo $cargo,'<br>';

    include "conecta_db.php";
    $sql = "insert into funcionario (nome,user,senha,cargo) 
                values ('$nome','$user','$senha','$cargo')";
    if (mysqli_query($sql,$conecta)) {
        echo "dados inseridos com sucesso";
    }else{
        echo "erro ao inserir dados";
    }
    mysqli_close($conecta);



?>