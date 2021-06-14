<?php

$data = file_get_contents('data.json');

// decode json
$json_arr = json_decode($data, true);

$nome = $_POST['nome']; 
$sobrenome = $_POST['sobrenome']; 
$email = $_POST['email'];

$index = count($json_arr) + 1;

// add data
$json_arr[] = array('codigo'=>$index, 'nome'=>$nome, 'sobrenome'=>$sobrenome, 'email'=>$email);

// encode json and save to file

file_put_contents('data.json', json_encode($json_arr));

header("Location: index.php");

?>
