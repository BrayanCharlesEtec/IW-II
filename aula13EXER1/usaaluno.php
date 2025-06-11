<?php 

    include_once 'Aluno.class.php'; 
        $fulano = new Aluno("Godofredo", 10, 7); 
        $nome = $fulano->getNome(); 
        $nota1 = $fulano->getNota1(); 
        $nota2 = $fulano->getNota2(); 
        $media = $fulano->calcularMedia(); 
        $situacao = $fulano->verificarSituacao(); 
      
    echo "Aluno: $nome<br>"; echo "Média: $media<br>"; echo "Situação: $situacao<br>"; 
?>