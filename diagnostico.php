<?php
include "cabecalho.php"; 
include "conexao.php";

$id = $_GET['id'];
$NomePaciente = "NomePaciente";
$Data = "Data";
$HoraConsulta = "HoraConsulta";
$Medico = "Medico";
$MotivoConsulta = "MotivoConsulta";


$sql = "select * from tb_agendamento where id = $id";
$resultado = mysqli_query($conexao, $sql);
while($umPaciente = mysqli_fetch_assoc($resultado)):
    $NomePaciente = $umPaciente['NomePaciente'];
    $Data = $umPaciente['Data'];
    $HoraConsulta = $umPaciente['HoraConsulta'];
    $Medico = $umPaciente['Medico'];
    $MotivoConsulta = $umPaciente['MotivoConsulta'];
endwhile;
?>

<h2>EDITAR PACIENTE</h2>
<br>
<br>
<form method="post" action="editar.php?id=<?=$id;?>" enctype="multipart/form-data">
    <input type="text" name="NomePaciente" placeholder=<?=$NomePaciente?> class="form-control"> <br>
    <input type="text" name="Data" placeholder=<?=$Data?>  class="form-control"> <br>
    <input type="text" name="HoraConsulta" placeholder=<?=$HoraConsulta?> class="form-control"> <br>
    <input type="text" name="MotivoConsulta" placeholder=<?=$MotivoConsulta?> class="form-control"> <br>
    <input type="text" name="Diagnostico" placeholder="Digite aqui o diagnóstico" class="form-control"> <br>
    <input type="text" name="Prescricao" placeholder="Digite aqui a prescrição médica" class="form-control"> <br>

     <br> <br>

    
    <button class="btn btn-primary" type="submit">SALVAR INFORMAÇÕES</button>

</form>

<?php 
mysqli_close($conexao);
include "rodape.php" ;
?>