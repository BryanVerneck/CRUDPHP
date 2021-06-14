<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

$filename = 'data.json';

$data = file_get_contents($filename);
$users = json_decode($data);

// decode json to associative array
$json_arr = json_decode($data, true);

?>

<table>
    <tbody>
        <tr>
			<th>Código: </th>
            <th>Nome: </th>
            <th>Sobrenome: </th>
        </tr>
        <?php foreach ($users as $user) { ?>
        <tr>
			<td> <?= $user->codigo; ?> </td>
            <td> <?= $user->nome; ?> </td>
            <td> <?= $user->sobrenome; ?> </td>
        </tr>
        
        <?php } ?>
    </tbody>
</table>

<body>
    <form action="delete.php" method="POST">
        <label for="">Insira o ID do usuario a ser deletado</label>
        <input type="text" name="codigo" placeholder="ID">
        <button type="submit">Deletar</button>
    </form>
</body>

</html>