<?php
$connect = mysqli_connect("mysql-server-php7", "root", "root");

if (!$connect) {
    die("<h1>Falha na conexao com o Banco de Dados!</h1>");
}

$db = mysqli_select_db($connect, "db_docker");

?>

<table style="width:800px; margin:0 auto; background:#000; text-align:center; font-size:20px">
    <tr style="background:#fff">
        <td><b>Nome</b></td>
        <td><b>Email</b></td>
        <td><b>Idade</b></td>
    </tr>
    <?php
    $result = mysqli_query($connect, "SELECT * FROM clients ORDER BY id");

    while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr style="background:#fff">
            <td><?=$row['name']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['age']?></td>
        </tr>
    <?php }?>
</table>

<br />

<span style="text-align: center">Total de Dados: <?=mysqli_num_rows($result);?></span>