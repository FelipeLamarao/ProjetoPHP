<?php

$dados = $_POST;
$conn = mysqli_connect('localhost', 'root', 'myslq' , 'livro');
$result = mysqli_query($conn, "SELECT max (id) as next FROM pessoa");
$next = (int) mysqli_fetch_assoc($result)['next'] +1;

$sql = "INSERT INTO pessoa (id,nome,endereco,bairro,telefone,email,id_cidade) values ('{$next}' , '{$dados['nome']}','{$dados['endereco']}','{$dados['bairro']}','{$dados['telefone']}','{$dados['email']}','{$dados['id_cidade']}')"; 
$result = mysqli_connect($conn, $sql);
if($result){
    print 'Registro Inserido com Sucesso';
}else {
    print mysqli_last_error($conn);
}
mysqli_close($conn);