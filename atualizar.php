<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

$id = str_replace('/', '', $_SERVER['PATH_INFO']);
$filename = 'data.json';

$data = file_get_contents('data.json');
$users = json_decode($data);

// decode json to associative array
$json_arr = json_decode($data, true);

foreach ($json_arr as $key => $value) {
      if ($value['codigo'] == $id) {
        $nome = $json_arr[$key]['nome'];
        $sobrenome = $json_arr[$key]['sobrenome'];
        $email = $json_arr[$key]['email'];
        $codigo = $key;
      }
  }

?>

<body>
    <form method="POST" action="update.php">
        <input  type="hidden" name="id" value="<?=$key?>">
        <input type="text" name="nome" placeholder="nome" value="<?=$nome?>">
        <input type="text" name="sobrenome" placeholder="sobrenome" value="<?=$sobrenome?>">
        <input type="text" name="email" placeholder="email" value="<?=$email?>">
        <button type="submit">enviar</button>
    </form>
</body>
</html>