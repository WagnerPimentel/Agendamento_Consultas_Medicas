<?php 
include "cabecalho.php";
include "conexao.php";


$id = $_GET['id'];
$NomePaciente = "NomePaciente";
$Data = "Data";
$HoraConsulta = "HoraConsulta";
$Medico = "Medico";
$MotivoConsulta = "MotivoConsulta";


?>
<h2>Informações Consulta</h2>
<table class="table mt-4 table-primary">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Diagnóstico</th>
            <th>Prescrição Médica</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "select * from tb_agendamento where id = '$id'";
        $resultado = mysqli_query($conexao, $sql);
        while($umPaciente = mysqli_fetch_assoc($resultado)):
        ?>
            <tr>
                <td><?=$umPaciente['NomePaciente'];?></td>
                <td><?=$umPaciente['Diagnostico'];?></td>
                <td><?=$umPaciente['Prescricao'];?></td>
                <td>
                    <a href="visualizar.php">Voltar</a>
                </td>
            </tr>
        <?php endwhile; 
        mysqli_close($conexao);
        ?>
    </tbody>
</table>
<a class="btn btn-warning" href="form-inserir.php">Agendar</a>
<?php include "rodape.php"; ?>