<?php
include "conexao.php";
$id = $_GET['id'];
$Diagnostico = $_POST['Diagnostico'];
$Prescricao = $_POST['Prescricao'];

$sql = "update tb_agendamento set Diagnostico = '$Diagnostico', Prescricao='$Prescricao' where id = '$id'";
?>

<?php

mysqli_query($conexao, $sql);
mysqli_close($conexao);
header('location:admin.php');

?>