<?php
$dbHost ='Localhost';
$dbUsername = 'root';
$dbPassword =''; 
$dbName = 'totem_senai';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao ->connect_error)
  {
    echo "erro";
  }

  else{
    echo "sucesso";
  }

