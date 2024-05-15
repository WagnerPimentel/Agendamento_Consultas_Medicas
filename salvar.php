<?php
$NomePaciente = $_POST['NomePaciente'];
$Data = $_POST['Data'];
$HoraConsulta = $_POST['HoraConsulta'];
$Medico = $_POST['Medico'];
$MotivoConsulta = $_POST['MotivoConsulta'];

include "conexao.php";
$sql = "insert into tb_agendamento(NomePaciente, Data, HoraConsulta, Medico, MotivoConsulta) values('$NomePaciente', '$Data', '$HoraConsulta', '$Medico', '$MotivoConsulta')";
mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("location:admin.php");

?>