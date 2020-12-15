<?php 

// Abre conexao com o Mysqli
$conn= Mysqli_connect('localhost','root', '','livro');

// insere registros
mysqli_query($conn, "INSERT INTO famosos (codigo,nome) VALUES (1, 'Erico Verissimo') ");
Mysqli_query($conn, "INSERT INTO famosos (codigo,nome) VALUES (2, 'John Lenon') ");
Mysqli_query($conn, "INSERT INTO famosos (codigo,nome) VALUES (3, 'Mahatama Gandhi') ");
Mysqli_query($conn, "INSERT INTO famosos (codigo,nome) VALUES (4, 'Ayrton Sena') ");
Mysqli_query($conn, "INSERT INTO famosos (codigo,nome) VALUES (5, 'Charlie Chaplin') ");
Mysqli_query($conn, "INSERT INTO famosos (codigo,nome) VALUES (6, 'Anita Garibaldi') ");
Mysqli_query($conn, "INSERT INTO famosos (codigo,nome) VALUES (7, 'Mario Quintana') ");

// Fecha a conexão

mysqli_close($conn);