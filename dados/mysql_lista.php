<?php

// Abre conexao com o Mysqli
$conn= mysqli_connect('localhost', 'root', 'myslq' , 'livro');

//define a consulta que sera realizada

$query = 'SELECT codigo, nome FROM famosos';

//envia consulta ao banco de dados 
$result = mysqli_query($conn, $query);
if($result){
    //percorre resultados da pesquisa
    while($row = mysqli_fetch_assoc($result)){
        echo $row['codigo'] . ' - ' . $row['nome'] . "<br>\n";
    }
}

mysqli_close($conn);

